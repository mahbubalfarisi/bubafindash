<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Jenius;

class JeniusController extends Controller
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
        return view('jeniuses.create');
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
        $jenius = new jenius([
            'date' => $request->get('date'),
            'description'=> $request->get('description'),
            'credit'=> $request->get('credit'),
            'debit'=> $request->get('debit')
        ]);
        $jenius->save();
        return redirect('/jenius/index')->with('success', 'Transaction record has been added');
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
        $jenius = Jenius::find($id);

        return view('jenius.edit', compact('jenius'));
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

        $jenius = Jenius::find($id);
        $jenius->date = $request->get('date');
        $jenius->description = $request->get('description');
        $jenius->credit = $request->get('credit');
        $jenius->debit = $request->get('debit');
        $jenius->save();

        return redirect('/jenius/index')->with('success', 'Transaction data has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jenius = Jenius::find($id);
        $jenius->delete();

        return redirect('/jenius/index')->with('success', 'Transaction record has been deleted');
    }
}
