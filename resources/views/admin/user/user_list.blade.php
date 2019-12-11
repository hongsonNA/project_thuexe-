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

                            <div class="row">
                                <div class="col-md-6">

                                </div>

                                <div class="col-md-6">

                                </div>
                            </div>
                            <a href="{{ route('user_add') }}"
                               class="float-right pull-right btn btn-success">Thêm mới tài khoản
                                <i class="fa fa-arrow-circle-right"></i>
                            </a>
                        </div>

                        <div class="card-body">
                            <div class="card card-nav-tabs card-plain">
                                <div class="card-header card-header-success">
                                    <div class="nav-tabs-navigation nav-justified">
                                        <div class="nav-tabs-wrapper">
                                            <ul class="nav nav-tabs" data-tabs="tabs">
                                                <li class="nav-item">
                                                    <a class="nav-link active" href="#home" data-toggle="tab">Tất cả tài khoản</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#updates" data-toggle="tab">Tài khoản admin</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#history" data-toggle="tab">Tài khoản người dùng</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body ">
                                    <div class="tab-content text-center">
                                        <div class="tab-pane active" id="home">
                                            {{--List user--}}
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
                                                        @foreach($users_list as $list_user)
                                                            @if($list_user->role == 10)
                                                            @else
                                                                <tr>
                                                                    <td class="text-center">{{ $list_user->id }}</td>
                                                                    <td>{{ $list_user->name }}</td>
                                                                    <td>
                                                                        <img src="/image_upload/user/{{ $list_user->image }}" width="50" class="rounded-circle"/>
                                                                    </td>
                                                                    <td>{{ $list_user->email }}</td>
                                                                    <td class="text-right">{{ $list_user->phone }}</td>
                                                                    <td class=" text-right">
                                                                        <a href="{{ route('user_edit', $list_user->id) }}" class="btn btn-link btn-info btn-just-icon edit">
                                                                            <i class="material-icons">edit</i>
                                                                            <div class="ripple-container"></div>
                                                                            <div class="ripple-container"></div>
                                                                        </a>

                                                                        <a class="btn btn-link btn-danger btn-just-icon remove" data-toggle="modal" data-target="#exampleModal">
                                                                            <i class="material-icons">close</i>
                                                                            <div class="ripple-container"></div>
                                                                        </a>

                                                                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                            <div class="modal-dialog" role="document">
                                                                                <div class="modal-content">
                                                                                    <div class="modal-header">
                                                                                        <h5 class="modal-title text-center" id="exampleModalLabel">Xóa bài viết</h5>
                                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                            <span aria-hidden="true">×</span>
                                                                                        </button>
                                                                                    </div>
                                                                                    <div class="modal-body text-center" style="color: red; font-weight: bolder">
                                                                                        Bạn có chắc chắn muốn xóa tài khoản này không?
                                                                                    </div>
                                                                                    <div class="modal-footer">
                                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                                                                                        <a href="{{ route('user_remove', $list_user->id) }}" class="btn btn-danger">Xóa</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            @endif
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                            {{--List user--}}
                                        </div>
                                        <div class="tab-pane" id="updates">
                                            {{--Admin--}}
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
                                                    @foreach($users_admin as $admin)
                                                            <tr>
                                                                <td class="text-center">{{ $admin->id }}</td>
                                                                <td>{{ $admin->name }}</td>
                                                                <td>
                                                                    <img src="/image_upload/user/{{ $admin->image }}" width="50" class="rounded-circle"/>
                                                                </td>
                                                                <td>{{ $admin->email }}</td>
                                                                <td class="text-right">{{ $admin->phone }}</td>
                                                                <td class=" text-right">
                                                                    <a href="{{ route('user_edit', $admin->id) }}" class="btn btn-link btn-info btn-just-icon edit">
                                                                        <i class="material-icons">edit</i>
                                                                        <div class="ripple-container"></div>
                                                                        <div class="ripple-container"></div>
                                                                    </a>

                                                                    <a class="btn btn-link btn-danger btn-just-icon remove" data-toggle="modal" data-target="#exampleModal">
                                                                        <i class="material-icons">close</i>
                                                                        <div class="ripple-container"></div>
                                                                    </a>

                                                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                        <div class="modal-dialog" role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title text-center" id="exampleModalLabel">Xóa bài viết</h5>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">×</span>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body text-center" style="color: red; font-weight: bolder">
                                                                                    Bạn có chắc chắn muốn xóa tài khoản này không?
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                                                                                    <a href="{{ route('user_remove', $admin->id) }}" class="btn btn-danger">Xóa</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
{{--                                                        @endif--}}
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                            {{--Admin--}}
                                        </div>
                                        <div class="tab-pane" id="history">
                                            {{--member--}}
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
                                                    @foreach($user as $member)
                                                        @if($member->role == 10 || $member->role == 9)
                                                        @else
                                                            <tr>
                                                                <td class="text-center">{{ $member->id }}</td>
                                                                <td>{{ $member->name }}</td>
                                                                <td>
                                                                    <img src="/image_upload/user/{{ $member->image }}" width="50" class="rounded-circle"/>
                                                                </td>
                                                                <td>{{ $member->email }}</td>
                                                                <td class="text-right">{{ $member->phone }}</td>
                                                                <td class=" text-right">
                                                                    <a href="{{ route('user_edit', $member->id) }}" class="btn btn-link btn-info btn-just-icon edit">
                                                                        <i class="material-icons">edit</i>
                                                                        <div class="ripple-container"></div>
                                                                        <div class="ripple-container"></div>
                                                                    </a>

                                                                    <a class="btn btn-link btn-danger btn-just-icon remove" data-toggle="modal" data-target="#exampleModal">
                                                                        <i class="material-icons">close</i>
                                                                        <div class="ripple-container"></div>
                                                                    </a>

                                                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                        <div class="modal-dialog" role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title text-center" id="exampleModalLabel">Xóa bài viết</h5>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">×</span>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body text-center" style="color: red; font-weight: bolder">
                                                                                    Bạn có chắc chắn muốn xóa tài khoản này không?
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                                                                                    <a href="{{ route('user_remove', $member->id) }}" class="btn btn-danger">Xóa</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        @endif
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                            {{--member--}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  end card  -->
                </div>
                <!-- end col-md-12 -->
            </div>
            <!-- end row -->
        </div>
    </div>
    <script src="//code.jquery.com/jquery.js"></script>
@endsection
