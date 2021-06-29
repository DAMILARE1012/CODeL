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
                            @if (session('info'))
                                <div class="alert alert-success">
                                    {{ session('info') }}
                                </div>
                            @endif

                            <form method="POST" action="{{ route('admin.registration_fees.update, $paymentList->id') }}">
                                @csrf
                                @method('PUT')

                                <div class="form-group row">
                                    
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-6">
                                                <div class="form-group mb-30">
                                                    <strong>Fee Category:</strong>
                                                    <input type="text" name="name" value="{{ $paymentList->name }}" class="form-control" placeholder="Fee's Category">
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-6">
                                                <div class="form-group mb-30">
                                                    <strong>Amount:</strong>
                                                    <input type="text" name="name" value="{{ $paymentList->amount }}" class="form-control" placeholder="Amount">
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

        <section class="app-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="widget">
                        <header class="widget-header">
                            <h4 class="widget-title">Fees</h4>
                        </header><!-- .widget-header -->
                        <hr class="widget-separator">
                    </div>

                    <div class="widget-body">
                        <table class="table table-striped table-bordered">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">S/N</th>
                                  <th scope="col">Categories</th>
                                  <th scope="col">Amount</th>
                                  <th scope="col">Action</th>
                                </tr>
                              </thead>
                              <tbody>
                                  @foreach ($paymentLists as $paymentList)
                                  <tr>
                                    <td scope="row">{{ $paymentList->id }}</td>
                                    <td scope="row">{{ $paymentList->name }}</td>
                                    <td>{{ $paymentList->amount }}</td>
                                    <td><a href="#" class="btn btn-primary btn-sm active mr-4" role="button" aria-pressed="true" style="margin-right: 40px;">Edit</a><a href="#" class="btn btn-danger btn-sm active" role="button" aria-pressed="true">Delete</a></td>
                                  </tr>
                                  @endforeach                                
                              </tbody>

                        </table>
                    </div>
                        <!-- .widget-body -->
                </div><!-- .widget -->
   
            </div><!-- .row -->

        </section><!-- .app-content -->
    </div>
</main>
@endsection
