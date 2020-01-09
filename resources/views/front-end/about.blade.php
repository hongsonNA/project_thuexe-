@extends('front-end.layouts.app_front-end')
@section('content')
    <div class="tj-inner-banner">
        <div class="container">
            <h2>Giới Thiệu</h2>
        </div>
    </div>
    <!-- banner -->
    <!-- breadcrumb -->
    <div class="tj-breadcrumb">
        <div class="container">
            <ul class="breadcrumb-list">
                <li><a href="/">Trang chủ</a></li>
                <li class="javascript:;">Giới thiệu</li>
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
                            <h3></h3>
                        </div>
                        <p>Hiện nay, ở Việt Nam chưa có một nền tảng trực tuyến cho thuê và chia sẻ xe máy, ô tô tự lái.

                            Khách thuê xe gặp rất nhiều khó khăn để thuê được một chiếc xe tự lái như ý trong khi cá nhân có xe nhàn rỗi hoặc các đơn vị cho thuê xe tự lái chưa có một công nghệ đủ tốt để quản lý, tối ưu tài sản của mình.

                            Với sự bùng nổ của xu hướng công nghệ 4.0 thì các tiện ích của việc đặt dịch vụ vận chuyển qua kênh online/ mobile cũng như công nghệ chia sẻ xe đang ngày càng phát triển và phổ biến.

                            Chia sẻ phương tiện đang dần trở thành xu hướng chính trên thế giới thay thế cho việc sở hữu xe.</p>
                        <a href="{{ route('cate') }}">Xem tất cả xe<i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
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
                    <h3>Đội ngũ nhân sự</h3>
                    <p>Những thành viên đóng góp nhiều cho công Prime Cab.</p>
                </div>
                <div class="col-md-3 col-sm-3">
                    <div class="member-box">
                        <figure class="member-img">
                            <img src="{{asset('front-end-css/images/nv3.jpg')}}" width="100%" alt="">
                            <div class="member-overlay">
                                <ul>
                                    <li><a href="https://www.facebook.com/hieuulv"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </figure>
                        <div class="member-info">
                            <strong class="name">Kỹ thuật viên</strong>
                            <span>Lê Văn hiếu</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3">
                    <div class="member-box">
                        <figure class="member-img">
                            <img src="{{asset('front-end-css/images/nv1.jpg')}}" width="100%" alt="">
                            <div class="member-overlay">
                                <ul>
                                    <li><a href="https://www.facebook.com/ngocanhhd112"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </figure>
                        <div class="member-info">
                            <strong class="name">Trần ngọc anh</strong>
                            <span>Tổng giám đốc</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3">
                    <div class="member-box">
                        <figure class="member-img">
                            <img src="{{asset('front-end-css/images/nv2.jpg')}}" width="100%" alt="">
                            <div class="member-overlay">
                                <ul>
                                    <li><a href="https://www.facebook.com/hongson1710"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </figure>
                        <div class="member-info">
                            <strong class="name">Ma Hồng Sơn</strong>
                            <span>Kỹ thuật viên</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3">
                    <div class="member-box">
                        <figure class="member-img">
                            <img src="{{asset('front-end-css/images/nv4.jpg')}}" width="100%" alt="">
                            <div class="member-overlay">
                                <ul>
                                    <li><a href="https://www.facebook.com/xomlieu.nguyen"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </figure>
                        <div class="member-info">
                            <strong class="name">Nguyễn Hoàng Hiêp</strong>
                            <span>Kỹ thuật viên</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
        @endsection

