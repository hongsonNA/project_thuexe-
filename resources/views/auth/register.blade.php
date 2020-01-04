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
                                <form class="reg-frm " onsubmit="return validate_form();" style="float: none" method="POST" id="register"  action="{{ route('register') }}">
                                    @csrf

                                    <div class="field-holder">
                                        <span class="far fa-user"></span>
                                        <input type="text" name="name" id="name" value="{{ old('name') }}"
                                               placeholder="User_name" class="@error('name') is-invalid @enderror">
                                        <span class="err_phone" id="verify" style="color: red;"></span>
                                    </div>
                                    @error('name')
                                    <label class="error_login">
                                        <strong>{{ $message }}</strong>
                                    </label>
                                    @enderror
                                    <div class="field-holder">
                                        <span class="far fa-envelope"></span>
                                        <input type="email" name="email" value="{{ old('email') }}"
                                               placeholder="Email" class=" @error('email') is-invalid @enderror">
                                        <span class="err_phone" id="verify" style="color: red;"></span>
                                    </div>
                                    @error('email')
                                    <label class="error_login">
                                        <strong>{{ $message }}</strong>
                                    </label>
                                    @enderror
                                    <div class="checkR2" style="display: none">
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
                                    </div>
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
                                    <div class="field-holder">
                                        <span class=""></span>
                                        <input type="radio" name="role" value="1" checked class="remove_member"> Thue xe
                                        <input type="radio" name="role" value="2" class="check_role"> Cho Thue xe
                                    </div>
                                    <br>
                                    <label for="terms">
                                        <input type="checkbox" name="terms" id="terms">
                                        Tôi chấp các điều khoản của Primer Cab
                                    </label>
                                    <span  style="color: red; margin-left:10px;" id="res_terms"></span>
                                    <button type="submit" class="reg-btn">Signup <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></button>
{{--                                    <button type="submit" class="facebook-btn">Login with Facebook <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></button>--}}
{{--                                    <button type="submit" class="google-btn">Login with Google <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></button>--}}
                                </form>
                                <!--Register Tabs Form End-->
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="reg-cta">
                                    <div class="dieukhoan">
                                        <p>
                                            Điều khoản dịch vụ


                                            Chào mừng bạn đến với Facebook!

                                            Facebook tạo ra các công nghệ và dịch vụ nhằm hỗ trợ mọi người kết nối với
                                            nhau, xây dựng cộng đồng và phát triển doanh nghiệp. Các Điều khoản này điều
                                            chỉnh việc bạn sử dụng Facebook, Messenger và các sản phẩm, tính năng, ứng
                                            dụng, dịch vụ, công nghệ cũng như phần mềm khác mà chúng tôi cung cấp (Sản
                                            phẩm của Facebook hoặc Sản phẩm), trừ khi chúng tôi nêu rõ là áp dụng các
                                            điều khoản riêng (và không áp dụng các điều khoản này). Các sản phẩm này do
                                            Facebook, Inc. cung cấp cho bạn.

                                            Bạn không mất phí sử dụng Facebook hay các sản phẩm và dịch vụ khác thuộc
                                            phạm vi Điều khoản này. Thay vào đó, các doanh nghiệp và tổ chức sẽ phải trả
                                            tiền cho chúng tôi để hiển thị quảng cáo sản phẩm và dịch vụ của họ cho bạn.
                                            Khi sử dụng Sản phẩm của chúng tôi, bạn đồng ý để chúng tôi hiển thị quảng
                                            cáo mà chúng tôi cho rằng phù hợp với bạn cũng như sở thích của bạn. Chúng
                                            tôi sử dụng dữ liệu cá nhân của bạn để quyết định nên hiển thị quảng cáo nào
                                            với bạn.

                                            Chúng tôi không bán dữ liệu cá nhân của bạn cho các nhà quảng cáo và cũng
                                            không chia sẻ thông tin trực tiếp nhận dạng bạn (chẳng hạn như tên, địa chỉ
                                            email hoặc thông tin liên hệ khác) với những đơn vị này trừ khi được bạn cho
                                            phép cụ thể. Thay vào đó, các nhà quảng cáo có thể cho chúng tôi biết thông
                                            tin như kiểu đối tượng mà họ muốn nhìn thấy quảng cáo và chúng tôi có thể
                                            hiển thị những quảng cáo ấy cho người có thể quan tâm. Chúng tôi báo cáo cho
                                            các nhà quảng cáo về hiệu quả quảng cáo, từ đó những đơn vị này có thể nắm
                                            được cách mọi người tương tác với nội dung của họ. Xem Phần 2 bên dưới để
                                            tìm hiểu thêm.

                                            Chính sách dữ liệu của chúng tôi giải thích cách chúng tôi thu thập và sử
                                            dụng dữ liệu cá nhân của bạn để quyết định hiển thị cho bạn quảng cáo nào
                                            cũng như để cung cấp tất cả các dịch vụ khác được mô tả bên dưới. Bạn cũng
                                            có thể chuyển đến phần cài đặt bất kỳ lúc nào để xem lại các lựa chọn quyền
                                            riêng tư của mình đối với cách chúng tôi sử dụng dữ liệu của bạn.
                                        </p>
                                    </div>
{{--                                    <ul class="cta-list">--}}
{{--                                        <li>--}}
{{--                                            <span class="icon-mail-envelope icomoon"></span>--}}
{{--                                            <div class="cta-info">--}}
{{--                                                <strong>30 Days Money Back Guarantee</strong>--}}
{{--                                                <p>A more recently with desktop softy like aldus pages maker still versions have evolved.</p>--}}
{{--                                            </div>--}}
{{--                                        </li>--}}
{{--                                        <li>--}}
{{--                                            <span class="icon icon-Headset"></span>--}}
{{--                                            <div class="cta-info">--}}
{{--                                                <strong>24/7 Customer Support</strong>--}}
{{--                                                <p>A more recently with desktop softy like aldus pages maker still versions have evolved.</p>--}}
{{--                                            </div>--}}
{{--                                        </li>--}}
{{--                                        <li>--}}
{{--                                            <span class="icon-lock icomoon"></span>--}}
{{--                                            <div class="cta-info">--}}
{{--                                                <strong>100% Secure Payment</strong>--}}
{{--                                                <p>A more recently with desktop softy like aldus pages maker still versions have evolved.</p>--}}
{{--                                            </div>--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
                                </div>
                            </div>
                        </div>
                        <!--Register Tabs Content End-->
                    </div>
                    <!--Tabs Content End-->
                </div>
            </div>
        </div>

@endsection
