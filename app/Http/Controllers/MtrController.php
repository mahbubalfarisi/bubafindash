<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mtr;

class MtrController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $mtrs = mtr::all();

        // return view('mtr.index', compact('mtrs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mtr.create');
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
            'credit'=> 'required|between:0,99.99',
        ]);
        $mtr = new Mtr([
            'date' => $request->get('date'),
            'credit'=> $request->get('credit')
        ]);
        $mtr->save();
        return redirect('/mtr/index')->with('success', 'Transaction record has been added');
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
        $mtr = Mtr::find($id);

        return view('mtr.edit', compact('mtr'));
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
            'credit'=> 'required|between:0,99.99',
        ]);

        $mtr = Mtr::find($id);
        $mtr->date = $request->get('date');
        $mtr->credit = $request->get('credit');
        $mtr->save();

        return redirect('/mtr/index')->with('success', 'Transaction data has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mtr = Mtr::find($id);
        $mtr->delete();

        return redirect('/mtr/index')->with('success', 'Transaction record has been deleted');
    }
}
