<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\RegOrder;
use App\PaymentList;
use Session;

class RegistrationFeeController extends Controller
{
    public function createOrder()
    {   
        $registerFee = PaymentList::find(1);
        $regOrder = RegOrder::create([
            'user_id' => Auth::id(),
            'payment_list_id' => $registerFee->id,
            'amount' => $registerFee->amount,
            'reference' => uniqid(),
        ]);

        return redirect()->route('user.registration.remita.request', ['regOrder' => $regOrder->id]);
    }

    public function remitaRequestView($regOrder)
    {
        $regOrder = RegOrder::find($regOrder);
        $regOrders = Auth::user()->regOrders;
        $registrationFeeSuccessful = RegOrder::where(['user_id' => Auth::id(), 'status' => 1])->first();
        return view('user_.registration-fee.request', compact('regOrder', 'regOrders', 'registrationFeeSuccessful'));
    }

    public function callback()
    {
        // dd(request()->status, request()->statuscode );
        if (request()->statuscode == '028') {
            $regOrder = RegOrder::where('reference', request()->regOrderID)->first();
            $regOrder->status = 2;
            $regOrder->save();
            Session::flash('remita', request()->status);
            return redirect()->route('user.admission.status');
        }

        $regOrder = RegOrder::where('reference', request()->regOrderID)->first();
        if ($regOrder) {
            $regOrder->status = 1;
            $regOrder->rrr = request()->RRR;
            $regOrder->save();

            DB::table('users')->where('id', Auth::id())->update(['count' => 1]); 

            return redirect()->route('user.registration.remita.request', ['regOrder' => $regOrder->id]);
        } 
    }

    public function paymentHistory($value='')
    {
        $regOrders = Auth::user()->regOrders;
        return view('user_.registration-fee.payment-history', compact('regOrders'));
    }
}
