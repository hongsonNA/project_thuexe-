@extends('admin.layouts.app_dashboard')
@section('title', 'Category')

@section('content')

    <div class="content">
        <div class="container-fluid">

            @if(session('mess'))
                <script>
                    setTimeout(function () {
                        $('#success_cate').slideUp(10000)
                    });
                </script>

                <div class="alert alert-success" id="success_cate">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <i class="material-icons">close</i>
                    </button>
                    <span>{{ session('mess') }}</span>
                </div>
            @endif

            <div class="row">
                <div class="col-md-10 ml-auto mr-auto">
                    <div class="card">
                        <div class="row">
                            <div class="card-header card-header-primary card-header-icon col-6">
                                <div class="card-icon">
                                    <i class="material-icons">assignment</i>
                                </div>
                                <h4 class="card-title">Danh sách danh mục</h4>
                            </div>

                            <div class="col-5 text-right">
                                <a href="{{ route('category_add') }}" class="btn btn-success">
                                    <span class="btn-label"><i class="material-icons">add</i></span>Thêm mới danh mục
                                </a>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="toolbar">
                            </div>
                            <div class="material-datatables">
                                <table id="datatables" class="table table-striped table-no-bordered table-hover"
                                       style="width:100%">
                                    <thead>
                                    <tr>
                                        <th width="50px">No</th>
                                        <th>Name</th>
                                        <th>Created At</th>
                                        <th>Updated At</th>
                                        <th class="text-center">Action</th>
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
                lengthMenu: [5, 10, 20, 50, 100, 300, 500],
                order: [[0, 'desc']],
                processing: true,
                serverSide: true,
                ajax: {
                    url: '/dashboard/allCategory',
                },
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'name', name: 'name'},
                    {data: 'created_at', name: 'created_at'},
                    {data: 'updated_at', name: 'updated_at'},
                    {data: 'action', name: 'action', orderable: false, searchable: false}
                ]
            });
        });
    </script>
@endsection
