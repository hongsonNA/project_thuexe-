@extends('admin.layouts.app_dashboard')
@section('title', 'Danh sách bình luận')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-10 ml-auto mr-auto">
                    <div class="card">
                        <div class="card-header card-header-success card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons">comment</i>
                            </div>
                            <h4 class="card-title">Danh sách Report</h4>
                        </div>
                        <form action="" method="">
                            @csrf
                        <div class="card-body">
                            <div class="toolbar">
                            </div>
                            <div class="material-datatables">
                                <table id="datatables" class="table table-striped table-no-bordered table-hover"
                                       style="width:100%">
                                    <thead>
                                    <tr>
                                        <th width="50px">No</th>
                                        <th>Thanh vien</th>
                                        <th>Bình luận</th>
{{--                                        <th></th>--}}
{{--                                        <th></th>--}}
                                        <th class="text-right">Action</th>
                                    </tr>
                                    </thead>

                                    <tbody>

                                    @foreach($comments as $key => $id)
{{--                                        @dd($id)--}}
                                        <tr>
                                            <input type="hidden" name="status" value="1">
                                            <td>{{ $id->id }}</td>
                                            <td>{{ $id['user']['name'] }}</td>
                                            <td>{{ $id->report_content }}</td>
                                            <td class="text-right">
                                                <a href="#" id="show_comment">xem binh luan</a>
                                                <a onclick="return confirm('Xac nhan comment ok')" href="{{ route('update_cm',$id->id) }}"><i class="material-icons">edit</i></a>
                                                <a onclick="return confirm('Loai bo binh luan nay')" href="{{ route('remote_comment',$id->id) }}"><i class="material-icons">close</i></a>
                                            </td>
                                        </tr>
                                        @endforeach
{{--                                    {{ $comment->links() }}--}}
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        </form>
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
