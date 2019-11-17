@extends('front-end.layouts.app_front-end')

@section('content')
    <!-- CONTENT AREA -->
    <!--Header Content End-->
    <style>
        .swiper-container {
            width: 100%;
            height: 480px;
            overflow: hidden;

        }
        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;

            /* Center slide text vertically */
            display: -webkit-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            align-items: center;
        }
        .tj-cab-collection{
            float:left;
            width:100%;
            padding:28rem 0 80px;
        }
    </style>
    <div class="boxs-form" style="position: relative;margin-top: 17.5rem;">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="toogle-title">
                       <div class="title-slider">
                           <p>Nào Nào! cùng chọn xe đi phượt thôi A Ưi</p>
                       </div>
                        <div class="more_slider">
                            <span><a href="#">Xem thêm</a></span>
                        </div>
                    </div>
                    <img width="100%" src="https://cdn.shortpixel.ai/client/q_lossless,ret_img/https://themes.potenzaglobalsolutions.com/cardealer-wp/wp-content/uploads/revslider/cardealer-slider3/c83b2-ac5dd-02.jpg">
                </div>
                <div class="swiper-slide">
                    <div class="toogle-title">
                        <div class="title-slider animated bouncelnLeft" style="animation-delay: .3s">
                            <p>Nào Nào! cùng chọn xe đi phượt thôi A Ưi</p>
                        </div>
                        <div class="more_slider">
                            <span><a href="#">Xem thêm</a></span>
                        </div>
                    </div>
                    <img width="100%" src="https://files.porsche.com/microsite/boxster-spyder/assets/images/share/03.jpg">
                </div>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
            <!-- Add Arrows -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <!-- -->
        </div>
    {{-- form-book-car    --}}
    <div class="col-md-10 col-md-offset-1 search-car">
        <div class="row">
            <div class="col-md-12 col-sm-5" style="">
                <div class="trip-outer form-car">
{{--                    <div class="trip-type-tabs">--}}
{{--                        <ul class="nav nav-tabs" style="width: 95.4%;text-align: center">--}}
{{--                            <li class="active" style="width: 100%" ><a href="#one-way" data-toggle="tab">One Way</a></li>--}}
{{--                            <li><a href="#two-way" data-toggle="tab">Two Way</a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
                    <!--Banner Tab Content Start-->
                    <div class="tab-content">
                        <div class="tab-pane active" id="one-way">
                            <!--Banner Form Content Start-->
                            <form method="GET" class="trip-type-frm">
                                <div class="form-row">
                                    <div class="field-outer">
                                        <span class="fas fa-search"></span >
                                        <select name="filter_cate col"  class="form-control " style="margin-bottom: 10px" id="">
                                            <option value="">--Chọn danh mục--</option>
                                            @foreach($category as $key => $id)
                                                <option value="">{{ $id->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="field-outer col">
                                        <span class="fas fa-search"></span>
                                        <select name="filte_seat" class="form-control " style="margin-bottom: 10px" id="">
                                            <option value="">--Chọn chỗ--</option>
                                            <option value="">1</option>
                                            <option value="">2</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="field-outer">
                                        <span class="fas fa-calendar-alt"></span>
                                        <select name="filte_city" class="form-control pb-2" style="margin-bottom: 10px" id="select_city">
                                            <option value="">--Chọn thành phố--</option>
                                            @foreach($city as $key => $id)
                                                    <option id="distri" value="{{ $id->id }}" >{{ $id->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="field-outer">
                                        <span class="far fa-clock"></span>
                                        <select name="district" class="form-control pb-2" style="margin-bottom: 10px" id="select_district">
                                            <option value="">--chọn quận huyện --</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="field-outer">
                                        <span class="far fa-clock"></span>
                                        <input type="date" name="date_book" class="form-control" style="margin-bottom: 10px">
                                    </div>
                                    <div class="field-outer" >
                                        <span class="far fa-clock"></span>
                                        <input type="date" name="date_drop" class="form-control" >
                                    </div>
                                </div>

                                <button type="submit" class="search-btn">Search Cabs <i
                                        class="fa fa-arrow-circle-right" aria-hidden="true"></i></button>
                            </form>
                            <!--Banner Form Content End-->
                        </div>
                    </div>
                    <!--Banner Tab Content End-->
                </div>
            </div>
            <!--Header Banner Form Content End-->
        </div>
    </div>
    </div>
    {{-- end--}}
    <!--Header Banner Content Start-->

{{--    <section class="tj-banner-form">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <!--Header Banner Caption Content Start-->--}}
{{--                <div class="col-md-8 col-sm-7">--}}
{{--                    <div class="banner-caption">--}}
{{--                        <div class="banner-inner bounceInLeft animated delay-2s">--}}
{{--                            <strong>More recently with desktop publishing software ncluding versions</strong>--}}
{{--                            <h2>Upto 25% off on first booking through your app</h2>--}}
{{--                            <div class="banner-btns">--}}

{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!--Header Banner Caption Content End-->--}}
{{--                <!--Header Banner Form Content Start-->--}}
{{--                <div class="col-md-12 col-sm-5" style="padding-left: 50px;">--}}
{{--                    <div class="trip-outer">--}}
{{--                        <div class="trip-type-tabs">--}}
{{--                            <ul class="nav nav-tabs" style="width: 95.4%;text-align: center">--}}
{{--                                <li class="active" style="width: 100%" ><a href="#one-way" data-toggle="tab">One Way</a></li>--}}
{{--                                <li><a href="#two-way" data-toggle="tab">Two Way</a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                        <!--Banner Tab Content Start-->--}}
{{--                        <div class="tab-content">--}}
{{--                            <div class="tab-pane active" id="one-way">--}}
{{--                                <!--Banner Form Content Start-->--}}
{{--                                <form method="POST" class="trip-type-frm">--}}
{{--                                    <div class="form-row">--}}
{{--                                        <div class="field-outer">--}}
{{--                                            <span class="fas fa-search"></span >--}}
{{--                                            <select name="filter_cate col" class="form-control " style="margin-bottom: 10px" id="">--}}
{{--                                                <option value="">--Chọn danh mục--</option>--}}
{{--                                                @foreach($category as $key => $id)--}}
{{--                                                <option value="">{{ $id->name }}</option>--}}
{{--                                                @endforeach--}}
{{--                                            </select>--}}
{{--                                        </div>--}}
{{--                                        <div class="field-outer col">--}}
{{--                                            <span class="fas fa-search"></span>--}}
{{--                                            <select name="filte_seat" class="form-control " style="margin-bottom: 10px" id="">--}}
{{--                                                <option value="">--Chọn chỗ--</option>--}}
{{--                                                <option value="">1</option>--}}
{{--                                                <option value="">2</option>--}}
{{--                                            </select>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="form-row">--}}
{{--                                    <div class="field-outer">--}}
{{--                                        <span class="fas fa-calendar-alt"></span>--}}
{{--                                        <select name="filte_city" class="form-control pb-2" style="margin-bottom: 10px" id="">--}}
{{--                                            <option value="">--Chọn thành phố--</option>--}}
{{--                                            <option value="">1</option>--}}
{{--                                            <option value="">2</option>--}}
{{--                                        </select>--}}
{{--                                    </div>--}}
{{--                                    <div class="field-outer">--}}
{{--                                        <span class="far fa-clock"></span>--}}
{{--                                        <select name="district" class="form-control pb-2" style="margin-bottom: 10px" id="">--}}
{{--                                            <option value="">--chọn quận huyện --</option>--}}
{{--                                            <option value="">1</option>--}}
{{--                                            <option value="">2</option>--}}
{{--                                        </select>--}}
{{--                                    </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="form-row">--}}
{{--                                    <div class="field-outer">--}}
{{--                                        <span class="far fa-clock"></span>--}}
{{--                                        <input type="date" name="date_book" class="form-control" style="margin-bottom: 10px">--}}
{{--                                    </div>--}}
{{--                                    <div class="field-outer" >--}}
{{--                                        <span class="far fa-clock"></span>--}}
{{--                                        <input type="date" name="date_drop" class="form-control" >--}}
{{--                                    </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="field-outer">--}}
{{--                                        <input type="checkbox" name="promo_code" id="promo_code">--}}
{{--                                        <label for="promo_code">I Have Promotional Code</label>--}}
{{--                                    </div>--}}
{{--                                    <button type="submit" class="search-btn">Search Cabs <i--}}
{{--                                            class="fa fa-arrow-circle-right" aria-hidden="true"></i></button>--}}
{{--                                </form>--}}
{{--                                <!--Banner Form Content End-->--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!--Banner Tab Content End-->--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!--Header Banner Form Content End-->--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    <!-- end banner -->
    <!--Header Banner Content End-->
    <!--Offer Content Start-->
    <!--Offer Content End-->
    <!--Welcome Section Content Start-->

    <!--Welcome Section Content End-->
    <section class="tj-cab-collection">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="tj-heading-style">
                        <h3>Cab Collections</h3>
                        <p>Lorem Ipsum passages, and more recently with desktop publishing software like aldus pageMaker including versions.</p>
                    </div>
                </div>
                <div class="cab-col-outer">
                    <!--Fleet Grid Box Start-->
                    <div class="col-md-6 col-sm-6">
                        <div class="fleet-grid-box">
                            <!--Fleet Grid Thumb Start-->
                            <figure class="fleet-thumb">
                                <img src="{{ asset('front-end-css/images/car-fleet1.jpg')}}" alt="">
                                <figcaption class="fleet-caption">
                                    <div class="price-box">
                                        <strong>$190 <span>/ day</span></strong>
                                    </div>
                                    <span class="rated">Top Rated</span>
                                </figcaption>
                            </figure>
                            <!--Fleet Grid Thumb End-->
                            <!--Fleet Grid Text Start-->
                            <div class="fleet-info-box">
                                <div class="fleet-info">
                                    <h3 data-toggle="tooltip" title="2017 Chevrolet Pepe" >2017 Chevrolet Pepe</h3>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>

                                    <ul class="fleet-meta">
                                        <li><i class="fas fa-taxi"></i>Luxery</li>
                                        <li><i class="fas fa-user-circle"></i>2 Passengers</li>
                                        <li><i class="fas fa-tachometer-alt"></i>5.6/100 MPG</li>
                                    </ul>
                                </div>
                                <a href="fleet-grid.html" class="tj-btn2">Book Now <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                            </div>
                            <!--Fleet Grid Text End-->
                        </div>
                    </div>
                    <!--Fleet Grid Box End-->

                    <!--Fleet Grid Box Start-->
                    <div class="col-md-6 col-sm-6">
                        <div class="fleet-grid-box">
                            <!--Fleet Grid Thumb Start-->
                            <figure class="fleet-thumb">
                                <img src="{{ asset('front-end-css/images/car-fleet2.jpg')}}" alt="">
                                <figcaption class="fleet-caption">
                                    <div class="price-box">
                                        <strong>$240 <span>/ day</span></strong>
                                    </div>
                                    <span class="rated">Top Rated</span>
                                </figcaption>
                            </figure>
                            <!--Fleet Grid Thumb End-->
                            <!--Fleet Grid Text Start-->
                            <div class="fleet-info-box">
                                <div class="fleet-info">
                                    <h3 title="Nissan Vela 201" data-toggle="tooltip" >Nissan Vela 201</h3>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>

                                    <ul class="fleet-meta">
                                        <li><i class="fas fa-taxi"></i>Luxery</li>
                                        <li><i class="fas fa-user-circle"></i>5 Passengers</li>
                                        <li><i class="fas fa-tachometer-alt"></i>5.6/100 MPG</li>
                                    </ul>
                                </div>
                                <a href="fleet-grid.html" class="tj-btn2">Book Now <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                            </div>
                            <!--Fleet Grid Text End-->
                        </div>
                    </div>
                    <!--Fleet Grid Box End-->

                    <!--Fleet Grid Box Start-->
                    <div class="col-md-6 col-sm-6">
                        <div class="fleet-grid-box">
                            <!--Fleet Grid Thumb Start-->
                            <figure class="fleet-thumb">
                                <img src="{{ asset('front-end-css/images/car-fleet3.jpg')}}"  alt="">
                                <figcaption class="fleet-caption">
                                    <div class="price-box">
                                        <strong>$185 <span>/ day</span></strong>
                                    </div>
                                    <span class="rated">Top Rated</span>
                                </figcaption>
                            </figure>
                            <!--Fleet Grid Thumb End-->
                            <!--Fleet Grid Text Start-->
                            <div class="fleet-info-box">
                                <div class="fleet-info">
                                    <h3 data-toggle="tooltip" title="Mitshubishi Lander">Mitshubishi Lander</h3>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>

                                    <ul class="fleet-meta">
                                        <li><i class="fas fa-taxi"></i>Luxery</li>
                                        <li><i class="fas fa-user-circle"></i>6 Passengers</li>
                                        <li><i class="fas fa-tachometer-alt"></i>5.6/100 MPG</li>
                                    </ul>
                                </div>
                                <a href="fleet-grid.html" class="tj-btn2">Book Now <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                            </div>
                            <!--Fleet Grid Text End-->
                        </div>
                    </div>
                    <!--Fleet Grid Box End-->

                    <!--Fleet Grid Box Start-->
                    <div class="col-md-6 col-sm-6">
                        <div class="fleet-grid-box">
                            <!--Fleet Grid Thumb Start-->
                            <figure class="fleet-thumb">
                                <img src="{{ asset('front-end-css/images/car-fleet7.jpg')}}" alt="">
                                <figcaption class="fleet-caption">
                                    <div class="price-box">
                                        <strong>$210 <span>/ day</span></strong>
                                    </div>
                                    <span class="rated">Top Rated</span>
                                </figcaption>
                            </figure>
                            <!--Fleet Grid Thumb End-->
                            <!--Fleet Grid Text Start-->
                            <div class="fleet-info-box">
                                <div class="fleet-info">
                                    <h3 data-toggle="tooltip" title="Renault Sedan">Renault Sedan</h3>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>

                                    <ul class="fleet-meta">
                                        <li><i class="fas fa-taxi"></i>Luxery</li>
                                        <li><i class="fas fa-user-circle"></i>5 Passengers</li>
                                        <li><i class="fas fa-tachometer-alt"></i>5.6/100 MPG</li>
                                    </ul>
                                </div>
                                <a href="fleet-grid.html" class="tj-btn2">Book Now <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                            </div>
                            <!--Fleet Grid Text End-->
                        </div>
                    </div>
                    <!--Fleet Grid Box End-->

                </div>
            </div>
        </div>
    </section>
    <!-- comment service-->
    <section class="tj-promo-offer">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="promo-box">
                        <h3>Explore more for less &amp; Use coupon code: <span>Prime34</span> to get 15% offer</h3>
                        <a href="register.html">Get More Coupon <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Cab Services Section Start-->
    <section class="tj-services">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-8">
                    <div class="tj-heading-style">
                        <h3>Awesome Services</h3>
                    </div>
                    <!--Service Outer Start-->
                    <div class="tj-service-outer">
                        <!--Service Item Start-->
                        <div class="service-item">
                            <img src="{{ asset('front-end-css/images/service_icon1.png') }}" alt="">
                            <div class="service-info-box">
                                <h4>Restaurants</h4>
                                <p>A more recently with desktop softy too aldus page maker and more recently desk publishing software.</p>
                            </div>
                        </div>
                        <!--Service Item End-->
                        <!--Service Item Start-->
                        <div class="service-item">
                            <img src="{{ asset('front-end-css/images/service_icon2.png')}}" alt="">
                            <div class="service-info-box">
                                <h4>Airports</h4>
                                <p>A more recently with desktop softy too aldus page maker and more recently desk publishing software.</p>
                            </div>
                        </div>
                        <!--Service Item End-->
                        <!--Service Item Start-->
                        <div class="service-item">
                            <img src="{{ asset('front-end-css/images/service_icon3.png')}}" alt="">
                            <div class="service-info-box">
                                <h4>Beaches</h4>
                                <p>A more recently with desktop softy too aldus page maker and more recently desk publishing software.</p>
                            </div>
                        </div>
                        <!--Service Item End-->
                        <!--Service Item Start-->
                        <div class="service-item">
                            <img src="{{ asset('front-end-css/images/service_icon4.png')}}" alt="">
                            <div class="service-info-box">
                                <h4>Hospitals</h4>
                                <p>A more recently with desktop softy too aldus page maker and more recently desk publishing software.</p>
                            </div>
                        </div>
                        <!--Service Item End-->
                    </div>
                    <!--Service Outer End-->
                </div>
                <!--Service Ad Box Section Start-->
                <div class="col-md-4 col-sm-4">
                    <div class="service-ad-box">
                        <div class="fleet-box">
                            <img src="{{asset('front-end-css/images/fleet-banner.jpg')}}" alt="">
                            <div class="ad-info">
                                <h4>Get Benifits worth</h4>
                                <strong class="price">$250</strong>
                                <h5>on booking Prime Cab</h5>
                                <div class="book_fleet">
                                    <a href="contact.html">Grab Now <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Service Ad Box Section End-->
            </div>
        </div>
    </section>
    <!--Cab Services Section End-->
    <!--Testimonials Section Start-->
    <section class="tj-reviews">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="tj-heading-style">
                        <h3>Testimonials</h3>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12">
                    <!--Testimonials Slider Content Start-->
                    <div id="testimonial-slider" class="reviews-slider">
                        <!--Review Item Start-->
                        <div class="review-item">
                            <figure class="img-box">
                                <img src="{{asset('front-end-css/images/testimonial-img1.png')}}" alt=""/>
                            </figure>
                            <div class="review-info">
                                <strong>James Peter</strong>
                                <span class="icon-star-empty icomoon rating"></span>
                                <span class="icon-star-empty icomoon rating"></span>
                                <span class="icon-star-empty icomoon rating"></span>
                                <span class="icon-star-empty icomoon rating"></span>
                                <span class="icon-star-empty icomoon"></span>
                                <div class="review-quote">
                                    <p>Lorem Ipsum passages, and more recently with desktop publish soft like aldus
                                        pageMaker including versions</p>
                                </div>
                            </div>
                        </div>
                        <!--Review Item End-->
                        <!--Review Item Start-->
                        <div class="review-item">
                            <figure class="img-box">
                                <img src="{{asset('front-end-css/images/testimonial-img2.png')}}" alt=""/>
                            </figure>
                            <div class="review-info">
                                <strong>Stefy Grafi</strong>
                                <span class="icon-star-empty icomoon rating"></span>
                                <span class="icon-star-empty icomoon rating"></span>
                                <span class="icon-star-empty icomoon rating"></span>
                                <span class="icon-star-empty icomoon rating"></span>
                                <span class="icon-star-empty icomoon"></span>
                                <div class="review-quote">
                                    <p>Lorem Ipsum passages, and more recently with desktop publish soft like aldus
                                        pageMaker including versions</p>
                                </div>
                            </div>
                        </div>
                        <!--Review Item End-->
                        <!--Review Item Start-->
                        <div class="class"></div>
                        <div class="review-item">
                            <figure class="img-box">
                                <img src="{{asset('front-end-css/images/testimonial-img1.png')}}" alt=""/>
                            </figure>
                            <div class="review-info">
                                <strong>James Peter</strong>
                                <span class="icon-star-empty icomoon rating"></span>
                                <span class="icon-star-empty icomoon rating"></span>
                                <span class="icon-star-empty icomoon rating"></span>
                                <span class="icon-star-empty icomoon rating"></span>
                                <span class="icon-star-empty icomoon"></span>
                                <div class="review-quote">
                                    <p>Lorem Ipsum passages, and more recently with desktop publish soft like aldus
                                        pageMaker including versions</p>
                                </div>
                            </div>
                        </div>
                        <!--Review Item End-->
                    </div>
                    <!--Testimonials Slider Content End-->
                </div>
            </div>
        </div>
    </section>
    <!--Testimonials Section End-->
    <section class="tj-cal-to-action2">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-9">
                    <div class="cta-tagline">
                        <h2>Incredible Destinations at Incredible Deals</h2>
                    </div>
                </div>

                <div class="col-md-3 col-sm-3">
                    <div class="cta-btn">
                        <a href="booking-form.html">Book Now <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--News Content Start-->
    <section class="tj-news">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="tj-heading-style">
                        <h3>Latest News</h3>
                        <p>Lorem Ipsum passages, and more recently with desktop publishing software like aldus pageMaker
                            including versions.</p>
                    </div>
                </div>
                <!--Newsbox Content Start-->
                <div class="col-md-4 col-sm-6">
                    <div class="news-box">
                        <!--Newsbox Thumb Start-->
                        <figure>
                            <img src="{{asset('front-end-css/images/news_img1.jpg')}}" alt=""/>
                        </figure>
                        <!--Newsbox Thumb End-->
                        <!--News Detail Content Start-->
                        <div class="news-detail">
                            <h4>Repeat predefined chunks</h4>
                            <p>A more recently with desktop softy like aldo page maker repeat predefined.</p>
                            <ul>
                                <li><i class="far fa-clock"></i> Sep 19, 2018</li>
                                <li><i class="far fa-comments"></i> 29</li>
                            </ul>
                        </div>
                        <!--News Detail Content End-->
                    </div>
                </div>
                <!--Newsbox Content End-->
                <!--Newsbox Content Start-->
                <div class="col-md-4 col-sm-6">
                    <div class="news-box">
                        <!--Newsbox Thumb Start-->
                        <figure>
                            <img src="{{asset('front-end-css/images/news_img2.jpg')}}" alt=""/>
                        </figure>
                        <!--Newsbox Thumb End-->
                        <!--News Detail Content Start-->
                        <div class="news-detail">
                            <h4>Making it look readable</h4>
                            <p>A more recently with desktop softy like aldo page maker repeat predefined.</p>
                            <ul>
                                <li><i class="far fa-clock"></i> Sep 19, 2018</li>
                                <li><i class="far fa-comments"></i> 29</li>
                            </ul>
                        </div>
                        <!--News Detail Content End-->
                    </div>
                </div>
                <!--Newsbox Content End-->
                <!--News List Content Start-->
                <div class="col-md-4 col-sm-12">
                    <div class="news-list">
                        <!--News Outer Content Start-->
                        <ul class="news-outer">
                            <li>
                                <figure>
                                    <img src="{{asset('front-end-css/images/news_img3.jpg')}}" alt=""/>
                                </figure>
                                <div class="news-info">
                                    <h4>Various versions have evole over the years</h4>
                                    <ul class="news-meta">
                                        <li><i class="far fa-clock"></i> Sep 19, 2018</li>
                                        <li><i class="far fa-comments"></i> 29</li>
                                    </ul>
                                </div>tj-cab-collection
                            </li>
                            <li>
                                <figure>
                                    <img src="{{asset('front-end-css/images/news_img4.jpg')}}" alt=""/>
                                </figure>
                                <div class="news-info">
                                    <h4>A galley of type and scrambe it to make a type</h4>
                                    <ul class="news-meta">
                                        <li><i class="far fa-clock"></i> Sep 19, 2018</li>
                                        <li><i class="far fa-comments"></i> 29</li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <figure>
                                    <img src="{{asset('front-end-css/images/news_img5.jpg')}}" alt=""/>
                                </figure>
                                <div class="news-info">
                                    <h4>Treatise on the theory of ethics very popular</h4>
                                    <ul class="news-meta">
                                        <li><i class="far fa-clock"></i> Sep 19, 2018</li>
                                        <li><i class="far fa-comments"></i> 29</li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                        <!--News Outer Content End-->
                    </div>
                </div>
                <!--News List Content End-->
            </div>
        </div>
    </section>
    <!--News Content End-->
    <!--Footer Copyright End-->
    <!-- /CONTENT AREA -->
    <script src="{{asset('package/js/swiper.min.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <a href="javascript:;"  class="back-top" id="back-to-top" title="Back to top"><i class="fas fa-arrow-circle-up"></i></a>
    <script>
        var swiper = new Swiper('.swiper-container', {
            spaceBetween: 30,
            centeredSlides: true,
            speed: 3000,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>
    <script>
        $(window).scroll(function(){
            if ($(this).scrollTop() > 100) {
                $(".back-top").css("display","block");
            }else{$(".back-top").css("display","none");}
        });
        $("#back-to-top").click(function () {
            $("html, body").animate({scrollTop: 0}, 1000);
        })

    </script>
    <script>
        $(document).ready(function(){
            $( "#select_city" ).change(function () {
                    var city_id = $(this).val();
                    console.log(city_id);
                    if(city_id){
                        $.ajax({
                            type:"get",
                            url:'state/'+city_id,
                            dataType: "json",
                            success:function (res) {
                                if (res){
                                    $('#select_district').empty();
                                    $.each(res,function(key,value){
                                        $("#select_district").append('<option value="'+key+'">'+value+'</option>');
                                    });
                                }
                            }
                        });
                    }
                });
        });

    </script>


@endsection
