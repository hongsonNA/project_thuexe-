@extends('admin.layouts.app_dashboard')
@section('title', 'Dashboard')

@section('content')
    <div class="content">
        <div class="content">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card card-stats">
                            <div class="card-header card-header-primary card-header-icon">
                                <div class="card-icon">
                                    <i class="material-icons">comments</i>
                                </div>
                                <h3 class="card-title">{{ count($comment) }}</h3>
                            </div>
                            <div class="card-footer">
                                <div class="stats">
                                    Số lượng bình luận Report
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card card-stats">
                            <div class="card-header default-color-dark card-header-icon">
                                <div class="card-icon">
                                        <i class="material-icons">contact_mail</i>
                                </div>
                                <h3 class="card-title">{{ count($contact) }}</h3>
                            </div>
                            <div class="card-footer">
                                <div class="stats">
                                    Số lượng người liên hệ
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card card-stats">
                            <div class="card-header card-header-info card-header-icon">
                                <div class="card-icon">
                                    <i class="material-icons">panorama</i>
                                </div>
                                <h3 class="card-title">{{ count($post) }}</h3>
                            </div>
                            <div class="card-footer">
                                <div class="stats">
                                    Số lượng bài viết
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card card-stats">
                            <div class="card-header card-header-success card-header-icon">
                                <div class="card-icon">
                                    <i class="material-icons">perm_identity</i>
                                </div>
                                <h3 class="card-title">{{ count($user) }}</h3>
                            </div>
                            <div class="card-footer">
                                <div class="stats">
                                    Số lượng tài khoản
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="card card-stats">
                            <div class="card-header card-header-success card-header-icon">
                                <div class="card-icon">
                                    <i class="material-icons">perm_identity</i>
                                </div>
                                <h3 class="card-title">{{ count($user2) }}</h3>
                            </div>
                            <div class="card-footer">
                                <div class="stats">
                                    Số lượng tài khoản người dùng
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="card card-stats">
                            <div class="card-header card-header-success card-header-icon">
                                <div class="card-icon">
                                    <i class="material-icons">perm_identity</i>
                                </div>
                                <h3 class="card-title">{{ count($user1) }}</h3>
                            </div>
                            <div class="card-footer">
                                <div class="stats">
                                    Số lượng tài khoản Admin
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
