<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Ovo;

class OvocalcController extends Controller
{
    // Calculation for ovo
    public function creditovo ()
    {
        $ovos = Ovo::all();
        $creditovo = '0';

        foreach ($ovos as $ovo) {
            $credit = $ovo->credit;
            $creditovo = $creditovo + $ovo->credit;
        }

        return $creditovo;
    }

    public function debitovo ()
    {
        $ovos = Ovo::all();
        $debitovo = '0';

        foreach ($ovos as $ovo) {
            $debit = $ovo->debit;
            $debitovo = $debitovo + $ovo->debit;
        }

        return $debitovo;
    }

    public function balanceovo ()
    {
        $balanceovo = '0';
        $credito = $this->creditovo();
        $debito = $this->debitovo();

        $balanceovo = $credito - $debito;

        return $balanceovo;
    }

    public function ovoview ()
    {

    	$ovos = Ovo::all();

        $creditovo = $this->creditovo();
        $debitovo = $this->debitovo();
        $balanceovo = $this->balanceovo();
        return view('ovo/index')->with(['creditovo' => $creditovo, 'debitovo' => $debitovo, 'balanceovo' => $balanceovo, 'ovos' => $ovos]);
    }
}
