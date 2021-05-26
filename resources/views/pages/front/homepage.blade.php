  @extends('main')
  @section('title')
       - About Me
    @endsection

<!-- Start main-content -->
@section('content')
  <div class="main-content">

    <!-- Section: home -->
    <section id="home" class="divider">
      <div class="container-fluid p-0">

        <!-- START REVOLUTION SLIDER 5.0.7 -->
        <div id="rev_slider_home_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="news-gallery34" style="margin:0px auto;background-color:#ffffff;padding:0px;margin-top:0px;margin-bottom:0px;">
          <!-- START REVOLUTION SLIDER 5.0.7 fullwidth mode -->
          <div id="rev_slider_home" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.0.7">
            <ul>
              <!-- SLIDE 1 -->
              <li data-index="rs-1" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="images/bg/bg12.jpg" data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off" data-title="Make an Impact">
                <!-- MAIN IMAGE -->
                <img src="{{ asset("images/bg/codel_bg2.jpg") }}" alt="" data-bgposition="top 40%" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                <!-- LAYERS -->
                <!-- LAYER NR. 1 -->
                <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme rs-parallaxlevel-0" 
                  id="slide-1-layer-1" 
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                  data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                  data-width="full"
                  data-height="full"
                  data-whitespace="normal"
                  data-transform_idle="o:1;"
                  data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="opacity:0;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                  data-start="1000" 
                  data-basealign="slide" 
                  data-responsive_offset="on" 
                  style="z-index: 5;background-color:rgba(0, 0, 0, 0.35);border-color:rgba(0, 0, 0, 1.00);"> 
                </div>
                <!-- LAYER NR. 2 -->
                <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" 
                  id="slide-1-layer-2" 
                  data-x="['left','left','left','left']" data-hoffset="['50','50','50','30']" 
                  data-y="['top','top','top','top']" data-voffset="['120','100','70','90']" 
                  data-fontsize="['56','46','40','36']"
                  data-lineheight="['70','60','50','45']"
                  data-fontweight="['800','700','700','700']"
                  data-width="['700','650','600','420']"
                  data-height="none"
                  data-whitespace="normal"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                  data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  style="z-index: 6; min-width: 600px; max-width: 600px; white-space: normal;">Take the <span class="text-theme-colored2">world's</span> best <span class="text-theme-colored2">Education</span> Site.
                </div>
                <!-- LAYER NR. 3 -->
                <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" 
                  id="slide-1-layer-3" 
                  data-x="['left','left','left','left']" data-hoffset="['50','50','50','30']" 
                  data-y="['top','top','top','top']" data-voffset="['280','220','180','180']" 
                  data-fontsize="['18','18','16','13']"
                  data-lineheight="['30','30','28','25']"
                  data-fontweight="['600','600','600','600']"
                  data-width="['700','650','600','420']"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                  data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  style="z-index: 7; white-space: nowrap;">We provides always our best services for our clients and  always<br> try to achieve our client's trust and satisfaction.
                </div>
                <!-- LAYER NR. 4 -->
                <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" 
                  id="slide-1-layer-4" 
                  data-x="['left','left','left','left']" data-hoffset="['53','53','53','30']" 
                  data-y="['top','top','top','top']" data-voffset="['360','290','260','260']" 
                  data-fontsize="['18','18','16','16']"
                  data-lineheight="['30','30','30','30']"
                  data-fontweight="['600','600','600','600']"
                  data-width="['700','650','600','420']"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                  data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  style="z-index: 7; white-space: nowrap;"><a href="#" class="btn btn-default btn-theme-colored2 btn-xl">Apply Now</a> <a href="#" class="btn btn-dark btn-theme-colored btn-xl">Read More</a>
                </div>
              </li>

              <!-- SLIDE 2 -->
              <li data-index="rs-2" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="images/bg/bg8.jpg" data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off" data-title="Make an Impact">
                <!-- MAIN IMAGE -->
                <img src="{{ asset("images/bg/codel_bg8.jpg") }}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"  class="rev-slidebg" data-no-retina>
                <!-- LAYERS -->
                <!-- LAYER NR. 1 -->
                <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme rs-parallaxlevel-0" 
                  id="slide-2-layer-1" 
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                  data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                  data-width="full"
                  data-height="full"
                  data-whitespace="normal"
                  data-transform_idle="o:1;"
                  data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="opacity:0;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                  data-start="1000" 
                  data-basealign="slide" 
                  data-responsive_offset="on" 
                  style="z-index: 5;background-color:rgba(0, 0, 0, 0.35);border-color:rgba(0, 0, 0, 1.00);"> 
                </div>
                <!-- LAYER NR. 2 -->
                <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" 
                  id="slide-2-layer-2" 
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                  data-y="['top','top','top','top']" data-voffset="['120','100','70','90']" 
                  data-fontsize="['28','24','24','24']"
                  data-lineheight="['33','30','30','30']"
                  data-fontweight="['600','600','600','600']"
                  data-textalign="['center','center','center','center']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                  data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  style="z-index: 7; white-space: nowrap;">Online Learning
                </div>
                <!-- LAYER NR. 3 -->
                <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" 
                  id="slide-2-layer-3" 
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                  data-y="['top','top','top','top']" data-voffset="['165','135','105','130']" 
                  data-fontsize="['56','46','40','36']"
                  data-lineheight="['70','60','50','45']"
                  data-fontweight="['800','700','700','700']"
                  data-textalign="['center','center','center','center']"
                  data-width="['700','650','600','420']"
                  data-height="none"
                  data-whitespace="normal"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                  data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  style="z-index: 6; min-width: 600px; max-width: 600px; white-space: normal;">Grow Up<span class="text-theme-colored2"> Future</span> Choose <span class="text-theme-colored2">Right</span> Solution.
                </div>
                <!-- LAYER NR. 4 -->
                <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" 
                  id="slide-2-layer-4" 
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                  data-y="['top','top','top','top']" data-voffset="['320','260','220','220']" 
                  data-fontsize="['18','18','16','13']"
                  data-lineheight="['30','30','28','25']"
                  data-fontweight="['600','600','600','600']"
                  data-textalign="['center','center','center','center']"
                  data-width="['700','650','600','420']"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                  data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  style="z-index: 7; white-space: nowrap;">We provides always our best services for our clients and  always<br> try to achieve our client's trust and satisfaction.
                </div>
                <!-- LAYER NR. 5 -->
                <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" 
                  id="slide-2-layer-5" 
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                  data-y="['top','top','top','top']" data-voffset="['400','340','300','300']" 
                  data-fontsize="['18','18','16','16']"
                  data-lineheight="['30','30','30','30']"
                  data-fontweight="['600','600','600','600']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                  data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  style="z-index: 7; white-space: nowrap;"><a href="#" class="btn btn-dark btn-theme-colored2 btn-xl">Apply Now</a>
                </div>
              </li>

              <!-- SLIDE 3 -->
              <li data-index="rs-3" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="images/bg/bg2.jpg" data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off" data-title="Make an Impact">
                <!-- MAIN IMAGE -->
                <img src="{{ asset("images/bg/codel_bg3.jpg") }}" alt="" data-bgposition="top 30%" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                <!-- LAYERS -->
                <!-- LAYER NR. 1 -->
                <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme rs-parallaxlevel-0" 
                  id="slide-3-layer-1" 
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                  data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                  data-width="full"
                  data-height="full"
                  data-whitespace="normal"
                  data-transform_idle="o:1;"
                  data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="opacity:0;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                  data-start="1000" 
                  data-basealign="slide" 
                  data-responsive_offset="on" 
                  style="z-index: 5;background-color:rgba(0, 0, 0, 0.25);border-color:rgba(0, 0, 0, 1.00);"> 
                </div>
                <!-- LAYER NR. 2 -->
                <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" 
                  id="slide-3-layer-2" 
                  data-x="['center','center','center','center']" data-hoffset="['310','200','100','0']" 
                  data-y="['top','top','top','top']" data-voffset="['120','100','70','90']" 
                  data-fontsize="['56','46','40','36']"
                  data-lineheight="['70','60','50','45']"
                  data-fontweight="['800','700','700','700']"
                  data-width="['700','650','500','420']"
                  data-height="none"
                  data-whitespace="normal"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                  data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  style="z-index: 6; min-width: 600px; max-width: 600px; white-space: normal;">We help you <span class="text-theme-colored2">Education</span> to grow and expand
                </div>
                <!-- LAYER NR. 3 -->
                <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" 
                  id="slide-3-layer-3" 
                  data-x="['center','center','center','center']" data-hoffset="['310','200','100','0']" 
                  data-y="['top','top','top','top']" data-voffset="['280','220','180','180']" 
                  data-fontsize="['18','18','16','13']"
                  data-lineheight="['30','30','28','25']"
                  data-fontweight="['600','600','600','600']"
                  data-width="['700','650','500','420']"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                  data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  style="z-index: 7; white-space: nowrap;">We provides always our best services for our clients and  always<br> try to achieve our client's trust and satisfaction.
                </div>
                <!-- LAYER NR. 3 -->
                <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" 
                  id="slide-3-layer-4" 
                  data-x="['center','center','center','center']" data-hoffset="['310','200','100','0']" 
                  data-y="['top','top','top','top']" data-voffset="['360','290','260','260']" 
                  data-fontsize="['18','18','16','16']"
                  data-lineheight="['30','30','30','30']"
                  data-fontweight="['600','600','600','600']"
                  data-width="['700','650','500','420']"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                  data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  style="z-index: 7; white-space: nowrap;"><a href="#" class="btn btn-dark btn-theme-colored2 btn-xl">Read More</a>
                </div>
                <!-- LAYER NR. 4 -->
                <div class="tp-caption rs-parallaxlevel-0" 
                  id="slide-3-layer-5" 
                  data-x="['center','center','center','center']" data-hoffset="['310','33','0','0']" 
                  data-y="['top','top','top','top']" data-voffset="['360','290','260','260']" 
                  data-width="['700','650','600','420']"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                  data-mask_in="x:0px;y:0px;" 
                  data-mask_out="x:0;y:0;" 
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  data-responsive="off"
                  style="z-index: 8; white-space: nowrap;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;">
                </div>
              </li>
            </ul>
            <div class="tp-bannertimer tp-bottom" style="height: 5px; background-color: rgba(166, 216, 236, 1.00);"></div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: home-boxed -->
    <section>
      <div class="container pb-0">
        <div class="section-content">
          <div class="row"  data-margin-top="-150px">
            <div class="col-md-4">
              <div class="icon-box iconbox-border border-theme-colored2 bg-theme-colored text-center p-40 mb-sm-50">
                <a class="icon icon-lg icon-top bg-theme-colored2 icon-rounded icon-border-effect effect-rounded" href="#">
                  <i class="fa fa-book text-white"></i>
                </a>
                <h3 class="icon-box-title mt-50 text-white">Online Course</h3>
                <p class="text-white mb-20">Study for Bachelors Degree in Computer Science from the Prestigeous Federal University of Technology, Minna, Nigeria</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="icon-box text-center p-40 mb-sm-50 border-2px border-theme-colored2" data-bg-img="{{ asset("images/about/a1.jpg") }}">
                <div>
                <span class="typed-text-carousel font-20 text-white" data-speed="50" data-back_delay="600" data-loop="true">
                <span class=""><b>Application Ongoing</b></span>
                <span class="">Admission for 2021/2022 Academic Session</span>
                </span>
                <h2 class="font-24 text-white">B.Tech Computer Science</h2>
                <a href="#" class="btn btn-default text-theme-colored mt-5 mb-10">Apply Now</a>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="icon-box iconbox-border border-theme-colored2 bg-theme-colored text-center p-40 mb-sm-50">
                <a class="icon icon-lg icon-top bg-theme-colored2 icon-rounded icon-border-effect effect-rounded" href="#">
                  <i class="fa fa-user text-white"></i>
                </a>
                <h3 class="icon-box-title mt-50 text-white">Access ULearn</h3>
                <p class="text-white mb-20">CODeL Ulearn, Your one stop for all learning activities during the course of your programme.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: about -->
    <section class="">
      <div class="container pt-sm-0 pb-0">
        <div class="row">
          <div class="col-md-7">
            <h3 class="text-theme-colored mt-0 mt-sm-30 mb-0">Welcome To</h3>
            <h2 class="text-theme-colored2 mt-0">Centre for Open Distance and e-Learning, FUTMinna</h2>

              <div class="event media mt-20 mb-10 no-bg no-border">
                <div class="event-date media-left pull-left flip">
                  <img src="{{ asset("images/about/s1.jpg") }}" class="img-circle img-thumbnail mt-5" alt="">
                </div>
                <div class="media-body pl-10">
                  <div class="event-content pull-left flip">
                    <h3 class="event-title media-heading mt-15"><a href="#">Our Mission</a></h3>
                    <p>The centre is committed to the delivery of quality distance learning through dynamic and pragmatic training, research and entrepreneuary services, driven by Information and Communication Technology.</p>
                  </div>
                </div>
              </div>

              <div class="event media mt-20 mb-10 no-bg no-border">
                <div class="event-date media-left pull-left flip">
                  <img src="{{ asset("images/about/s3.jpg") }}" class="img-circle img-thumbnail mt-5" alt="">
                </div>
                <div class="media-body pl-10">
                  <div class="event-content pull-left flip">
                    <h3 class="event-title media-heading mt-15"><a href="#">Our Vision</a></h3>
                    <p>To be a global Centre of excellence in e-learning.</p>
                  </div>
                </div>
              </div>
          </div>
          <div class="col-md-5">
            
              <div class="col-sm-12">
               <div class="p-30 mt-0 bg-theme-colored">
                <h3 class="title-pattern mt-0"><span class="text-white">Request <span class="text-theme-color-2">Information</span></span></h3>
                <!-- Appilication Form Start-->
                <form id="reservation_form" name="reservation_form" class="reservation-form mt-20" method="post" action="http://thememascot.net/demo/personal/s/studypro/j/demo/includes/reservation.php">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group mb-20">
                        <input placeholder="Enter Name" type="text" id="reservation_name" name="reservation_name" required="" class="form-control">
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="form-group mb-20">
                        <input placeholder="Email" type="text" id="reservation_email" name="reservation_email" class="form-control" required="">
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="form-group mb-20">
                        <div class="styled-select">
                          <select id="person_select" name="person_select" class="form-control" required="">
                            <option value="">Choose Subject</option>
                            <option value="1 Person">Software Engineering</option>
                            <option value="2 Person">Computer Science engineering</option>
                            <option value="3 Person">Accounting Technologies</option>
                            <option value="Family Pack">BACHELOR`S DEGREE</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="form-group">
                        <textarea placeholder="Enter Message" rows="3" class="form-control required" name="form_message" id="form_message" aria-required="true"></textarea>
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="form-group mb-0 mt-10">
                        <input name="form_botcheck" class="form-control" type="hidden" value="">
                        <button type="submit" class="btn btn-colored btn-theme-colored2 text-white btn-lg btn-block" data-loading-text="Please wait...">Submit Request</button>
                      </div>
                    </div>
                  </div>
                </form>
                <!-- Application Form End-->
                </div>
              </div>              
          </div>
        </div>
      </div>
    </section>


    <!-- Section: Courses -->
    <section id="courses" class="bg-silver-light">
      <div class="container pb-40">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-12">
              <h2 class="text-uppercase line-bottom-double-line-centered mt-0">Available <span class="text-theme-colored2">Programmes</span></h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem autem voluptatem obcaecati! <br>ipsum dolor sit Rem autem voluptatem obcaecati</p>
            </div>
          </div>
        </div>
        <div class="row mtli-row-clearfix">
          <div class="owl-carousel-3col">
            
            <div class="item">
              <div class="course-single-item style2 text-center mb-40">
                <div class="course-thumb">
                  <img class="img-fullwidth" alt="" src="{{ asset("images/course/sm2.jpg") }}">
                  <div class="price-tag">Free</div>
                </div>
                <div class="course-details bg-white border-1px clearfix p-15 pt-15">
                  <div class="course-top-part">
                    <a href="page-course-details.html"><h4 class="line-bottom-centered mt-20">Computer Science</h4></a>
                    <ul class="list-inline">
                      <li class="review-stars text-theme-colored2">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                      </li>
                    </ul>
                  </div>
                  <div class="author-thumb">
                    <img src="{{ asset("images/course/xs2.jpg") }}" alt="" class="img-circle img-thumbnail">
                  </div>
                  <p class="course-description mt-5">Lorem ipsum dolor sit amet, consec teturadipsi cing elit. Nobis commodi esse aliquam eligend repreh</p>
                </div>
                <div class="course-meta bg-theme-colored">
                  <ul class="list-inline text-white">
                    <li><i class="fa fa-calendar text-theme-colored2 mr-5"></i>3 hours</li>
                    <li><i class="fa fa-book text-theme-colored2 mr-5"></i>18 Lessons</li>
                    <li><i class="fa fa-clock-o text-theme-colored2 mr-5"></i>34 Seats</li>
                  </ul>
                </div>
              </div>
            </div>
  
          </div>
        </div>
      </div>
    </section>

    <!-- Section: events -->
    <section id="event" class="bg-silver-light">
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="col-md-6">
              <h2 class="line-bottom mt-0"><i class="fa fa-calendar mr-10"></i>Upcoming <span class="text-theme-colored2">Events</span></h2>
              <div class="event media sm-maxwidth400 border-bottom mt-5 mb-0 pt-10 pb-15">
                <div class="row">
                  <div class="col-xs-2 col-md-3 pr-0">
                    <div class="event-date text-center bg-theme-colored border-1px p-0 pt-10 pb-10 sm-custom-style">
                      <ul>
                        <li class="font-28 text-white font-weight-700">28</li>
                        <li class="font-18 text-white text-center text-uppercase">Feb</li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-xs-9 pr-10 pl-10">
                    <div class="event-content mt-0 p-5 pb-0 pt-0">
                      <h4 class="media-heading font-weight-600"><a href="#">Admission Batch 1</a></h4>
                      <p class="mb-0">psum dolor amet consectetur elitQuas evenie tnemo dicta Ullam namdolor sit amet adipisic evenietneo evenie </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="event media sm-maxwidth400 border-bottom mt-5 mb-0 pt-10 pb-15">
                <div class="row">
                  <div class="col-xs-2 col-md-3 pr-0">
                    <div class="event-date text-center bg-theme-colored2 border-1px p-0 pt-10 pb-10 sm-custom-style">
                      <ul>
                        <li class="font-28 text-white font-weight-700">26</li>
                        <li class="font-18 text-white text-center text-uppercase">OCT</li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-xs-9 pr-10 pl-10">
                    <div class="event-content mt-0 p-5 pb-0 pt-0">
                      <h4 class="media-heading font-weight-600"><a href="#">Admission Batch 2</a></h4>
                      <p class="mb-0">psum dolor amet consectetur elitQuas evenie tnemo dicta Ullam namdolor sit amet adipisic evenietneo evenie </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="event media sm-maxwidth400 mt-5 mb-0 pt-10 pb-15">
                <div class="row">
                  <div class="col-xs-2 col-md-3 pr-0">
                    <div class="event-date text-center bg-theme-colored border-1px p-0 pt-10 pb-10 sm-custom-style">
                      <ul>
                        <li class="font-28 text-white font-weight-700">12</li>
                        <li class="font-18 text-white text-center text-uppercase">DEC</li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-xs-9 pr-10 pl-10">
                    <div class="event-content mt-0 p-5 pb-0 pt-0">
                      <h4 class="media-heading font-weight-600"><a href="#">Admission Batch 3</a></h4>
                      <p class="mb-0">psum dolor amet consectetur elitQuas evenie tnemo dicta Ullam namdolor sit amet adipisic evenietneo evenie </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <h2 class="line-bottom mt-0">University <span class="text-theme-colored2">Video</span></h2>
              <div class="row">
                <div class="col-md-12">
                  <div class="box-hover-effect play-button">
                    <div class="effect-wrapper">
                      <div class="thumb">
                        <img class="img-fullwidth" src="{{ asset("images/about/5.jpg") }}" alt="project">
                      </div>
                      <div class="overlay-shade bg-theme-colored"></div>
                      <div class="video-button"></div>
                      <a class="hover-link" data-lightbox-gallery="youtube-video" href="https://www.youtube.com/watch?v=F3QpgXBtDeo" title="Youtube Video">Youtube Video</a>
                    </div>
                  </div>             
                </div>
              </div>
            </div>
          </div>
          <div class="row mt-20">
            <div class="col-md-4">
              <div class="icon-box bg-white left media border-1px border-theme-colored2 bg-hover-theme-colored mb-30 p-30 pb-20"> <a class="media-left pull-left flip" href="#"><i class="fa fa-book text-theme-colored2"></i></a>
                <div class="media-body">
                  <h4 class="media-heading heading">Popular Courses</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum consectetur sit ullam </p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="icon-box bg-white left media border-1px border-theme-colored2 bg-hover-theme-colored mb-30 p-30 pb-20"> <a class="media-left pull-left flip" href="#"><i class="fa fa-graduation-cap text-theme-colored2"></i></a>
                <div class="media-body">
                  <h4 class="media-heading heading">Best Teachers</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum consectetur sit ullam </p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="icon-box bg-white left media border-1px border-theme-colored2 bg-hover-theme-colored mb-30 p-30 pb-20"> <a class="media-left pull-left flip" href="#"><i class="fa fa-university text-theme-colored2"></i></a>
                <div class="media-body">
                  <h4 class="media-heading heading">Certification</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum consectetur sit ullam </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection
  <!-- end main-content -->
