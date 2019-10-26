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
                    <span>{{ Auth::user()->name }}<b class="caret"></b></span>
                </a>
                <div class="collapse" id="collapseExample">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span class="sidebar-mini"> MP </span>
                                <span class="sidebar-normal"> My Profile </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span class="sidebar-mini"> EP </span>
                                <span class="sidebar-normal"> Edit Profile </span>
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
                    <p> Dashboard </p>
                </a>
            </li>

            {{---------------------------------------category---------------------------------------}}
            <li class="nav-item ">
                <a class="nav-link collapsed" data-toggle="collapse" href="#tablesExamples" aria-expanded="false">
                    <i class="material-icons">category</i>
                    <p> Danh mục
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="tablesExamples" style="">
                    <ul class="nav">
                        <li class="nav-item ">
                            <a class="nav-link" href="{{ route('category_list') }}">
                                <span class="sidebar-mini"> DM </span>
                                <span class="sidebar-normal"> Danh Sách </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="{{ route('category_add') }}">
                                <span class="sidebar-mini"> DM </span>
                                <span class="sidebar-normal"> Thêm Danh Mục </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            {{---------------------------------------category---------------------------------------}}

            {{---------------------------------------City---------------------------------------}}
            <li class="nav-item ">
                <a class="nav-link collapsed" data-toggle="collapse" href="#city" aria-expanded="false">
                    <i class="material-icons">location_city</i>
                    <p> Thành phố
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="city">
                    <ul class="nav">
                        <li class="nav-item ">
                            <a class="nav-link" href="">
                                <span class="sidebar-mini"> C </span>
                                <span class="sidebar-normal"> Danh Sách </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="">
                                <span class="sidebar-mini"> C </span>
                                <span class="sidebar-normal"> Thêm thành phố </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="">
                                <span class="sidebar-mini"> C </span>
                                <span class="sidebar-normal"> Thêm quận, huyện </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            {{---------------------------------------City---------------------------------------}}

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
            {{---------------------------------------user---------------------------------------}}

        </ul>
    </div>
</div>
