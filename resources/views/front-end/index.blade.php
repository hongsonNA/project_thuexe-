@extends('front-end.layouts.app_front-end')

@section('content')
    <!-- CONTENT AREA -->
    <!--Header Content End-->
    <!--Header Banner Content Start-->
    <style></style>
    <section class="tj-banner-form">
        <div class="container">
            <div class="row">
                <!--Header Banner Caption Content Start-->
                <div class="col-md-8 col-sm-7">
                    <div class="banner-caption">
                        <div class="banner-inner bounceInLeft animated delay-2s">
                            <strong>More recently with desktop publishing software ncluding versions</strong>
                            <h2>Upto 25% off on first booking through your app</h2>
                            <div class="banner-btns">

                            </div>
                        </div>
                    </div>
                </div>
                <!--Header Banner Caption Content End-->
                <!--Header Banner Form Content Start-->
                <div class="col-md-4 col-sm-5">
                    <div class="trip-outer">
                        <div class="trip-type-tabs">
                            <ul class="nav nav-tabs" style="width: 95.4%;text-align: center">
                                <li class="active" style="width: 100%" ><a href="#one-way" data-toggle="tab">One Way</a></li>
{{--                                <li><a href="#two-way" data-toggle="tab">Two Way</a></li>--}}
                            </ul>
                        </div>
                        <!--Banner Tab Content Start-->
                        <div class="tab-content">
                            <div class="tab-pane active" id="one-way">
                                <!--Banner Form Content Start-->
                                <form method="POST" class="trip-type-frm">
                                    <div class="field-outer">
                                        <span class="fas fa-search"></span >
                                        <select name="filter_cate " class="form-control " style="margin-bottom: 10px" id="">
                                            <option value="">--Chọn danh mục--</option>
                                            <option value="">1</option>
                                            <option value="">2</option>
                                        </select>
                                    </div>
                                    <div class="field-outer">
                                        <span class="fas fa-search"></span>
                                        <select name="filte_seat" class="form-control " style="margin-bottom: 10px" id="">
                                            <option value="">--Chọn chỗ--</option>
                                            <option value="">1</option>
                                            <option value="">2</option>
                                        </select>
                                    </div>
                                    <div class="field-outer">
                                        <span class="fas fa-calendar-alt"></span>
                                        <select name="filte_city" class="form-control pb-2" style="margin-bottom: 10px" id="">
                                            <option value="">--Chọn thành phố--</option>
                                            <option value="">1</option>
                                            <option value="">2</option>
                                        </select>
                                    </div>
                                    <div class="field-outer">
                                        <span class="far fa-clock"></span>
                                        <select name="district" class="form-control pb-2" style="margin-bottom: 10px" id="">
                                            <option value="">--chọn quận huyện --</option>
                                            <option value="">1</option>
                                            <option value="">2</option>
                                        </select>
                                    </div>
                                    <div class="field-outer">
                                        <span class="far fa-clock"></span>
                                        <input type="date" name="date_book" class="form-control" style="margin-bottom: 10px">
                                    </div>
                                    <div class="field-outer" >
                                        <span class="far fa-clock"></span>
                                        <input type="date" name="date_drop" class="form-control" >
                                    </div>
                                    <div class="field-outer">
                                        <input type="checkbox" name="promo_code" id="promo_code">
                                        <label for="promo_code">I Have Promotional Code</label>
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
    </section>
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
                                    <h3>2017 Chevrolet Pepe</h3>
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
                                    <h3>Nissan Vela 201</h3>
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
                                <img src="{{ asset('front-end-css/images/car-fleet3.jpg')}}" alt="">
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
                                    <h3>Mitshubishi Lander</h3>
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
                                    <h3>Renault Sedan</h3>
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
    <!--Booking Deals Section Start-->

    <!--Booking Deals Section End-->
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
                                </div>
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
    <!--Call To Action 2 Content Start-->

    <!--Call To Action 2 Content End-->
    <!--Footer Content Start-->
    <section class="tj-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="about-widget widget">
                        <h3>About PrimeCab</h3>
                        <p>Search for will uncover many web sites variables onto of passages of lorem ipsum available
                            but the majority the words all predefined humour to met chunks recently with desktop.</p>
                        <ul class="fsocial-links">
                            <li><a href="http://www.facebook.com/"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="http://www.twitter.com/"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="http://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="http://www.pinterest.com/"><i class="fab fa-pinterest-p"></i></a></li>
                            <li><a href="http://www.instagram.com/"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="links-widget widget">
                        <h3>Explore Links</h3>
                        <ul class="flinks-list">
                            <li><i class="far fa-folder"></i><a href="#">Coupons</a></li>
                            <li><i class="far fa-folder"></i><a href="#">Sitemap</a></li>
                            <li><i class="far fa-folder"></i><a href="#">Cancellation</a></li>
                            <li><i class="far fa-folder"></i><a href="#">Terms</a></li>
                            <li><i class="far fa-folder"></i><a href="#">Privacy Policy</a></li>
                            <li><i class="far fa-folder"></i><a href="#">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="recent-tweets widget">
                        <h3>Recent Tweets</h3>
                        <div class="tj-tweets"></div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="contact-info widget">
                        <h3>Contact Info</h3>
                        <ul class="contact-box">
                            <li>
                                <i class="fas fa-home" aria-hidden="true"></i> 10A, PrimeCab, San Andreno, United
                                States.
                            </li>
                            <li>
                                <i class="far fa-envelope-open"></i>
                                <a href="mailto:primecab@booking.com">
                                    primecab@booking.com</a>
                            </li>
                            <li>
                                <i class="fas fa-phone-square"></i>
                                +1-333-444-555
                            </li>
                            <li>
                                <i class="fas fa-globe-asia"></i>
                                <a href="www.primecab.html">www.primecab.com</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Footer Content End-->
    <!--Footer Copyright Start-->
    <section class="tj-copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <p>&copy; Copyrights 2018 <a href="home-1.html">Prime Cab</a>. All Rights Reserved.</p>
                </div>
                <div class="col-md-6 col-sm-6">
                    <ul class="payment-icons">
                        <li><i class="fab fa-cc-visa"></i></li>
                        <li><i class="fab fa-cc-mastercard"></i></li>
                        <li><i class="fab fa-cc-paypal"></i></li>
                        <li><i class="fab fa-cc-discover"></i></li>
                        <li><i class="fab fa-cc-jcb"></i></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--Footer Copyright End-->
    <!-- /CONTENT AREA -->
@endsection
