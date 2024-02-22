@extends('website.master')

@section('body')


    <!-- ==================== Start about ==================== -->

    <section class="about-crev section-padding position-re" data-scroll-index="2">

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
                                    <img src="{{asset('/')}}website/assets/imgs/intro/freelancer-intro.jpg" alt="">
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
                                            <p class="fz-14">Matthew Perry</p>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <h6 class="nowrap fz-16">Address :</h6>
                                        </div>
                                        <div class="ml-20">
                                            <p class="fz-14">Germany Office 478 Berlin</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-center mb-20">
                                        <div>
                                            <h6 class="nowrap fz-16">Phone :</h6>
                                        </div>
                                        <div class="ml-20">
                                            <p class="fz-14">+1 840 841 25 69</p>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <h6 class="nowrap fz-16">Email :</h6>
                                        </div>
                                        <div class="ml-20">
                                            <p class="fz-14">hello@design.com</p>
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




@endsection
