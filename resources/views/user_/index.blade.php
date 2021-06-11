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
                    <li class="list-group-item">1.<a class="text-primary">O'level Results Submitted</a></li>
                    <li class="list-group-item">2.<a class="text-primary">Upload Scanned Files</a></li>
                    <li class="list-group-item">3. <a class="text-primary">Wait For Verification</a> </li>
                </ul>
                <div class="text-center">
                    @if($user->count == 0)
                    <a href="" class="btn btn-primary">Begin Application</a>
                    @elseif($user->count == 1)
                    <a href="" class="btn btn-primary">Continue Application</a>
                    @elseif($user->count == 2)
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
            <div class="widget-body row text-center">
                <!-- <p class="alert alert-info">Download the Fees structure for CODeL.</p> -->

                <div class="text-center">
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

                <div class="text-center">
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