<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Debt;

class CalcController extends Controller
{
    public function sumdebt ()
    {
        $debts = Debt::all();
        $totaldebt = '0';

        foreach ($debts as $debt) {
            $amount = $debt->amount;
            $totaldebt = $totaldebt + $debt->amount;
        }

        return $totaldebt;
    }

    public function remainingdebt ()
    {
        $remain = Debt::all();
        $remainingdebt = '0';

        foreach ($remain as $remaining) {
            $remains = $remaining->remaining;
            $remainingdebt = $remainingdebt + $remaining->remaining;
        }

        return $remainingdebt;
    }

    public function debtratio ()
    {   
        $debtratio = '0';
        $avgmonthincome = '5500000';
        $liabilities = '2950000';

        $debtratio = $liabilities / $avgmonthincome * 100;

        return $debtratio;
    }

    public function debtratiostatus()
    {
        $debtratio_drs = $this->debtratio();
        $debtratiostatus = 'Good';

        if ($debtratio_drs < 20) {
            $debtratiostatus = 'Ideal';
        }
        elseif ($debtratio_drs >= 20 && $debtratio_drs <= 36) {
            $debtratiostatus = 'Good';
        }
        elseif ($debtratio_drs >= 37 && $debtratio_drs <= 42) {
            $debtratiostatus = 'Warning';
        }
        elseif ($debtratio_drs >= 43 && $debtratio_drs <= 49) {
            $debtratiostatus = 'Danger';
        }
        elseif ($debtratio_drs >= 50) {
            $debtratiostatus = 'Catasthropic';
        }

        return $debtratiostatus;
    }

    public function daytoliquid ()
    {
        $liquidasset = '444928';
        $avgmonthexp = '1836168';

        $daytoliquid = $liquidasset / ($avgmonthexp / 30);

        return $daytoliquid;
    }

    public function liquidityratio ()
    { 
        $dayliquid = $this->daytoliquid();
        $liqratio = $dayliquid * 100 / 180 ;

        return $liqratio;
    }

    public function liqratiostatus()
    {
        $liqratio_lrs = $this->liquidityratio();
        $liqratiostatus = 'Not Ideal';

        if ($liqratio_lrs >= 50 && $liqratio_lrs < 100) {
            $liqratiostatus = 'Ideal';
        }
        elseif ($liqratio_lrs >= 17 && $liqratio_lrs < 50) {
            $liqratiostatus = 'Good but Not Recommended';
        }
        elseif ($liqratio_lrs < 17) {
            $liqratiostatus = 'Warning';
        }

        return $liqratiostatus;
    }

    public function dayliqsuggest()
    {
        $liqratio_dls = $this->liquidityratio();
        $liqsuggest = 'Not Ideal';

        if ($liqratio_dls >= 50 && $liqratio_dls < 100) {
            $liqsuggest = 'Keep this condition';
        }
        elseif ($liqratio_dls >= 17 && $liqratio_dls < 50) {
            $liqsuggest = 'You\'re safe but not in an ideal condition';
        }
        elseif ($liqratio_dls < 17) {
            $liqsuggest = 'Please, increase your liquid assets immediately';
        }

        return $liqsuggest;
    }

    public function totalasset ()
    {
        $totalasset = '371221';

        return $totalasset;
    }

    public function netasset ()
    {
        $totalasset_na = $this->totalasset();
        $totaldebt_na = $this->sumdebt();
        $netasset = $totalasset_na - $totaldebt_na;

        return $netasset;
    }

    public function solvencyratio ()
    {
        $netasset_sr = $this->netasset();
        $totalasset_sr = $this->totalasset();
        $solvencyratio = $netasset_sr / $totalasset_sr * 100;

        return $solvencyratio;
    }

    public function solvencyratiostatus()
    {
        $solvencyratio_srs = $this->solvencyratio();
        $solvencyratiostatus = 'Good';

        if ($solvencyratio_srs > 20) {
            $solvencyratiostatus = 'Ideal';
        }
        elseif ($solvencyratio_srs >= 10 && $solvencyratio_srs <= 20) {
            $solvencyratiostatus = 'Warning';
        }
        elseif ($solvencyratio_srs >= 0 && $solvencyratio_srs <= 10) {
            $solvencyratiostatus = 'Danger';
        }
        elseif ($solvencyratio_srs < 0) {
            $solvencyratiostatus = 'Catasthropic';
        }

        return $solvencyratiostatus;
    }

    public function srsdesc()
    {
        $solvencyratio_srs = $this->solvencyratio();
        $srsdesc = 'Good';

        if ($solvencyratio_srs > 20) {
            $srsdesc = 'can pay all of your debts at once confidently';
        }
        elseif ($solvencyratio_srs >= 10 && $solvencyratio_srs <= 20) {
            $srsdesc = 'can pay all of your debts at once with caution';
        }
        elseif ($solvencyratio_srs >= 0 && $solvencyratio_srs <= 10) {
            $srsdesc = 'have to think twice before paying all of your debts at once';
        }
        elseif ($solvencyratio_srs < 0) {
            $srsdesc = 'absolutely can\'t pay all of your debts at once';
        }

        return $srsdesc;
    }

    public function srsuggest()
    {
        $solvencyratio_srsug = $this->solvencyratio();
        $srsuggest = 'Suggest';

        if ($solvencyratio_srsug > 20) {
            $srsuggest = 'Just pay all your debts if you want.';
        }
        elseif ($solvencyratio_srsug >= 10 && $solvencyratio_srsug <= 20) {
            $srsuggest = 'Just pay some of your debts at once if you want.';
        }
        elseif ($solvencyratio_srsug >= 0 && $solvencyratio_srsug <= 10) {
            $srsuggest = 'Keep paying your debts one by one';
        }
        elseif ($solvencyratio_srsug < 0) {
            $srsuggest = 'You have to increase your assets immediately!';
        }

        return $srsuggest;
    }

    public function insightview ()
    {
        $totaldebtsd = $this->sumdebt();
        $remainingdebt = $this->remainingdebt();
        $debtratio = $this->debtratio();
        $debtratiostatus = $this->debtratiostatus();
        $liqratio = $this->liquidityratio();
        $daytoliquid = $this->daytoliquid();
        $liqratiostatus = $this->liqratiostatus();
        $liqsuggest = $this->dayliqsuggest();
        $totalasset = $this->totalasset();
        $netasset = $this->netasset();
        $solvencyratio = $this->solvencyratio();
        $solvencyratiostatus = $this->solvencyratiostatus();
        $srsdesc = $this->srsdesc();
        $srsuggest = $this->srsuggest();
        return view('insight')->with(['totaldebt' => $totaldebtsd, 'remainingdebt' => $remainingdebt, 'debtratio' => $debtratio, 'debtratiostatus' => $debtratiostatus, 'liquidityratio' => $liqratio, 'daytoliquid' => $daytoliquid, 'liqratiostatus' => $liqratiostatus, 'liqsuggest' => $liqsuggest, 'totalasset' => $totalasset, 'netasset' => $netasset, 'solvencyratio' => $solvencyratio, 'solvencyratiostatus' => $solvencyratiostatus, 'srsdesc' => $srsdesc, 'srsuggest' => $srsuggest]);
    }
}
