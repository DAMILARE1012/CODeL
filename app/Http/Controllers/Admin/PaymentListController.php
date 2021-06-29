<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\PaymentList;

class PaymentListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $paymentLists = PaymentList::all();
        return view('admin.reg_fee', compact('paymentLists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $paymentLists = PaymentList::all();
        return view('admin.reg_fee', compact('paymentLists'));
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $paymentList = new PaymentList;
        $paymentList->name = $request->fees_category;
        $paymentList->amount = $request->amount;

        $paymentList->save();

        return redirect()->route('admin.registration_fees');
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

        $paymentList = PaymentList::findOrFail($id);
        return view('admin.reg_fee', compact('paymentList'));
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
        //
       $validateData = $request->validate([
            'fees_category' => 'required',
            'amount' => 'required',
        ]);

        PaymentList::whereId($id)->update($validateData);

        return redirect()->route('admin.registration_fees')
                        ->with('success','Amount updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $paymentList = PaymentList::findOrFail($id);
        $paymentList->delete();

        return redirect('/admin/registration_fees');


    }
}
