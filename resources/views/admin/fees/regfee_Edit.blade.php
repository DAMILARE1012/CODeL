@extends('layouts.master')
@section('content')
@include('layouts.adminheader')
<main id="app-main" class="app-main">
    <div class="wrap">

        <section class="app-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="widget">
                        <header class="widget-header">
                            <h4 class="widget-title">Edit Fee</h4>
                        </header><!-- .widget-header -->
                        <hr class="widget-separator">
                        <div class="widget-body row">
                            @foreach ($errors->all() as $error)
                                <li class="btn btn-danger">{{ $error }}</li>
                            @endforeach
                            <form method="POST" action="{{ route('admin.registration_fees.update', ['id' => $paymentLists->id]) }}">
                                @csrf

                                <div class="form-group row">
                                    
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-6">
                                                <div class="form-group mb-30" style="padding-left: 15px;">
                                                    <strong>Fee Category:</strong>
                                                    <input type="text" name="name" value="{{ $paymentLists->name }}" class="form-control" placeholder="Name" disabled>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-6">
                                                <div class="form-group mb-30" style="padding-right: 15px;">
                                                    <strong>Amount:</strong>
                                                    <input type="text" name="amount" value="{{ $paymentLists->amount }}" class="form-control" placeholder="Amount">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div align="center">

                                    <button type="submit" class="btn btn-success" onclick="return confirm('sure ?')">
                                        Add
                                    </button>
                                </div>

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
