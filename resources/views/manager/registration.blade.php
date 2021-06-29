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
                            <h4 class="widget-title">Select Session</h4>
                        </header><!-- .widget-header -->
                        <hr class="widget-separator">
                        <div class="widget-body">
                            <ul class="list-group">
                                @foreach($academicSession as $session)
                                    <a href="{{ url('registrations-by-sessions/{session}', ['session'=>$session->id]) }}">
                                        <li class="list-group-item bg-dark"><b>{{ $session->session }}</b></li>
                                    </a>
                                    {{-- {{ route('registrationsbySessions', ['session' => $session->id]) }} --}}
                                    
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
