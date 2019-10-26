@extends('front-end.layouts.app_front-end')
@section('content')
    <div class="tj-inner-banner">
        <div class="container">
            <h2>About</h2>
        </div>
    </div>
    <!-- banner -->
    <!-- breadcrumb -->
    <div class="tj-breadcrumb">
        <div class="container">
            <ul class="breadcrumb-list">
                <li><a href="home-1.html">Home</a></li>
                <li class="active">About</li>
            </ul>
        </div>
    </div>
    <!--end breadcrumd -->
    <!-- who are you -->
    <section class="tj-aboutus">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-7">
                    <div class="about-info bounceInLeft animated delay-2s">
                        <div class="tj-heading-style">
                            <h3>Who We Are</h3>
                        </div>
                        <p>Lorem Ipsum passages, and more recently with desktop publishing software like aldus pageMaker including versions of all the Lorem Ipsum generators on thet Internet tends to repeat predefined chunks as necessary, making this an web evolved over the years, sometimes by accident.</p>
                        <a href="https://themesjungle.net/html/prime-cab/fleet-list.html">See all Vehicles<i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                        <ul class="facts-list">
                            <li>
                                <strong class="fact-count">100</strong>
                                <i class="fa fa-percent"></i>
                                <span>Happy Customer</span>
                            </li>
                            <li>
                                <strong class="fact-count">200</strong>
                                <i class="fas fa-plus"></i>
                                <span>Luxury Cars</span>
                            </li>
                            <li>
                                <strong class="fact-count">12,000</strong>
                                <i class="fas fa-arrow-up"></i>
                                <span>Kilometers Driven</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-sm-5">
                    <div class="about-banner bounceInRight animated delay-2s">
                        <img src="{{asset('front-end-css/images/about-img.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end -->
    <section class="tj-clients">
        <div class="container">
            <!--Partners List Section Start-->
            <div class="partners-list owl-carousel owl-theme owl-responsive-1199 owl-loaded">





                <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-1140px, 0px, 0px); transition: all 0s ease 0s; width: 3420px;"><div class="owl-item cloned" style="width: 228px; margin-right: 0px;"><div class="partner-item">
                                <a href="#"><img src="{{asset('front-end-css/images/client-logo1.png')}}" alt=""></a>
                            </div></div><div class="owl-item cloned" style="width: 228px; margin-right: 0px;"><div class="partner-item">
                                <a href="#"><img src="{{asset('front-end-css/images/client-logo2.png')}}" alt=""></a>
                            </div></div><div class="owl-item cloned" style="width: 228px; margin-right: 0px;"><div class="partner-item">
                                <a href="#"><img src="{{asset('front-end-css/images/client-logo3.png')}}" alt=""></a>
                            </div></div><div class="owl-item cloned" style="width: 228px; margin-right: 0px;"><div class="partner-item">
                                <a href="#"><img src="{{asset('front-end-css/images/client-logo4.png')}}" alt=""></a>
                            </div></div><div class="owl-item cloned" style="width: 228px; margin-right: 0px;"><div class="partner-item">
                                <a href="#"><img src="{{asset('front-end-css/images/client-logo5.png')}}" alt=""></a>
                            </div></div><div class="owl-item active" style="width: 228px; margin-right: 0px;"><div class="partner-item">
                                <a href="#"><img src="{{asset('front-end-css/images/client-logo1.png')}}" alt=""></a>
                            </div></div><div class="owl-item active" style="width: 228px; margin-right: 0px;"><div class="partner-item">
                                <a href="#"><img src="{{asset('front-end-css/images/client-logo2.png')}}" alt=""></a>
                            </div></div><div class="owl-item active" style="width: 228px; margin-right: 0px;"><div class="partner-item">
                                <a href="#"><img src="{{asset('front-end-css/images/client-logo3.png')}}" alt=""></a>
                            </div></div><div class="owl-item active" style="width: 228px; margin-right: 0px;"><div class="partner-item">
                                <a href="#"><img src="{{asset('front-end-css/images/client-logo4.png')}}" alt=""></a>
                            </div></div><div class="owl-item active" style="width: 228px; margin-right: 0px;"><div class="partner-item">
                                <a href="#"><img src="{{asset('front-end-css/images/client-logo5.png')}}" alt=""></a>
                            </div></div><div class="owl-item cloned" style="width: 228px; margin-right: 0px;"><div class="partner-item">
                                <a href="#"><img src="{{asset('front-end-css/images/client-logo1.png')}}" alt=""></a>
                            </div></div><div class="owl-item cloned" style="width: 228px; margin-right: 0px;"><div class="partner-item">
                                <a href="#"><img src="{{asset('front-end-css/images/client-logo2.png')}}" alt=""></a>
                            </div></div><div class="owl-item cloned" style="width: 228px; margin-right: 0px;"><div class="partner-item">
                                <a href="#"><img src="{{asset('front-end-css/images/client-logo3.png')}}" alt=""></a>
                            </div></div><div class="owl-item cloned" style="width: 228px; margin-right: 0px;"><div class="partner-item">
                                <a href="#"><img src="{{asset('front-end-css/images/client-logo4.png')}}" alt=""></a>
                            </div></div><div class="owl-item cloned" style="width: 228px; margin-right: 0px;"><div class="partner-item">
                                <a href="#"><img src="{{asset('front-end-css/images/client-logo5.png')}}" alt=""></a>
                            </div></div></div></div><div class="owl-controls"><div class="owl-nav"><div class="owl-prev" style="display: none;"></div><div class="owl-next" style="display: none;"></div></div><div class="owl-dots" style="display: none;"></div></div></div>
            <!--Partners List Section End-->
        </div>
    </section>
    <section class="tj-team slideInLeft animated delay-3s">
        <div class="container">
            <div class="row">
                <div class="tj-heading-style">
                    <h3>Our Drivers</h3>
                    <p>Lorem Ipsum passages, and more recently with desktop publishing software like aldus</p>
                </div>
                <div class="col-md-3 col-sm-3">
                    <div class="member-box">
                        <figure class="member-img">
                            <img src="{{asset('front-end-css/images/team-img1.png')}}" alt="">
                            <div class="member-overlay">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </figure>
                        <div class="member-info">
                            <strong class="name">John Martin</strong>
                            <span>Luxury Driver</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3">
                    <div class="member-box">
                        <figure class="member-img">
                            <img src="{{asset('front-end-css/images/team-img2.png')}}" alt="">
                            <div class="member-overlay">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </figure>
                        <div class="member-info">
                            <strong class="name">Paul Heyman</strong>
                            <span>Van Driver</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3">
                    <div class="member-box">
                        <figure class="member-img">
                            <img src="{{asset('front-end-css/images/team-img3.png')}}" alt="">
                            <div class="member-overlay">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </figure>
                        <div class="member-info">
                            <strong class="name">Dwayne Johnson</strong>
                            <span>Limo Driver</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3">
                    <div class="member-box">
                        <figure class="member-img">
                            <img src="{{asset('front-end-css/images/team-img4.png')}}" alt="">
                            <div class="member-overlay">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </figure>
                        <div class="member-info">
                            <strong class="name">Fernandez</strong>
                            <span>Suv Driver</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
        @endsection

