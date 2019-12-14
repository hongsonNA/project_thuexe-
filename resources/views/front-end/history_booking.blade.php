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
                    <th style="width:40%">Tên xe</th>
                    <th style="width:15%" class="text-center">Ngày khởi hành</th>
                    <th style="width:15%" class="text-center">Ngày kết thúc</th>
                    <th style="width:22%" class="text-center">Trạng thái</th>
                    <th style="width:10%"> </th>
                </tr>
                </thead>
                <tbody>
                @foreach($history as $id)
                <tr>
                    <td data-th="Product">1
                        <div class="row">
                            <div class="col-sm-2 hidden-xs"><img src="{{ asset('image_upload/img_vehicle/'.$id->image )}}" alt="" class="img-responsive" width="100">
                            </div>
                            <div class="col-sm-10">
                                <h4 class="nomargin">{{ $id['vehicle']['name'] }}</h4>
                                <p></p>
                            </div>
                        </div>
                    </td>
                    <td class="text-center">{{ \Carbon\Carbon::parse($id->start_date)->format('d/m/Y')}}</td>
                    <td class="text-center">{{ \Carbon\Carbon::parse($id->end_date)->format('d/m/Y')}}</td>

                    <td data-th="Subtotal" class="text-center">
                        @if($id->status == 1)
                            <span class="btn success">Đang chờ...</span>
                        @elseif($id->status==2)
                            <span>Đã xác nhận</span>
                        @elseif($id->status==3)
                            <span>Đang thực hiện</span>
                        @elseif($id->status==4)
                            <span>Đã hoàn thành</span>
                        @elseif($id->status==5)
                            <span>Từ chối </span>
                        @endif
                    </td>
                    <td class="actions" data-th="">
{{--                        <button class="btn btn-info btn-sm"><i class="fa fa-edit"></i>--}}
{{--                        </button>--}}

                        <a class="btn btn-danger btn-sm" href="{{ route('deleteBooking',$id->id) }}"><i class="fa fa-trash-o"></i></a>
                    </td>
                </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @endsection()
