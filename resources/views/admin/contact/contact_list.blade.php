@extends('admin.layouts.app_dashboard')
@section('title', 'Danh sách liên hệ')

@section('content')
    <div class="content">
        <div class="container-fluid">

            @if(session('mess_update'))
                <script>
                    setTimeout(function () {
                        $('#success_cate').slideUp(5000)
                    });
                </script>

                <div class="alert alert-success" id="success_cate">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <i class="material-icons">close</i>
                    </button>
                    <span>{{ session('mess_update') }}</span>
                </div>
            @endif
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-icon card-header-success">
                            <div class="card-icon">
                                <i class="material-icons">contact_mail</i>
                            </div>
                            <h4 class="card-title ">Danh sách liện hệ</h4>
                        </div>
                        <div class="card-body">
                            <div class="material-datatables">
                                <table id="datatables" class="table table-striped table-no-bordered table-hover"
                                       style="width:100%">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Họ và Tên</th>
                                        <th>Email</th>
                                        <th>Số điện thoại</th>
                                        <th>Nội dung</th>
                                        <th>Trạng thái</th>
                                        <th>Hành động</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="//code.jquery.com/jquery.js"></script>
    <script>
        $(document).ready(function () {
            $('#datatables').DataTable({
                // "lengthMenu": true,
                pageLength: 0,
                lengthMenu: [10, 20, 50],
                order: [[0, 'desc']],
                processing: true,
                serverSide: true,
                ajax: {
                    url: '/dashboard/contacts/allContact',
                },
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'name', name: 'name'},
                    {data: 'email', name: 'email'},
                    {data: 'phone', name: 'phone'},
                    {data: 'content', name: 'content'},
                    {
                        data: 'status',
                        render: function (status) {

                            if (status === "1") {
                                return 'Chưa liên hệ lại';
                            } else {
                                return 'Đã liên hệ lại';
                            }
                        }
                    },
                    {data: 'action', name: 'action', orderable: false, searchable: false, className: "text-right"}
                ]
            });
        });
    </script>
@endsection
