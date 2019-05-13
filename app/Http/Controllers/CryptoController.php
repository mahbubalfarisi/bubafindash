<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Crypto;

class CryptoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cryptos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'date'=>'required',
            'balance'=> 'required|between:0,99.99',
            'value' => 'required|between:0,99.99',
        ]);
        $crypto = new Crypto([
            'date' => $request->get('date'),
            'balance'=> $request->get('balance'),
            'value'=> $request->get('value')
        ]);
        $crypto->save();
        return redirect('/cryptos/index')->with('success', 'Transaction record has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $crypto = Crypto::find($id);

        return view('cryptos.edit', compact('crypto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'date'=>'required',
            'balance'=> 'required|between:0,99.99',
            'value' => 'required|between:0,99.99',
        ]);

        $crypto = Crypto::find($id);
        $crypto->date = $request->get('date');
        $crypto->balance = $request->get('balance');
        $crypto->value = $request->get('value');
        $crypto->save();

        return redirect('/cryptos/index')->with('success', 'Transaction data has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $crypto = Crypto::find($id);
        $crypto->delete();

        return redirect('/cryptos/index')->with('success', 'Transaction record has been deleted');
    }
}
