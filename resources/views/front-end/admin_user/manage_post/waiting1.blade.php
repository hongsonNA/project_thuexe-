@extends('front-end.admin_user.layout_user.main')

@section('content')
    <div class="content" xmlns="">
        <div class="row">
            <div class="col-md-12 ml-auto mr-auto">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Đang chờ</h4>
                    </div>

                    <div class="card-body">

                        <div class="material-datatables">
                            <table id="waiting" class="table table-striped table-no-bordered table-hover"
                                   style="width:100%">
{{--                                @csrf--}}
                                <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
                                <thead class="text-primary">
                                <tr>
                                    <th class="text-center">#</th>
                                    <th>Tên người đăng ký</th>
                                    <th>Số điện thoại</th>
                                    <th>Email</th>
                                    <th>Tên Xe</th>
                                    <th class="text-center">Khởi hành</th>
                                    <th class="text-right">Kết thúc</th>
                                    <th class="text-right">Actions</th>
                                </tr>
                                </thead>
                                <tbody>

                                        @foreach($all as $k)
                                            @if($k['vehicle']['user_id'] == Auth::user()->id)
                                                @if($k['status']==1)
                                            <tr>
                                                <td>{{ $k['id'] }}</td>

                                                <td>{{ $k['name'] }}</td>

                                                <td>{{ $k['phone'] }}</td>

                                                <td>{{ $k['email'] }}</td>

                                                <td>{{ $k['vehicle']['name'] }}</td>

                                                <td>{{ $k['start_date'] }}</td>

                                                <td>{{ $k['end_date'] }}</td>

                                                <td>
                                                    <a  href="javascript:;" data-id=" {{ $k->id }}"  class="changeStatus btn btn-success"
                                                       data-toggle="tooltip" title="Xác nhận">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <a href="javascript:;"  data-id="{{ $k->id }}"  class="changeDanger btn btn-danger"
                                                        data-toggle="tooltip" title="Từ chối">
                                                        <i class="fa fa-times"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                                @endif
                                            @endif
                                        @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <script src="{{asset('front-end-css/js/jquery-1.12.5.min.js')}}"></script>

    <script>
        $(document).ready(function () {
            // console.log('aaa')

            // $("#see_status").on('change', function() {
            //     var table = $('#waiting').DataTable();
            //     table.column(1).
            //     search($(this).val()).
            //     draw();
            // });

            // var table = $('#waiting').DataTable();

                $(".changeStatus").on('click', function () {
                    var _token = $('input[name="_token"]').val();
                    console.log(_token);
                    var getID = $(this).attr("data-id");
                    // console.log(getID);
                    if (getID) {
                        $.ajax({
                            type: "post",
                            url: 'change/' + getID,
                            data: {getID: getID, _token: _token},
                            success: function (data) {
                                if (data) {
                                    Swal.fire(
                                        'Thay đổi trạng thái thành công!',
                                        '',
                                        'success'
                                    )
                                      setTimeout(refresh, 2000);
                                }
                            }
                        });
                    }
                })
                $(".changeSucesed").on('click', function () {
                    var _token = $('input[name="_token"]').val();
                    console.log(_token);
                    var getID = $(this).attr("data-id");
                    // console.log(getID);
                    if (getID) {
                        $.ajax({
                            type: "post",
                            url: 'change/' + getID,
                            data: {getID: getID, _token: _token},
                            success: function (data) {
                                if (data) {
                                    Swal.fire(
                                        'Thay đổi trạng thái thành công!',
                                        '',
                                        'success'
                                    )
                                    setTimeout(refresh, 2000);
                                }
                            }
                        });
                    }
                })
                $(".doing").on('click', function () {
                    var _token = $('input[name="_token"]').val();
                    console.log(_token);
                    var getID = $(this).attr("data-id");
                    // console.log(getID);
                    if (getID) {
                        $.ajax({
                            type: "post",
                            url: 'change/' + getID,
                            data: {getID: getID, _token: _token},
                            success: function (data) {
                                if (data) {
                                    Swal.fire(
                                        'Thay đổi trạng thái thành công!',
                                        '',
                                        'success'
                                    )
                                    setTimeout(refresh, 2000);
                                }
                            }
                        });
                    }
                })
                //
                $(".changeDanger").click(function () {
                    Swal.fire({
                        title: 'Bạn sẽ hủy giao dịch này?',
                        // text: "You won't be able to revert this!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        cancelButtonText: 'Hủy bỏ',
                        confirmButtonText: 'Đồng ý!'
                    }).then((result) => {
                        if (result.value) {
                            var _token = $('input[name="_token"]').val();
                            console.log(_token);
                            var getID = $(this).attr("data-id");
                            console.log(getID);
                            $.ajax({
                                type: "post",
                                url: 'danger/' + getID,
                                data: {getID: getID, _token: _token},
                                success: function (data) {
                                    if (data) {
                                        Swal.fire(
                                            'Đã hủy!',
                                            '',
                                            'success'
                                        )
                                        setTimeout(refresh, 2000);
                                    }
                                }
                            });

                        }
                        //

                    })
                })
                $(".dangerCar").click(function () {
                    Swal.fire({
                        title: 'Bạn sẽ hủy giao dịch này?',
                        // text: "You won't be able to revert this!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        cancelButtonText: 'Hủy bỏ',
                        confirmButtonText: 'Đồng ý!'
                    }).then((result) => {
                        if (result.value) {
                            var _token = $('input[name="_token"]').val();
                            console.log(_token);
                            var getID = $(this).attr("data-id");
                            console.log(getID);
                            $.ajax({
                                type: "post",
                                url: 'danger/' + getID,
                                data: {getID: getID, _token: _token},
                                success: function (data) {
                                    if (data) {
                                        Swal.fire(
                                            'Đã hủy!',
                                            '',
                                            'success'
                                        )
                                        setTimeout(refresh, 2000);
                                    }
                                }
                            });

                        }
                        //

                    })
                })
                //


        });
    </script>
@endsection


