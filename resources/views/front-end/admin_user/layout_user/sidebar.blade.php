<style>.sidebar-wrapper ul li a {color: #000 !important;}</style>
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
            <li class="nav-item {{ (\Request::route()->getName() == 'waiting') ? 'active' : '' }}">
                <a href="{{ route('waiting') }}">
                    <i class="nc-icon nc-tile-56"></i>
                    Lịch sử đặt xe
                </a>
            </li>

            <li class="nav-item {{ (\Request::route()->getName() == 'booking') ? 'active' : '' }}">
                <a href="{{ route('booking') }}">
                    <i class="nc-icon nc-tile-56"></i>
                    Quản lý bình luận
                </a>
            </li>

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

        </ul>
    </div>
</div>
