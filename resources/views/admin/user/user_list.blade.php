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
                               class="float-right pull-right btn btn-success">Thêm mới tài khoản
                                <i class="fa fa-arrow-circle-right"></i>
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="toolbar">
                            </div>
                            <div class="material-datatables">
                                <table id="datatables" class="table table-striped table-no-bordered table-hover"
                                       cellspacing="0" width="100%" >
                                    <thead>
                                    <tr>
                                        <th style="width: 40px">id</th>
                                        <th width="120px">Tên</th>
                                        <th width="120px">Ảnh</th>
                                        <th width="150px">Email</th>
                                        <th width="140px">Số điện thoại</th>
                                        <th width="200px">Địa chỉ</th>
                                        <th class="text-right">Action</th>
                                    </tr>
                                    </thead>

                                    <tbody>

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


    <script src="//code.jquery.com/jquery.js"></script>
    <script>
        $(document).ready(function () {
            $('#datatables').DataTable({

                // "lengthMenu": true,
                pageLength: 0,
                lengthMenu: [5, 10, 20, 50],
                order: [[0, 'desc']],
                processing: true,
                serverSide: true,
                "autoWidth": true,
                ajax: {
                    url: '/dashboard/user/allUser',

                },
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'name', name: 'name'},
                    {data: 'image', name: 'image',
                        render: function (data, type, full, meta) {
                            return "<img src=\"/image_upload/user/" + data + "\" width=\"50\"/>";
                        }
                    },
                    {data: 'email', name: 'email'},
                    {data: 'phone', name: 'phone'},
                    {data: 'address', name: 'address'},
                    {data: 'action', name: 'action', orderable: false, searchable: false, className: "text-right"}
                ],
            });
        });

    </script>
@endsection
