@extends('front-end.admin_user.layout_user.main')
@section('content')
    <div class="content" style="margin-top: 30px">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
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
                                            {{ $vehicle['name'] }}
                                        </p>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-10">
                                        <p class="form-control-static">
                                            <label style="font-size: 15px; font-weight: bold; color: black">
                                                Chủ xe: &nbsp;
                                            </label>
                                            {{ $vehicle['user']['name'] }}
                                        </p>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-10">
                                        <p class="form-control-static">
                                            <label style="font-size: 15px; font-weight: bold; color: black">
                                                Thành phố: &nbsp;
                                            </label>
                                            {{ $vehicle['city']['name'] }}
                                        </p>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-10">
                                        <p class="form-control-static">
                                            <label style="font-size: 15px; font-weight: bold; color: black">
                                                Quận huyện: &nbsp;
                                            </label>
                                            {{ $vehicle['district']['name'] }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <form method="POST" action="{{ route('update_target', $vehicle->id) }}" class="form-horizontal">
                            @csrf
                            <div class="card-header">
                                <h5 class="card-title">
                                    Duyệt xe
                                </h5>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-10">
                                    <label style="font-size: 15px; font-weight: bold; color: black">
                                        Trạng thái: &nbsp;
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-10 offset-md-1">
                                <select class="form-control form-control-sm" name="status">
                                    <option value="2" @if ($vehicle->status == 2) checked @endif>Xe đã kiểm duyệt
                                    </option>
                                </select>
                            </div>
                            <br>
                            <div class="form-group">
                                <div class="col-sm-10">
                                    <label style="font-size: 15px; font-weight: bold; color: black">
                                        Nhận xét: &nbsp;
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-10 offset-md-1">
                                <textarea class="form-control" name="description" style="height: 100px"></textarea>

                            </div>
                            <div class="card-footer">
                                <div class="form-group">
                                    <label class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <button type="submit" class="btn btn-fill btn-info">
                                            Lưu
                                        </button>
                                        <a href="{{ route('index_target') }}" type="submit"
                                           class="btn btn-fill btn-raised">
                                            Hủy
                                        </a>
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

