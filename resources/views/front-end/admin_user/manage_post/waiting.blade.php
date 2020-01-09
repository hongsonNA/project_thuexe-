@extends('front-end.admin_user.layout_user.main')
@section('content')
    <div class="content" xmlns="">
        <div class="row">
            <div class="col-md-12 ml-auto mr-auto">
                <div class="card">

                    @if($waiting != '')
                        <div class="card-header">
                            <h4 class="card-title"> Simple Table</h4>
                            <a href="{{ route('add_vehicles') }}"
                               class="float-right pull-right btn btn-success">
                                Thêm mới xe
                                <i class="fa fa-arrow-circle-right"></i>
                                <div class="ripple-container"></div>
                            </a>
                        </div>

                        <div class="card-body">
                            <div class="form-group">
                                <label for="status">Trạng thái</label>
                                <select class="form-control" id="see_status" name="see_status">
                                    <option value="" >Tất cả</option>
                                    <option value="1" >Đang chờ</option>
                                    <option value="2" >Đã xác nhận</option>
                                    <option value="3" >Đang thực hiện</option>
                                    <option value="4" >Đã hoàn thành</option>
                                    <option value="5" >Từ chối cho thuê</option>
                                </select>
                            </div>
                            <div class="material-datatables">
                                <table id="waiting" class="table table-striped table-no-bordered table-hover"
                                       style="width:100%">
                                    @csrf
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
                                    </tbody>
                                </table>
                            </div>
                        </div>
                </div>
                @else
                    <div class="">
                        <div class="card-header">
                            <h4 class="card-title">Chua co xe nao dc dat</h4>
                        </div>
                        <div class="news_Car">
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
    <script src="{{asset('front-end-css/js/jquery-1.12.5.min.js')}}"></script>

    <script>
        $(document).ready(function () {
            // console.log('aaa')
            $('#waiting').DataTable({
                // "lengthMenu": true,
                pageLength: 0,
                lengthMenu: [5, 10, 20, 50],
                order: [[0, 'desc']],
                processing: true,
                serverSide: true,
                ajax: {
                    url: '/vehicles/allWaiting',

                },
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'name', name: 'name'},
                    {data: 'phone', name: 'phone'},
                    {data: 'email', name: 'email'},
                    {data: 'vehicle_id', name: 'vehicle_id'},
                    {data: 'start_date', name: 'start_date'},
                    {data: 'end_date', name: 'end_date'},
                    {data: 'status', name: 'status', orderable: false, searchable: false, className: "text-right"}
                ]
            });

            $("#see_status").on('change', function() {
                var table = $('#waiting').DataTable();
                table.column(1).
                search($(this).val()).
                draw();
            });

            var table = $('#waiting').DataTable();
            table.on( 'draw', function () {
                $(".changeStatus").on('click', function () {
                    var _token = $('input[name="_token"]').val();
                    console.log(_token);
                    var  getID = $(this).attr("data-id");
                    // console.log(getID);
                    if (getID){
                        $.ajax({
                            type:"post",
                            url:'change/'+getID,
                            data:{getID:getID, _token:_token},
                            success:function (data) {
                                if (data){
                                    Swal.fire(
                                        'Thay đổi trạng thái thành công!',
                                        '',
                                        'success'
                                    )
                                }
                            }
                        });
                    }
                })
                //
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
                            var  getID = $(this).attr("data-id");
                            console.log(getID);
                            $.ajax({
                                type:"post",
                                url:'danger/'+getID,
                                data:{getID:getID, _token:_token},
                                success:function (data) {
                                    if (data){
                                        Swal.fire(
                                            'Đã hủy!',
                                            '',
                                            'success'
                                        )
                                    }
                                }
                            });

                        }
                        //

                    })
                })
                //
            });

        });
    </script>
@endsection

