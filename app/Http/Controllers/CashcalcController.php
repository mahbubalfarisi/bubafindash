<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Cash;

class CashcalcController extends Controller
{
    // Calculation for Mandiri
    public function creditcash ()
    {
        $cashes = Cash::all();
        $creditcash = '0';

        foreach ($cashes as $cash) {
            $credit = $cash->credit;
            $creditcash = $creditcash + $cash->credit;
        }

        return $creditcash;
    }

    public function debitcash ()
    {
        $cashes = Cash::all();
        $debitcash = '0';

        foreach ($cashes as $cash) {
            $debit = $cash->debit;
            $debitcash = $debitcash + $cash->debit;
        }

        return $debitcash;
    }

    public function balancecash ()
    {
        $balancecash = '0';
        $creditc = $this->creditcash();
        $debitc = $this->debitcash();

        $balancecash = $creditc - $debitc;

        return $balancecash;
    }

    public function cashview ()
    {

    	$cashes = Cash::all();

        $creditcash = $this->creditcash();
        $debitcash = $this->debitcash();
        $balancecash = $this->balancecash();
        return view('cashes/index')->with(['creditcash' => $creditcash, 'debitcash' => $debitcash, 'balancecash' => $balancecash, 'cashes' => $cashes]);
    }
}
