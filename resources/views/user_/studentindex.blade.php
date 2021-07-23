@extends('layouts.master')
@section('content')
@include('layouts.studentheader')


<main id="app-main" class="app-main">
    <div class="wrap">
        @if ($user->admission_accepted == 2);
        <section class="app-content">
            <div class="row">
        
                <div class="col-md-6">
                    <div class="widget">
                        <header class="widget-header">
                            <h4 class="widget-title">#</h4>
                        </header><!-- .widget-header -->
                        <hr class="widget-separator">
                        <div class="nav-tabs-vertical clearfix">
                            @if(session('info'))
                            <div class="alert alert-success">
                            {{ session('info') }}
                            </div>
                            @endif
                             <ul class="nav nav-tabs" role="tablist">
                                <li class="active text-uppercase" role="presentation"><a data-toggle="tab" href="#vt-example-1" aria-controls="vt-example-1" role="tab" aria-expanded="false"></a>
                                <div class="avatar avatar-xl avatar-circle" aria-controls="vt-example-1" role="tab" aria-expanded="false">
                                        <img src="{{ asset('images/credentials/passportz/'. $credential->passport) }}" alt="passport">
                                    </div></li>
                                <li class="text-uppercase" role="presentation"><a data-toggle="tab" href="#vt-example-2" aria-controls="vt-example-2" role="tab" aria-expanded="true"></a>
                                <div class="avatar avatar-xl">
                                        <img src="{{ asset('images/credentials/signature/'. $user->signature) }}" alt="signature">
                                    </div></li>
                                
                            </ul>
                            <div class="col-md-3 col-sm-3">
                                    
                                    


                                    <!-- .avatar -->
                                </div>
                        </div><!-- .widget-body -->
                    </div><!-- .widget -->

                </div><!-- END column -->

                <div class="col-md-6">
                    <div class="widget">
                        <header class="widget-header">
                            <h4 class="widget-title">Basic Information</h4>
                        </header><!-- .widget-header -->
                        <hr class="widget-separator">
                        <div class="widget-body row">                            
                            <ul class="list-group no-border">
                                <li class="list-group-item"><b> Full Name: </b>{{ $user->lname }} {{ $user->mname }} {{ $user->fname }} </li>
                                <li class="list-group-item"><b> Email: </b> {{ $user->email }} </li>
                                <li class="list-group-item"><b> Phone Number: </b> {{ $user->phone }} </li>
                                <li class="list-group-item"><b> Course: </b> {{ $user->program }} </li>
                                <li class="list-group-item"><b> Reg. Number: </b> {{ $user->registration_id }} </li>
                                
                            </ul>
                        </div><!-- .widget-body -->
                    </div><!-- .widget -->

                </div><!-- END column -->

        
            </div><!-- .row -->

            
            <div class="row">
        
                <div class="col-md-6">
                    <div class="widget">
                        <header class="widget-header">
                            <h4 class="widget-title">CODeL Handbook</h4>
                        </header><!-- .widget-header -->
                        <hr class="widget-separator">
                        <div class="widget-body row text-left">
                            <!-- <p class="alert alert-info">Download the Fees structure for CODeL.</p> -->

                            <div class="text" style="margin-left: 10px">
                                <a href="{{ asset('files/handbook.pdf') }}" class="btn btn-primary" target="_blank">Download Handbook</a>
                            </div>
                        </div><!-- .widget-body -->
                    </div><!-- .widget -->

                </div><!-- END column -->

                <div class="col-md-6">
                    <div class="widget">
                        <header class="widget-header">
                            <h4 class="widget-title">CODeL Fee Structure</h4>
                        </header><!-- .widget-header -->
                        <hr class="widget-separator">
                        <div class="widget-body row text-center">
                            <!-- <p class="alert alert-info">Download the Fees structure for CODeL.</p> -->

                            <div style="margin-left: -328px">
                                <a href="{{ asset('files/codel_fees.pdf') }}" class="btn btn-primary" target="_blank">Download Fee</a>
                            </div>
                        </div><!-- .widget-body -->
                    </div><!-- .widget -->

                </div><!-- END column -->
            </div>
        </section><!-- .app-content -->
        @else
        <!-- Athorized users End -->
        <!-- unathorized users start -->
        <section class="app-content">
            <div class="row">
                <div class="col-md-11">
                    <div class="widget">
                        <header class="widget-header">
                            <h4 class="widget-title">Notice</h4>
                        </header><!-- .widget-header -->
                        <hr class="widget-separator">
                        <div class="alert alert-danger">
                            <p>You do not yet have access to this page!</p>
                        </div>
                        <!-- .widget-body -->
                    </div><!-- .widget -->

                </div><!-- END column -->

   
            </div><!-- .row -->

        </section><!-- .app-content -->
        <!-- unathorized users ends -->
        @endif
    </div><!-- .wrap -->
</main>
@endsection
