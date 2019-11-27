@extends('admin.layouts.app_dashboard')
@section('title', 'Danh sách liên hệ')

@section('content')
    <div class="content">
        <div class="container-fluid">
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
                    {data: 'name', name: 'email'},
                    {data: 'name', name: 'phone'},
                    {data: 'name', name: 'content'}
                ]
            });
        });

    </script>
@endsection

