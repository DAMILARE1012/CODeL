@extends('main')
@section('title')
     - Contact
  @endsection
  
  @section('content')
        <!-- Start main-content -->
  <div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider layer-overlay overlay-theme-colored-7" data-bg-img="images/bg/bg1.jpg">
      <div class="container pt-120 pb-60">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row"> 
            <div class="col-md-6">
              <h2 class="text-white font-36">Contact</h2>
              <ol class="breadcrumb text-left mt-10 white">
                <li><a href="#">Home</a></li>
                <li class="active">About</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Divider: Contact -->
    <section class="divider">
      <div class="container pt-50 pb-70">
        <div class="row pt-10">
          <div class="col-md-5">
            <h4 class="mt-0 mb-30 line-bottom">Find Our Location</h4>
            <!-- Google Map HTML Codes -->
            {{-- <div 
              data-address="121 King Street, Melbourne Victoria 3000 Australia"
              data-popupstring-id="#popupstring1"
              class="map-canvas autoload-map"
              data-mapstyle="style1"
              data-height="400"
              data-latlng="-37.817314,144.955431"
              data-title="sample title"
              data-zoom="12"
              data-marker="images/map-icon-blue.html">
            </div>
            <div class="map-popupstring hidden" id="popupstring1">
              <div class="text-center">
                <h3>CharityPress Office</h3>
                <p>121 King Street, Melbourne Victoria 3000 Australia</p>
              </div>
            </div>
          </div> --}}

          <!-- Google Map HTML Codes -->
          <div id="googleMap" style="width:100%;height:400px;"></div>

          <div class="map-popupstring hidden" id="popupstring1">
            <div class="text-center">
              <h3>Office</h3>
              <p>Federal University of Technology, Minna. Gidan Kwano Campus.</p>
            </div>
          </div>
          <!-- Google Map Javascript Codes -->
          <script src="http://maps.google.com/maps/api/js"></script>
          <script src="https://codel.futminna.edu.ng/front/js/google-map-init.js.pagespeed.jm.rSvjbxrjl9.js"></script>
          </div>

          <div class="col-md-7">
            <h4 class="mt-0 mb-30 line-bottom">Interested in discussing?</h4>
            <!-- Contact Form -->
            <form id="contact_form" name="contact_form" class="" action="http://thememascot.net/demo/personal/s/studypro/j/demo/includes/sendmail.php" method="post">

              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group mb-30">
                    <input id="form_name" name="form_name" class="form-control" type="text" placeholder="Enter Name" required="">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group mb-30">
                    <input id="form_email" name="form_email" class="form-control required email" type="email" placeholder="Enter Email">
                  </div>
                </div>
              </div>                
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group mb-30">
                    <input id="form_subject" name="form_subject" class="form-control required" type="text" placeholder="Enter Subject">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group mb-30">
                    <input id="form_phone" name="form_phone" class="form-control" type="text" placeholder="Enter Phone">
                  </div>
                </div>
              </div>

              <div class="form-group mb-30">
                <textarea id="form_message" name="form_message" class="form-control required" rows="7" placeholder="Enter Message"></textarea>
              </div>
              <div class="form-group">
                <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="" />
                <button type="submit" class="btn btn-flat btn-default btn-theme-colored mr-5" data-loading-text="Please wait...">Send your message</button>
                <button type="reset" class="btn btn-flat btn-theme-colored2 text-white">Reset</button>
              </div>
            </form>
          </div>
        </div>
        <div class="row mt-60">
          <div class="col-sm-12 col-md-4">
            <div class="contact-info text-center bg-silver-light border-1px pt-60 pb-60">
              <i class="fa fa-phone font-36 mb-10 text-theme-colored2"></i>
              <h4>Call Us</h4>
              <h6 class="text-gray">Phone: +234 803 308 8426</h6>
            </div>
          </div>
          <div class="col-sm-12 col-md-4">
            <div class="contact-info text-center bg-silver-light border-1px pt-60 pb-60">
              <i class="fa fa-map-marker font-36 mb-10 text-theme-colored2"></i>
              <h4>Address</h4>
              <h6 class="text-gray">CODeL, Federal University of Technology, Minna, Gidan Kwano Campus, Minna, Nigeria</h6>
            </div>
          </div>
          <div class="col-sm-12 col-md-4">
            <div class="contact-info text-center bg-silver-light border-1px pt-60 pb-60">
              <i class="fa fa-envelope font-36 mb-10 text-theme-colored2"></i>
              <h4>Email</h4>
              <h6 class="text-gray">codel@futminna.edu.ng</h6>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->
  @endsection

  
