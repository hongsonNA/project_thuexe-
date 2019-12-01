@extends('admin.layouts.app_dashboard')
@section('title', 'Profile')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header card-header-icon card-header-rose">
                            <h4 class="card-title font-weight-bold"> Thông tin tài khoản </h4>
                        </div>
                        <div class="card-body">
                            <form>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group bmd-form-group">
                                            <label>Họ và tên:</label>
                                            <input class="form-control" value="{{ Auth::user()->name }}" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group bmd-form-group">
                                            <label>Email</label>
                                            <input class="form-control" value="{{ Auth::user()->email }}" disabled>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group bmd-form-group">
                                            <label>Số chứng minh nhân dân:</label>
                                            <input class="form-control" value="{{ Auth::user()->identity_card }}"
                                                   disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group bmd-form-group">
                                            <label>Số điện thoại</label>
                                            <input class="form-control" value="{{ Auth::user()->phone }}" disabled>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group bmd-form-group">
                                    <label>Địa chỉ</label>
                                    <input class="form-control" value="{{ Auth::user()->address }}" disabled>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-profile">
                        <div class="card-avatar">
                            <a href="#pablo">
                                <img class="img" src="/image_upload/user/{{ Auth::user()->image }}">
                            </a>
                        </div>
                        <div class="card-body">

                            <h4 class="font-weight-bold text-capitalize">{{ Auth::user()->name }}</h4>
                            <h5>{{ Auth::user()->email }}</h5>
                            <p>{{ Auth::user()->address }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
