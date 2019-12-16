@extends('front-end.layouts.app_front-end')
@section('content')
    <!--User Account Section Start-->
    <section class="tj-account-frm" style="
    background: #f3f1f1;">
        <div class="container">
            <div class="row" style="background-color: #f9f9f9;">
                <div class="col-md-3  .col-sm-3">
                    <div class="profi">
                        @if(Auth::user()->role == '2')
                        <ul class="nav">
                            <li><label for="">Tài khoản cá nhân</label>

                                <ul>
{{--                                    <li><a href="javascript:;">Đổi mật khẩu</a></li>--}}
                                    <li><a href="{{ route('Admin') }}">Quản lý</a></li>
                                </ul>
                            </li>
                            @endif
                        </ul>
                    </div>
                </div>
                <div class="col-md-5 col-sm-5">
                    <div class="tj-tabs">

                        <ul class="nav nav-tabs" role="tablist">
                            <li class="active"><a href="#user_account" data-toggle="tab"><i class="far fa-user"></i>
                                    Quản lý tài khoản</a></li>
                        </ul>

                    </div>
                    <div class="tab-content profile_user">
                        <form onsubmit="return checkPhone()" method="POST" enctype="multipart/form-data"
                              action="{{ route('update_account',Auth::user()->id) }}">
                            @csrf
                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label ">Họ tên:</label>
                                <div class="col-sm-10">
                                    <input type="text" name="name" class="form-control" id="name" placeholder=""
                                           value="{{ Auth::user()->name }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputBirthday" class="col-sm-2 col-form-label">So dien thoai</label>
                                <div class="col-sm-10">
                                    <input type="number" name="phone" class="form-control" id="phone" placeholder=""
                                           value="{{ Auth::user()->phone }}">
                                    <span class="err_phone" id="errPhone" style="color: red;"></span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="address" class="col-sm-2 col-form-label">Địa chỉ:</label>
                                <div class="col-sm-10">
                                    <input type="text" name="address" class="form-control" id="address" placeholder=""
                                           value="{{ Auth::user()->address }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input  type="email" name="email" class="form-control" id="email"
                                           placeholder="" value="{{ Auth::user()->email }}">
                                </div>
                            </div>
                            <div class="card-body">
                                <button type="submit" class="btn btn-primary">update</button>
                            </div>

                    </div>
                    </form>
                </div>
            </div>

        </div>
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
    </section>
    <!--User Account Section End-->
    <script>
        $(".alert").fadeOut(5000);
    </script>
    <script>
        function checkPhone() {
            var patemPhone = /((09|03|07|08|05)+([0-9]{8})\b)/g;
            var phone = $('#phone').val();
            if (phone !== "") {
                if (patemPhone.test(phone) == false) {
                    $('#errPhone').html('so dien thoai chua dung dinh dang ');
                    return false;
                }
            } else {

                return true;
            }
        }
    </script>
@endsection
