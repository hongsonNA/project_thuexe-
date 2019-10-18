@extends('admin.layouts.app_dashboard')
@section('title', 'Danh sách user')

@section('content')
    @if(session('mess'))
        <script>
            setTimeout(function () {
                $('#success_cate').hide(5000)
            });
        </script>

        <div class="alert alert-success" id="success_cate">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <i class="material-icons">close</i>
            </button>
            <span>{{ session('mess') }}</span>
        </div>
    @endif

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons">assignment</i>
                            </div>
                            <h4 class="card-title">DataTables.net</h4>
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
                                        <th class="text-right">
                                            <a href="" class="btn btn-success">
                                                <span class="btn-label"><i class="material-icons">add</i></span>ADD
                                            </a>
                                        </th>
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
{{--                                        <th>@if($u == 0)--}}
{{--                                        chua xac dinh--}}
{{--                                            @elseif($u == 1)--}}
{{--                                            nam--}}
{{--                                                @else--}}
{{--                                            nu--}}
{{--                                            @endif--}}
{{--                                        </th>--}}
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
