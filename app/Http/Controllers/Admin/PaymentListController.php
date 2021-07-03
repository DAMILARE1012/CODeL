<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\PaymentList;
use Session;

class PaymentListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paymentLists = PaymentList::all();
        return view('admin.fees.reg_fee', compact('paymentLists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $paymentList = new PaymentList;
        $paymentList->name = $request->fees_category;
        $paymentList->amount = $request->amount;

        $paymentList->save();

        return redirect()->route('admin.registration_fees');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $paymentLists = PaymentList::find($id);
        return view('admin.fees.regfee_Edit', compact('paymentLists'));
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
        $paymentLists = PaymentList::find($id);
        $this->validate($request, [
            'amount' => 'required',
            ]);

        $paymentLists->amount = $request->amount;

        $paymentLists->save();

        Session::flash('info', 'Amount updated successfully');
        return redirect()->route('admin.registration_fees');
    }
}
