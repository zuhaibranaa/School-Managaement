@extends('new_layout.app')

@section('content')
 <!-- SLIDER -->
 <section>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item slider1 active">
                <img src="images/slider/1.jpg" alt="">
                <div class="carousel-caption slider-con">
                    <h2>Welcome to <span>Best School </span></h2>
                    <p>The Best School In The Town We Provide Quality Education To The Students</p>
                    <a href="#" class="bann-btn-1">All Courses</a><a href="#" class="bann-btn-2">Read More</a>
                </div>
            </div>
            <div class="item">
                <img src="images/slider/2.jpg" alt="">
                <div class="carousel-caption slider-con">
                    <h2>Admission open <span>2021</span></h2>
                    <p>Please Come and Join Our School For The Best Quality Study</p>
                    <a href="#" class="bann-btn-1">Admission</a><a href="#" class="bann-btn-2">Read More</a>
                </div>
            </div>
            <div class="item">
                <img src="images/slider/3.jpg" alt="">
                <div class="carousel-caption slider-con">
                    <h2>Best <span>School</span></h2>
                    <p>The Best School In The Town We Provide Quality Education To The Students</p>
                    <a href="#" class="bann-btn-1">All Courses</a><a href="#" class="bann-btn-2">Read More</a>
                </div>
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <i class="fa fa-chevron-left slider-arr"></i>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <i class="fa fa-chevron-right slider-arr"></i>
        </a>
    </div>
</section>

<!-- QUICK LINKS -->
<section>
    <div class="container">
        <div class="row">
            <div class="wed-hom-ser">
                <ul>
                    <li>
                        <a href="awards.html" class="waves-effect waves-light btn-large wed-pop-ser-btn"><img src="images/icon/h-ic1.png" alt=""> Academy</a>
                    </li>
                    <li>
                        <a href="admission.html" class="waves-effect waves-light btn-large wed-pop-ser-btn"><img src="images/icon/h-ic2.png" alt=""> Admission</a>
                    </li>
                    <li>
                        <a href="all-courses.html" class="waves-effect waves-light btn-large wed-pop-ser-btn"><img src="images/icon/h-ic4.png" alt=""> Courses</a>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</section>

<!-- DISCOVER MORE -->
<section>
    <div class="container com-sp pad-bot-70">
        <div class="row">
            <div class="con-title">
                <h2>Discover <span>More</span></h2>
                <p>Please Select Your Desired Option</p>
            </div>
        </div>
        <div class="row">
            <div class="ed-course">
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <div class="ed-course-in">
                        <a class="course-overlay" href="about.html">
                            <img src="images/h-about.jpg" alt="">
                            <span>Academics</span>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <div class="ed-course-in">
                        <a class="course-overlay" href="admission.html">
                            <img src="images/h-adm1.jpg" alt="">
                            <span>Admission</span>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <div class="ed-course-in">
                        <a class="course-overlay" href="dashboard.html">
                            <img src="images/h-cam.jpg" alt="">
                            <span>Students profile</span>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <div class="ed-course-in">
                        <a class="course-overlay" href="research.html">
                            <img src="images/h-res.jpg" alt="">
                            <span>Research & Education</span>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <div class="ed-course-in">
                        <a class="course-overlay" href="all-courses.html">
                            <img src="images/h-about1.jpg" alt="">
                            <span>Course</span>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <div class="ed-course-in">
                        <a class="course-overlay" href="db-time-line.html">
                            <img src="images/h-adm.jpg" alt="">
                            <span>Exam Time Line</span>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <div class="ed-course-in">
                        <a class="course-overlay" href="seminar.html">
                            <img src="images/h-cam1.jpg" alt="">
                            <span>Seminar 2021</span>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <div class="ed-course-in">
                        <a class="course-overlay" href="events.html">
                            <img src="images/h-res1.jpg" alt="">
                            <span>Research & Education</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- POPULAR COURSES -->
<section class="pop-cour">
    <div class="container com-sp pad-bot-70">
        <div class="row">
            <div class="con-title">
                <h2>Popular <span>Courses</span></h2>
                <p>We Also Provide Some Popular and Latest Modern Courses To Our Students</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div>
                    <!--POPULAR COURSES-->
                    <div class="home-top-cour">
                        <!--POPULAR COURSES IMAGE-->
                        <div class="col-md-3"> <img src="images/course/sm1.png" alt=""> </div>
                        <!--POPULAR COURSES: CONTENT-->
                        <div class="col-md-9 home-top-cour-desc">
                            <a href="course-details.html">
                                <h3>Computer Sciences</h3>
                            </a>
                            <h4>Technology / Programming / AI</h4>
                            <p>Click For Course Details</p> <span class="home-top-cour-rat">4.2</span>

                        </div>
                    </div>
                    <!--POPULAR COURSES-->
                    <div class="home-top-cour">
                        <!--POPULAR COURSES IMAGE-->
                        <div class="col-md-3"> <img src="images/course/arts.jpg" alt=""> </div>
                        <!--POPULAR COURSES: CONTENT-->
                        <div class="col-md-9 home-top-cour-desc">
                            <a href="course-details.html">
                                <h3>Arts Group</h3>
                            </a>
                            <h4> Ecnomics/ Agriculture </h4>
                            <p>Click For Course Details</p> <span class="home-top-cour-rat">4.2</span>

                        </div>
                    </div>
                    <!--POPULAR COURSES-->

                    <!--POPULAR COURSES-->

                </div>
            </div>
            <div class="col-md-6">
                <div>
                    <!--POPULAR COURSES-->
                    <div class="home-top-cour">
                        <!--POPULAR COURSES IMAGE-->
                        <div class="col-md-3"> <img src="images/course/sm-5.jpg" alt=""> </div>
                        <!--POPULAR COURSES: CONTENT-->
                        <div class="col-md-9 home-top-cour-desc">
                            <a href="course-details.html">
                                <h3>Science Group</h3>
                            </a>
                            <h4>Medical / Engineering </h4>
                            <p>Click For Course Details</p> <span class="home-top-cour-rat">4.2</span>

                        </div>
                    </div>
                    <!--POPULAR COURSES-->
                    <div class="home-top-cour">
                        <!--POPULAR COURSES IMAGE-->
                        <div class="col-md-3"> <img src="images/course/o-level.png" alt=""> </div>
                        <!--POPULAR COURSES: CONTENT-->
                        <div class="col-md-9 home-top-cour-desc">
                            <a href="course-details.html">
                                <h3>O-Level</h3>
                            </a>
                            <h4>International </h4>
                            <p>Click For Course Details</p> <span class="home-top-cour-rat">4.2</span>

                        </div>
                    </div>
                    <!--POPULAR COURSES-->

                    <!--POPULAR COURSES-->

                </div>
            </div>
        </div>
    </div>
</section>
@endsection
