@extends('front-end.admin_user.layout_user.main')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12 ml-auto mr-auto">
                <div class="card">
                    @if($booking != '')
                        <div class="card-header">
                            <h4 class="card-title">Danh sách đánh giá xe </h4>
{{--                            <a href="{{ route('add_vehicles') }}"--}}
{{--                               class="float-right pull-right btn btn-success">--}}
{{--                                Thêm mới xe--}}
{{--                                <i class="fa fa-arrow-circle-right"></i>--}}
{{--                                <div class="ripple-container"></div>--}}
{{--                            </a>--}}
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead class="text-primary">
                                <tr>
                                    <th width="50px">No</th>
                                    <th>Thanh vien</th>
                                    <th>Bình luận</th>
                                    <th class="text-right">Thao tác</th>
                                </tr>
                                </thead>

                                <tbody>

                                @foreach($booking as $key => $id)
                                    {{--                                        @dd($id)--}}
                                    <tr>
{{--                                        <input type="hidden" name="status" value="1">--}}
                                        <td>{{ $id->id }}</td>
                                        <td>{{ $id['user']['name'] }}</td>
                                        <td>{{ $id->content }}</td>
                                        <td class="text-right">
{{--                                            <a onclick="return confirm('Xac nhan comment ok')"--}}
{{--                                               href="{{ route('update_cm',$id->id) }}"><i--}}
{{--                                                    class="material-icons">edit</i></a>--}}
                                            <a onclick="return confirm('Loai bo binh luan nay')"
                                               href="{{ route('removeCM',$id->id) }}">
{{--                                                <i class="material-icons"></i>--}}
                                                xoa
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                </div>
                @else
                    <div class="">
                        <div class="card-header">
                            <h4 class="card-title">Chua co xe nao dc dat</h4>
                        </div>
                        <div clss="news_Car">
                            <a href="{{ route('add_vehicles')}}" class="float-right pull-right btn btn-success">

                                <i class="fa fa-arrow-circle-right"></i>
                                <div class="ripple-container"></div>
                            </a>
                        </div>
                    </div>
                @endif
            </div>

        </div>
    </div>
@endsection

