<div class="sidebar" data-color="white" data-active-color="danger">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
  -->
    <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-mini">
            <div class="logo-image-small">
                <img src="{{ asset('front-end-css/assets/img/logo-small.png')}}">
            </div>
        </a>
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
            Creative Tim
        <!-- <div class="logo-image-big">
                  <img src="{{ asset('front-end-css/assets/img/logo-big.png')}}">
                </div> -->
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="active ">
                <a href="./dashboard.html">
                    <i class="nc-icon nc-bank"></i>
                    <p>Thống kê </p>
                </a>
            </li>

            <li class="active">
                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <i class="nc-icon nc-tile-56"></i>
                    Quản lý tin đăng</a>
                <ul class="collapse list-unstyled" id="homeSubmenu">

                    <li>
                        <a href="{{ route('manage_list') }}">Quản lý xe </a>
                    </li>
                    <li>
                        <a href="#">Xe đang chờ</a>
                    </li>
                    <li>
                        <a href="#">Xe đang đặt </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="./user.html">
                    <i class="nc-icon nc-single-02"></i>
                    <p>Hồ sơ cá nhân </p>
                </a>
            </li>
        </ul>
    </div>
</div>
