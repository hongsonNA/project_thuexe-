@extends('front-end.admin_user.layout_user.main')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12 ml-auto mr-auto">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Chờ kiểm duyệt </h4>
                        <div class="box-search">
                            <a href="{{ route('add_vehicles') }}"
                               class="float-right pull-right btn btn-success">
                                Thêm mới xe
                                <i class="fa fa-arrow-circle-right"></i>
                                <div class="ripple-container"></div>
                            </a>

                        </div>
                    </div>
                    @if(session()->has('mes'))
                        <div class="alert alert-success">
                            {{ session()->get('mes') }}
                            <script src="">
                                Swal.fire(
                                    'Thay đổi trạng thái thành công!',
                                    '',
                                    'success'
                                )
                            </script>
                        </div>
                    @endif
                    @if(session()->has('mess'))
                        <div class="alert alert-success">
                            {{ session()->get('mess') }}
                            <script src="">
                                Swal.fire(
                                    'Thay đổi trạng thái thành công!',
                                    '',
                                    'success'
                                )
                            </script>
                        </div>
                    @endif
                    <div class="card-body">
                        <table class="table">
                            <thead class="text-primary">
                            <tr>
                                <th class="text-center">#</th>
                                <th>Tên Xe</th>
                                <th>Hình ảnh</th>
                                <th class="text-center">Trạng thái</th>
                                <th class="text-right">Giá tiền</th>
                                <th class="text-right">Thao tác</th>
                            </tr>
                            </thead>
                            <tbody>
                            {{--                            @dd($image_array)--}}

                            @foreach( $image_array as $m)
                                @if($m['status'] == 1)
                                    <tr>
                                        <td class="text-center">{{ $m['id'] }}</td>
                                        <td>{{ $m['name'] }}</td>
                                        <td>
                                            <img src="/image_upload/img_vehicle/{{ $m['image_vehicle']['image_vehicle'] }}" style="width: 100px">
                                        </td>

                                        <td class="text-center">
                                            @if($m['status'] == 1)
                                                <span>Đang chờ kiểm duyệt</span>
                                            @endif
                                        </td>
                                        <td class="text-right">{{ number_format($m['price']) }}</td>

                                        <td class="text-right">
                                            <a href="{{ route('edit_vehicles', $m['id']) }}" class="btn btn-success btn-icon btn-sm "
                                               data-original-title="" title="">
                                                <i class="fa fa-edit"></i>
                                            </a>

                                            <a  href="{{ URL::to('/vehicles/changeStatus/' . $m['id'] ) }}"
                                                class="btn btn-info btn-icon btn-sm changeStatus"
                                                data-method="POST" data-type="json"
                                                data-action1="{{ "<i class='fa fa-times'></i> ".Lang::get('form.label.cancel') }}"
                                                data-action2="{{ "<i class='fa fa-check'></i> " . Lang::get('form.label.ok') }}"
                                                data-table='1'>
                                                <i class="fa fa-edit"></i>
                                            </a>

                                            <a onclick="return confirm('Bạn có chắc muốn xóa không ')" href="{{ route('remote', $m['id']) }}" class="btn btn-danger btn-icon btn-sm "
                                               data-original-title="" title="">
                                                <i class="fa fa-times"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endif
                            @endforeach

                            </tbody>

                        </table>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.4.0/bootbox.min.js"></script>
    <script
        src="https://code.jquery.com/jquery-3.4.1.slim.js"
        integrity="sha256-BTlTdQO9/fascB1drekrDVkaKd9PkwBymMlHOiG+qLI="
        crossorigin="anonymous">
    </script>
    <script>
        (function ($) {
            var $document = $(document);

            // change status function
            $(document).ready(function () {
                $('#content').on('click', '.changeStatus', function (e) {
                    e.preventDefault();
                    var that = this;
                    bootbox.confirm({
                        message: $(this).data('confirm'),
                        buttons: {
                            'cancel': {
                                label: $(this).data('action1'),
                                className: 'btn-default'
                            },
                            'confirm': {
                                label: $(this).data('action2'),
                                className: 'btn-info'
                            }
                        },
                        callback: function (result) {
                            if (result) {
                                $.ajax({
                                    url: $(that).attr('href'),
                                    type: $(that).data('method'),
                                    data: {name: 'emtpy_petition_data', value: 'empty'},
                                    dataType: 'json',
                                    beforeSend: function (xhr, settings) {
                                    },
                                    success: function (data, status, xhr) {
                                        if ($(that).hasClass('changeStatus')) {
                                            console.log(data.status);
                                            if (data.status) {
                                                window.location.href = data.href;
                                            }
                                        }
                                    },
                                    complete: function (xhr, status) {
                                    },
                                    error: function (xhr, ajaxOptions, thrownError) {
                                        $("#error-modal").modal('show');
                                    }
                                });
                            }
                        }
                    });
                });
            });

        })(jQuery);
    </script>

@endsection

