<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Debt;

class DebtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $debts = Debt::all();

        return view('debt.index', compact('debts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('debt.create');
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
            'purpose'=>'required',
            'creditor'=> 'required',
            'amount' => 'required|integer',
            'remaining' => 'required|integer'
        ]);
        $debt = new Debt([
            'purpose' => $request->get('purpose'),
            'creditor'=> $request->get('creditor'),
            'amount'=> $request->get('amount'),
            'remaining'=> $request->get('remaining')
        ]);
        $debt->save();
        return redirect('/debts')->with('success', 'Debt has been added');
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
        $debt = Debt::find($id);

        return view('debt.edit', compact('debt'));
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
            'purpose'=>'required',
            'creditor'=> 'required',
            'amount' => 'required|integer',
            'remaining' => 'required|integer'
        ]);

        $debt = Debt::find($id);
        $debt->purpose = $request->get('purpose');
        $debt->creditor = $request->get('creditor');
        $debt->amount = $request->get('amount');
        $debt->remaining = $request->get('remaining');
        $debt->save();

        return redirect('/debts')->with('success', 'Debt has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $debt = Debt::find($id);
        $debt->delete();

        return redirect('/debts')->with('success', 'Debt has been deleted Successfully');
    }
}
