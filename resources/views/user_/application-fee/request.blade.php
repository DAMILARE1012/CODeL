@extends('layouts.master')
@section('content')
@include('layouts.userheader')


<main id="app-main" class="app-main">
    <div class="wrap">
        <section class="app-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="widget">
                        
                        <hr class="widget-separator">
                        <div class="widget-body row">
                            @if(session('info'))
                            <div class="alert alert-success">
                            {{ session('info') }}
                            </div>
                            @endif
                            
                            <div class="row">
  
                                <div class="wrap">
                                    <section class="app-content">

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="widget">
                                                    <header class="widget-header">
                                                        <h4 class="widget-title">Acceptance Fee</h4>
                                                    </header><!-- .widget-header -->
                                                    <hr class="widget-separator">
                                                    @php 
                                                        $concatString = config('global.MERCHANTID') . config('global.SERVICETYPEID') . $appOrder->reference . $appOrder->amount . config('global.PATH') . config('global.APIKEY');

                                                        $hash = hash('sha512', $concatString);
                                                        
                                                    @endphp

                                                    
                                                    <div class="widget-body text-center">
                                                        @if(!$registrationFeeSuccessful)
                                                        <form action="{{ config('global.GATEWAYURL') }}" name="remita_form" method="POST" class="form-horizontal">

                                                            <input type="hidden" value="{{ config('global.MERCHANTID')}}" name="merchantId">

                                                            <input type="hidden" value="{{ config('global.SERVICETYPEID')}}" name="serviceTypeId">
                                                            <input type="hidden" value="{{ $appOrder->amount }}" name="amt">
                                                            <input type="hidden" value="{{ config('global.PATH') }}" name="responseurl">
                                                            <input type="hidden" value="{{ $hash }}" name="hash">
                                                            <h1 class="text-success">Acceptance Fee: &#8358;{{ number_format($appOrder->amount,2) }}</h1>
                                                            <p class="text-info">Note:<br>1. Remita charges may apply.<br> 2. You can only pay using your Master Card.</p>
                                                            <div class="form-group">
                                                                <label for="select2-demo-2" class="col-sm-4 control-label">PAYMENT METHOD</label>
                                                                <div class="col-sm-6">
                                                                    <select name="paymentType" class="form-control">
                                                                        <option value="MASTERCARD">MASTERCARD</option>
                                                                        <!-- <option value="VISA">VISA</option>
                                                                        <option value="VERVE">VERVE</option> -->
                                                                    </select>
                                                                </div><!-- END column -->
                                                            </div><!-- .form-group -->
                                                            <input type="hidden" value="{{ $appOrder->user->fname }} {{ $appOrder->user->mname }} {{ $appOrder->user->lname }}" name="payerName">
                                                            <input type="hidden" value="{{ $appOrder->user->email }}" name="payerEmail">
                                                            <input type="hidden" value="{{ $appOrder->user->phone }}" name="payerPhone">
                                                            <input type="hidden" value="{{ $appOrder->reference }}" name="appOrderId">
                                                            <input type="submit" name="submit" class="btn btn-success" value="Pay with Remita">
                                                            <img src="{{ asset('remita.png') }}" width="150" height="150">
                                                        </form>
                                                        @else
                                                            <div class="alert alert-success">
                                                                <p>Acceptance fee has been successfully paid.</p>
                                                            </div>
                                                        @endif
                                                    </div><!-- .widget-body -->
                                                </div><!-- .widget -->
                                            </div><!-- END column -->

                                        </div><!-- .row -->
                                    </section><!-- #dash-content -->
                                </div><!-- .wrap -->

                            </div>


                            @if($appOrder)
                                
                                <div class="row">
                                  
                                    <div class="wrap">
                                        <section class="app-content">

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="widget">
                                                        <header class="widget-header">
                                                            <h4 class="widget-title">Acceptance Fee Attempts</h4>
                                                        </header><!-- .widget-header -->
                                                        <hr class="widget-separator">
                                                        
                                                        <div class="widget-body">
                                                            <table class="table table-striped">
                                                                <thead>
                                                                    <tr>
                                                                        <th>#</th>
                                                                        <th>Iniate date</th>
                                                                        <th>Amount</th>
                                                                        <th>RRR</th>
                                                                        <th>Status</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @php
                                                                        $count = 1;
                                                                    @endphp
                                                                    @foreach($appOrders as $appOrder)
                                                                    <tr>
                                                                        <td>{{ $count++ }}</td>
                                                                        <td>{{ $appOrder->created_at->toDayDateTimeString() }}</td>
                                                                        <td>&#8358;{{ number_format($appOrder->amount, 2) }}</td>
                                                                        <td>
                                                                            @if($appOrder->rrr == NULL)
                                                                                no RRR generated
                                                                            @else
                                                                                {{ $appOrder->rrr }}
                                                                            @endif
                                                                        </td>
                                                                        <td>
                                                                            @if($appOrder->status == 1)
                                                                                <span class="text-success">transaction successful</span>
                                                                            @elseif($appOrder->status==2)
                                                                                <span class="text-danger">transaction failed</span>
                                                                            @else
                                                                                <span class="text-danger">transaction pending</span>
                                                                            @endif
                                                                        </td>
                                                                    </tr>
                                                                    @endforeach
                                                                </tbody>
                                                            </table>
                                                        </div><!-- .widget-body -->
                                                    </div><!-- .widget -->
                                                </div><!-- END column -->

                                            </div><!-- .row -->
                                        </section><!-- #dash-content -->
                                    </div><!-- .wrap -->

                                </div>
                                
                            @endif

                        </div>
                        <!-- .widget-body -->
                    </div><!-- .widget -->

                </div><!-- END column -->

   
            </div><!-- .row -->

        </section><!-- .app-content -->
    </div>
</main>
@endsection


