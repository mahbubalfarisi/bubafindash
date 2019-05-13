<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Ovopoints;

class OvopointscalcController extends Controller
{
    // Calculation for OVO Points
    public function creditovop ()
    {
        $ovopoints = Ovopoints::all();
        $creditovop = '0';

        foreach ($ovopoints as $ovop) {
            $credit = $ovop->credit;
            $creditovop = $creditovop + $ovop->credit;
        }

        return $creditovop;
    }

    public function debitovop ()
    {
        $ovopoints = Ovopoints::all();
        $debitovop = '0';

        foreach ($ovopoints as $ovop) {
            $debit = $ovop->debit;
            $debitovop = $debitovop + $ovop->debit;
        }

        return $debitovop;
    }

    public function balanceovop ()
    {
        $balanceovop = '0';
        $creditop = $this->creditovop();
        $debitop = $this->debitovop();

        $balanceovop = $creditop - $debitop;

        return $balanceovop;
    }

    public function ovopview ()
    {

    	$ovopoints = Ovopoints::all();

        $creditovop = $this->creditovop();
        $debitovop = $this->debitovop();
        $balanceovop = $this->balanceovop();
        return view('ovopoint/index')->with(['creditovop' => $creditovop, 'debitovop' => $debitovop, 'balanceovop' => $balanceovop, 'ovopoints' => $ovopoints]);
    }
}
