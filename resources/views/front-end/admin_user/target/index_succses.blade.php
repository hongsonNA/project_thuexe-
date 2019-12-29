@extends('front-end.admin_user.layout_user.main')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12 ml-auto mr-auto">

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Những xe đã duyệt</h4>
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
                                    <th>Người kiểm duyệt</th>
                                    <th class="disabled-sorting">Nhận xét</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>Tên xe</th>
                                    <th>Chủ xe</th>
                                    <th>Trạng thái</th>
                                    <th>Người kiểm duyệt</th>
                                    <th class="disabled-sorting">Nhận xét</th>
                                </tr>
                                </tfoot>
                                <tbody>
                                @foreach ( $vehicle as $vhc )

                                    {{-- @dd( $vhc['target']['user_id']) --}}
                                    {{-- @if (Auth::user()->id == $vhc['target']['user_id']) --}}
                                    @if ($vhc['status'] == 2 && Auth::user()->id )
                                        <tr>
                                            <td>{{ $vhc['name'] }}</td>
                                            <td>{{ $vhc['user']['name'] }}</td>
                                            <td>
                                                @if ($vhc['status'] == 2)
                                                    Xe đã được kiểm duyệt
                                                @endif
                                            </td>
                                            <td>
                                                {{-- @dd($vhc['user']['id'] == $vhc['target']['user_id']) --}}
                                                {{-- @if ($vhc['user']['name'])

                                                @endif --}}
                                                {{-- @foreach ( $user_target as $key => $u )
                                                    @if ($vhc['target']['user_id'] == $u[$key]['id'])
                                                    {{ $u[$key]->name }}
                                                    @else
                                        @endif
                                {{-- @dd($u[$key]->name) --}}
                                                {{-- @endforeach --}}

                                                {{-- {{ $target['name'] }} --}}
                                            </td>
                                            <td>{{ $vhc['target']['description'] }}</td>
                                        </tr>
                                    @endif
                                    {{-- @endif --}}


                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

@endsection

