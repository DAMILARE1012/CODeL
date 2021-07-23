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
                            <h4 class="widget-title">Declined {{$reg_section->academic_session}} Students</h4>
                            <table></table>
                        </header><!-- .widget-header -->
                        <hr class="widget-separator">

                    <div class="widget-body">
                        <div class="table-responsive">
                        <table id="default-datatable" data-plugin="DataTable" class="table table-striped" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Course</th>
                                    <th>Email</th>
                                    <th>Country</th>
                                    <th>State</th>
                                    <th>Registration Date</th>
                                    <th>Registration Status</th>
                                </tr>
                              </thead>
                              <tbody>
                                  @foreach ($registrations as $registration)
                                     <tr>
                                <td><a href="{{ route('admin.decline-single.registration', ['id' => $registration->id]) }}">{{ $registration->fname }} {{ $registration->mname }} {{ $registration->lname }}</a></td>
                                <td>{{ $registration->program }}</td>
                                <td class="text-lowercase">{{ $registration->email }}</td>
                                <td>{{ $registration->country }}</td>
                                <td>{{ $registration->state }}</td>
                                <td>{{ $registration->created_at }}</td>

                                <td>
                                    @if($registration->count == 3)
                                        <span class="text-success">Completed</span>
                                    @else
                                        <span class="text-danger">Ungoing</span>
                                    @endif
                                </td>

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


