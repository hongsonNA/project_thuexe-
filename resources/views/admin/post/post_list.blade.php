@extends('admin.layouts.app_dashboard')
@section('title', 'Posts')

@section('content')
    <div class="content">
        <div class="container-fluid">

            {{--            @if(session('mess_add'))--}}
            {{--                <script>--}}
            {{--                    setTimeout(function () {--}}
            {{--                        $('#success_cate').fadeOut(5000)--}}
            {{--                    });--}}
            {{--                </script>--}}

            {{--                <div class="alert alert-success" id="success_cate">--}}
            {{--                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">--}}
            {{--                        <i class="material-icons">close</i>--}}
            {{--                    </button>--}}
            {{--                    <span>{{ session('mess_add') }}</span>--}}
            {{--                </div>--}}
            {{--            @endif--}}
            {{--            @if(session('mess_update'))--}}
            {{--                <script>--}}
            {{--                    setTimeout(function () {--}}
            {{--                        $('#success_cate').fadeOut(5000)--}}
            {{--                    });--}}
            {{--                </script>--}}

            {{--                <div class="alert alert-success" id="success_cate">--}}
            {{--                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">--}}
            {{--                        <i class="material-icons">close</i>--}}
            {{--                    </button>--}}
            {{--                    <span>{{ session('mess_update') }}</span>--}}
            {{--                </div>--}}
            {{--            @endif--}}

            <div class="row">
                <div class="col-md-12 ml-auto mr-auto">
                    <div class="card">
                        <div class="card-header card-header-success card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons">panorama</i>
                            </div>
                            <h4 class="card-title">Danh sách bài viết</h4>
                            <a href="{{ route('post_add') }}" class="pull-right btn btn-success">Thêm mới bài viết
                                <i class="fa fa-arrow-circle-right"></i>
                            </a>
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
                                        <th>Tiêu Đề</th>
                                        <th>Tin Văn Tắt</th>
                                        <th>Hình Ảnh</th>
                                        <th>Tác Giả</th>
                                        <th>Trạng thái</th>
                                        <th>Ngày Đăng</th>
                                        <th>Ngày Sửa</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                    </thead>

                                    <tbody>

                                        @foreach($post as $p)
                                        <tr>
                                            <td>{{$p->id}}</td>
                                            <td>{{$p->title}}</td>
                                            <td>{{$p->summary}}</td>
                                            <td>
                                                <img src="/image_upload/post/{{ $p->image_posts }}" >
                                            </td>
                                            <td>{{ $p['user']['name'] }}</td>
                                            <td>{{$p->status}}</td>
                                            <td>{{$p->created_at}}</td>
                                            <td>{{$p->updated_at}}</td>
                                            <td class="text-right">
                                                <a href="{{ route('post_edit', $p->id) }}">
                                                    <button type="button" rel="tooltip"
                                                            class="btn btn-info btn-link"
                                                            data-original-title="" title="Sửa tài khoản">
                                                        <i class="material-icons">edit</i>
                                                    </button>
                                                </a>

                                                <a href="">
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
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{--    <script src="//code.jquery.com/jquery.js"></script>--}}
    {{--    <script>--}}
    {{--        $(document).ready(function () {--}}
    {{--            $('#datatables').DataTable({--}}

    {{--                // "lengthMenu": true,--}}
    {{--                pageLength: 0,--}}
    {{--                lengthMenu: [5, 10, 20, 50],--}}
    {{--                order: [[0, 'desc']],--}}
    {{--                processing: true,--}}
    {{--                serverSide: true,--}}
    {{--                ajax: {--}}
    {{--                    url: '/dashboard/category/allCategory',--}}

    {{--                },--}}
    {{--                columns: [--}}
    {{--                    {data: 'id', name: 'id'},--}}
    {{--                    {data: 'name', name: 'name'},--}}
    {{--                    {data: 'created_at', name: 'created_at'},--}}
    {{--                    {data: 'updated_at', name: 'updated_at'},--}}
    {{--                    {data: 'action', name: 'action', orderable: false, searchable: false}--}}
    {{--                ]--}}
    {{--            });--}}
    {{--        });--}}

    {{--    </script>--}}
@endsection
