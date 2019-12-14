@extends('front-end.layouts.app_front-end')
@section('content')
    <div class="block-area">
            <h2 class="text-center">Danh sach xe </h2>
        <div class="container">
            <table id="cart" class="table table-hover table-condensed">
                <thead>
                <tr>
                    <th style="width:50%">Tên xe</th>
                    <th style="width:20%" class="text-center">Ngày khởi hành</th>
                    <th style="width:20%" class="text-center">Ngày kết thúc</th>
                    <th style="width:22%" class="text-center">Trạng thái</th>
                    <th style="width:10%"> </th>
                </tr>
                </thead>
                <tbody>
                @foreach($history as $id)
                <tr>
                    <td data-th="Product">
                        <div class="row">
                            <div class="col-sm-2 hidden-xs"><img src="{{ asset('image_upload/img_vehicle/'.$id->image )}}" alt="" class="img-responsive" width="100">
                            </div>
                            <div class="col-sm-10">
                                <h4 class="nomargin">{{ $id->vehicle_id }}</h4>
                                <p>Mô tả của =</p>
                            </div>
                        </div>
                    </td>
                    <td class="text-center">{{ \Carbon\Carbon::parse($id->start_date)->format('d/m/Y')}}</td>
                    <td class="text-center">{{ \Carbon\Carbon::parse($id->end_date)->format('d/m/Y')}}</td>

                    <td data-th="Subtotal" class="text-center">
                        @if($id->status == 1)
                            <span class="">Đang chờ...</span>
                        @elseif($id->status==2)
                            <span>Đã xác nhận</span>
                        @endif
                    </td>
{{--                    <td class="actions" data-th="">--}}
{{--                        <button class="btn btn-info btn-sm"><i class="fa fa-edit"></i>--}}
{{--                        </button>--}}
{{--                        <button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i>--}}
{{--                        </button>--}}
{{--                    </td>--}}
                </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @endsection()
