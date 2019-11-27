@extends('admin.layouts.app_dashboard')
@section('title', 'Profile')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header card-header-icon card-header-rose">
{{--                            <div class="card-icon">--}}
{{--                                <i class="material-icons">perm_identity</i>--}}
{{--                            </div>--}}
                            <h4 class="card-title font-weight-bold"> Thông tin tài khoản </h4>
                        </div>
                        <div class="card-body">
                            <form>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group bmd-form-group">
                                            <label>Họ và tên:</label>
                                            <input type="text" class="form-control" value="{{ Auth::user()->name }}" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group bmd-form-group">
                                            <label class="bmd-label-floating">Last Name</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group bmd-form-group">
                                            <label class="bmd-label-floating">Adress</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>



                                <div class="clearfix"></div>
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


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
