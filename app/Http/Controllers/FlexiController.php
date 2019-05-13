<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Flexi;

class FlexiController extends Controller
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
        return view('flexi.create');
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
        $flexi = new Flexi([
            'date' => $request->get('date'),
            'description'=> $request->get('description'),
            'credit'=> $request->get('credit'),
            'debit'=> $request->get('debit')
        ]);
        $flexi->save();
        return redirect('/flexi/index')->with('success', 'Transaction record has been added');
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
        $flexi = Flexi::find($id);

        return view('flexi.edit', compact('flexi'));
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

        $flexi = Flexi::find($id);
        $flexi->date = $request->get('date');
        $flexi->description = $request->get('description');
        $flexi->credit = $request->get('credit');
        $flexi->debit = $request->get('debit');
        $flexi->save();

        return redirect('/flexi/index')->with('success', 'Transaction data has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $flexi = Flexi::find($id);
        $flexi->delete();

        return redirect('/flexi/index')->with('success', 'Transaction record has been deleted');
    }
}
