@extends('website.master')

@section('body')
    <section class="container">
       <div class="row">
               <li class="bredmy">
                   <a href="{{route('home')}}" class="breadonelink">Home</a> || <a class="breadtwolink breadactive" href="{{route('education')}}">Education</a>
               </li>
       </div>
        <hr>
    </section>



    <!-- ==================== Start about ==================== -->

    <section class="about-crev mb-100 position-re" data-scroll-index="2">

        <div class="container">
            <div class="row lg-marg">
                <div class="col-lg-6">
                    <div class="left-block mt-100 md-mb50">
                        <div class="d-flex align-items-center">
                            <div>
                                <div class="info">
                                    <h3 class=" main-color fz-50 line-height-1">01</h3>
                                    <p class="nowrap">Years of<br> Experience in <br> Laravel</p>
                                </div>
                            </div>
                            <div>
                                <div class="img fit-img radius-30">
                                    <img src="{{asset('/')}}website/assets/imgs/mu_pic1.jpg" alt="" class="radius-30">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6 valign">
                    <div class="content full-width">
                        <div class="sec-head mb-30">
                            <h6 class="sub-title mb-15 main-color">My Educational Information </h6>
                            <h2>Lead product designer <br> and art director.</h2>
                            <div class="text mt-15">
                                <p>We shifted our talents to frontier science because we wanted our work
                                    to have tangible, human-positive impact.</p>
                            </div>
                        </div>
                        <div class="info-author mt-40 pt-40 bord-thin-top">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="d-flex align-items-center mb-20">
                                        <div>
                                            <h6 class="nowrap fz-16">Name :</h6>
                                        </div>
                                        <div class="ml-20">
                                            <p class="fz-14">Abir Azmyne</p>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <h6 class="nowrap fz-16">Address :</h6>
                                        </div>
                                        <div class="ml-20">
                                            <p class="fz-14">Dhaka, Bangladesh</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-center mb-20">
                                        <div>
                                            <h6 class="nowrap fz-16">Phone :</h6>
                                        </div>
                                        <div class="ml-20">
                                            <p class="fz-14">+88 01797306861</p>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <h6 class="nowrap fz-16">Email :</h6>
                                        </div>
                                        <div class="ml-20">
                                            <p class="fz-14">abirazmyne0011@gmail.com</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="#0" class="butn butn-md main-colorbg radius-30 mt-40">
                            <span class="text-dark">Dwonload CV</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>


    </section>

    <!-- ==================== End about ==================== -->

    <section class="container">

        <div class="row collegediv ">

            <div class="col-lg-3 ">
                <div class=" collegeimgbox">
                    <img src="{{asset('/')}}website/assets/imgs/my/education/2.jpg" alt="" class=" collegeimg ratio-4x3">
                </div>

            </div>

            <div class="col-lg-9">

                <div class="card">
                    <ul class="list-group list-group-flush">
                        <li class="linkgroup"> <b>BSc: </b> Computing Infromation System (CIS) </li>
                        <li class="linkgroup"> <b>University: </b>Daffodil International University</li>
                        <li class="linkgroup"> <b>Faculty: </b>FSIT</li>
                        <li class="linkgroup"> <b>Passing Year: </b>Feb 09 2023</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row collegediv ">

            <div class="col-lg-3 ">
                <div class=" collegeimgbox">
                    <img src="{{asset('/')}}website/assets/imgs/my/education/3.jpg" alt="" class=" collegeimg ratio-4x3">
                </div>

            </div>

            <div class="col-lg-9">

                <div class="card">
                    <ul class="list-group list-group-flush">
                        <li class="linkgroup"> <b>Exam: </b> Higher Secondary Certificate (HSC)</li>
                        <li class="linkgroup"> <b>College: </b>BAF Shaheen College Jashore</li>
                        <li class="linkgroup"> <b>Year: </b>2015-2017</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row collegediv ">

            <div class="col-lg-3 ">
                <div class=" collegeimgbox">
                    <img src="{{asset('/')}}website/assets/imgs/my/education/1.jpg" alt="" class=" collegeimg ratio-4x3">
                </div>

            </div>

            <div class="col-lg-9">

                <div class="card">
                    <ul class="list-group list-group-flush">
                        <li class="linkgroup"> <b>Exam: </b> Secondary School Certificate (SSC)</li>
                        <li class="linkgroup"> <b>College: </b>Municipal Preparatory High School, Jashore</li>
                        <li class="linkgroup"> <b>Year: </b>2013-2015</li>
                    </ul>
                </div>
            </div>
        </div>

    </section>




@endsection
