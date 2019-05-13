<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Ovo;

class OvoController extends Controller
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
        return view('ovos.create');
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
        $ovo = new Ovo([
            'date' => $request->get('date'),
            'description'=> $request->get('description'),
            'credit'=> $request->get('credit'),
            'debit'=> $request->get('debit')
        ]);
        $ovo->save();
        return redirect('/ovo/index')->with('success', 'Transaction record has been added');
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
        $ovo = Ovo::find($id);

        return view('ovo.edit', compact('ovo'));
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

        $ovo = Ovo::find($id);
        $ovo->date = $request->get('date');
        $ovo->description = $request->get('description');
        $ovo->credit = $request->get('credit');
        $ovo->debit = $request->get('debit');
        $ovo->save();

        return redirect('/ovo/index')->with('success', 'Transaction data has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ovo = Ovo::find($id);
        $ovo->delete();

        return redirect('/ovo/index')->with('success', 'Transaction record has been deleted');
    }
}
