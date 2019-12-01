@extends('front-end.admin_user.layout_user.main')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12 ml-auto mr-auto">
                <div class="card">
                    @if($booking != '')
                        <div class="card-header">
                            <h4 class="card-title">Danh sách xác nhận thông tin </h4>
{{--                            <a href="{{ route('add_vehicles') }}"--}}
{{--                               class="float-right pull-right btn btn-success">--}}
{{--                                Thêm mới xe--}}
{{--                                <i class="fa fa-arrow-circle-right"></i>--}}
{{--                                <div class="ripple-container"></div>--}}
{{--                            </a>--}}
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead class="text-primary">
                                <tr>
                                    <th class="text-center">#</th>
                                    <th>Tên người đăng ký</th>
                                    <th>Tên Xe</th>
                                    <th class="text-center">Khởi hành</th>
                                    <th class="text-center">Kết thúc</th>
                                    <th class="text-right">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach( $booking as $m)

                                    <tr>
                                        <td class="text-center">{{ $m->id }}</td>
                                        <td>{{ $m->user_id }}</td>
                                        <td>{{ $m->vehicle_id }}</td>
                                        <td class="text-right">{{ \Carbon\Carbon::parse($m->start_date)->format('d/m/Y')}}</td>
                                        <td class="text-center">{{ \Carbon\Carbon::parse($m->end_date)->format('d/m/Y')}}</td>
                                        <td class="text-right">
                                            <a onclick="return confirm('Xóa bỏ khỏi danh sách')" href="{{ route('remote', $m->id) }}" class="btn btn-danger btn-icon btn-sm "
                                               data-original-title="" title="">
                                                <i class="fa fa-times"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
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

