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
                        <div class="widget-body row">
                            @if(session('info'))
                            <div class="alert alert-success">
                            {{ session('info') }}
                            </div>
                            @endif
                            <table class="table table-hover">
                                <thead>
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
                                        <td scope="row">#</td>
                                        <td scope="row">{{ $paymentList->name }}</td>
                                        <td>{{ $paymentList->amount }}</td>
                                        <td>
                                            <a href="{{ route('admin.registration_fees.edit', ['id' => $paymentList->id]) }} " class="btn btn-primary btn-sm active mr-4" role="button" aria-pressed="true" style="margin-right: 40px;">Edit</a>
                                        </td>
                                    </tr>
                                    @endforeach                                
                                </tbody>
                            </table>

                        </div>
                        <!-- .widget-body -->
                    </div><!-- .widget -->

                </div><!-- END column -->

   
            </div><!-- .row -->

        </section><!-- .app-content -->
        
    </div>
</main>
@endsection
