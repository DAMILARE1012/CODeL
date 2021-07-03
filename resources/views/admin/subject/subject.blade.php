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
                            <form method="POST" action="{{ route('admin.store.subject') }} ">
                                @csrf

                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label text-md-right">Subject Name</label>

                                    <div class="col-md-8">
                                        <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="subject" value="{{ old('subject') }}" placeholder="eg. Mathematics"  autocomplete="title" autofocus>

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
        </section>

        <section class="app-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="widget">
                        <header class="widget-header">
                            <h4 class="widget-title">O'Level Subjects</h4>
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
                            <tr class="font-weight-bold">
                                <th class="font-weight-bold">#</th>
                                <th>Subject</th>
                                <th>Actions</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @php
                             $count = 1;
                            @endphp
                            @foreach($subject as $row)
                            <tr>
                                <td>{{ $count++ }}</td>
                                <td>{{ $row->subject }}</td>
                                <td>
                                   <a href="{{ route('admin.delete.subject', ['id' => $row->id]) }}" class="btn btn-link text-danger" onclick="return confirm('sure?')">Delete</a>
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
