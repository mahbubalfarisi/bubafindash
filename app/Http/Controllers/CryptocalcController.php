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

    // Total Buy Value
    public function buycrypto ()
    {
        $cryptos = Crypto::all();
        $buycrypto = '0';

        foreach ($cryptos as $crypto) {
            $buycrypto = $buycrypto + $crypto->value;
        }

        return $buycrypto;
    }

    // Total Crypto Value
    public function valuecrypto ()
    {
        $cryptos = Crypto::all();
        $valuecrypto = '0';
        $price = '2736929.58';
        $balance = $this->balancecrypto();

        foreach ($cryptos as $crypto) {
            $valuecrypto = $balance * $price;
        }

        return $valuecrypto;
    }

    public function cryptoview ()
    {
    	$cryptos = Crypto::all();

        $balancecrypto = $this->balancecrypto();
        $buycrypto = $this->buycrypto();
        $valuecrypto = $this->valuecrypto();
        return view('cryptos/index')->with(['balancecrypto' => $balancecrypto, 'valuecrypto' => $valuecrypto, 'buycrypto' => $buycrypto, 'cryptos' => $cryptos]);
    }
}
