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
                            <h4 class="widget-title">Fees</h4>
                        </header><!-- .widget-header -->
                        <hr class="widget-separator">
                    </div>

                    <div class="widget-body">
                        <table class="table table-striped table-bordered">
                            <thead class="thead-dark">
                                <tr>
                                  <th scope="col">Categories</th>
                                  <th scope="col">Amount</th>
                                  <th scope="col">Action</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <th scope="row">Registration Fees</th>
                                  <td>25,000.00</td>
                                  <td><a href="#">Edit</a></td>
                                </tr>
                                <tr>
                                    <th scope="row">Acceptance Fees</th>
                                    <td>25,000.00</td>
                                    <td><a href="#">Edit</a></td>
                                  </tr>
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
