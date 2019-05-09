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
    
    public function insightview ()
    {
        $totaldebtsd = $this->sumdebt();
        $debtratio = $this->debtratio();
        $debtratiostatus = $this->debtratiostatus();
        $liqratio = $this->liquidityratio();
        return view('insight')->with(['totaldebt' => $totaldebtsd, 'debtratio' => $debtratio, 'debtratiostatus' => $debtratiostatus, 'liquidityratio' => $liqratio]);
    }
}
