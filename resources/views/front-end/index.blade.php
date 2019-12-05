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
{{--                        <div class="more_slider">--}}
{{--                            <span><a href="#">Xem thêm</a></span>--}}
{{--                        </div>--}}
                    </div>
                    <img width="100%" src="https://cdn.shortpixel.ai/client/q_lossless,ret_img/https://themes.potenzaglobalsolutions.com/cardealer-wp/wp-content/uploads/revslider/cardealer-slider3/c83b2-ac5dd-02.jpg">
                </div>
                <div class="swiper-slide">
                    <div class="toogle-title">
                        <div class="title-slider animated bouncelnLeft" style="animation-delay: .3s">
                            <p>Nào Nào! cùng chọn xe đi phượt thôi A Ưi</p>
                        </div>
{{--                        <div class="more_slider">--}}
{{--                            <span><a href="#">Xem thêm</a></span>--}}
{{--                        </div>--}}
                    </div>
                    <img width="100%" src="https://files.porsche.com/microsite/boxster-spyder/assets/images/share/03.jpg">
                </div>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
            <!-- Add Arrows -->
            <div class="swiper-button-next "></div>
{{--            <div class="button-slide"><span class="swiper-button-next"></span></div>--}}
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
                            <form method="POST" action="{{ route('search_car') }}" class="trip-type-frm" role="search">
                               @csrf
                                <div class="form-row">
                                    <div class="field-outer">
                                        <span class="fas fa-search"></span >
                                        <select name="cate_id"  class="form-control " style="margin-bottom: 10px" id="">
                                            <option  value="">--Chọn danh mục--</option>
                                            @foreach($category as $key => $id)
                                                <option value="{{ $id->id }}">{{ $id->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="field-outer col">
                                        <span class="fas fa-search"></span>
                                        <select name="model_id" class="form-control " style="margin-bottom: 10px" id="">
                                            <option  value="0" selected disabled>--Chọn hãng xe --</option>
                                            @foreach($model_car as $model_id)
                                                <option value="{{ $model_id->id }}">{{ $model_id->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="field-outer">
                                        <span class="fas fa-calendar-alt"></span>
                                        <select name="city_id" class="form-control pb-2" style="margin-bottom: 10px" id="select_city">
                                            <option value="">--Chọn thành phố--</option>
                                            @foreach($city as $key => $id)
                                                    <option id="distri" value="{{ $id->id }}" >{{ $id->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="field-outer">
                                        <span class="far fa-clock"></span>
                                        <select name="district_id" class="form-control pb-2" style="margin-bottom: 10px" id="select_district">
                                            <option value="">--chọn quận huyện --</option>

                                        </select>
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
    <!--Welcome Section Content End-->
    <section class="tj-cab-collection">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="tj-heading-style">
                        <h3>Xe Nổi Bật</h3>
                        <h4>Những mẫu xe đang được ưa chuộng nhất năm nay</h4>
                    </div>
                </div>
                <div class="cab-col-outer">
                    <!--Fleet Grid Box Start-->
                    @foreach($car as $key => $id)
                    <div class="col-md-6 col-sm-6">
                        <div class="fleet-grid-box">
                            <!--Fleet Grid Thumb Start-->
                            <a href="{{ route('detail', $id->id) }}">
                            <figure class="fleet-thumb">
                                <img src="{{ asset('image_upload/img_vehicle/'.$id->image )}}" height="313" alt="">

                                <figcaption class="fleet-caption">
                                    <div class="price-box">
                                        <strong>$190 <span>/ day</span></strong>
                                    </div>
                                    <span class="rated">Top Rated</span>
                                </figcaption>
                            </figure>
                            </a>
                            <!--Fleet Grid Thumb End-->
                            <!--Fleet Grid Text Start-->
                            <div class="fleet-info-box">
                                <div class="fleet-info">
                                    <h3 data-toggle="tooltip" title="2017 Chevrolet Pepe" >{{ $id->name }}</h3>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>

                                    <ul class="fleet-meta">
                                        <li><i class="fas fa-taxi"></i>Luxery</li>
                                        <li><i class="fas fa-user-circle"></i>{{ $id->seat }} hành khách</li>
{{--                                        <li><i class="fas fa-tachometer-alt"></i>5.6/100 MPG</li>--}}
                                    </ul>
                                </div>
                                <a href="{{ route('detail', $id->id) }}" class="tj-btn2">Book Now <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                            </div>
                            <!--Fleet Grid Text End-->
                        </div>
                    </div>
                    @endforeach
                    <!--Fleet Grid Box End-->
                </div>
            </div>
        </div>
    </section>
    <!-- comment service-->
    <section class="tj-promo-offer" style="background-attachment: fixed;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="promo-box">
                        <div class="offer">
                        <h3 id="content-offer">Đăng ký nhận thông tin ưu đãi từ <span>PrimeCar</span> lên tới 50%</h3>
                        </div>
                        <div class="reEmail" style="animation-delay: .3s">
                            <h3 id="">Đăng ký nhận thông tin ưu đãi từ <span>PrimeCar</span> lên tới 60%</h3>
                        </div>
                        <a href="javascript:;" id="regiterEmail">Đăng ký nhận thông tin  <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
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
    <section class="tj-news" style="padding:0">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="tj-heading-style" >
                        <h3>Tin nổi bật</h3>
                        <p>Chúng tôi đem đến cho bạn những thông tin  mới nhất về xe.<br> Cập nhật tin tức 24/7 những vấn đề nóng hổi</p>
                    </div>
                </div>
                <!--Newsbox Content Start-->
                @foreach($show_news as $key => $news_id)@unset($show_news[$key])

                <div class="col-md-4 col-sm-6">
                    <div class="news-box">
                        <!--Newsbox Thumb Start-->
                        <a href="{{ route('detail_news',$news_id->id) }}">
                        <figure>
                            <img src="{{    asset('image_upload/post/'.$news_id->image_posts)}}" height="245" width="360" alt=""/>
                        </figure>
                        </a>
                        <!--Newsbox Thumb End-->
                        <!--News Detail Content Start-->
                        <div class="news-detail">
                            <a href="{{ route('detail_news',$news_id->id) }}">
                            <h4>{{ $news_id->title }}</h4>
                            </a>
                            <p>{{ $news_id->summary }}</p>
                            <ul>
                                <li><i class="far fa-clock"></i> Sep 19, 2018</li>
                                <li><i class="far fa-comments"></i> 29</li>
                            </ul>
                        </div>
                        <!--News Detail Content End-->
                    </div>
                </div>
                @break($key==1)
            @endforeach
                <!--News List Content Start-->
                <div class="col-md-4 col-sm-12">
                    <div class="news-list">
                        <!--News Outer Content Start-->
                        <ul class="news-outer">
                            @foreach($show_news as $key => $id_news)
                            <li>
                                <a href="{{ route('detail_news',$id_news->id) }}">
                                    <figure>
                                        <img src="{{    asset('image_upload/post/'.$id_news->image_posts)}}" height="90" width="90" alt=""/>
                                    </figure>
                                </a>
                                <div class="news-info">
                                    <a href="{{ route('detail_news',$id_news->id) }}">
                                    <h4>{{ $id_news->title }}</h4>
                                        <a href="{{ route('detail_news',$id_news->id) }}">
                                    <ul class="news-meta">
                                        <li><i class="far fa-clock"></i> Sep 19, 2018</li>
                                        <li><i class="far fa-comments"></i> 29</li>
                                    </ul>
                                </div>
                            </li>
                            @endforeach
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
            loop:true,
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
    //    animation
        $(".reEmail").hide();
        $('#regiterEmail').click(function () {
            $('#content-offer').slideUp(1000);
            $(".reEmail").show().slideDown(5000);
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
