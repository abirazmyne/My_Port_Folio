@extends('website.master')

@section('body')


        <!-- ==================== Start Header ==================== -->

        <header class="crev-agency-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">


                            <div id="carouselExampleCaptions" class="col carousel slide">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                </div>
                                <div class="carousel-inner rounded-3">
                                    <div class="carousel-item active  coimg height">
                                        <img src="{{asset('/')}}website/assets/imgs/header/2.jpg" class="d-block w-100 carsing img-fluid" alt="...">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>First slide label</h5>
                                            <p>Some representative placeholder content for the first slide.</p>
                                        </div>
                                        <div class="mt-3">
                                            <h5>First slide label</h5>
                                            <p>Some representative placeholder content for the first slide.</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item  coimg">
                                        <img src="{{asset('/')}}website/assets/imgs/header/2.jpg" class="d-block w-100 carsing img-fluid" alt="...">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>Second slide label</h5>
                                            <p>Some representative placeholder content for the second slide.</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item  coimg">
                                        <img src="{{asset('/')}}website/assets/imgs/header/2.jpg" class="d-block w-100 carsing img-fluid" alt="...">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>Third slide label</h5>
                                            <p>Some representative placeholder content for the third slide.</p>
                                        </div>
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>

                    </div>
                    <div class="col-lg-3 right-clumn">
                       <div class="col-xl media-pad">
                               <div class="card timecard">
                                   <div class="clock " id="clock"></div>
                                   <div class="location-info " id="locationInfo"></div>
                                   <p class="dailtext">By latitude and longitude you can find your location <span class="text-primary">click.</span></p>

                               </div>
                       </div>
                        <div class="col-lg ">
                            <div class="col-sm">
                                <div class="img  my-img" >
                                    <img class="img-fluid" src="{{asset('/')}}website/assets/imgs/my_pic2.jpg" alt="">
                                </div>
                            </div>
                        </div>




                    </div>
                </div>
            </div>
        </header>

        <!-- ==================== End Header ==================== -->


        <!-- ==================== Start Services ==================== -->

        <section class="services section-padding pb-0" data-scroll-index="1">
            <div class="container">
                <div class="sec-head mb-80">
                    <h6 class="sub-title main-color mb-25">If you have project ! Let's Discuss</h6>
                    <div class="bord pt-25 bord-thin-top d-flex align-items-center">
                        <h2>Offering <span class="fw-200">You</span></h2>
                        <div class="ml-auto">
                            <a href="#" class="go-more">
                                <span class="text">View all services</span>
                                <span class="icon ti-arrow-top-right"></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="item-box radius-15 md-mb30">
                            <div class="ti-paint-bucket main-color fz-50 mb-40"></div>
                            <h5 class="mb-15">UI / UX Design</h5>
                            <p>Live workshop where we define the main problems and challenges before
                                building a strategic plan moving forward.</p>
                            <a href="#" class="rmore mt-30">
                                <span class="sub-title">Read More</span>
                                <img src="{{asset('/')}}website/assets/imgs/arrow-right.png" alt="" class="icon-img-20 ml-5">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="item-box radius-15 md-mb30">
                            <div class="ti-layout-slider main-color fz-50 mb-40"></div>
                            <h5 class="mb-15">Web Development</h5>
                            <p>Live workshop where we define the main problems and challenges before
                                building a strategic plan moving forward.</p>
                            <a href="page-services-details.html" class="rmore mt-30">
                                <span class="sub-title">Read More</span>
                                <img src="{{asset('/')}}website/assets/imgs/arrow-right.png" alt="" class="icon-img-20 ml-5">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="item-box radius-15">
                            <div class="ti-rocket main-color fz-50 mb-40"></div>
                            <h5 class="mb-15">Digital Marketing</h5>
                            <p>Live workshop where we define the main problems and challenges before
                                building a strategic plan moving forward.</p>
                            <a href="page-services-details.html" class="rmore mt-30">
                                <span class="sub-title">Read More</span>
                                <img src="{{asset('/')}}website/assets/imgs/arrow-right.png" alt="" class="icon-img-20 ml-5">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== End Services ==================== -->



        <!-- ==================== Start Skills ==================== -->

        <section class="skills-img section-padding position-re">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-4">
                        <div class="img mb50">

                            <img src="{{asset('/')}}website/assets/imgs/mu_pic1.jpg" alt="" class="radius-30">

                        </div>
                    </div>
                    <div class="col-lg-7 valign">
                        <div class="content full-width mobile-m">
                            <div class="sec-head mb-30">
                                <h6 class="sub-title mb-15 main-color">My Skills</h6>
{{--                                <h2 class="text-u">The ultmiate guide to marketing success.</h2>--}}
                                <p>We shifted our talents to frontier science because we wanted our work
                                    to have tangible, human-positive impact. Also, we get front row
                                    seats to the future.</p>
                            </div>
                            <div class="row justify-content-start">
                                <div class="col-lg-11">
                                    <div class="text">
{{--                                        <p>We shifted our talents to frontier science because we wanted our work--}}
{{--                                            to have tangible, human-positive impact. Also, we get front row--}}
{{--                                            seats to the future.</p>--}}
                                    </div>
                                    <div class="mt-30">
                                        <div class="skills-box">
                                            <div class="skill-item mb-40">
                                                <h5 class="sub-title mb-15">Software Development Backend</h5>
                                                <div class="skill-progress mt-40 rounded-3 pt-10">
                                                    <div class="progres bg-primary rounded-3" data-value="70%"></div>
                                                </div>
                                            </div>
                                            <div class="skill-item">
                                                <h5 class="sub-title mb-15">Software Development Front-End</h5>
                                                <div class="skill-progress mt-40 rounded-2 pt-10">
                                                    <div class="progres bg-info rounded-3" data-value="50%"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- ==================== Start Marquee ==================== -->

                                    <div class="marquee  pt-30 pb-30 o-hidden">
                                        <h6 class="sub-title mt-40 main-color">My Programming Skills</h6>
                                        <div class="container-fluid mt-2">
                                            <div class="main-marq md-text text-u">
                                                <div class="slide-har st1">
                                                    <div class="box non-strok">
                                                        <div class="item">
                                                            <div class="d-flex align-items-center">
                                                                <div class="card bg-transparent m-0 p-0 border-0"  style="width: 100px; ">
                                                                    <div class="row mx-auto mt-20 rounded-2" >
                                                                        <img src="{{asset('/')}}website/assets/imgs/my/skills/php.png" alt="" class="img-fluid  ">
                                                                    </div>
                                                                    <div class="card-body row">
                                                                        <b class="text-center w-100">PHP</b>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="d-flex align-items-center">
                                                                <div class="card bg-transparent m-0 p-0 border-0"  style="width: 100px; ">
                                                                    <div class="row mx-auto mt-20 rounded-2" >
                                                                        <img src="{{asset('/')}}website/assets/imgs/my/skills/mysql.png" alt="" class="img-fluid  ">
                                                                    </div>
                                                                    <div class="card-body row">
                                                                        <b class="text-center w-100">MySQL</b>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="d-flex align-items-center">
                                                                <div class="card bg-transparent m-0 p-0 border-0"  style="width: 100px; ">
                                                                    <div class="row mx-auto mt-20 rounded-2" >
                                                                        <img src="{{asset('/')}}website/assets/imgs/my/skills/json.png" alt="" class="img-fluid  ">
                                                                    </div>
                                                                    <div class="card-body row">
                                                                        <b class="text-center w-100">JSON</b>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="d-flex align-items-center">
                                                                <div class="card bg-transparent  m-0 p-0 border-0"  style="width: 100px; ">
                                                                    <div class="row mx-auto mt-20 rounded-2" >
                                                                        <img src="{{asset('/')}}website/assets/imgs/my/skills/laravel.png" alt="" class="img-fluid  ">
                                                                    </div>
                                                                    <div class="card-body row">
                                                                        <b class="text-center w-100">Laravel</b>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="d-flex align-items-center">
                                                                <div class="card bg-transparent m-0 p-0 border-0"  style="width: 100px; ">
                                                                    <div class="row mx-auto mt-20 rounded-2" >
                                                                        <img src="{{asset('/')}}website/assets/imgs/my/skills/bootstrap.png" alt="" class="img-fluid  ">
                                                                    </div>
                                                                    <div class="card-body row">
                                                                        <b class="text-center w-100">Bootstrap</b>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="d-flex align-items-center">
                                                                <div class="card bg-transparent m-0 p-0 border-0"  style="width: 100px; ">
                                                                    <div class="row mx-auto mt-20 rounded-2" >
                                                                        <img src="{{asset('/')}}website/assets/imgs/my/skills/Vue.png" alt="" class="img-fluid  ">
                                                                    </div>
                                                                    <div class="card-body row">
                                                                        <b class="text-center w-100">Vue.js</b>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="d-flex align-items-center">
                                                                <div class="card bg-transparent m-0 p-0 border-0"  style="width: 100px; ">
                                                                    <div class="row mx-auto mt-20 rounded-2" >
                                                                        <img src="{{asset('/')}}website/assets/imgs/my/skills/jquery.png" alt="" class="img-fluid  ">
                                                                    </div>
                                                                    <div class="card-body row">
                                                                        <b class="text-center w-100">jQuery</b>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="d-flex align-items-center">
                                                                <div class="card bg-transparent m-0 p-0 border-0"  style="width: 100px; ">
                                                                    <div class="row mx-auto mt-20 rounded-2" >
                                                                        <img src="{{asset('/')}}website/assets/imgs/my/skills/js.png" alt="" class="img-fluid  ">
                                                                    </div>
                                                                    <div class="card-body row">
                                                                        <b class="text-center w-100">JS</b>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="d-flex align-items-center">
                                                                <div class="card bg-transparent m-0 p-0 border-0"  style="width: 100px; ">
                                                                    <div class="row mx-auto mt-20 rounded-2" >
                                                                        <img src="{{asset('/')}}website/assets/imgs/my/skills/html.png" alt="" class="img-fluid  ">
                                                                    </div>
                                                                    <div class="card-body row">
                                                                        <b class="text-center w-100">HTML</b>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="d-flex align-items-center">
                                                                <div class="card bg-transparent m-0 p-0 border-0"  style="width: 100px; ">
                                                                    <div class="row mx-auto mt-20 rounded-2" >
                                                                        <img src="{{asset('/')}}website/assets/imgs/my/skills/css.png" alt="" class="img-fluid  ">
                                                                    </div>
                                                                    <div class="card-body row">
                                                                        <b class="text-center w-100">CSS</b>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="d-flex align-items-center">
                                                                <div class="card bg-transparent m-0 p-0 border-0"  style="width: 100px; ">
                                                                    <div class="row mx-auto mt-20 rounded-2" >
                                                                        <img src="{{asset('/')}}website/assets/imgs/my/skills/python.png" alt="" class="img-fluid  ">
                                                                    </div>
                                                                    <div class="card-body row">
                                                                        <b class="text-center w-100">Python</b>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="d-flex align-items-center">
                                                                <div class="card bg-transparent m-0 p-0 border-0"  style="width: 100px; ">
                                                                    <div class="row mx-auto mt-20 rounded-2" >
                                                                        <img src="{{asset('/')}}website/assets/imgs/my/skills/java.png" alt="" class="img-fluid  ">
                                                                    </div>
                                                                    <div class="card-body row">
                                                                        <b class="text-center w-100">Java</b>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="box non-strok">
                                                        <div class="item">
                                                            <div class="d-flex align-items-center">
                                                                <div class="card bg-transparent  m-0 p-0 border-0"  style="width: 100px; ">
                                                                    <div class="row mx-auto mt-20 rounded-2" >
                                                                        <img src="{{asset('/')}}website/assets/imgs/my/skills/php.png" alt="" class="img-fluid  ">
                                                                    </div>
                                                                    <div class="card-body row">
                                                                        <b class="text-center w-100">PHP</b>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="d-flex align-items-center">
                                                                <div class="card bg-transparent  m-0 p-0 border-0"  style="width: 100px; ">
                                                                    <div class="row mx-auto mt-20 rounded-2" >
                                                                        <img src="{{asset('/')}}website/assets/imgs/my/skills/mysql.png" alt="" class="img-fluid  ">
                                                                    </div>
                                                                    <div class="card-body row">
                                                                        <b class="text-center w-100">MySQL</b>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="d-flex align-items-center">
                                                                <div class="card bg-transparent  m-0 p-0 border-0"  style="width: 100px; ">
                                                                    <div class="row mx-auto mt-20 rounded-2" >
                                                                        <img src="{{asset('/')}}website/assets/imgs/my/skills/json.png" alt="" class="img-fluid  ">
                                                                    </div>
                                                                    <div class="card-body row">
                                                                        <b class="text-center w-100">JSON</b>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="d-flex align-items-center">
                                                                <div class="card bg-transparent  m-0 p-0 border-0"  style="width: 100px; ">
                                                                    <div class="row mx-auto mt-20 rounded-2" >
                                                                        <img src="{{asset('/')}}website/assets/imgs/my/skills/laravel.png" alt="" class="img-fluid  ">
                                                                    </div>
                                                                    <div class="card-body row">
                                                                        <b class="text-center w-100">Laravel</b>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="d-flex align-items-center">
                                                                <div class="card bg-transparent  m-0 p-0 border-0"  style="width: 100px; ">
                                                                    <div class="row mx-auto mt-20 rounded-2" >
                                                                        <img src="{{asset('/')}}website/assets/imgs/my/skills/Vue.png" alt="" class="img-fluid  ">
                                                                    </div>
                                                                    <div class="card-body row">
                                                                        <b class="text-center w-100">Vue.js</b>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="d-flex align-items-center">
                                                                <div class="card bg-transparent  m-0 p-0 border-0"  style="width: 100px; ">
                                                                    <div class="row mx-auto mt-20 rounded-2" >
                                                                        <img src="{{asset('/')}}website/assets/imgs/my/skills/jquery.png" alt="" class="img-fluid  ">
                                                                    </div>
                                                                    <div class="card-body row">
                                                                        <b class="text-center w-100">jQuery</b>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="d-flex align-items-center">
                                                                <div class="card bg-transparent m-0 p-0 border-0"  style="width: 100px; ">
                                                                    <div class="row mx-auto mt-20 rounded-2" >
                                                                        <img src="{{asset('/')}}website/assets/imgs/my/skills/bootstrap.png" alt="" class="img-fluid  ">
                                                                    </div>
                                                                    <div class="card-body row">
                                                                        <b class="text-center w-100">Bootstrap</b>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="d-flex align-items-center">
                                                                <div class="card bg-transparent m-0 p-0 border-0"  style="width: 100px; ">
                                                                    <div class="row mx-auto mt-20 rounded-2" >
                                                                        <img src="{{asset('/')}}website/assets/imgs/my/skills/js.png" alt="" class="img-fluid  ">
                                                                    </div>
                                                                    <div class="card-body row">
                                                                        <b class="text-center w-100">JS</b>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="d-flex align-items-center">
                                                                <div class="card bg-transparent m-0 p-0 border-0"  style="width: 100px; ">
                                                                    <div class="row mx-auto mt-20 rounded-2" >
                                                                        <img src="{{asset('/')}}website/assets/imgs/my/skills/html.png" alt="" class="img-fluid  ">
                                                                    </div>
                                                                    <div class="card-body row">
                                                                        <b class="text-center w-100">HTML</b>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="d-flex align-items-center">
                                                                <div class="card bg-transparent m-0 p-0 border-0"  style="width: 100px; ">
                                                                    <div class="row mx-auto mt-20 rounded-2" >
                                                                        <img src="{{asset('/')}}website/assets/imgs/my/skills/css.png" alt="" class="img-fluid  ">
                                                                    </div>
                                                                    <div class="card-body row">
                                                                        <b class="text-center w-100">CSS</b>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="d-flex align-items-center">
                                                                <div class="card bg-transparent m-0 p-0 border-0"  style="width: 100px; ">
                                                                    <div class="row mx-auto mt-20 rounded-2" >
                                                                        <img src="{{asset('/')}}website/assets/imgs/my/skills/python.png" alt="" class="img-fluid  ">
                                                                    </div>
                                                                    <div class="card-body row">
                                                                        <b class="text-center w-100">Python</b>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="d-flex align-items-center">
                                                                <div class="card bg-transparent m-0 p-0 border-0"  style="width: 100px; ">
                                                                    <div class="row mx-auto mt-20 rounded-2" >
                                                                        <img src="{{asset('/')}}website/assets/imgs/my/skills/java.png" alt="" class="img-fluid  ">
                                                                    </div>
                                                                    <div class="card-body row">
                                                                        <b class="text-center w-100">Java</b>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- ==================== End Marquee ==================== -->


                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="item d-flex align-items-center justify-content-center md-mb50">
                            <h2 class="fz-80 line-height-1">15+</h2>
                            <span class="sub-title opacity-7 ml-30">Projects <br> Completed</span>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="item d-flex align-items-center justify-content-center md-mb50">
                            <h2 class="fz-80 line-height-1">1</h2>
                            <span class="sub-title opacity-7 ml-30">Year <br> Laravel</span>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="item d-flex align-items-center justify-content-center">
                            <h2 class="fz-80 line-height-1">6<span class="fz-50">+</span></h2>
                            <span class="sub-title opacity-7 ml-30">Liked My <br> Profile</span>
                        </div>
                    </div>
                </div>

                <div class="row" >
                       <a href="" class="likebtn mx-auto"> Give Me a <span class="text-white"> <i class="fa-solid fa-thumbs-up"></i></span></a>
                </div>

            </div>


        </section>

        <!-- ==================== End Skills ==================== -->








{{--        <!-- ==================== Start Brands ==================== -->--}}

{{--        <div class="brands-crev section-padding pt-0">--}}
{{--            <div class="container">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-lg-6 mt-100 order-md-2">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-6 item ontop">--}}
{{--                                <div class="img">--}}
{{--                                    <img src="{{asset('/')}}website/assets/imgs/brands/01.png" alt="">--}}
{{--                                </div>--}}
{{--                                <span class="top-left">--}}
{{--                                            <svg viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg"--}}
{{--                                                 class="w-23 2xl:w-[3.2rem] h-auto">--}}
{{--                                                <rect y="11" width="23" height="0.671958" fill="#1a1a1a"></rect>--}}
{{--                                                <rect x="12" width="23" height="0.671957" transform="rotate(90 12 0)"--}}
{{--                                                      fill="#1a1a1a"></rect>--}}
{{--                                            </svg>--}}
{{--                                        </span>--}}
{{--                                <span class="top-right">--}}
{{--                                            <svg viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg"--}}
{{--                                                 class="w-23 2xl:w-[3.2rem] h-auto">--}}
{{--                                                <rect y="11" width="23" height="0.671958" fill="#1a1a1a"></rect>--}}
{{--                                                <rect x="12" width="23" height="0.671957" transform="rotate(90 12 0)"--}}
{{--                                                      fill="#1a1a1a"></rect>--}}
{{--                                            </svg>--}}
{{--                                        </span>--}}
{{--                                <span class="bottom-left">--}}
{{--                                            <svg viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg"--}}
{{--                                                 class="w-23 2xl:w-[3.2rem] h-auto">--}}
{{--                                                <rect y="11" width="23" height="0.671958" fill="#1a1a1a"></rect>--}}
{{--                                                <rect x="12" width="23" height="0.671957" transform="rotate(90 12 0)"--}}
{{--                                                      fill="#1a1a1a"></rect>--}}
{{--                                            </svg>--}}
{{--                                        </span>--}}
{{--                                <span class="bottom-right">--}}
{{--                                            <svg viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg"--}}
{{--                                                 class="w-23 2xl:w-[3.2rem] h-auto">--}}
{{--                                                <rect y="11" width="23" height="0.671958" fill="#1a1a1a"></rect>--}}
{{--                                                <rect x="12" width="23" height="0.671957" transform="rotate(90 12 0)"--}}
{{--                                                      fill="#1a1a1a"></rect>--}}
{{--                                            </svg>--}}
{{--                                        </span>--}}
{{--                            </div>--}}
{{--                            <div class="col-6 item">--}}
{{--                                <div class="img">--}}
{{--                                    <img src="{{asset('/')}}website/assets/imgs/brands/02.png" alt="">--}}
{{--                                </div>--}}
{{--                                <span class="top-right">--}}
{{--                                            <svg viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg"--}}
{{--                                                 class="w-23 2xl:w-[3.2rem] h-auto">--}}
{{--                                                <rect y="11" width="23" height="0.671958" fill="#1a1a1a"></rect>--}}
{{--                                                <rect x="12" width="23" height="0.671957" transform="rotate(90 12 0)"--}}
{{--                                                      fill="#1a1a1a"></rect>--}}
{{--                                            </svg>--}}
{{--                                        </span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-5 offset-lg-1 md-hide">--}}
{{--                        <div class="sec-head nocurve">--}}
{{--                            <div class="ontop">--}}
{{--                                <h6 class="sub-title main-color mb-15">Special Thanks To</h6>--}}
{{--                                <h3 class="fw-600 text-u ls1">All our <span class="fw-200">partners</span>--}}
{{--                                </h3>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-12 order-md-1">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-lg-3 col-6 item empty">--}}
{{--                                <div class="text">--}}
{{--                                    <h2 class="fz-80">6k<span class="fz-30">+</span></h2>--}}
{{--                                    <h6 class="sub-title">Satisfied Clients</h6>--}}
{{--                                </div>--}}
{{--                                <span class="bottom-left">--}}
{{--                                            <svg viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg"--}}
{{--                                                 class="w-23 2xl:w-[3.2rem] h-auto">--}}
{{--                                                <rect y="11" width="23" height="0.671958" fill="#1a1a1a"></rect>--}}
{{--                                                <rect x="12" width="23" height="0.671957" transform="rotate(90 12 0)"--}}
{{--                                                      fill="#1a1a1a"></rect>--}}
{{--                                            </svg>--}}
{{--                                        </span>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-3 col-6 item">--}}
{{--                                <div class="img">--}}
{{--                                    <img src="{{asset('/')}}website/assets/imgs/brands/03.png" alt="">--}}
{{--                                </div>--}}
{{--                                <span class="top-right">--}}
{{--                                            <svg viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg"--}}
{{--                                                 class="w-23 2xl:w-[3.2rem] h-auto">--}}
{{--                                                <rect y="11" width="23" height="0.671958" fill="#1a1a1a"></rect>--}}
{{--                                                <rect x="12" width="23" height="0.671957" transform="rotate(90 12 0)"--}}
{{--                                                      fill="#1a1a1a"></rect>--}}
{{--                                            </svg>--}}
{{--                                        </span>--}}
{{--                                <span class="bottom-left">--}}
{{--                                            <svg viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg"--}}
{{--                                                 class="w-23 2xl:w-[3.2rem] h-auto">--}}
{{--                                                <rect y="11" width="23" height="0.671958" fill="#1a1a1a"></rect>--}}
{{--                                                <rect x="12" width="23" height="0.671957" transform="rotate(90 12 0)"--}}
{{--                                                      fill="#1a1a1a"></rect>--}}
{{--                                            </svg>--}}
{{--                                        </span>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-3 col-6 item ontop">--}}
{{--                                <div class="img">--}}
{{--                                    <img src="{{asset('/')}}website/assets/imgs/brands/04.png" alt="">--}}
{{--                                </div>--}}
{{--                                <span class="top-left">--}}
{{--                                            <svg viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg"--}}
{{--                                                 class="w-23 2xl:w-[3.2rem] h-auto">--}}
{{--                                                <rect y="11" width="23" height="0.671958" fill="#1a1a1a"></rect>--}}
{{--                                                <rect x="12" width="23" height="0.671957" transform="rotate(90 12 0)"--}}
{{--                                                      fill="#1a1a1a"></rect>--}}
{{--                                            </svg>--}}
{{--                                        </span>--}}
{{--                                <span class="top-right">--}}
{{--                                            <svg viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg"--}}
{{--                                                 class="w-23 2xl:w-[3.2rem] h-auto">--}}
{{--                                                <rect y="11" width="23" height="0.671958" fill="#1a1a1a"></rect>--}}
{{--                                                <rect x="12" width="23" height="0.671957" transform="rotate(90 12 0)"--}}
{{--                                                      fill="#1a1a1a"></rect>--}}
{{--                                            </svg>--}}
{{--                                        </span>--}}
{{--                                <span class="bottom-left">--}}
{{--                                            <svg viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg"--}}
{{--                                                 class="w-23 2xl:w-[3.2rem] h-auto">--}}
{{--                                                <rect y="11" width="23" height="0.671958" fill="#1a1a1a"></rect>--}}
{{--                                                <rect x="12" width="23" height="0.671957" transform="rotate(90 12 0)"--}}
{{--                                                      fill="#1a1a1a"></rect>--}}
{{--                                            </svg>--}}
{{--                                        </span>--}}
{{--                                <span class="bottom-right">--}}
{{--                                            <svg viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg"--}}
{{--                                                 class="w-23 2xl:w-[3.2rem] h-auto">--}}
{{--                                                <rect y="11" width="23" height="0.671958" fill="#1a1a1a"></rect>--}}
{{--                                                <rect x="12" width="23" height="0.671957" transform="rotate(90 12 0)"--}}
{{--                                                      fill="#1a1a1a"></rect>--}}
{{--                                            </svg>--}}
{{--                                        </span>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-3 col-6 item">--}}
{{--                                <div class="img">--}}
{{--                                    <img src="{{asset('/')}}website/assets/imgs/brands/05.png" alt="">--}}
{{--                                </div>--}}
{{--                                <span class="top-right">--}}
{{--                                            <svg viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg"--}}
{{--                                                 class="w-23 2xl:w-[3.2rem] h-auto">--}}
{{--                                                <rect y="11" width="23" height="0.671958" fill="#1a1a1a"></rect>--}}
{{--                                                <rect x="12" width="23" height="0.671957" transform="rotate(90 12 0)"--}}
{{--                                                      fill="#1a1a1a"></rect>--}}
{{--                                            </svg>--}}
{{--                                        </span>--}}
{{--                                <span class="bottom-right">--}}
{{--                                            <svg viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg"--}}
{{--                                                 class="w-23 2xl:w-[3.2rem] h-auto">--}}
{{--                                                <rect y="11" width="23" height="0.671958" fill="#1a1a1a"></rect>--}}
{{--                                                <rect x="12" width="23" height="0.671957" transform="rotate(90 12 0)"--}}
{{--                                                      fill="#1a1a1a"></rect>--}}
{{--                                            </svg>--}}
{{--                                        </span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <!-- ==================== End Brands ==================== -->--}}




        <!-- ==================== Start Portfolio ==================== -->

        <section class="work-minimal section-padding sub-bg">
            <div class="container-xxl">
                <div class="row">
                    <!-- filter links -->
                    <div class="filtering col-12 mb-50 text-center">
                        <div class="filter">
                            <span class="text">Filter By :</span>
                            <span data-filter='*' class='active'>Show All</span>
                            <span data-filter='.art'>Art</span>
                            <span data-filter='.brand'>Branding</span>
                            <span data-filter='.design'>Design</span>
                            <span data-filter='.marketing'>Marketing</span>
                        </div>
                    </div>
                </div>
                <div class="gallery row stand-marg">
                    <div class="col-lg-4 col-md-6 items design brand">
                        <div class="item mt-40">
                            <div class="img">
                                <img src="{{asset('/')}}website/assets/imgs/works/stand/1.jpg" alt="">
                                <div class="cont d-flex align-items-center">
                                    <div>
                                        <h5 class="fz-22">
                                            <a href="project2.html">Aevoe</a>
                                        </h5>
                                        <p>
                                            <a href="project2.html">Branding</a>
                                        </p>
                                    </div>
                                    <div class="ml-auto">
                                        <a href="project2.html" class="ti-arrow-top-right"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 items brand marketing">
                        <div class="item mt-40">
                            <div class="img">
                                <img src="{{asset('/')}}website/assets/imgs/works/stand/2.jpg" alt="">
                                <div class="cont d-flex align-items-center">
                                    <div>
                                        <h5 class="fz-22">
                                            <a href="project2.html">Digital Design</a>
                                        </h5>
                                        <p>
                                            <a href="project2.html">Branding</a>
                                        </p>
                                    </div>
                                    <div class="ml-auto">
                                        <a href="project2.html" class="ti-arrow-top-right"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 items art design">
                        <div class="item mt-40">
                            <div class="img">
                                <img src="{{asset('/')}}website/assets/imgs/works/stand/3.jpg" alt="">
                                <div class="cont d-flex align-items-center">
                                    <div>
                                        <h5 class="fz-22">
                                            <a href="project2.html">Nice guy</a>
                                        </h5>
                                        <p>
                                            <a href="project2.html">Photography</a>
                                        </p>
                                    </div>
                                    <div class="ml-auto">
                                        <a href="project2.html" class="ti-arrow-top-right"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 items brand">
                        <div class="item mt-40">
                            <div class="img">
                                <img src="{{asset('/')}}website/assets/imgs/works/stand/4.jpg" alt="">
                                <div class="cont d-flex align-items-center">
                                    <div>
                                        <h5 class="fz-22">
                                            <a href="project2.html">Digital Design</a>
                                        </h5>
                                        <p>
                                            <a href="project2.html">Branding</a>
                                        </p>
                                    </div>
                                    <div class="ml-auto">
                                        <a href="project2.html" class="ti-arrow-top-right"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 items design">
                        <div class="item mt-40">
                            <div class="img">
                                <img src="{{asset('/')}}website/assets/imgs/works/stand/5.jpg" alt="">
                                <div class="cont d-flex align-items-center">
                                    <div>
                                        <h5 class="fz-22">
                                            <a href="project2.html">Digital Design</a>
                                        </h5>
                                        <p>
                                            <a href="project2.html">Branding</a>
                                        </p>
                                    </div>
                                    <div class="ml-auto">
                                        <a href="project2.html" class="ti-arrow-top-right"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 items art marketing">
                        <div class="item mt-40">
                            <div class="img">
                                <img src="{{asset('/')}}website/assets/imgs/works/stand/6.jpg" alt="">
                                <div class="cont d-flex align-items-center">
                                    <div>
                                        <h5 class="fz-22">
                                            <a href="project2.html">Digital Design</a>
                                        </h5>
                                        <p>
                                            <a href="project2.html">Branding</a>
                                        </p>
                                    </div>
                                    <div class="ml-auto">
                                        <a href="project2.html" class="ti-arrow-top-right"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 items design marketing">
                        <div class="item mt-40">
                            <div class="img">
                                <img src="{{asset('/')}}website/assets/imgs/works/stand/7.jpg" alt="">
                                <div class="cont d-flex align-items-center">
                                    <div>
                                        <h5 class="fz-22">
                                            <a href="project2.html">Digital Design</a>
                                        </h5>
                                        <p>
                                            <a href="project2.html">Branding</a>
                                        </p>
                                    </div>
                                    <div class="ml-auto">
                                        <a href="project2.html" class="ti-arrow-top-right"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 items brand">
                        <div class="item mt-40">
                            <div class="img">
                                <img src="{{asset('/')}}website/assets/imgs/works/stand/8.jpg" alt="">
                                <div class="cont d-flex align-items-center">
                                    <div>
                                        <h5 class="fz-22">
                                            <a href="project2.html">Digital Design</a>
                                        </h5>
                                        <p>
                                            <a href="project2.html">Branding</a>
                                        </p>
                                    </div>
                                    <div class="ml-auto">
                                        <a href="project2.html" class="ti-arrow-top-right"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 items art">
                        <div class="item mt-40">
                            <div class="img">
                                <img src="{{asset('/')}}website/assets/imgs/works/stand/9.jpg" alt="">
                                <div class="cont d-flex align-items-center">
                                    <div>
                                        <h5 class="fz-22">
                                            <a href="project2.html">Digital Design</a>
                                        </h5>
                                        <p>
                                            <a href="project2.html">Branding</a>
                                        </p>
                                    </div>
                                    <div class="ml-auto">
                                        <a href="project2.html" class="ti-arrow-top-right"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== End Portfolio ==================== -->




        <!-- ==================== Start Blog ==================== -->


        <!-- ==================== Start Services ==================== -->

        <section class="services section-padding pb-0 mb-80" data-scroll-index="1">
            <div class="container">
                <div class="sec-head mb-60">
                    <h6 class="sub-title main-color mb-25">Soon I will publish my articles</h6>
                    <div class="bord pt-25 bord-thin-top d-flex align-items-center">
                        <h2>Look at  <span class="fw-200">those articles</span></h2>
                        <div class="ml-auto">
                            <a href="#" class="go-more">
                                <span class="text">View all articles</span>
                                <span class="icon ti-arrow-top-right"></span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <div class="card artcaclesbox ">
                            <img src="{{asset('/')}}website/assets/imgs/blog/c1.jpg" alt=""  class="img-fluid articleimg">
                            <div class="">

                                <p class="articleCategory">Article Category </p>
                                <p class="artcaclestars">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </p>

                                <a class="articleHead" href="">Creative advertising in our life became a info noise</a>

                                <div class="text-center ">
                                    <a href="" class="artcaclesbtn btn "> Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card artcaclesbox ">
                            <img src="{{asset('/')}}website/assets/imgs/blog/c1.jpg" alt=""  class="img-fluid articleimg">
                            <div class="">

                                <p class="articleCategory">Article Category </p>
                                <p class="artcaclestars">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </p>

                                <a class="articleHead" href="">Creative advertising in our life became a info noise</a>

                                <div class="text-center ">
                                    <a href="" class="artcaclesbtn btn "> Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card artcaclesbox ">
                            <img src="{{asset('/')}}website/assets/imgs/blog/c1.jpg" alt=""  class="img-fluid articleimg">
                            <div class="">

                                <p class="articleCategory">Article Category </p>
                                <p class="artcaclestars">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </p>

                                <a class="articleHead" href="">Creative advertising in our life became a info noise</a>

                                <div class="text-center ">
                                    <a href="" class="artcaclesbtn btn "> Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>



            </div>
        </section>

        <!-- ==================== End Services ==================== -->




@endsection
