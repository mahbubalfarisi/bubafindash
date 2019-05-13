<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mtr;

class MtrcalcController extends Controller
{
    // Calculation for mtr
    public function creditmtr ()
    {
        $mtrs = Mtr::all();
        $creditmtr = '0';

        foreach ($mtrs as $mtr) {
            $credit = $mtr->credit;
            $creditmtr = $creditmtr + $mtr->credit;
        }

        return $creditmtr;
    }

    public function debitmtr ()
    {
        $mtrs = Mtr::all();
        $debitmtr = '0';

        foreach ($mtrs as $mtr) {
            $debit = $mtr->debit;
            $debitmtr = $debitmtr + $mtr->debit;
        }

        return $debitmtr;
    }

    public function balancemtr ()
    {
        $balancemtr = '0';
        $creditm = $this->creditmtr();
        $debitm = $this->debitmtr();

        $balancemtr = $creditm - $debitm;

        return $balancemtr;
    }

    public function mtrview ()
    {

    	$mtrs = Mtr::all();

        $creditmtr = $this->creditmtr();
        $debitmtr = $this->debitmtr();
        $balancemtr = $this->balancemtr();
        return view('mtr/index')->with(['creditmtr' => $creditmtr, 'debitmtr' => $debitmtr, 'balancemtr' => $balancemtr, 'mtrs' => $mtrs]);
    }
}
