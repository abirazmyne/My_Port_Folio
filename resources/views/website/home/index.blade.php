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
                       <div class="row media-pad">

                               <a href="https://www.latlong.net/Show-Latitude-Longitude.html" class="">
                                   <style>
                                       body {
                                           font-family: Arial, sans-serif;
                                           display: flex;
                                           justify-content: center;
                                           align-items: center;


                                       }
                                       .clock {
                                           font-size: 2rem;
                                           text-align: start;
                                           font-weight: 600;
                                           width: 100%;
                                           padding-top: 0;

                                           border-radius: 10px;

                                       }

                                       .location-info{
                                           font-size: 1.2rem;
                                           text-align: start;

                                           border-radius: 10px;

                                       }

                                       .ampm {
                                           font-size: 0.8rem;
                                           color: red;
                                       }

                                       .dailtext{
                                           text-align: start;
                                           font-size: 10px;
                                       }
                                   </style>

                                   <div class="row ">

                                       <div class="clock " id="clock"></div>
                                       <div class="location-info " id="locationInfo"></div>
                                       <p class="dailtext">By latitude and longitude you can find your location <span class="text-primary">click.</span></p>
                                   </div>

                                   <script>
                                       function updateTime() {
                                           const now = new Date();
                                           let hours = now.getHours();
                                           const minutes = now.getMinutes();
                                           const seconds = now.getSeconds();
                                           const ampm = hours >= 12 ? 'PM' : 'AM';

                                           // Convert to 12-hour format
                                           hours = hours % 12 || 12;

                                           // Display leading zeros for single-digit minutes and seconds
                                           const formattedMinutes = minutes < 10 ? `0${minutes}` : minutes;
                                           const formattedSeconds = seconds < 10 ? `0${seconds}` : seconds;

                                           const timeString = `${hours}:${formattedMinutes}:${formattedSeconds} <span class="ampm">${ampm}</span>`;
                                           document.getElementById('clock').innerHTML = timeString;
                                       }

                                       // Update time every second
                                       setInterval(updateTime, 1000);
                                       updateTime(); // Initial call

                                       // const region = 'Asia';
                                       // const city = 'Dhaka';
                                       //
                                       // // Display region and city information
                                       // const locationString = `Region: <strong>${region}</strong><br>City: <strong>${city}</strong>`;
                                       // document.getElementById('locationInfo').innerHTML = locationString;



                                       // Get user's current location
                                       navigator.geolocation.getCurrentPosition(
                                           (position) => {
                                               const latitude = position.coords.latitude;
                                               const longitude = position.coords.longitude;

                                               // Example: Display latitude and longitude
                                               const locationString = `Latitude: <strong>${latitude.toFixed(6)}</strong><br>Longitude: <strong>${longitude.toFixed(6)}</strong>`;
                                               document.getElementById('locationInfo').innerHTML = locationString;
                                           },
                                           (error) => {
                                               console.error('Error getting location:', error.message);
                                               document.getElementById('locationInfo').textContent = 'Error getting location. Please allow location access.';
                                           }
                                       );
                                   </script>


                               </a>
                       </div>
                        <div class="row pt-3 ">
                            <div class="col-sm">
                                <div class="img pt-0" >
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
                                <img src="assets/imgs/arrow-right.png" alt="" class="icon-img-20 ml-5">
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
                                <img src="assets/imgs/arrow-right.png" alt="" class="icon-img-20 ml-5">
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
                                <img src="assets/imgs/arrow-right.png" alt="" class="icon-img-20 ml-5">
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
                    <div class="col-lg-5">
                        <div class="img md-mb50">
                            <img src="{{asset('/')}}website/assets/imgs/intro/02.jpg" alt="" class="radius-30">
                            <div class="curv-title main-bg">
                                <h6 class="sub-title">Efficient Tasking</h6>
                                <div class="shap-left-bottom">
                                    <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg"
                                         class="w-11 h-11">
                                        <path
                                            d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z"
                                            fill="#1a1a1a"></path>
                                    </svg>
                                </div>
                                <div class="shap-right-bottom">
                                    <svg viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg"
                                         class="w-11 h-11">
                                        <path
                                            d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z"
                                            fill="#1a1a1a"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 valign">
                        <div class="content full-width">
                            <div class="sec-head mb-30">
                                <h6 class="sub-title mb-15 main-color">Our Skills</h6>
                                <h2 class="text-u">The ultmiate guide to marketing success.</h2>
                            </div>
                            <div class="row justify-content-end">
                                <div class="col-lg-11">
                                    <div class="text">
                                        <p>We shifted our talents to frontier science because we wanted our work
                                            to have tangible, human-positive impact. Also, we get front row
                                            seats to the future.</p>
                                    </div>
                                    <div class="mt-50">
                                        <div class="skills-box">
                                            <div class="skill-item mb-40">
                                                <h5 class="sub-title mb-15">UI / UX Design</h5>
                                                <div class="skill-progress">
                                                    <div class="progres" data-value="90%"></div>
                                                </div>
                                            </div>
                                            <div class="skill-item">
                                                <h5 class="sub-title mb-15">Apps Development</h5>
                                                <div class="skill-progress">
                                                    <div class="progres" data-value="80%"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-80">
                                        <a href="#0" class="butn-circle-text d-flex align-items-center">
                                            <h6 class="text">Try it for free</h6>
                                            <div>
                                                        <span class="circle">
                                                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M13.922 4.5V11.8125C13.922 11.9244 13.8776 12.0317 13.7985 12.1108C13.7193 12.1899 13.612 12.2344 13.5002 12.2344C13.3883 12.2344 13.281 12.1899 13.2018 12.1108C13.1227 12.0317 13.0783 11.9244 13.0783 11.8125V5.51953L4.79547 13.7953C4.71715 13.8736 4.61092 13.9176 4.50015 13.9176C4.38939 13.9176 4.28316 13.8736 4.20484 13.7953C4.12652 13.717 4.08252 13.6108 4.08252 13.5C4.08252 13.3892 4.12652 13.283 4.20484 13.2047L12.4806 4.92188H6.18765C6.07577 4.92188 5.96846 4.87743 5.88934 4.79831C5.81023 4.71919 5.76578 4.61189 5.76578 4.5C5.76578 4.38811 5.81023 4.28081 5.88934 4.20169C5.96846 4.12257 6.07577 4.07813 6.18765 4.07812H13.5002C13.612 4.07813 13.7193 4.12257 13.7985 4.20169C13.8776 4.28081 13.922 4.38811 13.922 4.5Z"
                                                                    fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="line-overlay">
                <svg viewBox="0 0 1728 1101" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M-43 773.821C160.86 662.526 451.312 637.01 610.111 733.104C768.91 829.197 932.595 1062.9 602.782 1098.75C272.969 1134.6 676.888 25.4306 1852 1"
                        style="stroke-dasharray: 3246.53, 0;"></path>
                </svg>
            </div>
        </section>

        <!-- ==================== End Skills ==================== -->



        <!-- ==================== Start numbers ==================== -->

        <section class="numbers ">
            <div class="container ">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="item d-flex align-items-center justify-content-center md-mb50">
                            <h2 class="fz-80 line-height-1">52</h2>
                            <span class="sub-title opacity-7 ml-30">Projects <br> Completed</span>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="item d-flex align-items-center justify-content-center md-mb50">
                            <h2 class="fz-80 line-height-1">34</h2>
                            <span class="sub-title opacity-7 ml-30">Team <br> Members</span>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="item d-flex align-items-center justify-content-center">
                            <h2 class="fz-80 line-height-1">6k<span class="fz-50">+</span></h2>
                            <span class="sub-title opacity-7 ml-30">Customers <br> Satisfaction</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== End numbers ==================== -->





        <!-- ==================== Start Portfolio ==================== -->

{{--        <section class="portfolio-carsouel section-padding">--}}
{{--            <div class="container">--}}
{{--                <div class="sec-head mb-80">--}}
{{--                    <h6 class="sub-title main-color mb-25">Our Portfolio</h6>--}}
{{--                    <div class="bord pt-25 bord-thin-top d-flex align-items-center">--}}
{{--                        <h2 class="fw-600 text-u ls1">Our featured <span class="fw-200">projects</span></h2>--}}
{{--                        <div class="ml-auto">--}}
{{--                            <div class="swiper-arrow-control">--}}
{{--                                <div class="swiper-button-prev">--}}
{{--                                    <span class="ti-arrow-left"></span>--}}
{{--                                </div>--}}
{{--                                <div class="swiper-button-next">--}}
{{--                                    <span class="ti-arrow-right"></span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="work-swiper-auto" data-carousel="swiper" data-space="30">--}}
{{--                    <div id="content-carousel-container-unq-work" class="swiper-container"--}}
{{--                         data-swiper="container">--}}
{{--                        <div class="swiper-wrapper">--}}
{{--                            <div class="swiper-slide">--}}
{{--                                <div class="item">--}}
{{--                                    <div class="img">--}}
{{--                                        <img src="{{asset('/')}}website/assets/imgs/works/1/1.jpg" alt="">--}}
{{--                                    </div>--}}
{{--                                    <div class="cont d-flex align-items-center mt-30 pb-15 bord-thin-bottom">--}}
{{--                                        <div>--}}
{{--                                            <h5>Nice guy with a smile</h5>--}}
{{--                                            <p>Graphic Designing</p>--}}
{{--                                        </div>--}}
{{--                                        <div class="ml-auto">--}}
{{--                                            <a href="project1.html" class="rmore">--}}
{{--                                                <img src="{{asset('/')}}website/assets/imgs/arrow-right.png" alt=""--}}
{{--                                                     class="icon-img-20">--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="swiper-slide">--}}
{{--                                <div class="item">--}}
{{--                                    <div class="img">--}}
{{--                                        <img src="{{asset('/')}}website/assets/imgs/works/1/2.jpg" alt="">--}}
{{--                                    </div>--}}
{{--                                    <div class="cont d-flex align-items-center mt-30 pb-15 bord-thin-bottom">--}}
{{--                                        <div>--}}
{{--                                            <h5>Nice guy with a smile</h5>--}}
{{--                                            <p>Graphic Designing</p>--}}
{{--                                        </div>--}}
{{--                                        <div class="ml-auto">--}}
{{--                                            <a href="project2.html" class="rmore">--}}
{{--                                                <img src="{{asset('/')}}website/assets/imgs/arrow-right.png" alt=""--}}
{{--                                                     class="icon-img-20">--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="swiper-slide">--}}
{{--                                <div class="item">--}}
{{--                                    <div class="img">--}}
{{--                                        <img src="{{asset('/')}}website/assets/imgs/works/1/3.jpg" alt="">--}}
{{--                                    </div>--}}
{{--                                    <div class="cont d-flex align-items-center mt-30 pb-15 bord-thin-bottom">--}}
{{--                                        <div>--}}
{{--                                            <h5>Nice guy with a smile</h5>--}}
{{--                                            <p>Graphic Designing</p>--}}
{{--                                        </div>--}}
{{--                                        <div class="ml-auto">--}}
{{--                                            <a href="project3.html" class="rmore">--}}
{{--                                                <img src="{{asset('/')}}website/assets/imgs/arrow-right.png" alt=""--}}
{{--                                                     class="icon-img-20">--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="swiper-slide">--}}
{{--                                <div class="item">--}}
{{--                                    <div class="img">--}}
{{--                                        <img src="{{asset('/')}}website/assets/imgs/works/1/4.jpg" alt="">--}}
{{--                                    </div>--}}
{{--                                    <div class="cont d-flex align-items-center mt-30 pb-15 bord-thin-bottom">--}}
{{--                                        <div>--}}
{{--                                            <h5>Nice guy with a smile</h5>--}}
{{--                                            <p>Graphic Designing</p>--}}
{{--                                        </div>--}}
{{--                                        <div class="ml-auto">--}}
{{--                                            <a href="#0" class="rmore">--}}
{{--                                                <img src="{{asset('/')}}website/assets/imgs/arrow-right.png" alt=""--}}
{{--                                                     class="icon-img-20">--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}

        <!-- ==================== End Portfolio ==================== -->



        <!-- ==================== Start Testimonials ==================== -->

        <section class="testimonials section-padding sub-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="sec-head">
                            <h6 class="sub-title main-color mb-15">Testimonials</h6>
                            <h3 class="fw-600 text-u ls1">What People <span class="fw-200">Say?</span></h3>
                        </div>
                    </div>
                    <div class="col-lg-8 position-re">
                        <div class="testim-swiper" data-carousel="swiper" data-loop="true" data-space="30">
                            <div id="content-carousel-container-unq-testim" class="swiper-container"
                                 data-swiper="container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="item">
                                            <div class="content">
                                                <div class="text">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="256.721"
                                                         height="208.227" viewBox="0 0 256.721 208.227"
                                                         class="qout-svg">
                                                        <path data-name="Path"
                                                              d="M-23.723-530.169v97.327H-121.05v-68.7q0-40.076,13.359-73.472T-62.845-639.9l36.259,28.625Q-63.8-570.244-68.57-530.169Zm158.395,0v97.327H37.345v-68.7q0-40.076,13.359-73.472T95.55-639.9l36.259,28.625Q94.6-570.244,89.825-530.169Z"
                                                              transform="translate(121.55 640.568)" fill="none"
                                                              stroke="#1a1a1a" stroke-width="1" opacity="0.322">
                                                        </path>
                                                    </svg>
                                                    <p class="fz-30">I have been hiring people in this
                                                        space for a number of years
                                                        and I have never seen this level of
                                                        professionalism. It really feels like you are
                                                        working with a team that can get the job
                                                        done.</p>
                                                </div>
                                                <div
                                                    class="info d-flex align-items-center pt-40 mt-40 bord-thin-top">
                                                    <div>
                                                        <div class="fit-img circle">
                                                            <img src="{{asset('/')}}website/assets/imgs/testim/t1.jpg" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="ml-20">
                                                        <h5>Adam Beckley</h5>
                                                        <span class="sub-title main-color">Founder &
                                                                    CEO</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="item">
                                            <div class="content">
                                                <div class="text">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="256.721"
                                                         height="208.227" viewBox="0 0 256.721 208.227"
                                                         class="qout-svg">
                                                        <path data-name="Path"
                                                              d="M-23.723-530.169v97.327H-121.05v-68.7q0-40.076,13.359-73.472T-62.845-639.9l36.259,28.625Q-63.8-570.244-68.57-530.169Zm158.395,0v97.327H37.345v-68.7q0-40.076,13.359-73.472T95.55-639.9l36.259,28.625Q94.6-570.244,89.825-530.169Z"
                                                              transform="translate(121.55 640.568)" fill="none"
                                                              stroke="#1a1a1a" stroke-width="1" opacity="0.322">
                                                        </path>
                                                    </svg>
                                                    <p class="fz-30">I have been hiring people in this
                                                        space for a number of years
                                                        and I have never seen this level of
                                                        professionalism. It really feels like you are
                                                        working with a team that can get the job
                                                        done.</p>
                                                </div>
                                                <div
                                                    class="info d-flex align-items-center pt-40 mt-40 bord-thin-top">
                                                    <div>
                                                        <div class="fit-img circle">
                                                            <img src="{{asset('/')}}website/assets/imgs/testim/t2.jpg" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="ml-20">
                                                        <h5>Adam Beckley</h5>
                                                        <span class="sub-title main-color">Founder &
                                                                    CEO</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-arrow-control control-abslout">
                            <div class="swiper-button-prev">
                                <span class="ti-arrow-left"></span>
                            </div>
                            <div class="swiper-button-next">
                                <span class="ti-arrow-right"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="small-line">
                <div class="line-overlay">
                    <svg viewBox="0 0 1728 1101" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M-43 773.821C160.86 662.526 451.312 637.01 610.111 733.104C768.91 829.197 932.595 1062.9 602.782 1098.75C272.969 1134.6 676.888 25.4306 1852 1"
                            style="stroke-dasharray: 3246.53, 0;"></path>
                    </svg>
                </div>
            </div>
        </section>

        <!-- ==================== End Testimonials ==================== -->



        <!-- ==================== Start Brands ==================== -->

        <div class="brands-crev section-padding pt-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mt-100 order-md-2">
                        <div class="row">
                            <div class="col-6 item ontop">
                                <div class="img">
                                    <img src="{{asset('/')}}website/assets/imgs/brands/01.png" alt="">
                                </div>
                                <span class="top-left">
                                            <svg viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg"
                                                 class="w-23 2xl:w-[3.2rem] h-auto">
                                                <rect y="11" width="23" height="0.671958" fill="#1a1a1a"></rect>
                                                <rect x="12" width="23" height="0.671957" transform="rotate(90 12 0)"
                                                      fill="#1a1a1a"></rect>
                                            </svg>
                                        </span>
                                <span class="top-right">
                                            <svg viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg"
                                                 class="w-23 2xl:w-[3.2rem] h-auto">
                                                <rect y="11" width="23" height="0.671958" fill="#1a1a1a"></rect>
                                                <rect x="12" width="23" height="0.671957" transform="rotate(90 12 0)"
                                                      fill="#1a1a1a"></rect>
                                            </svg>
                                        </span>
                                <span class="bottom-left">
                                            <svg viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg"
                                                 class="w-23 2xl:w-[3.2rem] h-auto">
                                                <rect y="11" width="23" height="0.671958" fill="#1a1a1a"></rect>
                                                <rect x="12" width="23" height="0.671957" transform="rotate(90 12 0)"
                                                      fill="#1a1a1a"></rect>
                                            </svg>
                                        </span>
                                <span class="bottom-right">
                                            <svg viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg"
                                                 class="w-23 2xl:w-[3.2rem] h-auto">
                                                <rect y="11" width="23" height="0.671958" fill="#1a1a1a"></rect>
                                                <rect x="12" width="23" height="0.671957" transform="rotate(90 12 0)"
                                                      fill="#1a1a1a"></rect>
                                            </svg>
                                        </span>
                            </div>
                            <div class="col-6 item">
                                <div class="img">
                                    <img src="{{asset('/')}}website/assets/imgs/brands/02.png" alt="">
                                </div>
                                <span class="top-right">
                                            <svg viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg"
                                                 class="w-23 2xl:w-[3.2rem] h-auto">
                                                <rect y="11" width="23" height="0.671958" fill="#1a1a1a"></rect>
                                                <rect x="12" width="23" height="0.671957" transform="rotate(90 12 0)"
                                                      fill="#1a1a1a"></rect>
                                            </svg>
                                        </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 offset-lg-1 md-hide">
                        <div class="sec-head nocurve">
                            <div class="ontop">
                                <h6 class="sub-title main-color mb-15">Special Thanks To</h6>
                                <h3 class="fw-600 text-u ls1">All our <span class="fw-200">partners</span>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 order-md-1">
                        <div class="row">
                            <div class="col-lg-3 col-6 item empty">
                                <div class="text">
                                    <h2 class="fz-80">6k<span class="fz-30">+</span></h2>
                                    <h6 class="sub-title">Satisfied Clients</h6>
                                </div>
                                <span class="bottom-left">
                                            <svg viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg"
                                                 class="w-23 2xl:w-[3.2rem] h-auto">
                                                <rect y="11" width="23" height="0.671958" fill="#1a1a1a"></rect>
                                                <rect x="12" width="23" height="0.671957" transform="rotate(90 12 0)"
                                                      fill="#1a1a1a"></rect>
                                            </svg>
                                        </span>
                            </div>
                            <div class="col-lg-3 col-6 item">
                                <div class="img">
                                    <img src="{{asset('/')}}website/assets/imgs/brands/03.png" alt="">
                                </div>
                                <span class="top-right">
                                            <svg viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg"
                                                 class="w-23 2xl:w-[3.2rem] h-auto">
                                                <rect y="11" width="23" height="0.671958" fill="#1a1a1a"></rect>
                                                <rect x="12" width="23" height="0.671957" transform="rotate(90 12 0)"
                                                      fill="#1a1a1a"></rect>
                                            </svg>
                                        </span>
                                <span class="bottom-left">
                                            <svg viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg"
                                                 class="w-23 2xl:w-[3.2rem] h-auto">
                                                <rect y="11" width="23" height="0.671958" fill="#1a1a1a"></rect>
                                                <rect x="12" width="23" height="0.671957" transform="rotate(90 12 0)"
                                                      fill="#1a1a1a"></rect>
                                            </svg>
                                        </span>
                            </div>
                            <div class="col-lg-3 col-6 item ontop">
                                <div class="img">
                                    <img src="{{asset('/')}}website/assets/imgs/brands/04.png" alt="">
                                </div>
                                <span class="top-left">
                                            <svg viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg"
                                                 class="w-23 2xl:w-[3.2rem] h-auto">
                                                <rect y="11" width="23" height="0.671958" fill="#1a1a1a"></rect>
                                                <rect x="12" width="23" height="0.671957" transform="rotate(90 12 0)"
                                                      fill="#1a1a1a"></rect>
                                            </svg>
                                        </span>
                                <span class="top-right">
                                            <svg viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg"
                                                 class="w-23 2xl:w-[3.2rem] h-auto">
                                                <rect y="11" width="23" height="0.671958" fill="#1a1a1a"></rect>
                                                <rect x="12" width="23" height="0.671957" transform="rotate(90 12 0)"
                                                      fill="#1a1a1a"></rect>
                                            </svg>
                                        </span>
                                <span class="bottom-left">
                                            <svg viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg"
                                                 class="w-23 2xl:w-[3.2rem] h-auto">
                                                <rect y="11" width="23" height="0.671958" fill="#1a1a1a"></rect>
                                                <rect x="12" width="23" height="0.671957" transform="rotate(90 12 0)"
                                                      fill="#1a1a1a"></rect>
                                            </svg>
                                        </span>
                                <span class="bottom-right">
                                            <svg viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg"
                                                 class="w-23 2xl:w-[3.2rem] h-auto">
                                                <rect y="11" width="23" height="0.671958" fill="#1a1a1a"></rect>
                                                <rect x="12" width="23" height="0.671957" transform="rotate(90 12 0)"
                                                      fill="#1a1a1a"></rect>
                                            </svg>
                                        </span>
                            </div>
                            <div class="col-lg-3 col-6 item">
                                <div class="img">
                                    <img src="{{asset('/')}}website/assets/imgs/brands/05.png" alt="">
                                </div>
                                <span class="top-right">
                                            <svg viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg"
                                                 class="w-23 2xl:w-[3.2rem] h-auto">
                                                <rect y="11" width="23" height="0.671958" fill="#1a1a1a"></rect>
                                                <rect x="12" width="23" height="0.671957" transform="rotate(90 12 0)"
                                                      fill="#1a1a1a"></rect>
                                            </svg>
                                        </span>
                                <span class="bottom-right">
                                            <svg viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg"
                                                 class="w-23 2xl:w-[3.2rem] h-auto">
                                                <rect y="11" width="23" height="0.671958" fill="#1a1a1a"></rect>
                                                <rect x="12" width="23" height="0.671957" transform="rotate(90 12 0)"
                                                      fill="#1a1a1a"></rect>
                                            </svg>
                                        </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ==================== End Brands ==================== -->



        <!-- ==================== Start image scale ==================== -->

        <section class="img-scale">
            <div class="image" data-overlay-dark="4">
                <div class="img">
                    <img id="grow" src="{{asset('/')}}website/assets/imgs/background/2.jpg" data-speed="0.2" data-lag="0" alt="">
                </div>
                <div class="text-u text-center ontop">
                    <h2 class="fz-70 fw-600">Boost Your <span class="fw-300">Business</span> Up <br><span
                            class="fw-300">Ranking </span> High Lavel</h2>
                </div>
            </div>
        </section>

        <!-- ==================== End image scale ==================== -->



        <!-- ==================== Start Blog ==================== -->

        <section class="blog-list-crev section-padding sub-bg">
            <div class="container">
                <div class="sec-head mb-80">
                    <h6 class="sub-title main-color mb-25">Our Blog</h6>
                    <div class="bord pt-25 bord-thin-top d-flex align-items-center">
                        <h2 class="fw-600">Read Latest <span class="fw-200">News</span></h2>
                        <div class="ml-auto">
                            <a href="blog-list.html" class="go-more">
                                <span class="text">View all posts</span>
                                <span class="icon ti-arrow-top-right"></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="item sub-bg2 wow fadeInUp" data-wow-delay=".1s">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="info md-mb30">
                                <div class="d-flex align-items-center">
                                    <div class="author">
                                        <div class="img">
                                            <img src="{{asset('/')}}website/assets/imgs/blog/author.png" alt="">
                                        </div>
                                    </div>
                                    <div class="author-info">
                                        <span class="fz-13 opacity-8 mb-5">Posted by</span>
                                        <h6 class="fz-18">Olivia Rhye</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="cont">
                                <h5 class="mb-10 underline">
                                    <a href="blog-details.html">The Highly Creative UI/UX Workflow from a
                                        Silicon
                                        Valley.</a>
                                </h5>
                                <div class="tags">
                                    <a href="blog-classic.html">Design</a>
                                    <a href="blog-classic.html">Marketing</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 d-flex align-items-center justify-end">
                            <div class="ml-auto">
                                <span class="date sub-title fz-13 opacity-8 mb-30">6 August 2022</span>
                            </div>
                        </div>
                    </div>
                    <div class="background bg-img valign text-center"
                         data-background="{{asset('/')}}website/assets/imgs/blog/blog1.jpg" data-overlay-dark="4">
                        <div class="more ontop full-width">
                            <a href="blog-details.html">
                                <span>Read More <i class="fas fa-arrow-right ml-10"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="item wow fadeInUp" data-wow-delay=".3s">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="info md-mb30">
                                <div class="d-flex align-items-center">
                                    <div class="author">
                                        <div class="img">
                                            <img src="{{asset('/')}}website/assets/imgs/blog/author.png" alt="">
                                        </div>
                                    </div>
                                    <div class="author-info">
                                        <span class="fz-13 opacity-8 mb-5">Posted by</span>
                                        <h6 class="fz-18">Olivia Rhye</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="cont">
                                <h5 class="mb-10 underline">
                                    <a href="blog-details.html">Creativo Jóvenes: a Lead Designer's UI/UX Core
                                        Checklist.</a>
                                </h5>
                                <div class="tags">
                                    <a href="blog-classic.html">Design</a>
                                    <a href="blog-classic.html">Marketing</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 d-flex align-items-center justify-end">
                            <div class="ml-auto">
                                <span class="date sub-title fz-13 opacity-8 mb-30">6 August 2022</span>
                            </div>
                        </div>
                    </div>
                    <div class="background bg-img valign text-center"
                         data-background="{{asset('/')}}website/assets/imgs/blog/blog2.jpg" data-overlay-dark="4">
                        <div class="more ontop full-width">
                            <a href="blog-details.html">
                                <span>Read More <i class="fas fa-arrow-right ml-10"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="item sub-bg2 wow fadeInUp" data-wow-delay=".5s">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="info md-mb30">
                                <div class="d-flex align-items-center">
                                    <div class="author">
                                        <div class="img">
                                            <img src="{{asset('/')}}website/assets/imgs/blog/author.png" alt="">
                                        </div>
                                    </div>
                                    <div class="author-info">
                                        <span class="fz-13 opacity-8 mb-5">Posted by</span>
                                        <h6 class="fz-18">Olivia Rhye</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="cont">
                                <h5 class="mb-10 underline">
                                    <a href="blog-details.html">Definitive Guide to Make a Daily More Productive
                                        Working Flow.</a>
                                </h5>
                                <div class="tags">
                                    <a href="blog-classic.html">Design</a>
                                    <a href="blog-classic.html">Marketing</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 d-flex align-items-center justify-end">
                            <div class="ml-auto">
                                <span class="date sub-title fz-13 opacity-8 mb-30">6 August 2022</span>
                            </div>
                        </div>
                    </div>
                    <div class="background bg-img valign text-center"
                         data-background="{{asset('/')}}website/assets/imgs/blog/blog4.jpg" data-overlay-dark="4">
                        <div class="more ontop full-width">
                            <a href="blog-details.html">
                                <span>Read More <i class="fas fa-arrow-right ml-10"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== End Blog ==================== -->



@endsection
