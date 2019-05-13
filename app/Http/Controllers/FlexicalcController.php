<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
        $creditfl = $this->creditflexi();
        $debitfl = $this->debitflexi();

        $balanceflexi = $creditfl - $debitfl;

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
