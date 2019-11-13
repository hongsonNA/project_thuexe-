<section class="top-link clearfix">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="nav navbar-nav topmenu-contact pull-left">
                    <li style="padding-top:15px;"></li>
                </ul>
                <ul class="nav navbar-nav navbar-right topmenu  hidden-xs hidden-sm">
                    @if(isset(Auth::user()->email))
                        <li class="order-check">
                            <a href="#">
                                <i class="fa fa-pencil-square-o"></i>
                                Đăng ký cho thuê xe
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                <img src="https://cdn1.iconfinder.com/data/icons/avatar-1-2/512/User2-512.png" class="Profile">&nbsp;
                                <span class="admin-name">{{Auth::user()->name}}</span>
                                <i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
                            </a>
                            <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">

                                <li>
                                    <a href="{{ route('profile') }}">
                                        <span class="edu-icon edu-user-rounded author-log-ic"></span>
                                        My Profile
                                    </a>
                                <li>
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <span class="edu-icon edu-locked author-log-ic"></span>
                                        Log Out
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @else
{{--                        <li class="order-check"><a href="javascrip:;"><i class="fa fa-pencil-square-o"></i> Doanh nghiệp--}}
{{--                                cho thuê </a></li>--}}
                        <li class="account-login" data-toggle="modal" data-target="#myModal" ><a href="javascript:;"><i class="fa fa-sign-in"></i> Đăng nhập
                            </a></li>
                        <li class="account-register"><a id="myBtn" href="javascript:;"><i class="fa fa-key"></i> Đăng ký
                            </a></li>
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
                                    <a    href="/dang-ky.html"><i class="fa fa-sign-in"></i> Đăng ký</a>
                                </li>
                                <li>
                                    <a  href="/dang-nhap.html"><i class="fa fa-key"></i> Đăng nhập</a>
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
                                <li><a id="mobile-wishlist-total" href="/kiem-tra-don-hang.html" class="wishlist"><i
                                            class="fa fa-pencil-square-o"></i> Kiểm tra đơn hàng</a></li>
                                <li><a href="/gio-hang.html" class="shoppingcart"><i class="fa fa-shopping-cart"></i>
                                        Giỏ hàng</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
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
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                    data-target="#tj-navbar-collapse" aria-expanded="false">
                                <span class="sr-only">Menu</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <!-- Navigation Content Start -->
                        <div class="collapse navbar-collapse" id="tj-navbar-collapse">
                            <ul class="nav navbar-nav">
                                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                        role="button" aria-haspopup="true"
                                                        aria-expanded="false">Trang chủ</a>

                                </li>

                                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                        role="button" aria-haspopup="true" aria-expanded="false">Danh mục<i
                                            class="fa fa-angle-down" aria-hidden="true"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{ route('cate') }}">Xe du lịch</a></li>
                                        <li><a href="services.html">Xe cưới </a></li>
                                    </ul>
                                </li>

                                <li ><a href="{{ route('news') }}">Tin Tức</a>
                                </li>

                                <li>
                                    <a href="{{ route('contact') }}">Phản hồi</a>
                                </li>
                                <li>
                                    <a href="{{ route('support') }}">dịch vụ cứu hộ</a>

                                </li>
                                <li>
                                    <a href="{{ route('about') }}">Giới thiệu</a>
                                </li>


                            </ul>
                        </div>
                        <!-- Navigation Content Start -->
                    </nav>
                    <!--Menu Holder End-->
                    <div class="book_btn">
{{--                        <a href="#">Book Now <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>--}}
                    </div>
                </div><!--Nav Holder End-->
            </div>
        </div>
    </div>
</header>

{{--<div class="modall">--}}
{{--    <div class="col-md-6 col-sm-6">--}}
{{--      --}}
{{--    </div>--}}
{{--</div>--}}

<!-- /HEADER -->
<!-- FORM LOGIN -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
           <div class="modal-login">
               <h3>Đăng nhập thành viên </h3>
               <form class="login-frm" method="POST" onsubmit="return checkLogin();" action="{{ route('login') }}" novalidate>
                   @csrf
                   <div class="field-holder">
                       <span class="far fa-envelope"></span>
                       <input type="email" id="email" name="email" value="{{ old('email') }}"
                              placeholder="Email"  class="@error('email') is-invalid @enderror">
                   </div>
                   @error('email')
                   <label class="error_login">
                       <strong>{{ $message }}</strong>
                   </label>
                   @enderror
                   <div class="field-holder">
                       <span class="fas fa-lock"></span>
                       <input type="password" name="password"
                              placeholder="password" class="@error('password') is-invalid @enderror">
                   </div>
                   @error('password')
                   <label class="error_login">
                       <strong>{{ $message }}</strong>
                   </label>
                   @enderror

                   <div style="display: flex;justify-content: space-between">
                       <a href="#" class="forget-pass">Quên mật khẩu?</a>
                       <a href="javascript:;"  id="myBtn" class="forget-pass">Đăng ký thành viên </a>
{{--                       <button type="button" class="btn btn-info btn-lg" id="myBtn">Open Modal</button>--}}
                   </div>
                   <button type="submit" id="login_submit" class="reg-btn">Login <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></button>
{{--                   <button type="submit" class="facebook-btn">Login with Facebook <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></button>--}}
{{--                   <button type="submit" class="google-btn">Login with Google <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></button>--}}
               </form>
           </div>
        </div>

    </div>
</div>

<!-- form register -->
    <!-- Modal -->
    <div class="modal fade" id="myModall" role="dialog">
        <div class="modal-dialog subcribe">
            <!-- Modal content-->
            <h3>Đăng ký thành viên</h3>
            <div class="form-register">
                <div class="modal-register" id="modal-register">
                <form class="reg-frm" id="register_form" method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="field-holder">
                        <span class="far fa-user"></span>
                        <input type="text" name="name" value="{{ old('name') }}"
                               placeholder="User_name" class="@error('name') is-invalid @enderror">
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
                               placeholder="password" class="@error('password') is-invalid @enderror">
                    </div>
                    @error('password')
                    <label class="error_login">
                        <strong>{{ $message }}</strong>
                    </label>
                    @enderror
                    <div class="field-holder">
                        <span class="fas fa-lock"></span>
                        <input type="password" name="password_confirmation"
                               placeholder="password confirmation">
                    </div>
                    <label for="terms">
                        <input type="checkbox" name="terms" id="terms">
                        I accept terms & conditions
                    </label>
                    <button type="submit" class="reg-btn">Đăng ký <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></button>
{{--                    <button type="submit" class="facebook-btn">Login with Facebook <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></button>--}}
{{--                    <button type="submit" class="google-btn">Login with Google <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></button>--}}
                </form>
            </div>
            </div>
        </div>
    </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.js"></script>
<script>
    $(document).ready(function(){
        $("#myBtn").click(function(){
            $("#myModal").hide();
            $("#myModall").modal();
        });
    });
</script>
<script>
  $(document).ready(function (event) {
      $('#register_form').validate({
          rules:{
              email:{
                  required: true,
                  email:true,
              }
          },
          message:{
              required:"Truong nay la bat buoc",
              email: "Email co dinh dang name@domain.com",
          }
      })
  });
</script>





