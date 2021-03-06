@extends('front-end.layouts.app_front-end')
@section('title', 'Create an Account!')

@section('content')

    <div class="tj-breadcrumb">
        <div class="container">
            <ul class="breadcrumb-list">
                <li><a href="{{ route('index') }}">Home</a></li>
                <li class="active">register</li>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">

                <div class="tab-content">
                    <!--Register Tabs Content Start-->
                    <div class="tab-pane active" id="register">
                        <div class="col-md-6 col-sm-6">
                            <!--Register Tabs Form Start-->
                            <form onsubmit="return checkPhone()" id="register_member" class="reg-frm" method="POST" action="{{ route('register_member', $user->id) }}" novalidate>
                                @csrf
                                <div class="field-holder">
                                    <span class="far fa-user"></span>
                                    <input type="text" name="name" value="{{ old('name') }} {{ $user->name }}"
                                           placeholder="User_name" class="@error('name') is-invalid @enderror">

                                </div>
                                @error('name')
                                <label class="error_login">
                                    <strong>{{ $message }}</strong>
                                </label>
                                @enderror
                                <div class="field-holder">
                                    <span class="far fa-envelope"></span>
                                    <input type="email" name="email" value="{{ old('email') }} {{ $user->email }}"
                                           placeholder="Email" class="@error('email') is-invalid @enderror">
                                </div>
                                @error('email')
                                <label class="error_login">
                                    <strong>{{ $message }}</strong>
                                </label>
                                @enderror
                                <div class="field-holder">
                                    <span class="far fa-envelope"></span>
                                    <input type="text" name="phone" value="{{ old('phone') }}"
                                           placeholder="Số điện thoại" id="phone" class="@error('phone') is-invalid @enderror">
                                    <span class="err_phone" id="errPhone" style="color: red;"></span>
                                </div>
                                <div class="field-holder">
                                    <span class="far fa-envelope"></span>
                                    <input type="text" name="identity_card" id="cmnd" value="{{ old('identity_card') }}"
                                           placeholder="Chứng minh thư" class="@error('phone') is-invalid @enderror">
                                    <span class="err_phone" id="errCar" style="color: red;"></span>
                                </div>
                                <label for="terms">
                                    <input type="checkbox" name="terms" id="terms">
                                    Tôi chấp nhận điều khoản của Prime Cab
                                </label>
                                <button type="submit" class="reg-btn">Đăng ký <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></button>
{{--                                <button type="submit" class="facebook-btn">Login with Facebook <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></button>--}}
{{--                                <button type="submit" class="google-btn">Login with Google <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></button>--}}
                            </form>
                            <!--Register Tabs Form End-->
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="reg-cta">
                                <ul class="cta-list">
                                    <li>
                                        <span class="icon-mail-envelope icomoon"></span>
                                        <div class="cta-info">
                                            <strong>30 Days Money Back Guarantee</strong>
                                            <p>A more recently with desktop softy like aldus pages maker still versions have evolved.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <span class="icon icon-Headset"></span>
                                        <div class="cta-info">
                                            <strong>24/7 Customer Support</strong>
                                            <p>A more recently with desktop softy like aldus pages maker still versions have evolved.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <span class="icon-lock icomoon"></span>
                                        <div class="cta-info">
                                            <strong>100% Secure Payment</strong>
                                            <p>A more recently with desktop softy like aldus pages maker still versions have evolved.</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--Register Tabs Content End-->
                </div>
                <!--Tabs Content End-->
            </div>
        </div>
    </div>

    <section class="tj-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="about-widget widget">
                        <h3>About PrimeCab</h3>
                        <p>Search for will uncover many web sites variables onto of passages of lorem ipsum available but the majority the words all predefined humour to met chunks recently with desktop.</p>
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
                        <div class="tj-tweets"><span>Loading!</span></div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="contact-info widget">
                        <h3>Contact Info</h3>
                        <ul class="contact-box">
                            <li>
                                <i class="fas fa-home" aria-hidden="true"></i>   10A, PrimeCab, San Andreno, United States.
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
    <script>
        function checkPhone() {
            var patemPhone = /((09|03|07|08|05)+([0-9]{8})\b)/g;
            var cmndCard = /^[0-9]{9}$/;
            var phone = $('#phone').val();
            var cmnd = $('#cmnd').val();
            if (phone !== "" && cmnd !== "") {
                if (patemPhone.test(phone) == false) {
                    $('#errPhone').html('so dien thoai chua dung dinh dang ');
                    return false;
                }else if(cmndCard.test(cmnd) == false){
                    $('#errCar').html('chung minh nhan dan chua dung ');
                    return false;
                }
            } else {

                return true;
            }
        }
    </script>

    @if(session()->has('mess_update'))
        <div>
        <script>
            Swal.fire(
                'Đăng ký thành công! bạn có thể đăng xe ',
                '',
                'success'
            )
        </script>
        </div>
    @endif
@endsection
