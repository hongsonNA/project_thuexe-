<section class="top-link clearfix">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="nav navbar-nav topmenu-contact pull-left">
                    <li style="padding-top:15px;"></li>
                </ul>
                <ul class="nav navbar-nav navbar-right topmenu  hidden-xs hidden-sm">
                    @if(isset(Auth::user()->email))
                        <li class="order-check"><a href="javascrip:;"><i class="fa fa-pencil-square-o"></i>đăng ký cho thuê xe </a></li>
                    <li>
                        <div class="dropdown">
                            <div class="profile-user">
                                <span>{{Auth::user()->name}}</span>
                                <img src="https://cdn1.iconfinder.com/data/icons/avatar-1-2/512/User2-512.png" class="Profile" alt="">
                            </div>
                            <div class="dropdown-content">
                                <a href="javascript:;">profile</a>
                                <a href="{{ route('logout') }}">Logout</a>
                            </div>
                        </div>
                    </li>
                        @else
                        <li class="order-check"><a href="javascrip:;"><i class="fa fa-pencil-square-o"></i> Doanh nghiệp cho thuê </a></li>
                        <li class="account-login"><a href="{{ route('login') }}"><i class="fa fa-sign-in"></i> Đăng nhập </a></li>
                        <li class="account-register"><a href="{{ route('register') }}"><i class="fa fa-key"></i> Đăng ký </a></li>
                        @endif

                </ul>
                <div class="show-mobile hidden-lg hidden-md">
                    <div class="quick-user">
                        <div class="quickaccess-toggle">
                            <i class="fa fa-user"></i>
                        </div>
                        <div class="inner-toggle">
                            <ul class="login links">
                                <li>
                                    <a href="/dang-ky.html"><i class="fa fa-sign-in"></i> Đăng ký</a>
                                </li>
                                <li>
                                    <a href="/dang-nhap.html"><i class="fa fa-key"></i> Đăng nhập</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="quick-access">
                        <div class="quickaccess-toggle">
                            <i class="fa fa-list"></i>
                        </div>
                        <div class="inner-toggle">
                            <ul class="links">
                                <li><a id="mobile-wishlist-total" href="/kiem-tra-don-hang.html" class="wishlist"><i class="fa fa-pencil-square-o"></i> Kiểm tra đơn hàng</a></li>
                                <li><a href="/gio-hang.html" class="shoppingcart"><i class="fa fa-shopping-cart"></i> Giỏ hàng</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<header class="tj-header">
    <!--Header Content Start-->
    <div class="container">
        <div class="row">
            <!--Toprow Content Start-->
            <div class="col-md-3 col-sm-4 col-xs-12">
                <!--Logo Start-->
                <div class="tj-logo">
                    <h1><a href="/">Prime Cab</a></h1>
                </div>
                <!--Logo End-->
            </div>
            <div class="col-md-3 col-sm-4 col-xs-12">
                <div class="info_box">
                    <i class="fa fa-home"></i>
                    <div class="info_text">
                        <span class="info_title">Address</span>
                        <span>Primecab, United States</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-12">
                <div class="info_box">
                    <i class="fa fa-envelope"></i>
                    <div class="info_text">
                        <span class="info_title">Email Us</span>
                        <span><a href="mailto:primecab@booking.com">primecab@booking.com</a></span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-xs-12">
                <div class="phone_info">
                    <div class="phone_icon animate_ro">
                        <i class="fas fa-phone-volume animated_ro"></i>
                    </div>
                    <div class="phone_text">
                        <span><a href="tel:1-234-000-2345">+1-234-000-2345</a></span>
                    </div>
                </div>
            </div>
            <!--Toprow Content End-->
        </div>
    </div>

    <div class="tj-nav-row">
        <div class="container">
            <div class="row">
                <!--Nav Holder Start-->
                <div class="tj-nav-holder">
                    <!--Menu Holder Start-->
                    <nav class="navbar navbar-default">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#tj-navbar-collapse" aria-expanded="false">
                                <span class="sr-only">Menu</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <!-- Navigation Content Start -->
                        <div class="collapse navbar-collapse" id="tj-navbar-collapse">
                            <ul class="nav navbar-nav">
                                <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Home</a>

                                </li>
                                <li>
                                    <a href="{{ route('about') }}">About</a>
                                </li>
                                <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Category<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="services.html">Xe du lịch</a></li>
                                        <li><a href="services.html">Xe cưới </a></li>
                                    </ul>
                                </li>

                                <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">News</a>
                                </li>

                                <li>
                                    <a href="{{ route('contact') }}">Contact</a>
                                </li>

                            </ul>
                        </div>
                        <!-- Navigation Content Start -->
                    </nav>
                    <!--Menu Holder End-->
                    <div class="book_btn">
                        <a href="#">Book Now <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                    </div>
                </div><!--Nav Holder End-->
            </div>
        </div>
    </div>
</header>
    <!-- /HEADER -->
