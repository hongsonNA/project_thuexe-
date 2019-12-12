<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

<header class="tj-header" style="z-index: 99999;">
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
                        <span class="info_title">Địa chỉ</span>
                        <span>15 Cầu Giấy, Hà Nội</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-12">
                <div class="info_box">
                    <i class="fa fa-envelope"></i>
                    <div class="info_text">
                        <span class="info_title">Email</span>
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
                        <span><a href="tel:19001009">19001009</a></span>
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
                    <nav class="navbar navbar-default" style="width: 100%;">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                    data-target="#tj-navbar-collapse" aria-expanded="false">
                                <span class="sr-only">Menu</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <!-- Navigation Content Start -->
                        <div class="" id="tj-navbar-collapse">
                            <ul class="nav navbar-nav">
                                <li><a href="/" class="">Trang chủ</a>

                                </li>

                                <li>
                                    <a href="{{ route('cate') }}" class="" aria-haspopup="true" aria-expanded="false">Danh
                                        mục</a>
                                </li>

                                <li><a href="{{ route('news') }}">Tin Tức</a>
                                </li>

                                <li>
                                    <a href="{{ route('contact') }}">Liên hệ</a>
                                </li>
                                <li>
                                    <a href="{{ route('support') }}">dịch vụ cứu hộ</a>

                                </li>
                                <li>
                                    <a href="{{ route('about') }}">Giới thiệu</a>
                                </li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right topmenu  hidden-xs hidden-sm">
                                @if(isset(Auth::user()->email))
                                    <li class="nav-item">
                                        <a href="#" data-toggle="dropdown" role="button" aria-expanded="false"
                                           class="nav-link dropdown-toggle">
                                            <img
                                                src="https://cdn1.iconfinder.com/data/icons/avatar-1-2/512/User2-512.png"
                                                class="Profile">&nbsp;
                                            <span class="admin-name">{{Auth::user()->name}}</span>
                                            <i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
                                        </a>
                                        <ul role="menu"
                                            class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                            @if(!Auth::check() || Auth::user()->role == '1' || Auth::user()->role == '2')
                                                <li>
                                                    <a href="{{ route('manage_list') }}">
                                                        <span class="edu-icon edu-user-rounded author-log-ic"></span>
                                                        Quản lý xe
                                                    </a>
                                                </li>
                                            @elseif(!Auth::check() || Auth::user()->role == '9' || Auth::user()->role == '10')
                                                <li>
                                                    <a href="{{ route('dashboard') }}">
                                                        <span class="edu-icon edu-user-rounded author-log-ic"></span>
                                                        Dashboard
                                                    </a>
                                                </li>
                                            @endif
                                            <li>
                                                <a href="{{ route('profile') }}">
                                                    <span class="edu-icon edu-user-rounded author-log-ic"></span>
                                                    My Profile
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('logout') }}"
                                                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                    <span class="edu-icon edu-locked author-log-ic"></span>
                                                    Log Out
                                                </a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                      style="display: none;">
                                                    @csrf
                                                </form>
                                            </li>
                                        </ul>
                                    </li>
                                @else
                                    {{--                        <li class="order-check"><a href="javascrip:;"><i class="fa fa-pencil-square-o"></i> Doanh nghiệp--}}
                                    {{--                                cho thuê </a></li>--}}
                                    <li class="account-login" data-toggle="modal" data-target="#login">
                                        <a href="javascript:;"><i
                                                class="fa fa-sign-in"></i> Đăng nhập
                                        </a>
                                    </li>
                                    <li class="account-register" data-toggle="modal" data-target="#register">
                                        <a href="javascript:;">
                                            <i class="fa fa-key"></i> Đăng ký
                                        </a>
                                    </li>
                                @endif

                            </ul>
                        </div>
                        <!-- Navigation Content Start -->
                    </nav>
                    <!--Menu Holder End-->
                    <div class="book_btn">
                    </div>
                </div><!--Nav Holder End-->
            </div>
        </div>
    </div>
</header>


<!-- /HEADER -->
<!-- FORM LOGIN -->
<div class="modal fade" id="login" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-login">
                <h3>Đăng nhập thành viên </h3>
                <form class="login-frm" method="POST" onsubmit="return checkLogin();" action="{{ route('login') }}"
                      novalidate>
                    @csrf
                    <div class="field-holder">
                        <span class="far fa-envelope"></span>
                        <input type="email" id="email" name="email" value="{{ old('email') }}"
                               placeholder="Email" class="@error('email') is-invalid @enderror">
                    </div>
                    @error('email')
                    <label class="error_login">
                        <strong>{{ $message }}</strong>
                    </label>
                    @enderror
                    <div class="field-holder">
                        <span class="fas fa-lock"></span>
                        <input type="password" name="password"
                               placeholder="Mật khẩu" class="@error('password') is-invalid @enderror">
                    </div>
                    @error('password')
                    <label class="error_login">
                        <strong>{{ $message }}</strong>
                    </label>
                    @enderror

                    <button type="submit" id="login_submit" class="reg-btn">Login
                        <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                    </button>
                </form>
            </div>
        </div>

    </div>
</div>

<!-- form register -->
<!-- Modal -->
<div class="modal fade" id="register" role="dialog">
    <div class="modal-dialog subcribe">
        <!-- Modal content-->
        <h3>Đăng ký thành viên</h3>
        <div class="form-register">
            <div class="modal-register" id="modal-register">
                <form class="reg-frm" id="" method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="role_member_1">
                        <div class="field-holder">
                            <span class="far fa-user"></span>
                            <input type="text" name="name" value="{{ old('name') }}"
                                   placeholder="Họ và Tên" class="@error('name') is-invalid @enderror">
                        </div>
                        @error('name')
                        <label class="error_login">
                            <strong>{{ $message }}</strong>
                        </label>
                        @enderror
                        <div class="field-holder">
                            <span class="far fa-envelope"></span>
                            <input type="email" name="email" value="{{ old('email') }}"
                                   placeholder="Email" class="@error('email') is-invalid @enderror">
                        </div>
                        @error('email')
                        <label class="error_login">
                            <strong>{{ $message }}</strong>
                        </label>
                        @enderror
                        <div class="field-holder">
                            <span class="fas fa-lock"></span>
                            <input type="password" name="password"
                                   placeholder="Mật khẩu" class="@error('password') is-invalid @enderror">
                        </div>
                        @error('password')
                        <label class="error_login">
                            <strong>{{ $message }}</strong>
                        </label>
                        @enderror
                        <div class="field-holder">
                            <span class="fas fa-lock"></span>
                            <input type="password" name="password_confirmation"
                                   placeholder="Nhập lại mật khẩu">
                        </div>
                    </div>
                    <button type="submit" class="reg-btn">Đăng ký
                        <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
