<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Gopay;

class GopaycalcController extends Controller
{
    // Calculation for gopay
    public function creditgopay ()
    {
        $gopays = Gopay::all();
        $creditgopay = '0';

        foreach ($gopays as $gopay) {
            $credit = $gopay->credit;
            $creditgopay = $creditgopay + $gopay->credit;
        }

        return $creditgopay;
    }

    public function debitgopay ()
    {
        $gopays = Gopay::all();
        $debitgopay = '0';

        foreach ($gopays as $gopay) {
            $debit = $gopay->debit;
            $debitgopay = $debitgopay + $gopay->debit;
        }

        return $debitgopay;
    }

    public function balancegopay ()
    {
        $balancegopay = '0';
        $credito = $this->creditgopay();
        $debito = $this->debitgopay();

        $balancegopay = $credito - $debito;

        return $balancegopay;
    }

    public function gopayview ()
    {

    	$gopays = Gopay::all();

        $creditgopay = $this->creditgopay();
        $debitgopay = $this->debitgopay();
        $balancegopay = $this->balancegopay();
        return view('gopay/index')->with(['creditgopay' => $creditgopay, 'debitgopay' => $debitgopay, 'balancegopay' => $balancegopay, 'gopays' => $gopays]);
    }
}
