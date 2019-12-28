@extends('front-end.admin_user.layout_user.main')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12 ml-auto mr-auto">

                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Những xe chưa được duyệt</h4>
                            <div class="box-search">
                            </div>
                        </div>

                        <div class="card-content">
                            <div class="toolbar">
                                <!--Here you can write extra buttons/actions for the toolbar-->
                            </div>
                            <div class="fresh-datatables">
                                <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Tên xe</th>
                                        <th>Chủ xe</th>
                                        <th>Trạng thái</th>
                                        <th class="disabled-sorting">Lựa chọn</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Tên xe</th>
                                        <th>Chủ xe</th>
                                        <th>Trạng thái</th>
                                        <th class="disabled-sorting">Lựa chọn</th>
                                    </tr>
                                </tfoot>
                                    <tbody>
                                        @foreach ( $vehicle as $vhc )
                                        <tr>
                                            <td>{{ $vhc['name'] }}</td>
                                            <td>{{ $vhc['user']['name'] }}</td>
                                            <td>
                                                @if ($vhc['status'] == 1)
                                                    Xe chưa kiểm duyệt
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('edit_target', $vhc['id'] ) }}" class="btn btn-simple btn-info btn-icon like">sửa</a>
                                                <a href="#" class="btn btn-simple btn-warning btn-icon edit">hủy</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
        </div>
    </div>

@endsection

