<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Paystack;
use App\Order;
use Auth;

class PaymentController extends Controller
{
    public function redirectToGateway()
    {
        $order = Order::where(['user_id' => Auth::id(), 'status' => 0])->first();
        $order->reference = request()->reference;
        $order->save();
        return Paystack::getAuthorizationUrl()->redirectNow();
    }

    /**
     * Obtain Paystack payment information
     * @return void
     */
    public function handleGatewayCallback()
    {
        $paymentDetails = Paystack::getPaymentData();
        $order = Order::where('reference', $paymentDetails['data']['reference'])->first();
        $order->status = 1;
        $order->save();
        return redirect()->route('user.dashboard');
        
    }

    public function test()
    {
        $customers = Paystack::getAllCustomers();

        dd($customers);
    }
}
