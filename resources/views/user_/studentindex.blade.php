@extends('layouts.master')
@section('content')
@include('layouts.userheader')

<main id="app-main" class="app-main">
    <div class="wrap">
        <!-- Athorized users start -->
        @if ($user->admission_accepted == 1);
        <section class="app-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="widget">
                        <header class="widget-header">
                            <h4 class="widget-title">Profile</h4>
                        </header><!-- .widget-header -->
                        <hr class="widget-separator">
                        <div class="widget-body row">
                            @if(session('info'))
                            <div class="alert alert-success">
                            {{ session('info') }}
                            </div>
                            @endif
                            <div class="row">
                                <div class="col-md-3 col-sm-3">
                                    <div class="avatar avatar-xl avatar-circle">
                                        <img src="{{ asset('images/credentials/passportz/'. $credential->passport) }}" alt="passport">
                                    </div>
                                    <br>
                                    <div class="avatar avatar-xl avatar-circle">
                                        <!-- <img src="{{ asset('images/credentials/signature/'. $credential->signature) }}" alt="signature"> -->
                                    </div>
                                    <!-- .avatar -->
                                </div>
                                <div class="col-md-9 col-sm-9">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">First Name</label>
                                                <p style="padding: 4px; border: 2px solid;">{{ $user->fname }}</p>
                                            </div>

                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Middle Name</label>
                                                <p style="padding: 4px; border: 2px solid;">{{ $user->mname }}</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Last Name</label>
                                                <p style="padding: 4px; border: 2px solid;">{{ $user->lname }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Date of Birth</label>
                                                <p style="padding: 4px; border: 2px solid;">{{ $user->dob }}</p>
                                            </div>

                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Phone Number</label>
                                                <p style="padding: 4px; border: 2px solid;">{{ $user->phone }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Country</label>
                                                <p style="padding: 4px; border: 2px solid;">{{ $user->country }}</p>
                                            </div>

                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">State</label>
                                                <p style="padding: 4px; border: 2px solid;">{{ $user->state }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Email</label>
                                                <p style="padding: 4px; border: 2px solid;">{{ $user->email }}</p>
                                            </div>

                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Program</label>
                                                <p style="padding: 4px; border: 2px solid;">{{ $user->program }}</p>
                                            </div>
                                        </div>
                                    </div>
                                   
                            </div>
                        </div>
                        <!-- .widget-body -->
                    </div><!-- .widget -->

                </div><!-- END column -->

   
            </div><!-- .row -->

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
    </div>
</main>
@endsection
