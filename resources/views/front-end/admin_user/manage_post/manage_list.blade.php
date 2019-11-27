@extends('front-end.admin_user.layout_user.main')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12 ml-auto mr-auto">
                <div class="card">
                    @if($manage != '')
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
                        <table class="table">
                            <thead class="text-primary">
                            <tr>
                                <th class="text-center">#</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th class="text-center">Status</th>
                                <th class="text-right">Salary</th>
                                <th class="text-right">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach( $manage as $m)
                                <tr>
                                    <td class="text-center">{{ $m->id }}</td>
                                    <td>{{ $m->name }}</td>
                                    <td>
                                        <img src="{{ asset('image_upload/img_vehicle/'.$m->image) }}" alt="" width="100">
                                    </td>
                                    <td class="text-center">
                                        @if($m->status == 1)
                                            <span>đang chờ...</span>
                                        @endif
                                    </td>
                                    <td class="text-right">{{ number_format($m->price) }}</td>
                                    <td class="text-right">
                                        <a href="{{ route('edit_vehicles', $m->id) }}" class="btn btn-success btn-icon btn-sm "
                                           data-original-title="" title="">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a onclick="return confirm('Bạn có chắc muốn xóa không ')" href="{{ route('remote', $m->id) }}" class="btn btn-danger btn-icon btn-sm "
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
                            <h4 class="card-title">Hãy tạo chiếc xe đầu tiền nào</h4>
                        </div>
                        <div clss="news_Car">
                            <a href="http://localhost/vehicles/add_vehicles" class="float-right pull-right btn btn-success">
                                Thêm mới xe
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

