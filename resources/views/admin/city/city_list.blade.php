@extends('admin.layouts.app_dashboard')
@section('title', 'Thành phố')

@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-5">
                    <div class="card">
                        <div class="card-header card-header-success card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons">perm_identity</i>
                            </div>
                            <h4 class="card-title">Danh sách Thành Phố</h4>
                            <a href="{{ route('city_add') }}"
                               class="float-right pull-right btn btn-success">Thêm mới
                                <i class="fa fa-arrow-circle-right"></i>
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="toolbar">
                            </div>
                            <div class="material-datatables">
                                <table id="datatables" class="table table-striped table-no-bordered table-hover"
                                       cellspacing="0" width="100%" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th width="50px">ID</th>
                                        <th width="200px" class="text-center">Tên</th>
                                        <th class="text-right">Action</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @foreach($city as $c)
                                        <tr>
                                            <td>{{ $c->id }}</td>
                                            <td class="text-center">
                                                <a href="javascript:;" class="manage_city" city_id="{{ $c->id }}">
                                                    {{ $c->name }}
                                                </a>
                                            </td>
                                            <td class="text-right">
                                                <a href="{{ route('city_edit', $c->id) }}"
                                                   class="btn btn-link btn-info btn-just-icon edit">
                                                    <i class="material-icons">edit</i>
                                                    <div class="ripple-container"></div>
                                                </a>

                                                <a class="btn btn-link btn-danger btn-just-icon remove"
                                                   data-toggle="modal" data-target="#removeCity">
                                                    <i class="material-icons">close</i>
                                                    <div class="ripple-container"></div>
                                                </a>

                                                <div class="modal fade" id="removeCity" tabindex="-1" role="dialog"
                                                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title text-center"
                                                                    id="exampleModalLabel">Xóa danh mục</h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                        aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body text-center"
                                                                 style="color: red; font-weight: bolder">
                                                                Bạn có chắc chắn muốn xóa thành phố này không?
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">Hủy
                                                                </button>
                                                                <a href="{{ route('city_remove', $c->id) }}"
                                                                   class="btn btn-danger">Xóa</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </td>
                                        </tr>

                                    @endforeach
                                    </tbody>
                                </table>
                            </div>


                        </div>
                        <!-- end content-->
                    </div>
                    <!--  end card  -->
                </div>
                <!-- end col-md-4 -->
                <div class="col-md-7">
                    <div class="card">
                        <div class="card-header card-header-success card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons">perm_identity</i>
                            </div>
                            <h4 class="card-title">Danh sách Quận huyện</h4>
                            <a href="{{ route('district_add') }}"
                               class="float-right pull-right btn btn-success">Thêm mới
                                <i class="fa fa-arrow-circle-right"></i>
                            </a>
                        </div>
                        <div class="card-body active-cyan-4 mb-4">
                            <div class="toolbar">
                                <input class="form-control" type="text" id="search" name="search" placeholder="Search">
                            </div>
                            <div class="material-datatables" id="showDistrict">
                                <table id="datatables" class="table table-striped table-no-bordered table-hover"
                                       cellspacing="0" width="100%" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th width="50px">ID</th>
                                        <th width="200px" class="text-center">Tên</th>
                                        <th class="text-right">Action</th>
                                    </tr>
                                    </thead>

                                    <tbody id="search_district">
                                    @foreach($districts as $d)
                                        <tr>
                                            <td>{{ $d->id }}</td>
                                            <td class="text-center">{{ $d->name }}</td>
                                            <td class="text-right">
                                                <a href="{{ route('district_edit',$d->id) }}"
                                                   class="btn btn-link btn-info btn-just-icon edit">
                                                    <i class="material-icons">edit</i>
                                                    <div class="ripple-container"></div>
                                                </a>

                                                <a class="btn btn-link btn-danger btn-just-icon remove"
                                                   data-toggle="modal" data-target="#removeDistrict">
                                                    <i class="material-icons">close</i>
                                                    <div class="ripple-container"></div>
                                                </a>

                                                <div class="modal fade" id="removeDistrict" tabindex="-1" role="dialog"
                                                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title text-center"
                                                                    id="exampleModalLabel">Xóa danh mục</h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                        aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body text-center"
                                                                 style="color: red; font-weight: bolder">
                                                                Bạn có chắc chắn muốn xóa quận huyện này không?
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">Hủy
                                                                </button>
                                                                <a href="{{ route('district_remove', $d->id) }}"
                                                                   class="btn btn-danger">Xóa</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                    @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>
                        <!-- end content-->
                    </div>
                    <!--  end card  -->
                </div>
            </div>
            <!-- end row -->
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.manage_city').click(function () {
                var id_city = $(this).attr('city_id');

                //ajax
                $.ajax({
                    type: "GET",
                    url: "/dashboard/city/ajaxDistrict",
                    data: {city_id: id_city},
                    dataType: 'html',
                    success: function (data) {

                    }
                }).done(function (data) {
                    $('#showDistrict').html(data);
                });
            });
        })


        $('#search').on('keyup', function () {
            $value = $(this).val();
            $.ajax({
                type: 'get',
                url: '{{ URL::to('/dashboard/city/search-district') }}',
                data: {
                    'search': $value
                },
                success: function (data) {
                    $('#search_district').html(data);
                }
            });
        })
        $.ajaxSetup({headers: {'csrftoken': '{{ csrf_token() }}'}});
    </script>
@endsection
