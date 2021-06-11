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
                            <h4 class="widget-title">Add Subject</h4>
                        </header><!-- .widget-header -->
                        <hr class="widget-separator">
                        <div class="widget-body row">
                            @if(session('info'))
                            <div class="alert alert-success">
                            {{ session('info') }}
                            </div>
                            @endif
                            
                            <form method="POST" action="{{ route('admin.store.subject') }} ">
                                @csrf

                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label text-md-right">Subject Name</label>

                                    <div class="col-md-8">
                                        <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="subject" value="{{ old('subject') }}"  autocomplete="title" autofocus>

                                            @error('title')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                </div>
                                <div align="center">
                      
                                    <button type="submit" class="btn btn-success" onclick="return confirm('sure?')">
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
