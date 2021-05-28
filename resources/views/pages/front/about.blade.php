@extends('layouts.front')
@section('title')
     - About CODeL
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
              <h2 class="text-white font-36">About</h2>
              <ol class="breadcrumb text-left mt-10 white">
                <li><a href="#">Home</a></li>
                <li class="active">About Us</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: about -->
    <section class="">
      <div class="container pb-0">
        <div class="row">
          <div class="col-md-5">
            <h3 class="text-theme-colored mt-0 mt-sm-30 mb-0">Welcome To</h3>
            <h3 class="text-theme-colored2 mt-0">Centre for Open Distance and e-Learning, FUTMinna</h3>

              <div class="event media mt-20 mb-10 no-bg no-border">
                <div class="event-date media-left pull-left flip">
                  <img src="images/about/s1.jpg" class="img-circle img-thumbnail mt-5" alt="">
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
                  <img src="images/about/s3.jpg" class="img-circle img-thumbnail mt-5" alt="">
                </div>
                <div class="media-body pl-10">
                  <div class="event-content pull-left flip">
                    <h3 class="event-title media-heading mt-15"><a href="#">Our Vision</a></h3>
                    <p>To be a global Centre of excellence in e-learning.</p>
                  </div>
                </div>
              </div>
          </div>
          <div class="col-md-7">
            <h4 class="text-uppercase line-bottom-double-line-centered mt-0 text-center">Our <span class="text-theme-colored2">DIRECTOR'S WELCOME MESSAGE</span></h4>
            <p style="font-size:16px; text-justify">
              Welcome to the Centre for Open Distance e-Learning, Federal University of Technology, Minna, Niger State, Nigeria.
              <br>
              The centre is committed to the delivery of quality distance learning through dynamic and pragmatic training, research and entrepreneuary services, driven by Information and Communication Technology.
              <br>
              The Centre for Open Distance and e-Learning (CODeL) was established in 2011 as a synergy among the major stakeholders in order to achieve the mission and vision of the University's distance learning programmes.
              <br>
              The Centre serves as the hub for the University's distance learning programmes. The Centre for Open Distance and e-Learning is been managed by a Director who is directly responsible to the University's Vice Chancellor.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Divider: Funfact -->
    <section class="divider parallax layer-overlay overlay-theme-colored-2" data-bg-img="images/bg/bg5.jpg" data-parallax-ratio="0.7">
      <div class="container">
        <div class="section-content text-center">
          <div class="row">
            <div class="col-md-12">
              <h2 class="mt-0 mb-50 text-white">We are always ahead <br> Professional Education for Your Future.</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6  mb-md-50">
            <div class="funfact text-left">
              <ul style="list-style-type: disc;">
                <li>Promote, plan, direct, and coordinate the provision of distance learning.</li>
                <li>Liaise with the Departments, Centres and the Postgraduate School in the development of appropriate programmes</li>
                <li>Facilitate the recruitment and training of full-time and part-time staff required for course development, production and implementation</li>
                <li>Manage and oversee the development and delivery of distance education through the study centres which are operational centres for students' registration, advisement, administration of residential session and other forms of face-to face contact</li>
                <li>Facilitate the distribution of study materials and administer marking assignments to ensure two-way communication between students and their tutors</li>
                <li>Maintain an accurate and comprehensive record system of systems, material production and records of study centres</li>
                <li>Administer examinations and process students' results in conjunction with relevant departments, faculties, and the Postgraduate School</li>
              </ul>
            </div>
          </div>
          <div class="col-md-6  mb-md-50">
            <div class="funfact text-left">
              <ul style="list-style-type: disc;">
                <li>Write handbook for students, course writers, tutors, and study centre coordinators.</li>
                <li>Liaise with the University library in the provision of library services at the study centres.</li>
                <li>Collaborate with other institutions to provide laboratory facilities and equipment for distance learners</li>
                <li>Provide accountability reports and statistics on enrolment, finances, retention, graduation, etc., on the operation of the distance learning programmes.</li>
                <li>Where appropriate schedule on-campus orientation for distance learners and part-time tutors.</li>
                <li>Perform programme review every three years to keep abreast of global developments and to improve programme quality, effectiveness and efficiency.</li>
                <li>Administer programmes for and on behalf of its partner Institutions.</li>
              </ul>
            </div>
          </div>
      </div>
    </section>

    <!-- Section: team -->
    <section id="team">
      <div class="container">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
              <h2 class="text-uppercase line-bottom-double-line-centered mt-0">The  <span class="text-theme-colored2">Management</span></h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem autem voluptatem obcaecati! <br>ipsum dolor sit Rem autem voluptatem obcaecati</p>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row mtli-row-clearfix">
            <div class="owl-carousel-4col">
              <div class="item">
                <div class="team-members maxwidth400">
                  <div class="team-thumb">
                    <img class="img-fullwidth" alt="" src="images/team/sm-1.jpg">
                  </div>
                  <div class="bg-lighter border-1px text-center p-10 pt-20 pb-10">
                    <h3 class="mt-0"><a class="text-theme-colored2" href="page-teachers-details.html">Musa Aibinu (Ph.D.)</a></h3>
                    <h5 class="text-theme-color">Centre Director</h5>
                  </div>
                  <div class="bg-theme-colored text-center pt-5">
                    <ul class="styled-icons">
                      <li><a href="#"><i class="fa fa-facebook text-white"></i></a></li>
                      <li><a href="#"><i class="fa fa-twitter text-white"></i></a></li>
                      <li><a href="#"><i class="fa fa-instagram text-white"></i></a></li>
                      <li><a href="#"><i class="fa fa-skype text-white"></i></a></li>
                    </ul>                  
                  </div>
                </div>              
              </div>
              <div class="item">
                <div class="team-members maxwidth400">
                  <div class="team-thumb">
                    <img class="img-fullwidth" alt="" src="images/team/sm-2.jpg">
                  </div>
                  <div class="bg-lighter border-1px text-center p-10 pt-20 pb-10">
                    <h3 class="mt-0"><a class="text-theme-colored2" href="page-teachers-details.html"> Baba Ben Legbo</a></h3>
                    <h5 class="text-theme-color">Centre Secretary</h5>
                  </div>
                  <div class="bg-theme-colored text-center pt-5">
                    <ul class="styled-icons">
                      <li><a href="#"><i class="fa fa-facebook text-white"></i></a></li>
                      <li><a href="#"><i class="fa fa-twitter text-white"></i></a></li>
                      <li><a href="#"><i class="fa fa-instagram text-white"></i></a></li>
                      <li><a href="#"><i class="fa fa-skype text-white"></i></a></li>
                    </ul>                  
                  </div>
                </div>              
              </div>
              <div class="item">
                <div class="team-members maxwidth400">
                  <div class="team-thumb">
                    <img class="img-fullwidth" alt="" src="images/team/sm-3.jpg">
                  </div>
                  <div class="bg-lighter border-1px text-center p-10 pt-20 pb-10">
                    <h3 class="mt-0"><a class="text-theme-colored2" href="page-teachers-details.html"> Isiaka Gambari (Ph.D.)</a></h3>
                    <h5 class="text-theme-color">Deputy Director (Admin.)</h5>
                  </div>
                  <div class="bg-theme-colored text-center pt-5">
                    <ul class="styled-icons">
                      <li><a href="#"><i class="fa fa-facebook text-white"></i></a></li>
                      <li><a href="#"><i class="fa fa-twitter text-white"></i></a></li>
                      <li><a href="#"><i class="fa fa-instagram text-white"></i></a></li>
                      <li><a href="#"><i class="fa fa-skype text-white"></i></a></li>
                    </ul>                  
                  </div>
                </div>              
              </div>
              <div class="item">
                <div class="team-members maxwidth400">
                  <div class="team-thumb">
                    <img class="img-fullwidth" alt="" src="images/team/sm-4.jpg">
                  </div>
                  <div class="bg-lighter border-1px text-center p-10 pt-20 pb-10">
                    <h3 class="mt-0"><a class="text-theme-colored2" href="page-teachers-details.html"> Julia (Ph.D.)</a></h3>
                    <h5 class="text-theme-color">Teacher - MBA</h5>
                  </div>
                  <div class="bg-theme-colored text-center pt-5">
                    <ul class="styled-icons">
                      <li><a href="#"><i class="fa fa-facebook text-white"></i></a></li>
                      <li><a href="#"><i class="fa fa-twitter text-white"></i></a></li>
                      <li><a href="#"><i class="fa fa-instagram text-white"></i></a></li>
                      <li><a href="#"><i class="fa fa-skype text-white"></i></a></li>
                    </ul>                  
                  </div>
                </div>              
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- end main-content --> 
@endsection

  
