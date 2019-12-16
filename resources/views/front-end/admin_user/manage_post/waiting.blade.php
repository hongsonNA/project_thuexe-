@extends('front-end.admin_user.layout_user.main')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12 ml-auto mr-auto">
                <div class="card">

                    @if($waiting != '')
                        <div class="card-header">
                            <h4 class="card-title"> Simple Table</h4>
                            <a href="{{ route('add_vehicles') }}"
                               class="float-right pull-right btn btn-success">
                                Thêm mới xe
                                <i class="fa fa-arrow-circle-right"></i>
                                <div class="ripple-container"></div>
                            </a>
                        </div>

                        <div class="card-body">
                            <div class="form-group">
                                <label for="status">Trạng thái</label>
                                <select class="form-control" id="see_status" name="see_status">
                                    <option value="" >Tất cả</option>
                                    <option value="1" >Đang chờ</option>
                                    <option value="2" >Đã xác nhận</option>
                                    <option value="3" >Đang thực hiện</option>
                                    <option value="4" >Đã hoàn thành</option>
                                    <option value="5" >Từ chối cho thuê</option>
                                </select>
                            </div>
                            <div class="material-datatables">
                                <table id="waiting" class="table table-striped table-no-bordered table-hover"
                                       style="width:100%">
                                    @csrf
                                    <thead class="text-primary">
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th>Tên người đăng ký</th>
                                        <th>Tên Xe</th>
                                        <th class="text-center">Khởi hành</th>
                                        <th class="text-right">Kết thúc</th>
                                        <th class="text-right">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    {{--                                    @foreach( $waiting as $m)--}}
                                    {{--                                        <tr>--}}
                                    {{--                                            <td class="text-center">{{ $m->id }}</td>--}}
                                    {{--                                            <td>{{ $m->user_id }}</td>--}}
                                    {{--                                            <td>{{ $m->vehicle_id }}</td>--}}
                                    {{--                                            <td class="text-center">{{ \Carbon\Carbon::parse($m->start_date)->format('d/m/Y')}}</td>--}}
                                    {{--                                            <td class="text-center">{{ \Carbon\Carbon::parse($m->end_date)->format('d/m/Y')}}</td>--}}
                                    {{--                                            <td class="text-right">--}}
                                    {{--                                                <a href="javascript:;" data-id="{{ $m->id }}"  class="changeStatus btn btn-success"--}}
                                    {{--                                                   data-original-title="" title="">--}}
                                    {{--                                                    <i class="fa fa-edit">Xác nhận </i>--}}
                                    {{--                                                </a>--}}
                                    {{--                                                <a href="javascript:;"  data-id="{{ $m->id }}"  class="dangerCar btn btn-danger"--}}
                                    {{--                                                   data-original-title="" title="">--}}
                                    {{--                                                    <i class="fa fa-times">Hủy</i>--}}
                                    {{--                                                </a>--}}
                                    {{--                                            </td>--}}
                                    {{--                                        </tr>--}}
                                    {{--                                    @endforeach--}}
                                    </tbody>
                                </table>
                            </div>

                        </div>

                </div>
                @else
                    <div class="">
                        <div class="card-header">
                            <h4 class="card-title">Chua co xe nao dc dat</h4>
                        </div>
                        <div clss="news_Car">
                            <a href="{{ route('add_vehicles')}}" class="float-right pull-right btn btn-success">

                                <i class="fa fa-arrow-circle-right"></i>
                                <div class="ripple-container"></div>
                            </a>
                        </div>
                    </div>
                @endif
            </div>

        </div>
    </div>
@endsection

