<div class="sidebar" data-color="white" data-active-color="danger">
    <div class="logo">
        <a href="#demo" class="simple-text logo-mini">
            <div class="logo-image-small">
                <img src="{{ asset('front-end-css/assets/img/logo-small.png')}}">
            </div>
        </a>
        <a href="/" class="simple-text logo-normal">
            Prime Car
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item">
                <a href="#demo">
                    <i class="nc-icon nc-bank"></i>
                    Thống kê
                </a>
            </li>

            <li class="nav-item active">
                <a href="{{ route('manage_list') }}">
                    <i class="nc-icon nc-tile-56"></i>
                    Quản lý xe
                </a>
            </li>
            <li class="nav-item active">
                <a href="{{ route('waiting') }}">
                    <i class="nc-icon nc-tile-56"></i>
                    Lịch sử đặt xe
                </a>
            </li>

            <li class="nav-item active">
                <a href="{{ route('booking') }}">
                    <i class="nc-icon nc-tile-56"></i>
                    Quản lý bình luận
                </a>
            </li>
            <li>
                <a href="#demo">
                    <i class="nc-icon nc-single-02"></i>
                    Hồ sơ cá nhân
                </a>
            </li>
        </ul>
    </div>
</div>
