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
                                        <th class="text-center">Action</th>
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
                lengthMenu: [5, 10, 20, 50],
                order: [[0, 'desc']],
                processing: true,
                serverSide: true,
                "autoWidth": true,
                ajax: {
                    url: '/dashboard/posts/allPost',

                },
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'title', name: 'title'},
                    {data: 'summary', name: 'summary'},
                    {data: 'image_posts', name: 'image_posts',
                        render: function (data, type, full, meta) {
                            return "<img src=\"/image_upload/post/" + data + "\" width=\"100\"/>";
                        }
                    },
                    {data: 'user_id', name: 'user_id'},
                    {data: 'status', name: 'status'},
                    {data: 'action', name: 'action', orderable: false, searchable: false}
                ],
            });
        });

    </script>
@endsection
