@extends('front-end.admin_user.layout_user.main')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12 ml-auto mr-auto">

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Những xe không đủ điều kiện</h4>
                        <div class="box-search">
                        </div>
                    </div>

                    <div class="card-content">
                        <div class="toolbar">
                            <!--Here you can write extra buttons/actions for the toolbar-->
                        </div>
                        <div class="fresh-datatables">
                            <table id="datatables" class="table table-striped table-no-bordered table-hover"
                                   cellspacing="0" width="100%" style="width:100%">
                                <thead>
                                <tr>
                                    <th>Tên xe</th>
                                    <th>Chủ xe</th>
                                    <th>Trạng thái</th>
                                    <th>Ngày duyệt xe</th>
                                    <th class="disabled-sorting">Nhận xét</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>Tên xe</th>
                                    <th>Chủ xe</th>
                                    <th>Trạng thái</th>
                                    <th>Ngày duyệt xe</th>
                                    <th class="disabled-sorting">Nhận xét</th>
                                </tr>
                                </tfoot>
                                <tbody>
                                @foreach ( $vehicle as $vhc )
                                    @if ($vhc['status'] == 3)
                                    @if ($vhc['user_id'] == Auth::user()->id  )
                                        <tr>
                                            <td>{{ $vhc['vehicle']['name'] }}</td>
                                            <td>{{ $vhc['user']['name'] }}</td>
                                            <td>
                                                @if ($vhc['vehicle']['status'] == 3)
                                                    Xe không đạt yêu cầu
                                                @endif
                                            </td>
                                            <td>
                                                {{ $vhc['start_date'] }}
                                            </td>
                                            <td>{{ $vhc['description'] }}</td>
                                        </tr>
                                    @endif
                                    @endif
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

@endsection

