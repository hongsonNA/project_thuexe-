@extends('admin.layouts.app_dashboard')
@section('title', 'Thành phố')

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
                            <h4 class="card-title">Danh sách Thành Phố</h4>
                            <a href="{{ route('city_add') }}"
                               class="pull-right btn btn-success">Thêm mới Thành Phố
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
                                        <th class="text-right">Action</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @foreach($city as $c)
                                        <tr>
                                            <td>{{ $c->id }}</td>
                                            <td>{{ $c->name }}</td>
                                            <td class="text-right">
                                                <a href="{{ route('city_edit', $c->id) }}">
                                                    <button type="button" rel="tooltip"
                                            khoản                class="btn btn-info btn-link"
                                                            data-original-title="" title="Sửa tài khoản">
                                                        <i class="material-icons">edit</i>
                                                    </button>
                                                </a>

                                                <a href="{{ route('city_remove', $c->id) }}">
                                                    <button type="button" rel="tooltip" class="btn btn-danger btn-link"
                                                            data-original-title="" title="Xóa tài khoản">
                                                        <i class="material-icons">close</i>
                                                    </button>
                                                </a>

                                            </td>
                                        </tr>

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
