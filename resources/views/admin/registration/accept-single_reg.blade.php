@extends('layouts.master')
@section('content')
@include('layouts.adminheader')
<main id="app-main" class="app-main">
    <div class="wrap">
        <section class="app-content">
            <div class="row">
                <div class="col-md-12">
                    
                    <div class="widget">
                        <div class="nav-tabs-vertical clearfix">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="active text-uppercase" role="presentation"><a data-toggle="tab" href="#vt-example-1" aria-controls="vt-example-1" role="tab" aria-expanded="false">Basic Information</a></li>
                                <li class="text-uppercase" role="presentation"><a data-toggle="tab" href="#vt-example-2" aria-controls="vt-example-2" role="tab" aria-expanded="true">O'Level</a></li>
                                
                            </ul>
                            <div class="tab-content p-h-md p-r-md">
                                <div class="tab-pane active" id="vt-example-1" role="tabpanel">
                                    <h4 class="m-b-md">Basic Information</h4>
                                    <!-- <p class="lh-lg"> -->
                                        <div class="row">
                                            <div class="col-md-2 col-sm-2">
                                                <div class="avatar avatar-xl avatar-circle">
                                                    @if($credential)
                                                    <img src="{{ asset('images/credentials/passportz/'. $credential->passport) }}" alt="passport">
                                                    @else
                                                    <img src="{{ asset('images/dummy-passport.jpg') }}" alt="passport">
                                                    @endif
                                                </div><!-- .avatar -->

                                            </div>

                                            <div class="col-md-6 col-sm-6">
                                                <ul class="list-group no-border">
                                                    <li class="list-group-item"><b>Name:</b> {{ $user->lname }} {{ $user->mname }} {{ $user->fname }}  </li>
                                                    <li class="list-group-item"><b>Email:</b> {{ $user->email }} </li>
                                                    <li class="list-group-item"><b>Mobile Number:</b> {{ $user->phone }} </li>
                                                    <li class="list-group-item"><b>Date of Birth:</b> {{ $user->dob }} </li>
                                                    <li class="list-group-item"><b>Country:</b> {{ $user->country }} </li>
                                                    <li class="list-group-item"><b>State:</b> {{ $user->state }}</li>
                                                    <li class="list-group-item"><b>Session:</b> {{ $user->academic_session }} </li>
                                                    <li class="list-group-item"><b>Course:</b> {{ $user->program }} </li>
                                                    <li class="list-group-item"><b>Registration No.:</b> {{ $user->registration_id }} </li>
                                                    
                                                </ul>

                                                @if($user->admission_status == 1)
                                                    Admission Status: <span class="text-success">Admitted</span>
                                                @else
                                                    Admission Status: <span class="text-warning">pending</span>
                                                @endif

                                                <br>
                                                <br>
                                                
                                                @if($user->admission_status == 1)
                                                    <a href="{{ route('admin.decline.admission', ['id' => $user->id]) }}" class="btn btn-danger" onClick="return confirm('Are you sure you want to revoke this admission?')">Revoke Admission</a>
                                                @else
                                                    <a href="{{ route('admin.offer.admission', ['id' => $user->id]) }}" class="btn btn-primary" onClick="return confirm('Are you sure you want to offer this applicant admission?')">Award Admission</a>
                                                @endif
                                            </div>
                                        </div>
                                    <!-- </p> -->
                                </div>

                                <div class="tab-pane" id="vt-example-2" role="tabpanel">
                                    <h4 class="m-b-md">O'Level</h4>
                                    <p class="lh-lg">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6">
                                                @if($olevel)
                                                <div class="row">
                                                    <div class="col-sm-6 col-md-6">
                                                        <ul>
                                                            <li><b>Examination:</b> <span class="text-uppercase">{{ $olevel->exam }}</span></li>
                                                            <li><b>Examination Number:</b> <span class="text-uppercase">{{ $olevel->exam_number }}</span></li>
                                                            <li><b>Examination Date:</b> <span class="text-uppercase">{{ $olevel->exam_year }}</span></li>
                                                        </ul>
                                                    </div>
                                                    @if($olevel->exam2 != NULL)
                                                    <div class="col-sm-6 col-md-6">
                                                        <ul>
                                                            <li><b>Examination:</b> <span class="text-uppercase">{{ $olevel->exam2 }}</span></li>
                                                            <li><b>Examination Number:</b> <span class="text-uppercase">{{ $olevel->exam_number2 }}</span></li>
                                                            <li><b>Examination Date:</b> <span class="text-uppercase">{{ $olevel->exam_year2 }}</span></li>
                                                        </ul>
                                                    </div>
                                                    @endif
                                                </div>
                                                <hr>
                                                <div class="table-responsive">
                                                    <table class="table table-striped">
                                                        <thead>
                                                            <th>#</th>
                                                            <th>Subject</th>
                                                            <th>Grade</th>
                                                        </thead>
                                                        <tbody>
                                                            @php
                                                                $count = 1;
                                                                $grades = explode(',', $olevel->grades);
                                                                $subjects = explode(',', $olevel->subjects);
                                                            @endphp

                                                            @foreach($subjects as $index => $subject)
                                                            <tr>
                                                                <td>{{$count++}}</td>
                                                                <td>{{ $subject }}</td>
                                                                <td>{{ $grades[$index] }}</td>
                                                            </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>  
                                                </div>
                                                @else
                                                    <p class="alert alert-info">
                                                        Incomplete application. O'level result not submit by this applicant.
                                                    </p>
                                                @endif

                                                
                                            </div>
                                        </div>
                                    </p>
                                </div>

                                          
                            </div>
                        </div><!-- .nav-tabs-vertical -->
                    </div><!-- .widget -->
                </div><!-- END column -->
            </div>

            @if($user->credential)
            <div class="row">
              
                <div class="wrap">
                    <section class="app-content">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="widget">
                                    <header class="widget-header">
                                        <h4 class="widget-title text-primary">Scanned Files</h4>
                                    </header><!-- .widget-header -->
                                    <hr class="widget-separator">
                                    <div class="widget-body">
                                        <table class="table table-hover">
                                            <thead>
                                                <th>File</th>
                                                <th></th>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <b>OLevel 1</b>
                                                    </td>

                                                    <td>
                                                        <a href="{{ asset('/images/credentials/olevel/'.$user->credential->olevel1) }}" target="_blank">View File</a>
                                                    </td>
                                                </tr>

                                                @if(!$user->credential->olevel2 == NULL)
                                                <tr>
                                                    <td>
                                                        <b>Olevel 2</b>
                                                    </td>

                                                    <td>
                                                        <a href="{{ asset('/images/credentials/olevel/'.$user->credential->olevel2) }}" target="_blank">View File</a>
                                                    </td>
                                                </tr>
                                                @endif


                                                <tr>
                                                    <td>
                                                        <b>Birth Certificate</b>
                                                    </td>

                                                    <td>
                                                        <a href="{{ asset('/images/credentials/birth/'.$user->credential->birth_certificate) }}" target="_blank">View File</a>
                                                    </td>
                                                </tr>
                                                @if(!$user->credential->other == NULL)
                                                <tr>
                                                    <td>
                                                        <b>Other</b>
                                                    </td>

                                                    <td>
                                                        <a href="{{ asset('/images/credentials/others/'.$user->credential->other) }}" target="_blank">View File</a>
                                                    </td>
                                                </tr>
                                                @endif
                                            </tbody>
                                        </table>
                                    </div><!-- .widget-body -->
                                </div><!-- .widget -->
                            </div><!-- END column -->

                        </div><!-- .row -->
                    </section><!-- #dash-content -->
                </div><!-- .wrap -->

            </div>
        </section>
    </div>
</main>
@endif
@endsection
