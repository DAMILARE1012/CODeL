<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\AppOrder;
use App\PaymentList;
use Session;

class ApplicationFeeController extends Controller
{
    public function createOrder()
    {   
        $applicationFee = PaymentList::find(1);
        $appOrder = AppOrder::create([
            'user_id' => Auth::id(),
            'payment_list_id' => $applicationFee->id,
            'amount' => $applicationFee->amount,
            'reference' => uniqid(),
        ]);

        return redirect()->route('user.application.remita.request', ['appOrder' => $appOrder->id]);
    }

    public function remitaRequestView($appOrder)
    {
        $appOrder = AppOrder::find($appOrder);
        $appOrders = Auth::user()->appOrders;
        $registrationFeeSuccessful = AppOrder::where(['user_id' => Auth::id(), 'status' => 1])->first();
        return view('user_.application-fee.request', compact('appOrder', 'appOrders', 'registrationFeeSuccessful'));
    }

    public function callback()
    {
        // dd(request()->status, request()->statuscode );
        if (request()->statuscode == '028') {
            $appOrder = AppOrder::where('reference', request()->appOrderID)->first();
            $appOrder->status = 2;
            $appOrder->save();
            Session::flash('remita', request()->status);
            return redirect()->route('user.admission.status');
        }

        $appOrder = AppOrder::where('reference', request()->appOrderID)->first();
        if ($appOrder) {
            $appOrder->status = 1;
            $appOrder->rrr = request()->RRR;
            $appOrder->save();

            DB::table('users')->where('id', Auth::id())->update(['count' => 1]); 

            return redirect()->route('user.registration.remita.request', ['appOrder' => $appOrder->id]);
        } 
    }

    public function paymentHistory($value='')
    {
        $appOrders = Auth::user()->appOrders;
        return view('user_.application-fee.payment-history', compact('appOrders'));
    }
}
