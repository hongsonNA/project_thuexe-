@extends('front-end.layouts.app_front-end')
@section('content')
    <div class="block-area">
        <br>
            <h2 class="text-center">Lịch sử đặt xe</h2>
        <br>
        <div class="container">
            <table id="cart" class="table table-hover table-condensed">
                <thead>
                <tr>
                    <th>Tên xe</th>
                    <th>hinh anh </th>
                    {{-- <th>Chu xe</th> --}}
                    <th  class="text-center">Ngày khởi hành</th>
                    <th  class="text-center">Ngày kết thúc</th>
                    <th  class="text-center">Trạng thái</th>
                    <th > </th>
                </tr>
                </thead>
                <tbody>


                @foreach($history as $id)
                    @if ($id['user_id'] == Auth::user()->id )
                <tr>

                    <td>{{ $id['vehicle']['name'] }}</td>
                    <td><img src="{{ asset('image_upload/img_vehicle/911t-0357.jpg')}}" alt="" class="img-responsive" width="100"></td>
                    {{-- <td>{{ $id['user']['name'] }}</td> --}}

                    <td class="text-center">{{ \Carbon\Carbon::parse($id['start_date'])->format('d/m/Y')}}</td>
                    <td class="text-center">{{ \Carbon\Carbon::parse($id['end_date'])->format('d/m/Y')}}</td>

                    <td data-th="Subtotal" class="text-center">
                        @if($id['status'] == 1)
                            <span class="btn success">Đang chờ...</span>
                        @elseif($id['status']==2)
                            <span>Đã xác nhận</span>
                        @elseif($id['status']==3)
                            <span>Đang thực hiện</span>
                        @elseif($id['status']==4)
                            <span>Đã hoàn thành</span>
                        @elseif($id['status'] ==5)
                            <span>Từ chối </span>
                        @endif
                    </td>
                    @if($id['status'] !== 3)
                    <td class="actions" data-th="">
{{--                        <button class="btn btn-info btn-sm"><i class="fa fa-edit"></i>--}}
{{--                        </button>--}}

                        <a class="btn btn-danger btn-sm" href="{{ route('deleteBooking',$id['id']) }}"><i class="fa fa-trash-o"></i></a>
                    </td>
                        @endif
                </tr>
                @endif
                    @endforeach




                </tbody>
            </table>
        </div>
    </div>
    @endsection()
