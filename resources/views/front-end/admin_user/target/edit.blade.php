@extends('front-end.admin_user.layout_user.main')
@section('content')
<div class="content" style="margin-top: 30px">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <form class="form-horizontal">
                        <div class="card-header">
                            <h4 class="card-title">
                                Thông tin xe
                            </h4>
                        </div>
                        <div class="card-content">
                                <div class="form-group">
                                    <div class="col-sm-10">
                                        <p class="form-control-static">
                                            <label style="font-size: 15px; font-weight: bold; color: black">
                                                Tên xe: &nbsp;
                                            </label>
                                            hello@creative-tim.com
                                        </p>
                                    </div>
                                </div>
                        </div>

                        <div class="card-footer">
                            <div class="form-group">
                                <label class="col-md-3"></label>
                                <div class="col-md-9">
                                    <button type="submit" class="btn btn-fill btn-info">
                                        Sign in
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card">
                    <form class="form-horizontal">
                        <div class="card-header">
                            <h5 class="card-title">
                                Horizontal Form
                            </h5>
                        </div>
                        <div class="card-content">
                            <div class="form-group">
                                <label class="col-md-3 control-label">Email</label>
                                <div class="col-md-7">
                                    <input type="email" placeholder="Email" class="form-control">
                                </div>
                            </div>

                        </div>
                        <div class="card-footer">
                            <div class="form-group">
                                <label class="col-md-3"></label>
                                <div class="col-md-9">
                                    <button type="submit" class="btn btn-fill btn-info">
                                        Sign in
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div> <!-- end row -->
    </div>


</div>
@endsection

