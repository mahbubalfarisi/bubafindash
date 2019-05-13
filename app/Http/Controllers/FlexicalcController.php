<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Flexi;

class FlexicalcController extends Controller
{
    // Calculation for flexi
    public function creditflexi ()
    {
        $flexis = Flexi::all();
        $creditflexi = '0';

        foreach ($flexis as $flexi) {
            $credit = $flexi->credit;
            $creditflexi = $creditflexi + $flexi->credit;
        }

        return $creditflexi;
    }

    public function debitflexi ()
    {
        $flexis = Flexi::all();
        $debitflexi = '0';

        foreach ($flexis as $flexi) {
            $debit = $flexi->debit;
            $debitflexi = $debitflexi + $flexi->debit;
        }

        return $debitflexi;
    }

    public function balanceflexi ()
    {
        $balanceflexi = '0';
        $credito = $this->creditflexi();
        $debito = $this->debitflexi();

        $balanceflexi = $credito - $debito;

        return $balanceflexi;
    }

    public function flexiview ()
    {

    	$flexis = Flexi::all();

        $creditflexi = $this->creditflexi();
        $debitflexi = $this->debitflexi();
        $balanceflexi = $this->balanceflexi();
        return view('flexi/index')->with(['creditflexi' => $creditflexi, 'debitflexi' => $debitflexi, 'balanceflexi' => $balanceflexi, 'flexis' => $flexis]);
    }
}
