<div class="sidebar" data-color="rose" data-background-color="black"
     data-image="{{ asset('image_upload/sidebar.jpg') }}">
    <div class="logo">
        <a href="{{ route('dashboard') }}" class="simple-text logo-mini">VB</a>
        <a href="{{ route('dashboard') }}" class="simple-text logo-normal">Vehicel Booking</a>
    </div>
    <div class="sidebar-wrapper">
        <div class="user">
            <div class="photo">
                <img src="/image_upload/user/{{ Auth::user()->image }}"/>
            </div>
            <div class="user-info">
                <a data-toggle="collapse" href="#collapseExample" class="username">
                    <span class="text-capitalize">{{ Auth::user()->name }}<b class="caret"></b></span>
                </a>
                <div class="collapse" id="collapseExample">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('dashboard_profile') }}">
                                <span class="sidebar-mini"> MP </span>
                                <span class="sidebar-normal"> My Profile </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="">
                    <i class="material-icons">dashboard</i>
                    <p> Thống kê chung </p>
                </a>
            </li>

            {{---------------------------------------Post---------------------------------------}}
            <li class="nav-item ">
                <a class="nav-link collapsed" data-toggle="collapse" href="#post" aria-expanded="false">
                    <i class="material-icons">panorama</i>
                    <p> Bài viết
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="post">
                    <ul class="nav">
                        <li class="nav-item ">
                            <a class="nav-link" href="{{ route('post_list') }}">
                                <span class="sidebar-mini"> P </span>
                                <span class="sidebar-normal"> Danh Sách </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="{{ route('post_create') }}">
                                <span class="sidebar-mini"> P </span>
                                <span class="sidebar-normal"> Thêm bài viết </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            {{---------------------------------------post---------------------------------------}}


            {{---------------------------------------contact---------------------------------------}}
            <li class="nav-item ">
                <a class="nav-link collapsed" data-toggle="collapse" href="#contact" aria-expanded="false">
                    <i class="material-icons">contact_mail</i>
                    <p> Liên Hệ
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="contact">
                    <ul class="nav">
                        <li class="nav-item ">
                            <a class="nav-link" href="{{ route('contact_list') }}">
                                <span class="sidebar-mini"> L </span>
                                <span class="sidebar-normal"> Danh Sách Liên Hệ </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            {{---------------------------------------contact---------------------------------------}}

            {{---------------------------------------User---------------------------------------}}
            @if(!Auth::check() || Auth::user()->role == 10)
                <li class="nav-item ">
                    <a class="nav-link collapsed" data-toggle="collapse" href="#user_list" aria-expanded="false">
                        <i class="material-icons">perm_identity</i>
                        <p> Tài khoản
                            <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse" id="user_list">
                        <ul class="nav">
                            <li class="nav-item ">
                                <a class="nav-link" href="{{ route('user_list') }}">
                                    <span class="sidebar-mini"> U </span>
                                    <span class="sidebar-normal"> Danh Sách </span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="{{ route('user_create') }}">
                                    <span class="sidebar-mini"> U </span>
                                    <span class="sidebar-normal"> Thêm tài khoản </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            @endif
            {{---------------------------------------user---------------------------------------}}

            {{---------------------------------------comment---------------------------------------}}
            <li class="nav-item ">
                <a class="nav-link collapsed" data-toggle="collapse" href="#comment" aria-expanded="false">
                    <i class="material-icons">comments</i>
                    <p> Bình luận Report
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="comment">
                    <ul class="nav">
                        <li class="nav-item ">
                            <a class="nav-link" href="{{ route('comment_list') }}">
                                <span class="sidebar-mini"> CM </span>
                                <span class="sidebar-normal"> Danh sách bình luận</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            {{---------------------------------------comment---------------------------------------}}


            {{---------------------------------------Setting All---------------------------------------}}
            <li class="nav-item ">
                <a class="nav-link collapsed" data-toggle="collapse" href="#setting_all" aria-expanded="false">
                    <i class="material-icons">settings_applications</i>
                    <p> Cài đặt chung
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="setting_all">
                    <ul class="nav">
                        <li class="nav-item ">
                            <a class="nav-link" href="{{ route('category_list') }}">
                                <span class="sidebar-mini"> DM </span>
                                <span class="sidebar-normal"> Danh Sách Danh Mục </span>
                            </a>
                        </li>

                        <li class="nav-item ">
                            <a class="nav-link" href="{{ route('city_list') }}">
                                <span class="sidebar-mini"> TP </span>
                                <span class="sidebar-normal"> Danh Sách Thành Phố</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            {{---------------------------------------Setting All---------------------------------------}}

        </ul>
    </div>
</div>
