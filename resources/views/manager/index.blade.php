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
                            <h4 class="widget-title">Application Completion Guide</h4>
                        </header><!-- .widget-header -->
                        <hr class="widget-separator">
                        <div class="widget-body row">
                            @if(session('info'))
                            <div class="alert alert-success">
                            {{ session('info') }}
                            </div>
                            @endif
                            <p>You are logged in as Manager</p>
                        </div>
                        <!-- .widget-body -->
                    </div><!-- .widget -->

                </div><!-- END column -->

   
            </div><!-- .row -->

        </section><!-- .app-content -->
    </div>
</main>
@endsection
