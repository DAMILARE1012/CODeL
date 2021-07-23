@extends('layouts.master')
@section('content')
@include('layouts.userheader')
<main id="app-main" class="app-main">
  <div class="wrap">
    <section class="app-content">
        <div class="row">
        <!-- when given admission Start (Acceptance)-->
            @if ($user->admission_status ==1)

            <!-- logic for paying admission acceptance  -->
            
            <!-- before paying for acceptance (left side) start -->
            @if ($user->admission_accepted == 0)
            <div class="col-md-7">
                <div class="widget">
                    <header class="widget-header">
                        <h4 class="widget-title">Accept Admission</h4>
                    </header><!-- .widget-header -->
                    <hr class="widget-separator">
                    <br>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <a href="{{ route('user.acceptance.order') }}" class="btn btn-success">Pay Acceptance Fee</a>
                            <a href="{{ route('user.admissionRejected', ['id' => $user->id]) }}" class="btn btn-danger">Decline Admission</a>
                            <br>
                            <br>
                            <hr class="widget-separator">
                        </div><!-- END column -->
                        <br>
                        <br>
                    </div>
                    <div class="widget-body row" style="margin-left: 5px">
                        
                        <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="{{ route('user.accept.admission') }}">
                            @csrf

                            @error('signature')
                            <p class="alert alert-danger">{{ $message }}</p>
                            @enderror

                            <div  class="col-xs-11">
                                <div class="form-group mb-30">
                                    <strong>Signature:</strong>
                                    <input type="file" name="signature" class="form-control" id="profile-img" required disabled>
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
                                <div class="col-sm-12" align="center">
                                    <input type="submit" class="btn btn-success" value="Accept Admission" disabled>
                                    
                                </div><!-- END column -->
                            </div><!-- .form-group -->
                        </form>
                    </div>
                </div>
            </div>
            <!-- before paying for acceptance fees end  -->
            <!-- after paying for acceptance start (left side) -->
            @elseif($user->admission_accepted == 2)
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
                                <div class="col-sm-12" align="center">
                                    <input type="submit" class="btn btn-success" value="Accept Admission">
                                    
                                </div><!-- END column -->
                            </div><!-- .form-group -->
                        </form>
                    </div>
                </div>
            </div>
            <!-- after paying for acceptance end-->
            @elseif($user->admission_accepted == 3)
            <!-- After user decline admission (left side) -->

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
                                    <input type="file" name="signature" class="form-control" id="profile-img" required disabled>
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
                                <div class="col-sm-12" align="center">
                                    <input type="submit" class="btn btn-success" value="Accept Admission" disabled>
                                    
                                </div><!-- END column -->
                            </div><!-- .form-group -->
                        </form>
                    </div>
                </div>
            </div>

            
            @endif
            @else
            <!-- Fresh after registration (left side) -->
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
                                @if($user->count > 0)     
                                <a class="text-success">Registration Fee Paid</a>
                                @else             
                                    <a class="text-primary">Pay Registration Fee</a>
                                @endif 

                                
                                @if($user->count > 0)<span><i class="text-success fa fa-check-circle"></i></span>@endif 

                            </li>

                            <li class="list-group-item">2. 
                                @if($user->count > 1)     
                                <a class="text-success">O'level Results Submitted</a>
                                @else             
                                    <a class="text-primary">O'level Results</a>
                                @endif 
                                @if($user->count > 1)<span><i class="text-success fa fa-check-circle"></i></span>@endif 
                            </li>

                            <li class="list-group-item">3. 
                                @if($user->count > 2)     
                                <a class="text-success">Credencials Submitted</a>
                                @else             
                                    <a class="text-primary">Upload Scanned Files</a>
                                @endif 
                                @if($user->count > 2)<span><i class="text-success fa fa-check-circle"></i></span>@endif 
                            </li>
                    
                            <li class="list-group-item">4. <a class="text-primary">Wait For Verification</a></li>
                        </ul>

                        <div class="text-center">
                            @if($user->count == 0)
                            <a href="{{ route('user.application.order') }} " class="btn btn-primary">Begin Application</a>
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
            <!-- Fresh after registration (left side) Ends-->
            @endif
             <!-- Logic for Declining admission starts (right side) -->
            @if($user->admission_accepted == 3)
            <div class="col-md-5">
                <div class="widget">
                    <header class="widget-header">
                        <h4 class="widget-title">NOTICE!</h4>
                    </header><!-- .widget-header -->
                    <hr class="widget-separator">
                    <div class="widget-body row">

                        <ul class="list-group no-border">                   
                            <li class="list-group-item"><a class="text-primary">ADMISSION DECLINED.</b></li>
                        </ul>
                    </div><!-- .widget-body -->
                </div><!-- .widget -->
            </div>
            <!-- Logic for Declining admission ends (right side) -->
            <!-- before paying acceptance fees start (right side) -->
            @elseif ($user->admission_status ==1)
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
            </div>
            <!-- before paying acceptance fees end -->
            <!-- after paying acceptance begin (right side) -->
            @elseif ($user->admission_status ==2)
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
            </div>
              <!-- after paying acceptance ends -->
            <!-- when admission is declined, this is what de will see. start (right side) -->

            @elseif($user->count ==3)
            <div class="col-md-6">
                <div class="widget">
                    <header class="widget-header">
                        <h4 class="widget-title">NOTICE</h4>
                    </header><!-- .widget-header -->
                    <hr class="widget-separator">
                    <div class="widget-body row">

                        <ul class="list-group no-border">                   
                            <li class="list-group-item"><a class="text-primary">You have successfully registered for {{ $user->program }}. <br>Your credencals are presently being Verified. <br><br> Kindly check on this page for admission status. </a></li>
                        </ul>            
                    </div><!-- .widget-body -->
                </div><!-- .widget -->
            </div><!-- END column -->
            <!-- when admission declined ends -->

            <!-- fresh registation starts (right side)-->
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
            <!-- fresh registration ends -->
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