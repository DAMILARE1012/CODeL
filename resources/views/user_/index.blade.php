@extends('layouts.master')
@section('content')
@include('layouts.userheader')
<main id="app-main" class="app-main">
  <div class="wrap">
    <section class="app-content">
        <div class="row">
        <!-- when given admission Start -->
            @if ($user->admission_status ==1)
            <div class="col-md-7">
                <div class="widget">
                    <header class="widget-header">

                        <h4 class="widget-title">Accept Admission</h4>
                    </header><!-- .widget-header -->
                    <hr class="widget-separator">
                    <div class="widget-body row" style="margin-left: 5px">
                        @if(session('info'))
                        <div class="alert alert-success">
                            {{ session('info') }}
                        </div>
                        @endif

                        <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="{{ route('user.accept.admission') }}">
                            @csrf

                            @error('signature')
                            <p class="alert alert-danger">{{ $message }}</p>
                            @enderror

                            <div  class="col-xs-11">
                                <div class="form-group mb-30">
                                    <strong>Signature:</strong>
                                    <input type="file" name="signature" class="form-control" id="profile-img" required>
                                </div>
                            </div>
                            <div align="center">
                                <img src="{{asset('images/signature.png') }}" id="profile-img-tag" width="232" height="118" />
                            </div>
                            <div class="widget-body row">
                                <ul class="list-group no-border">                   
                                    <li class="list-group-item"><a class="text-primary"><b> Upload your digital signature and click Accept Admission button to Accept the admission. </b>  </a></li>
                                </ul>
                            </div><!-- .widget-body -->
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <input type="submit" class="btn btn-success" value="Accept Admission">
                                    <a href="" class="btn btn-danger">Decline Admission</a>
                                </div><!-- END column -->
                            </div><!-- .form-group -->
                        </form>
                    </div>
                </div>
            </div>
            <!-- when given admission Ends -->
            @else
            <!-- Fresh after registration -->
            <div class="col-md-6">
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

                        @if(!$user->count ==3)        
                        <p class="alert alert-info">Study the Guidelines Below to Complete your Application.</p>
                        @endif
                        <ul class="list-group no-border"> 
                            <li class="list-group-item">1. 
                                @if($user->count == 1)     
                                <a class="text-success">Registration Fee Paid</a>
                                @else             
                                    <a class="text-primary">Pay Registration Fee</a>
                                @endif 

                                
                                @if($user->count == 1)<span><i class="text-success fa fa-check-circle"></i></span>@endif 

                            </li>

                            <li class="list-group-item">2. 
                                @if($user->count == 2)     
                                <a class="text-success">O'level Results Submitted</a>
                                @else             
                                    <a class="text-primary">O'level Results</a>
                                @endif 
                                @if($user->count == 2)<span><i class="text-success fa fa-check-circle"></i></span>@endif 
                            </li>

                            <li class="list-group-item">3. 
                                @if($user->count == 3)     
                                <a class="text-success">Credencials Submitted</a>
                                @else             
                                    <a class="text-primary">Upload Scanned Files</a>
                                @endif 
                                @if($user->count == 3)<span><i class="text-success fa fa-check-circle"></i></span>@endif 
                            </li>
                    
                            <li class="list-group-item">4. <a class="text-primary">Wait For Verification</a></li>
                        </ul>

                        <div class="text-center">
                            @if($user->count == 0)
                            <a href="{{ route('user.registration.order') }} " class="btn btn-primary">Begin Application</a>
                            @elseif($user->count == 1)
                            <a href="{{ route('user.choose.subjects') }} " class="btn btn-primary">Continue Application</a>
                            @elseif($user->count == 2)
                            <a href="{{ route('user.upload.files') }} " class="btn btn-primary">Continue Registration</a>
                            @elseif($user->count == 3)
                            <h4>Wait for Verification </h4>
                            @endif
                        </div>
                    </div>
                    <!-- .widget-body -->
                </div><!-- .widget -->

            </div><!-- END column -->
            @endif
            @if ($user->admission_status ==1)
            <div class="col-md-5">
                <div class="widget">
                    <header class="widget-header">
                        <h4 class="widget-title">Congratulations!</h4>
                    </header><!-- .widget-header -->
                    <hr class="widget-separator">
                    <div class="widget-body row">

                        <ul class="list-group no-border">                   
                            <li class="list-group-item"><a class="text-primary">Congratulations you have been offered admission to pursue a <b>B.Tech degree programme in {{ $user->program }}.</b></li>
                        </ul>
                    </div><!-- .widget-body -->
                </div><!-- .widget -->
            </div><!-- END column -->

            @elseif($user->count ==3)
            <div class="col-md-6">
                <div class="widget">
                    <header class="widget-header">
                        <h4 class="widget-title">NOTICE</h4>
                    </header><!-- .widget-header -->
                    <hr class="widget-separator">
                    <div class="widget-body row">

                        <ul class="list-group no-border">                   
                            <li class="list-group-item"><a class="text-primary">You have successfully registered for {{ $user->program }}. Your credencals are presently being Verified. <br><br> Kindly check on this page for admission status. </a></li>
                        </ul>            
                    </div><!-- .widget-body -->
                </div><!-- .widget -->
            </div><!-- END column -->
            @else
            <div class="col-md-6">
                <div class="widget">
                    <header class="widget-header">
                        <h4 class="widget-title">Admission Requirements</h4>
                    </header><!-- .widget-header -->
                    <hr class="widget-separator">
                    <div class="widget-body row">
                        <h5 style="margin-left: 14px">UME ADMISSION</h5>

                        <ul class="list-group no-border">                   
                            <li class="list-group-item"><a class="text-primary">The requirements are 5 O'Level credits in English Language, Mathematics, Physics, Chemistry, and a science subject, in NECO, WAEC and/or NABTEB in not more than two(2) sittings.</a></li>
                        </ul>
                        
                       
                    </div><!-- .widget-body -->

                </div><!-- .widget -->
 
            </div><!-- END column -->
            @endif
        </div><!-- .row -->

        <div class="row">
    
            <div class="col-md-6">
                <div class="widget">
                    <header class="widget-header">
                        <h4 class="widget-title">CODeL Handbook</h4>
                    </header><!-- .widget-header -->
                    <hr class="widget-separator">
                    <div class="widget-body row text-left">
                        <!-- <p class="alert alert-info">Download the Fees structure for CODeL.</p> -->

                        <div class="text" style="margin-left: 10px">
                            <a href="{{ asset('files/handbook.pdf') }}" class="btn btn-primary" target="_blank">Download Handbook</a>
                        </div>
                    </div><!-- .widget-body -->
                </div><!-- .widget -->

            </div><!-- END column -->

            <div class="col-md-6">
                <div class="widget">
                    <header class="widget-header">
                        <h4 class="widget-title">CODeL Fee Structure</h4>
                    </header><!-- .widget-header -->
                    <hr class="widget-separator">
                    <div class="widget-body row text-center">
                        <!-- <p class="alert alert-info">Download the Fees structure for CODeL.</p> -->

                        <div style="margin-left: -328px">
                            <a href="{{ asset('files/codel_fees.pdf') }}" class="btn btn-primary" target="_blank">Download Fee</a>
                        </div>
                    </div><!-- .widget-body -->
                </div><!-- .widget -->

            </div><!-- END column -->

        </div><!-- .row -->
    </section><!-- .app-content -->
</div><!-- .wrap -->
</main>
@endsection