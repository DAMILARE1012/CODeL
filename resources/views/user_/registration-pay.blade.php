@extends('layouts.master')
@section('content')
@include('layouts.userheader')

<main id="app-main" class="app-main">
    <div class="wrap">
        <section class="app-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="widget">
                        <header class="widget-header">
                            <h4 class="widget-title">Application Fee</h4>
                        </header><!-- .widget-header -->
                        <hr class="widget-separator">
                        <div class="widget-body text-center">
                            @if(session('info'))
                            <div class="alert alert-success">
                            {{ session('info') }}
                            </div>
                            @endif
                            <form action="{{ route('user.pay.application_fee') }}" method="POST" class="form-horizontal">
                                        
                                @csrf

                                <input type="hidden" name="email" value="{{ auth()->user()->email }}">

                                <input type="hidden" name="orderID" value="{{ $order->id }}">

                                <input type="hidden" name="amount" value="{{ $order->amount * 100 }}">

                                <input type="hidden" name="reference" value=""> 
                                
                                <input type="hidden" name="key" value="{{ config('paystack.secretKey') }}">

                                <div>
                                    <h4>{{ $paymentList->name }}:  &#8358; {{ number_format($paymentList->amount, 2) }}</h4>
                                </div>
                                
                                
                                <p>Click on the pay button to purchase registration form.</p>
                                <p>
                                <button class="btn mw-md btn-primary" type="submit">Pay</button>
                                </p>
                            </form>
                        </div>
                        <!-- .widget-body -->
                    </div><!-- .widget -->

                </div><!-- END column -->

   
            </div><!-- .row -->

        </section><!-- .app-content -->
    </div>
</main>
@endsection