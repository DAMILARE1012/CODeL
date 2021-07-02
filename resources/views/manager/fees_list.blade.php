@extends('layouts.master')
@section('content')
@include('layouts.managerheader')
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
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Amount</th>
                                </tr>
                              </thead>
                              <tbody>
                                  @foreach ($fees_list as $fees)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $fees->name }} </td>
                                        <td>{{ $fees->amount }}</td>
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
