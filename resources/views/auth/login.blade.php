@extends('front-end.layouts.app_front-end')
@section('title', 'Login')

@section('content')
    <div class="tj-breadcrumb">
        <div class="container">
            <ul class="breadcrumb-list">
                <li><a href="home-1.html">Home</a></li>
                <li class="active">Login</li>
            </ul>
        </div>
    </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <!--Tabs Content Start-->
                    <div class="tab-content">
                        <!--Login Tabs Content Start-->
                        <div class="tab-pane active" id="login">
                            <div class="col-md-6 col-sm-6">
                                <div class="login-cta">
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
                            <div class="col-md-6 col-sm-6">
                                <form class="login-frm" method="POST" action="{{ route('login') }}" novalidate>
                                    @csrf
                                    <div class="field-holder">
                                        <span class="far fa-envelope"></span>
                                        <input type="email" name="email" value="{{ old('email') }}"
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
                                    <a href="#" class="forget-pass">Forget Password?</a>
                                    <a href="{{ route('register') }}" class="forget-pass">register acconut</a>
                                    </div>
                                    <button type="submit" class="reg-btn">Login <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></button>
                                    <button type="submit" class="facebook-btn">Login with Facebook <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></button>
                                    <button type="submit" class="google-btn">Login with Google <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></button>
                                </form>
                            </div>
                        </div>
                        <!--Login Tabs Content End-->
                        <!--Register Tabs Content Start-->
                        <div class="tab-pane" id="register">
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
                            <div class="col-md-6 col-sm-6">
                                <!--Register Tabs Form Start-->
                                <form class="reg-frm" method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="field-holder">
                                        <span class="far fa-user"></span>
                                        <input type="text" name="username" placeholder="Username">
                                    </div>
                                    <div class="field-holder">
                                        <span class="far fa-envelope"></span>
                                        <input type="email" name="email" value="{{ old('email') }}"
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
                                    <label for="terms">
                                        <input type="checkbox" name="terms" id="terms">
                                        I accept terms & conditions
                                    </label>
                                    <button type="submit" class="reg-btn">Signup <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></button>
                                    <button type="submit" class="facebook-btn">Login with Facebook <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></button>
                                    <button type="submit" class="google-btn">Login with Google <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></button>
                                </form>
                                <!--Register Tabs Form End-->
                            </div>
                        </div>
                        <!--Register Tabs Content End-->
                    </div>
                    <!--Tabs Content End-->
                </div>
            </div>
        </div>
    @endsection
