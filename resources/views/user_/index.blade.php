@extends('layouts.master')
@section('content')
@include('layouts.userheader')
<main id="app-main" class="app-main">
  <div class="wrap">
  <section class="app-content">
                <div class="row">
    
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

                        
                <p class="alert alert-info">Follow the guidelines below to complete your application.</p>
                <ul class="list-group no-border"> 

                        <li class="list-group-item">1. 
                            @if($registration_fee)
                            @if($registration_fee->status == 1)     
                                <a class="text-success">Registration Fee</a>
                            @else             
                                    Pay Registration Fee
                            @endif 

                            @else
                                    Pay Registration Fee
                            @endif
                            @if($acceptance_fee)
                            @if($registration_fee)<span><i class="text-success fa fa-check-circle"></i></span>@endif 
                            @endif
                        </li>

                        <li class="list-group-item">2. 
                            @if($olevel)     
                                <a class="text-success">O'level Results Submitted</a>
                            @else             
                                    O'level Results
                            @endif 
                            @if($olevel)<span><i class="text-success fa fa-check-circle"></i></span>@endif 
                        </li>

                         <li class="list-group-item">3. 
                            @if($credential)     
                                <a class="text-success">Credencials Submitted</a>
                            @else             
                                    Upload Scanned Files
                            @endif 
                            @if($credential)<span><i class="text-success fa fa-check-circle"></i></span>@endif 
                        </li>
                    
                        <li class="list-group-item">4. <a class="text-primary">Wait For Verification</a></li>
                </ul>

                <div class="text-center">
                    @if($registration_fee)
                    @if($registration_fee->status == 1)   
                    <a href="{{ route('user.choose.subjects') }} " class="btn btn-primary">Continue Application</a>
                    @else
                    <a href="{{ route('user.registration-fee') }} " class="btn btn-primary">Begin Application</a>
                    @endif
                    @endif
                    @if($user->count == 2)
                    <a href="{{ route('user.upload.files') }} " class="btn btn-primary">Continue Registration</a>
                    @elseif($user->count == 3)
                    <h4>Wait for Verification </h4>
                    @endif
                </div>
            </div>
            <!-- .widget-body -->
        </div><!-- .widget -->

    </div><!-- END column -->

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

                <div class="text-left">
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

                <div class="text-left">
                    <a href="{{ asset('files/codel_fees.pdf') }}" class="btn btn-primary" target="_blank">Download Fee</a>
                </div>
            </div><!-- .widget-body -->
        </div><!-- .widget -->

    </div><!-- END column -->

</div><!-- .row -->
      </section><!-- .app-content -->
</div><!-- .wrap -->
  <!-- APP FOOTER -->
  <!-- <div class="wrap p-t-0">
    <footer class="app-footer">
      <div class="clearfix">
        <ul class="footer-menu pull-right">
          <li><a href="javascript:void(0)">Careers</a></li>
          <li><a href="javascript:void(0)">Privacy Policy</a></li>
          <li><a href="javascript:void(0)">Feedback <i class="fa fa-angle-up m-l-md"></i></a></li>
        </ul>
        <div class="copyright pull-left">Copyright RaThemes 2021 &copy;</div>
      </div>
    </footer>
  </div> -->
  <!-- /#app-footer -->
</main>
@endsection