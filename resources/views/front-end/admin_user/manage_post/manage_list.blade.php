@extends('front-end.admin_user.layout_user.main')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12 ml-auto mr-auto">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Quản lý xe</h4>
                        <div class="box-search">
                        <a href="{{ route('add_vehicles') }}"
                           class="float-right pull-right btn btn-success">
                            Thêm mới xe
                            <i class="fa fa-arrow-circle-right"></i>
                            <div class="ripple-container"></div>
                        </a>

                        </div>
                    </div>
                        @if(session()->has('mes'))
                            <div class="alert alert-success">
                                {{ session()->get('mes') }}
                                <script src="">
                                    Swal.fire(
                                        'Thay đổi trạng thái thành công!',
                                        '',
                                        'success'
                                    )
                                </script>
                            </div>
                        @endif
                        @if(session()->has('mess'))
                            <div class="alert alert-success">
                                {{ session()->get('mess') }}
                                <script src="">
                                    Swal.fire(
                                        'Thay đổi trạng thái thành công!',
                                        '',
                                        'success'
                                    )
                                </script>
                            </div>
                        @endif
                    <div class="card-body">
                        <table class="table">
                            <thead class="text-primary">
                            <tr>
                                <th class="text-center">#</th>
                                <th>Tên Xe</th>
                                <th>Hình ảnh</th>
                                <th class="text-center">Trạng thái</th>
                                <th class="text-right">Giá tiền</th>
                                <th class="text-right">Thao tác</th>
                            </tr>
                            </thead>
                            <tbody>
{{--                            @dd($image_array)--}}

                            @foreach( $image_array as $m)
                                @if($m['user_id'] == Auth::user()->id)
                                @if($m['status'] == 2 && $m['is_trash'] == 0 )
                                <tr>
                                    <td class="text-center">{{ $m['id'] }}</td>
                                    <td>{{ $m['name'] }}</td>
                                    <td>
                                        <img src="/image_upload/img_vehicle/{{ $m['image_vehicle']['image_vehicle'] }}" style="width: 100px">
                                    </td>

                                    <td class="text-center">
                                        @if($m['status'] == 2)
                                            <span>Đang chờ...</span>
                                        @endif
                                    </td>
                                    <td class="text-right">{{ number_format($m['price']) }}</td>

                                    <td class="text-right">
                                        <a target="_blank" href="{{ route('detail', $m['id']) }}" class="btn btn-success">Xem chi tiết</a>
                                        <a  href="{{ route('moveTrash', $m['id']) }}" class="btn btn-danger">Ngưng hoạt động</a>

                                    </td>
                                </tr>
                                @endif
                                @endif
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>

            </div>

        </div>
    </div>

@endsection

