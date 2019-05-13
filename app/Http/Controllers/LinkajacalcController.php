<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Linkaja;

class LinkajacalcController extends Controller
{
    // Calculation for linkaja
    public function creditlinkaja ()
    {
        $linkajas = Linkaja::all();
        $creditlinkaja = '0';

        foreach ($linkajas as $linkaja) {
            $credit = $linkaja->credit;
            $creditlinkaja = $creditlinkaja + $linkaja->credit;
        }

        return $creditlinkaja;
    }

    public function debitlinkaja ()
    {
        $linkajas = Linkaja::all();
        $debitlinkaja = '0';

        foreach ($linkajas as $linkaja) {
            $debit = $linkaja->debit;
            $debitlinkaja = $debitlinkaja + $linkaja->debit;
        }

        return $debitlinkaja;
    }

    public function balancelinkaja ()
    {
        $balancelinkaja = '0';
        $credito = $this->creditlinkaja();
        $debito = $this->debitlinkaja();

        $balancelinkaja = $credito - $debito;

        return $balancelinkaja;
    }

    public function linkajaview ()
    {

    	$linkajas = Linkaja::all();

        $creditlinkaja = $this->creditlinkaja();
        $debitlinkaja = $this->debitlinkaja();
        $balancelinkaja = $this->balancelinkaja();
        return view('linkaja/index')->with(['creditlinkaja' => $creditlinkaja, 'debitlinkaja' => $debitlinkaja, 'balancelinkaja' => $balancelinkaja, 'linkajas' => $linkajas]);
    }
}
