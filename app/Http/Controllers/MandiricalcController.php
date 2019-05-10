<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mandiri;

class MandiricalcController extends Controller
{
    // Calculation for Mandiri
    public function creditmandiri ()
    {
        $mandiris = Mandiri::all();
        $creditmandiri = '0';

        foreach ($mandiris as $mandiri) {
            $credit = $mandiri->credit;
            $creditmandiri = $creditmandiri + $mandiri->credit;
        }

        return $creditmandiri;
    }

    public function debitmandiri ()
    {
        $mandiris = Mandiri::all();
        $debitmandiri = '0';

        foreach ($mandiris as $mandiri) {
            $debit = $mandiri->debit;
            $debitmandiri = $debitmandiri + $mandiri->debit;
        }

        return $debitmandiri;
    }

    public function balancemandiri ()
    {
        $balancemandiri = '0';
        $creditm = $this->creditmandiri();
        $debitm = $this->debitmandiri();

        $balancemandiri = $creditm - $debitm;

        return $balancemandiri;
    }

    public function mandiriview ()
    {

    	$mandiris = Mandiri::all();

        $creditmandiri = $this->creditmandiri();
        $debitmandiri = $this->debitmandiri();
        $balancemandiri = $this->balancemandiri();
        return view('mandiri/index')->with(['creditmandiri' => $creditmandiri, 'debitmandiri' => $debitmandiri, 'balancemandiri' => $balancemandiri, 'mandiris' => $mandiris, 'month' => $month]);
    }
}
