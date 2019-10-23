@extends('admin.layouts.app_dashboard')
@section('title', 'Tài khoản')

@section('content')


    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-success card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons">perm_identity</i>
                            </div>
                            <h4 class="card-title">Danh sách User</h4>
                            <a href="{{ route('user_add') }}"
                               class="pull-right btn btn-success">Thêm mới tài khoản
                                <i class="fa fa-arrow-circle-right"></i>
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="toolbar">
                            </div>
                            <div class="material-datatables">
                                <table id="datatables" class="table table-striped table-no-bordered table-hover"
                                       cellspacing="0" width="100%" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Tên</th>
                                        <th>Ảnh</th>
                                        <th>Ngày sinh</th>
                                        <th>Giới tính</th>
                                        <th>Email</th>
                                        <th>Số điện thoại</th>
                                        <th>Địa chỉ</th>
                                        <th class="text-right">Action</th>
                                        <td class="text-right">
                                            <button type="button" rel="tooltip"
                                                    class="btn btn-info btn-link"
                                                    data-original-title="" title="Sửa danh mục">
                                                <i class="material-icons">edit</i>
                                            </button>
                                            <button type="button" rel="tooltip" class="btn btn-danger btn-link"
                                                    data-original-title="" title="Xóa danh mục">
                                                <i class="material-icons">close</i>
                                            </button>
                                        </td>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @foreach($user as $u)
                                        <th>{{ $u->id }}</th>
                                        <th>{{ $u->name }}</th>
                                        <th>{{ $u->image }}</th>
                                        <th>{{ $u->birthday }}</th>
                                        <th>
                                            @switch($u->gender)
                                                @case("0")
                                                Chưa xác định
                                                @break;
                                                @case("1")
                                                Nữ
                                                @break;
                                                @case("2")
                                                Nam
                                                @break;
                                                @default
                                                Chưa xác đinh
                                            @endswitch

                                        </th>
                                        <th>{{ $u->email }}</th>
                                        <th>{{ $u->phone }}</th>
                                        <th>{{ $u->address }}</th>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- end content-->
                    </div>
                    <!--  end card  -->
                </div>
                <!-- end col-md-12 -->
            </div>
            <!-- end row -->
        </div>
    </div>

@endsection
