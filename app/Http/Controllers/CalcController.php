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

    public function debtratio ()
    {
        $totaldebt_dr = $this->sumdebt();
        
        $debtratio = '0';
        $avgmonthincome = '7500000';

        $debtratio = $totaldebt_dr / $avgmonthincome * 100;

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

    public function liquidityratio ()
    {
        $liquidasset = '444928';
        $avgmonthexp = '1836168';

        $liqratio = $liquidasset / $avgmonthexp * 100;

        return $liqratio;
    }

    public function daytoliquid ()
    {
        $liqratio_dtl = $this->liquidityratio();

        $daytoliquid = $liqratio_dtl / 100 * 30;

        return $daytoliquid;
    }

    public function liqratiostatus()
    {
        $liqratio_lrs = $this->liquidityratio();
        $liqratiostatus = 'Not Ideal';

        if ($liqratio_lrs > 2 && $liqratio_lrs < 7) {
            $liqratiostatus = 'Ideal';
        }
        elseif ($liqratio_lrs > 6) {
            $liqratiostatus = 'Good but Not Recommended';
        }
        elseif ($liqratio_lrs < 3) {
            $liqratiostatus = 'Not Ideal';
        }

        return $liqratiostatus;
    }

    public function dayliqsuggest()
    {
        $liqratio_dls = $this->liquidityratio();
        $liqsuggest = 'Not Ideal';

        if ($liqratio_dls > 2 && $liqratio_dls < 7) {
            $liqsuggest = 'Keep this condition';
        }
        elseif ($liqratio_dls > 6) {
            $liqsuggest = 'Put some of your assets to non-liquid one';
        }
        elseif ($liqratio_dls < 3) {
            $liqsuggest = 'Increase your liquid assets';
        }

        return $liqsuggest;
    }

    public function totalasset ()
    {
        $totalasset = '0';

        return $totalasset;
    }

    public function netasset ()
    {
        $totalasset_na = $this->totalasset();
        $totaldebt_na = $this->sumdebt();
        $netasset = $totalasset_na - $totaldebt_na;

        return $netasset;
    }

    public function insightview ()
    {
        $totaldebtsd = $this->sumdebt();
        $debtratio = $this->debtratio();
        $debtratiostatus = $this->debtratiostatus();
        $liqratio = $this->liquidityratio();
        $daytoliquid = $this->daytoliquid();
        $liqratiostatus = $this->liqratiostatus();
        $liqsuggest = $this->dayliqsuggest();
        $totalasset = $this->totalasset();
        $netasset = $this->netasset();
        return view('insight')->with(['totaldebt' => $totaldebtsd, 'debtratio' => $debtratio, 'debtratiostatus' => $debtratiostatus, 'liquidityratio' => $liqratio, 'daytoliquid' => $daytoliquid, 'liqratiostatus' => $liqratiostatus, 'liqsuggest' => $liqsuggest, 'totalasset' => $totalasset, 'netasset' => $netasset]);
    }
}
