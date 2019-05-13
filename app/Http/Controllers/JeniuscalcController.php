<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Jenius;

class JeniuscalcController extends Controller
{
    // Calculation for jenius
    public function creditjenius ()
    {
        $jeniuses = Jenius::all();
        $creditjenius = '0';

        foreach ($jeniuses as $jenius) {
            $credit = $jenius->credit;
            $creditjenius = $creditjenius + $jenius->credit;
        }

        return $creditjenius;
    }

    public function debitjenius ()
    {
        $jeniuses = Jenius::all();
        $debitjenius = '0';

        foreach ($jeniuses as $jenius) {
            $debit = $jenius->debit;
            $debitjenius = $debitjenius + $jenius->debit;
        }

        return $debitjenius;
    }

    public function balancejenius ()
    {
        $balancejenius = '0';
        $credito = $this->creditjenius();
        $debito = $this->debitjenius();

        $balancejenius = $credito - $debito;

        return $balancejenius;
    }

    public function jeniusview ()
    {

    	$jeniuses = Jenius::all();

        $creditjenius = $this->creditjenius();
        $debitjenius = $this->debitjenius();
        $balancejenius = $this->balancejenius();
        return view('jenius/index')->with(['creditjenius' => $creditjenius, 'debitjenius' => $debitjenius, 'balancejenius' => $balancejenius, 'jeniuses' => $jeniuses]);
    }
}
