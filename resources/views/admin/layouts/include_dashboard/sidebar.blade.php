<div class="sidebar" data-color="rose" data-background-color="black"
     data-image="{{ asset('image_upload/sidebar.jpg') }}">
    <div class="logo">
        <a href="{{ route('dashboard') }}" class="simple-text logo-mini">PC</a>
        <a href="{{ route('dashboard') }}" class="simple-text logo-normal">Prime Cab</a>
    </div>
    <div class="sidebar-wrapper">
        <div class="user">
            <div class="photo">
                <img src="/image_upload/user/{{ Auth::user()->image }}"/>
            </div>
            <div class="user-info">
                <a class="username">
                    <span class="text-capitalize">{{ Auth::user()->name }}</span>
                </a>
            </div>
        </div>
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('dashboard') }}">
                    <i class="material-icons">dashboard</i>
                    <p> Thống kê chung </p>
                </a>
            </li>

            {{---------------------------------------contact---------------------------------------}}
            <li class="nav-item ">
                <a class="nav-link collapsed" href="{{ route('contact_list') }}">
                    <i class="material-icons">contact_mail</i>
                    <p> Liên Hệ </p>
                </a>
            </li>
            {{---------------------------------------contact---------------------------------------}}

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
                            <a class="nav-link" href="{{ route('model_list') }}">
                                <span class="sidebar-mini"> H </span>
                                <span class="sidebar-normal"> Danh Sách Hãng Xe </span>
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
