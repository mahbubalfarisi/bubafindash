<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Gopay;

class GopayController extends Controller
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
        return view('gopays.create');
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
            'description'=>'required',
            'credit'=> 'required|between:0,99.99',
            'debit' => 'required|between:0,99.99',
        ]);
        $gopay = new Gopay([
            'date' => $request->get('date'),
            'description'=> $request->get('description'),
            'credit'=> $request->get('credit'),
            'debit'=> $request->get('debit')
        ]);
        $gopay->save();
        return redirect('/gopay/index')->with('success', 'Transaction record has been added');
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
        $gopay = Gopay::find($id);

        return view('gopay.edit', compact('gopay'));
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
            'description'=>'required',
            'credit'=> 'required|between:0,99.99',
            'debit' => 'required|between:0,99.99',
        ]);

        $gopay = Gopay::find($id);
        $gopay->date = $request->get('date');
        $gopay->description = $request->get('description');
        $gopay->credit = $request->get('credit');
        $gopay->debit = $request->get('debit');
        $gopay->save();

        return redirect('/gopay/index')->with('success', 'Transaction data has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gopay = Gopay::find($id);
        $gopay->delete();

        return redirect('/gopay/index')->with('success', 'Transaction record has been deleted');
    }
}
