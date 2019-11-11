@extends('front-end.layouts.app_front-end')
@section('content')
    <section class="tj-cab-collection" style="padding: 4rem 0 80px;">
        <div class="container">
            <!-- search cate -->
            <div class="search-cate">
                <form action="">
                    <div class="box-combo">
                        <div class="field-outer">
                        <select name="filter_cate col" class="form-control " style="margin-bottom: 10px" id="">
                            <option value="">--Chọn danh mục--</option>
                            <option value="">shopcayphongthuy.ml</option>
                            <option value="">hongson2</option>
                            <option value="">eqweqweqew</option>
                        </select>
                        </div>
                        <div class="field-outer">

                            <select name="filte_city" class="form-control pb-2" style="margin-bottom: 10px" id="">
                                <option value="">--Chọn chỗ--</option>
                                <option value="">1</option>
                                <option value="">2</option>
                            </select>
                        </div>
                        <div class="field-outer">

                            <select name="filte_city" class="form-control pb-2" style="margin-bottom: 10px" id="">
                                <option value="">--Chọn thành phố--</option>
                                <option value="">1</option>
                                <option value="">2</option>
                            </select>
                        </div>
                        <div class="field-outer">
                            <div class="bt_search">
                                <a href="#">Tìm kiếm</a>
                            </div>
                        </div>
                </form>
            </div>
            <!-- end -->
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
@endsection
