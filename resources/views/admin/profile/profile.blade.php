@extends('admin.layouts.app_dashboard')
@section('title', 'Profile')

@section('content')
    <div class="content">
        <link rel="stylesheet" href="{{ asset('css/argon-dashboard.min.css') }}">
        <div class="container-fluid">
            <div class="main-content">

                <!-- Header -->
                <div class="header pt-lg-8 d-flex align-items-center">
                    <!-- Mask -->

                    <!-- Header container -->

                </div>
                <!-- Page content -->
                <div class="container-fluid mt--7">
                    <div class="row">
                        <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
                            <div class="card card-profile shadow">
                                <div class="row justify-content-center">
                                    <div class="col-lg-3 order-lg-2">
                                        <div class="card-profile-image">
                                            <img src="/image_upload/user/{{ Auth::user()->image }}"
                                                 class="rounded-circle"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">

                                </div>
                                <div class="card-body pt-0 pt-md-4">
                                    <div class="row">
                                        <div class="col">
                                            <div class="card-profile-stats d-flex justify-content-center mt-md-5">
                                                <div class="text-center">
                                                    <h3>
                                                        {{ Auth::user()->name }}
                                                    </h3>
                                                    <div class="h5 font-weight-300">
                                                        <i class="ni location_pin mr-2"></i>Bucharest, Romania
                                                    </div>
                                                    <div class="h5 mt-4">
                                                        <i class="ni business_briefcase-24 mr-2"></i>Solution Manager -
                                                        Creative Tim Officer
                                                    </div>
                                                    <div>
                                                        <i class="ni education_hat mr-2"></i>University of Computer
                                                        Science
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8 order-xl-1">
                            <div class="card bg-secondary shadow">
                                <div class="card-header bg-white border-0">
                                    <div class="row align-items-center">
                                        <div class="col-8">
                                            <h3 class="mb-0">Thông tin tài khoản</h3>
                                        </div>
                                        <div class="col-4 text-right">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <form>
                                        <div class="pl-lg-4">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group focused">
                                                        <label class="form-control-label">Họ và Tên</label>
                                                        <input class="form-control form-control-alternative text-body"
                                                               value="lucky.jesse" disabled="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label">Địa chỉ Email</label>
                                                        <input class="form-control form-control-alternative text-body"
                                                               value="lucky@mail.com" disabled="">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group focused">
                                                        <label class="form-control-label">Họ và Tên</label>
                                                        <input class="form-control form-control-alternative text-body"
                                                               value="lucky.jesse" disabled="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label">Địa chỉ Email</label>
                                                        <input class="form-control form-control-alternative text-body"
                                                               value="lucky@mail.com" disabled="">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group focused">
                                                        <label class="form-control-label">Họ và Tên</label>
                                                        <input class="form-control form-control-alternative text-body"
                                                               value="lucky.jesse" disabled="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label">Địa chỉ Email</label>
                                                        <input class="form-control form-control-alternative text-body"
                                                               value="lucky@mail.com" disabled="">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group focused">
                                                        <label class="form-control-label">Họ và Tên</label>
                                                        <input class="form-control form-control-alternative text-body"
                                                               value="lucky.jesse" disabled="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label">Địa chỉ Email</label>
                                                        <input class="form-control form-control-alternative text-body"
                                                               value="lucky@mail.com" disabled="">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group focused">
                                                        <label class="form-control-label">Họ và Tên</label>
                                                        <input class="form-control form-control-alternative text-body"
                                                               value="lucky.jesse" disabled="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label">Địa chỉ Email</label>
                                                        <input class="form-control form-control-alternative text-body"
                                                               value="lucky@mail.com" disabled="">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Footer -->

                </div>
            </div>
        </div>
    </div>
@endsection
