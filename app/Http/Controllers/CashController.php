<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Cash;

class CashController extends Controller
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
        return view('cashes.create');
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
            'credit'=> 'required|integer',
            'debit' => 'required|integer',
        ]);
        $cash = new Cash([
            'date' => $request->get('date'),
            'description'=> $request->get('description'),
            'credit'=> $request->get('credit'),
            'debit'=> $request->get('debit')
        ]);
        $cash->save();
        return redirect('/cashes/index')->with('success', 'Transaction record has been added');
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
        $cash = Cash::find($id);

        return view('cashes.edit', compact('cash'));
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
            'credit'=> 'required|integer',
            'debit' => 'required|integer',
        ]);

        $cash = Cash::find($id);
        $cash->date = $request->get('date');
        $cash->description = $request->get('description');
        $cash->credit = $request->get('credit');
        $cash->debit = $request->get('debit');
        $cash->save();

        return redirect('/cashes/index')->with('success', 'Transaction data has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cash = Cash::find($id);
        $cash->delete();

        return redirect('/cashes/index')->with('success', 'Transaction record has been deleted');
    }
}
