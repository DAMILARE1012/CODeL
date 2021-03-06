<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Order;
use App\PaymentList;
use Session;

class AcceptanceFeeController extends Controller
{

    public function createOrder()
    {   
        $acceptance = PaymentList::find(2);
        $order = Order::create([
            'user_id' => Auth::id(),
            'payment_list_id' => $acceptance->id,
            'amount' => $acceptance->amount,
            'reference' => uniqid(),
        ]);

        return redirect()->route('user.remita.request', ['order' => $order->id]);
    }

    public function remitaRequestView($order)
    {
        $order = Order::find($order);
        $orders = Auth::user()->orders;
        $acceptanceFeeSuccessful = Order::where(['user_id' => Auth::id(), 'status' => 1])->first();
        return view('user_.acceptance-fee.request', compact('order', 'orders', 'acceptanceFeeSuccessful'));
    }

    public function callback()
    {
        // dd(request()->status, request()->statuscode );
        if (request()->statuscode == '028') {
            $order = Order::where('reference', request()->orderID)->first();
            $order->status = 2;
            $order->save();
            Session::flash('remita', request()->status);
            return redirect()->route('user.admission.status');
        }

        $order = Order::where('reference', request()->orderID)->first();
        if ($order) {
            $order->status = 1;
            $order->rrr = request()->RRR;
            $order->save();

            DB::table('users')->where('id', Auth::id())->update(['admission_accepted' => 1.5]); 

            return redirect()->route('user.remita.request', ['order' => $order->id]);
        } 
    }

    public function paymentHistory($value='')
    {
        $orders = Auth::user()->orders;
        return view('user_.acceptance-fee.payment-history', compact('orders'));
    }
}

