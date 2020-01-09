@extends('front-end.admin_user.layout_user.main')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-5 col-md-4">
                                <div class="icon-big text-center icon-warning">
                                    <i class="nc-icon nc-globe text-warning"></i>
                                </div>
                            </div>
                            <div class="col-7 col-md-8">
                                <div class="numbers">
                                    <p class="card-category">Tổng số xe </p>
                                    <p class="card-title">{{ count($vehicle) }}
                                    </p><p>
                                    </p></div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer ">
                        <hr>
                        <div class="stats">
                            <a href="{{ route('manage') }}">
                            <i class="fa fa-admin"></i>Quản lý xe
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-5 col-md-4">
                                <div class="icon-big text-center icon-warning">
                                    <i class="nc-icon nc-money-coins text-success"></i>
                                </div>
                            </div>
                            <div class="col-7 col-md-8">
                                <div class="numbers">
                                    <p class="card-category">Xe đang chờ</p>
                                    <p class="card-manage">{{ count($waitingBooking) }}
                                    </p><p>
                                    </p></div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer ">
                        <hr>
                        <div class="stats">
                            <a href="{{ route('waiting') }}">
                            <i class="fa fa-calendar-o"></i>Xem chi tiết
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-5 col-md-4">
                                <div class="icon-big text-center icon-warning">
                                    <i class="nc-icon nc-vector text-danger"></i>
                                </div>
                            </div>
                            <div class="col-7 col-md-8">
                                <div class="numbers">
                                    <p class="card-category">Bình luận</p>
                                    <p class="card-title">{{ count($comment) }}
                                    </p><p>
                                    </p></div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer ">
                        <hr>
                        <div class="stats">
                            <a href="{{ route('booking') }}">
                            <i class="fa fa-comment"></i>Xem chi tiết
                            </a>
                        </div>
                    </div>
                </div>
            </div>
{{--            <div class="col-lg-3 col-md-6 col-sm-6">--}}
{{--                <div class="card card-stats">--}}
{{--                    <div class="card-body ">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-5 col-md-4">--}}
{{--                                <div class="icon-big text-center icon-warning">--}}
{{--                                    <i class="nc-icon nc-favourite-28 text-primary"></i>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-7 col-md-8">--}}
{{--                                <div class="numbers">--}}
{{--                                    <p class="card-category">Followers</p>--}}
{{--                                    <p class="card-title">+45K--}}
{{--                                    </p><p>--}}
{{--                                    </p></div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="card-footer ">--}}
{{--                        <hr>--}}
{{--                        <div class="stats">--}}
{{--                            <i class="fa fa-refresh"></i> Update now--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
        <!-- chartJS -->
        <div class="row">
            <div class="col-md-12">
                <div class="card ">
                    <div class="card-header ">
                        <h5 class="card-title">Users Behavior</h5>
                        <p class="card-category">24 Hours performance</p>
                    </div>
                    <div class="card-body ">
                        <canvas id=chartHours width="400" height="100"></canvas>
                    </div>
                    <div class="card-footer ">
                        <hr>
                        <div class="stats">
                            <i class="fa fa-history"></i> Updated 3 minutes ago
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
