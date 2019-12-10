@extends('front-end.layouts.app_front-end')
@section('content')
    <style>
        .swiper-container {
            width: 100%;
            height: 100%;
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
    </style>
    <div class="slider-support">
        <!-- Swiper -->
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="http://www.cuuhomienbac.com/wp-content/uploads/2018/07/cuu-ho-giao-thong-tai-ha-dong-2.jpg">
                </div>
                <div class="swiper-slide">
                    <img src="http://butl.vn/wp-content/uploads/2017/08/banner.png" >
                </div>
                <div class="swiper-slide">
                    <img src="http://quyenvanquy.com/wp-content/uploads/2019/07/8888888888888822.png" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="https://www.dothanhoto.com/pictures/745-x-250.jpg" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="https://cuuhooto.net.vn/layout/frontend/images/home-banner.jpg" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="https://sites.google.com/site/dichvucuuhongolanh/_/rsrc/1486784673277/config/customLogo.gif?revision=3" alt="">
                </div>
{{--                <div class="swiper-slide">Slide 7</div>--}}
{{--                <div class="swiper-slide">Slide 8</div>--}}
{{--                <div class="swiper-slide">Slide 9</div>--}}
{{--                <div class="swiper-slide">Slide 10</div>--}}
            </div>
            <!-- Add Pagination -->
          <!--  <div class="swiper-pagination"></div> -->
            <!-- Add Arrows -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
    <div class="container">
        <div class="title-service">
            <h3>Dịch vụ cứu hộ tại chỗ 24/24 của PrimCar</h3>
        </div>
        <div class="block-area support-service">

        <div class="row">

            <div class="col-sm-6">
                <div class="content-support">
                   <h3> Dịch vụ cứu hộ cứu nạn</h3>
                    <p>
                    Tình trạng giao thông phức tạp với lưu lượng dày đặc và cơ sở hạ tầng còn nhiều bất cập khiến người
                    tham gia giao thông thực sự e ngại những rắc rối khi gặp sự cố đâm va hỏng hóc, đặc biệt trong những
                    tình huống khó khăn như giữa đêm tối, thời tiết mưa bão hoặc nơi rừng núi heo hút chưa kể khoản tốn kém
                    không nhỏ cho công tác cứu hộ, sửa chữa xe mà chưa chắc đã được như ý.
</p>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="image_support">
                    <img src="http://cuuhodanang.com/wp-content/gallery/hinh-anh-hoat-dong/layer-135%402x.png" alt="">
                </div>
                <div class="">
                    <div class="icon-support">
                        <a href="tel:0398075729" class="fancybox">
                            <div class="coccoc-alo-phone coccoc-alo-green coccoc-alo-show" id="coccoc-alo-phoneIcon" style="left:0; top: 70%;"><div class="coccoc-alo-ph-circle"></div><div class="coccoc-alo-ph-circle-fill"></div><div class="coccoc-alo-ph-img-circle"></div></div>
                        </a>
                    </div>
                    <div class="phone-nb">

                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- service us -->
        <section class="tj-team slideInLeft animated delay-3s">
            <div class="container">
                <div class="row">
                    <div class="tj-heading-style">
                        <h3>Mô hình dịch vụ</h3>
                        <p></p>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <div class="member-box">
                            <figure class="member-img">
                                <img src="http://localhost/front-end-css/images/24per24.png" alt="">
                                <div class="member-overlay">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                            </figure>
                            <div class="member-info">
                                <strong class="name">Cứu hộ 24/24 </strong>
                                <span>Dịch vụ cứu hộ hoạt động 24/24 kể cả những ngày tết</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <div class="member-box">
                            <figure class="member-img">
                                <img src="http://localhost/front-end-css/images/truck.png" alt="">
                                <div class="member-overlay">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                            </figure>
                            <div class="member-info">
                                <strong class="name">Xe tải chuyên dụng </strong>
                                <span>Trường hợp xe bạn bị hỏng nặng không thể khắc phục tại chổ chúng tôi
                                    sẽ dùng xe tải chuyên dụng để vẩn chuyển xe bạn về nhà.
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <div class="member-box">
                            <figure class="member-img">
                                <img src="http://localhost/front-end-css/images/fix.png" alt="">
                                <div class="member-overlay">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                            </figure>
                            <div class="member-info">
                                <strong class="name">Sửa chữa tận nơi </strong>
                                <span>Khắc phục các sự cố cơ bạn tận nới như: Và lốp, lỗi chống trộm, giao
                                                    xăng, sửa khóa.
                                 </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <div class="member-box">
                            <figure class="member-img">
                                <img src="http://localhost/front-end-css/images/images.png" alt="" width="200px">
                                <div class="member-overlay">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                            </figure>
                            <div class="member-info">
                                <strong class="name">Giải đáp thắc mắc</strong>
                                <span>hotline: 19000111</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end serice-->
        <!-- brand -->
        <div class=" slide-brand">
            <div class="swiper-container" id="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="http://localhost/front-end-css/images/fleet-carousel-img2.png" width="140" height="70" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="http://localhost/front-end-css/images/fleet-carousel-img2.png" width="140" height="70" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="http://localhost/front-end-css/images/fleet-carousel-img2.png" width="140" height="70" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="http://localhost/front-end-css/images/fleet-carousel-img2.png" width="140" height="70" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="http://localhost/front-end-css/images/fleet-carousel-img2.png" width="140" height="70" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="http://localhost/front-end-css/images/fleet-carousel-img2.png" width="140" height="70" alt="">
                    </div>


                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
            </div>
        </div>
    <!-- end -->
        <section class="tj-contact-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="tj-heading-style">
                            <h3>Khách hàng đánh giá chất lượng dịch vụ </h3>
                            <p></p>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <div class="form-holder">
                            <form method="POST" onsubmit="return checkContact()" class="tj-contact-form" id="contact-form" novalidate="novalidate">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <!--Inner Holder Start-->
                                        <div class="inner-holder">
                                            <label for="name">Name</label>
                                            <input placeholder="Enter Your Name" name="name" type="text" id="name" required="">
                                            <span id="error-name"></span>
                                        </div>
                                        <!--Inner Holder End-->
                                    </div>
                                    <div class="col-md-6 col-sm-6 no-pad">
                                        <!--Inner Holder Start-->
                                        <div class="inner-holder">
                                            <label for="email">Email</label>
                                            <input placeholder="Enter Your Email" name="email" type="email" id="email">
                                        </div>
                                        <!--Inner Holder End-->
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <!--Inner Holder Start-->
                                        <div class="inner-holder">
                                            <label for="subject">Subject</label>
                                            <input placeholder="Your Subject" name="subject" type="text" id="subject">
                                        </div>
                                        <!--Inner Holder End-->
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <!--Inner Holder Start-->
                                        <div class="inner-holder">
                                            <label for="message">Message</label>
                                            <textarea name="message" placeholder="Your Message" id="message"></textarea>
                                        </div>
                                        <!--Inner Holder End-->
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <div class="inner-holder">
                                            <button class="btn-submit" type="" id="frm_submit_btn">Send Message <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="address-box">
                            <div class="add-info">
                                <span class="icon-map icomoon"></span>
                                <p>Primecabs, Orlando,<br> United States</p>
                            </div>
                            <div class="add-info">
                                <span class="icon-phone icomoon"></span>
                                <p>
                                    <a href="tel:1-234-567-7890">+1 234 567 7890</a>
                                    <a href="tel:1-234-567-7892">+1 234 567 7892</a>
                                </p>div
                            </div>
                            <div class="add-info">
                                <span class="icon-mail-envelope-open icomoon"></span>
                                <p>
                                    <a href="mailto:support@primecabs.com">
                                        support@primecabs.com</a>
                                    <a href="mailto:info@primecabs.com">			 info@primecabs.com</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- Initialize Swiper -->
    <script src="{{asset('package/js/swiper.min.js')}}"></script>
    <script>
        var swiper = new Swiper('.swiper-container', {
            spaceBetween: 30,
            centeredSlides: true,
            autoplay: {
                delay: 3000,
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
        var swiper = new Swiper('#swiper-container', {
            slidesPerView: 2,
            spaceBetween: 10,
            loop: true,
            // init: false,
            speed: 3000,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            breakpoints: {
                640: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 4,
                    spaceBetween: 40,
                },
                1024: {
                    slidesPerView: 5,
                    spaceBetween: 50,
                },
            }
        });
    </script>
    @endsection
