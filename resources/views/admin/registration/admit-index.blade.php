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
                            <h4 class="widget-title">Select Session</h4>
                        </header><!-- .widget-header -->
                        <hr class="widget-separator">
                        <div class="widget-body">
                            <ul class="list-group">
                                @foreach($academicSession as $session)
                                    <a href="{{ route('admin.admit-registrationsbySessions',['session' => $session->id]) }}">
                                        <li class="list-group-item bg-dark"><b>{{ $session->session }}</b></li>
                                    </a>
                                    
                                @endforeach
                            </ul>
                        </div><!-- .widget-body -->
                    </div><!-- .widget -->
                </div><!-- END column -->
            </div><!-- .row -->
        </section><!-- .app-content -->
    </div>
</main>
@endsection
