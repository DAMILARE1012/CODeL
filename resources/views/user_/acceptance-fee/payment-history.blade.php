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

                            @if($orders)
    
                            <div class="row">
                                <div class="wrap">
                                    <section class="app-content">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="widget">
                                                    <header class="widget-header">
                                                        <h4 class="widget-title">Acceptance Payments Attempts</h4>
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
                                                                @foreach($orders as $order)
                                                                <tr>
                                                                    <td>{{ $count++ }}</td>
                                                                    <td>{{ $order->created_at->diffForHumans() }}</td>
                                                                    <td>{{ number_format($order->amount, 2) }}</td>
                                                                    <td>
                                                                        @if($order->rrr == NULL)
                                                                            no RRR generated
                                                                        @else
                                                                            {{ $order->rrr }}
                                                                        @endif
                                                                    </td>
                                                                    <td>
                                                                        @if($order->status == 1)
                                                                            <span class="text-success">transaction successful</span>
                                                                        @else
                                                                            <span class="text-danger">transaction failed</span>
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

