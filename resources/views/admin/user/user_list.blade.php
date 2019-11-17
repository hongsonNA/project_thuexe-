@extends('admin.layouts.app_dashboard')
@section('title', 'Tài khoản')

@section('content')

    <div class="content">
        <div class="container-fluid">
            @if(session('mess_add'))
                <script>
                    setTimeout(function () {
                        $('#success_cate').slideUp(5000)
                    });
                </script>

                <div class="alert alert-success" id="success_cate">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <i class="material-icons">close</i>
                    </button>
                    <span>{{ session('mess_add') }}</span>
                </div>
            @endif
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
                            <div class="card card-nav-tabs card-plain">
                                <div class="card-header card-header-success">
                                    <!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
                                    <div class="nav-tabs-navigation nav-justified">
                                        <div class="nav-tabs-wrapper">
                                            <ul class="nav nav-tabs" data-tabs="tabs">
                                                <li class="nav-item">
                                                    <a class="nav-link active" href="#home" data-toggle="tab">Home</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#updates" data-toggle="tab">Updates</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#history" data-toggle="tab">History</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body ">
                                    <div class="tab-content text-center">
                                        <div class="tab-pane active" id="home">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                    <tr>
                                                        <th class="text-center">No</th>
                                                        <th>Full Name</th>
                                                        <th>Avatar</th>
                                                        <th>Email</th>
                                                        <th class="text-right">Phone</th>
                                                        <th class="text-right">Action</th>
                                                    </tr>
                                                    </thead>

                                                    <tbody>
                                                    @foreach($test as $t)
                                                        <tr>
                                                            <td class="text-center">{{ $t->id }}</td>
                                                            <td>{{ $t->name }}</td>
                                                            <td>
                                                                <img src="/image_upload/user/{{ $t->image }}" width="50"
                                                                     class="rounded-circle"/>
                                                            </td>
                                                            <td>{{ $t->email }}</td>
                                                            <td class="text-right">{{ $t->phone }}</td>
                                                            <td class=" text-right">
                                                                <a href=""
                                                                   class="btn btn-link btn-info btn-just-icon edit">
                                                                    <i class="material-icons">edit</i>
                                                                    <div class="ripple-container"></div>
                                                                    <div class="ripple-container"></div>
                                                                </a>

                                                                <a class="btn btn-link btn-danger btn-just-icon remove"
                                                                   data-toggle="modal" data-target="#exampleModal">
                                                                    <i class="material-icons">close</i>
                                                                    <div class="ripple-container"></div>
                                                                </a>

                                                                <div class="modal fade" id="exampleModal" tabindex="-1"
                                                                     role="dialog" aria-labelledby="exampleModalLabel"
                                                                     aria-hidden="true">
                                                                    <div class="modal-dialog" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title text-center"
                                                                                    id="exampleModalLabel">Xóa bài
                                                                                    viết</h5>
                                                                                <button type="button" class="close"
                                                                                        data-dismiss="modal"
                                                                                        aria-label="Close">
                                                                                    <span aria-hidden="true">×</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body text-center"
                                                                                 style="color: red; font-weight: bolder">
                                                                                Bạn có chắc chắn muốn xóa tài khoản này
                                                                                không?
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button"
                                                                                        class="btn btn-secondary"
                                                                                        data-dismiss="modal">Hủy
                                                                                </button>
                                                                                <a href=""
                                                                                   class="btn btn-danger">Xóa</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    @endforeach

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="updates">
                                            <p> I will be the leader of a company that ends up being worth
                                                billions of dollars, because I got the answers. I understand
                                                culture. I am the nucleus. I think that&#x2019;s a
                                                responsibility that I have, to push possibilities, to show
                                                people, this is the level that things could be at. I think that&#x2019;s
                                                a responsibility that I have, to push possibilities, to show
                                                people, this is the level that things could be at. </p>
                                        </div>
                                        <div class="tab-pane" id="history">
                                            <p> I think that&#x2019;s a responsibility that I have, to push
                                                possibilities, to show people, this is the level that things
                                                could be at. I will be the leader of a company that ends up
                                                being worth billions of dollars, because I got the answers. I
                                                understand culture. I am the nucleus. I think that&#x2019;s a
                                                responsibility that I have, to push possibilities, to show
                                                people, this is the level that things could be at.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    {{--                        <div class="card-body">--}}
                    {{--                            <div class="toolbar">--}}
                    {{--                            </div>--}}
                    {{--                            <div class="material-datatables">--}}
                    {{--                                <table id="datatables" class="table table-striped table-no-bordered table-hover"--}}
                    {{--                                       cellspacing="0" width="100%">--}}
                    {{--                                    <thead>--}}
                    {{--                                    <tr>--}}
                    {{--                                        <th width="40px">No</th>--}}
                    {{--                                        <th width="120px">Full Name</th>--}}
                    {{--                                        <th width="120px">Avatar</th>--}}
                    {{--                                        <th width="150px">Email</th>--}}
                    {{--                                        <th width="140px">Phone</th>--}}
                    {{--                                        <th width="200px">Address</th>--}}
                    {{--                                        <th class="text-right">Action</th>--}}
                    {{--                                    </tr>--}}
                    {{--                                    </thead>--}}

                    {{--                                    <tbody>--}}
                    {{--                                    --}}{{--                                    hahaha--}}

                    {{--                                    @foreach($test as $t)--}}
                    {{--                                        @if($t->role == 1)--}}
                    {{--                                            <tr>--}}
                    {{--                                                <td>{{ $t->id }}</td>--}}
                    {{--                                                <td>--}}
                    {{--                                                                        <img src="/image_upload/user/{{ $t->image }}" width="50"--}}
                    {{--                                                                             class="rounded-circle"/>--}}
                    {{--                                                </td>--}}
                    {{--                                                <td>{{ $t->id }}</td>--}}
                    {{--                                                <td>{{ $t->id }}</td>--}}
                    {{--                                                <td>{{ $t->id }}</td>--}}
                    {{--                                            </tr>--}}
                    {{--                                        @endif--}}
                    {{--                                    @endforeach--}}

                    {{--                                    </tbody>--}}
                    {{--                                </table>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    <!-- end content-->
                    </div>
                    <!--  end card  -->
                </div>
                <!-- end col-md-12 -->
            </div>
            <!-- end row -->
        </div>
    </div>



    {{--    <script>--}}
    {{--        $(document).ready(function () {--}}
    {{--            $('#datatables').DataTable({--}}

    {{--                // "lengthMenu": true,--}}
    {{--                pageLength: 0,--}}
    {{--                lengthMenu: [5, 10, 20, 50],--}}
    {{--                order: [[0, 'desc']],--}}
    {{--                processing: true,--}}
    {{--                serverSide: true,--}}
    {{--                "autoWidth": true,--}}
    {{--                ajax: {--}}
    {{--                    url: '/dashboard/user/allUser',--}}

    {{--                },--}}
    {{--                columns: [--}}
    {{--                    {data: 'id', name: 'id'},--}}
    {{--                    {data: 'name', name: 'name'},--}}
    {{--                    {data: 'image', name: 'image',--}}
    {{--                        render: function (data, type, full, meta) {--}}
    {{--                            return "<img src=\"/image_upload/user/" + data + "\" width=\"50\" style=\"border-radius: 50%;\" />";--}}
    {{--                        }--}}
    {{--                    },--}}
    {{--                    {data: 'email', name: 'email'},--}}
    {{--                    {data: 'phone', name: 'phone'},--}}
    {{--                    {data: 'address', name: 'address'},--}}
    {{--                    {data: 'action', name: 'action', orderable: false, searchable: false, className: "text-right"}--}}
    {{--                ],--}}
    {{--            });--}}
    {{--        });--}}

    {{--    </script>--}}
@endsection
