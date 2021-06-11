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
                            <h4 class="widget-title">O'Level Subjects</h4>
                        </header><!-- .widget-header -->
                        <hr class="widget-separator">
                        <div class="widget-body row">
                            @if(session('info'))
                            <div class="alert alert-success">
                            {{ session('info') }}
                            </div>
                            @endif
                            <h5 style="    margin-left: 10px;"><a href="{{ route('admin.add.subject') }} ">Add New Subject</a> </h5>
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
