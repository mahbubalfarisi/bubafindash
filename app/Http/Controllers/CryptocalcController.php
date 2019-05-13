<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Crypto;

class CryptocalcController extends Controller
{
    // Calculation for Crypto
    // Total Crypto Balance
    public function balancecrypto ()
    {
        $cryptos = Crypto::all();
        $balancecrypto = '0';

        foreach ($cryptos as $crypto) {
            $balancecrypto = $balancecrypto + $crypto->balance;
        }

        return $balancecrypto;
    }

    // Total Crypto Value
    public function valuecrypto ()
    {
        $cryptos = Crypto::all();
        $valuecrypto = '0';

        foreach ($cryptos as $crypto) {
            $valuecrypto = $valuecrypto + $crypto->value;
        }

        return $valuecrypto;
    }

    public function cryptoview ()
    {
    	$cryptos = Crypto::all();

        $balancecrypto = $this->balancecrypto();
        $valuecrypto = $this->valuecrypto();
        return view('cryptos/index')->with(['balancecrypto' => $balancecrypto, 'valuecrypto' => $valuecrypto, 'cryptos' => $cryptos]);
    }
}
