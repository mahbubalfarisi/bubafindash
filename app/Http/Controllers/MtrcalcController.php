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

    public function balancemtr ()
    {
        $balancemtr = '0';
        $creditm = $this->creditmtr();

        $balancemtr = $creditm;

        return $balancemtr;
    }

    public function mtrview ()
    {

    	$mtrs = Mtr::all();

        $creditmtr = $this->creditmtr();
        $balancemtr = $this->balancemtr();
        return view('mtr/index')->with(['creditmtr' => $creditmtr, 'balancemtr' => $balancemtr, 'mtrs' => $mtrs]);
    }
}
