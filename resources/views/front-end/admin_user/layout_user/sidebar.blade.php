<style>.sidebar-wrapper ul li a {
        color: #000 !important;
    }</style>
<div class="sidebar" data-color="white" data-active-color="danger">
    <div class="logo">
        <a href="#demo" class="simple-text logo-mini">
            <div class="logo-image-small">
                <img src="{{ asset('front-end-css/assets/img/logo-small.png')}}">
            </div>
        </a>
        <a href="/" class="simple-text logo-normal">
            Prime Cab
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            @if(Auth::user()->role == 2)
                <li class="nav-item {{ (\Request::route()->getName() == 'Admin') ? 'active' : '' }}">
                    <a href="{{ route('Admin') }}">
                        <i class="nc-icon nc-bank"></i>
                        Thống kê
                    </a>
                </li>
                <li class="nav-item {{ (\Request::route()->getName() == 'manage') ? 'active' : '' }}">
                    <a href="{{ route('manage') }}">
                        <i class="nc-icon nc-tile-56"></i>
                        Quản lý xe
                    </a>
                </li>
                <li class="nav-item {{ (\Request::route()->getName() == 'waiting_target') ? 'active' : '' }}">
                    <a href="{{ route('waiting_target') }}">
                        <i class="nc-icon nc-tile-56"></i>
                        Chờ kiểm duyệt
                    </a>
                </li>
                <li class="nav-item {{ (\Request::route()->getName() == 'editTarget') ? 'active' : '' }}">
                    <a href="{{ route('editTarget') }}">
                        <i class="nc-icon nc-tile-56"></i>
                        Xe không đạt yêu cầu
                    </a>
                </li>
                <li class="nav-item {{ (\Request::route()->getName() == 'trash') ? 'active' : '' }}">
                    <a href="{{ route('trash') }}">
                        <i class="nc-icon nc-tile-56"></i>
                        Thùng rác
                    </a>
                </li>

                <li {{ (\Request::route()->getName() == 'waiting') ? 'active' : '' }}>
                    <a data-toggle="collapse" href="#mapsExamples" class="collapsed" aria-expanded="false">
                        <i class="nc-icon nc-tile-56"></i>
                        <p>Lịch sử đặt xe<b class="caret"></b></p>
                    </a>
                    <div class="collapse" id="mapsExamples" aria-expanded="false" style="height: 0px;">
                        <ul class="nav">

                            <li>
                                <a href="{{ route('waiting1') }}">
                                    <span class="sidebar-mini">&nbsp;&nbsp;&nbsp;ALL</span>
                                    <span class="sidebar-normal">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    Đang chờ
                                </span>
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('waiting2') }}">
                                    <span class="sidebar-mini">&nbsp;&nbsp;&nbsp;ALL</span>
                                    <span class="sidebar-normal">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    Đã xác nhận
                                </span>
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('waiting3') }}">
                                    <span class="sidebar-mini">&nbsp;&nbsp;&nbsp;ALL</span>
                                    <span class="sidebar-normal">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    Đang thực hiện
                                </span>
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('waiting4') }}">
                                    <span class="sidebar-mini">&nbsp;&nbsp;&nbsp;ALL</span>
                                    <span class="sidebar-normal">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    Đã hoàn thành
                                </span>
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('waiting5') }}">
                                    <span class="sidebar-mini">&nbsp;&nbsp;&nbsp;ALL</span>
                                    <span class="sidebar-normal">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    Từ chối cho thuê
                                </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item {{ (\Request::route()->getName() == 'booking') ? 'active' : '' }}">
                    <a href="{{ route('booking') }}">
                        <i class="nc-icon nc-tile-56"></i>
                        Quản lý bình luận
                    </a>
                </li>

            @elseif(Auth::user()->role == 8)


                <li class="nav-item {{ (\Request::route()->getName() == 'index_target') ? 'active' : '' }}">
                    <a href="{{ route('index_target') }}">
                        <i class="nc-icon nc-tile-56"></i>
                        Các xe chưa duyệt
                    </a>
                </li>

                <li class="nav-item {{ (\Request::route()->getName() == 'index_success') ? 'active' : '' }}">
                    <a href="{{ route('index_success') }}">
                        <i class="nc-icon nc-tile-56"></i>
                        Các xe đã được duyệt
                    </a>
                </li>
                <li class="nav-item {{ (\Request::route()->getName() == 'index_error') ? 'active' : '' }}">
                    <a href="{{ route('index_error') }}">
                        <i class="nc-icon nc-tile-56"></i>
                        Xe không đủ điều kiện
                    </a>
                </li>
            @endif
        </ul>
    </div>
</div>
