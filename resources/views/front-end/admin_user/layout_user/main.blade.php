<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('front-end-css/assets/img/apple-icon.png')}}">
    <link rel="icon" type="image/png" href="{{ asset('front-end-css/assets/img/favicon.png')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <title>Quản lý xe</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
          name='viewport'/>
    @include('front-end.admin_user.layout_user.top_asset')

</head>
<body>
{{--start--}}
<div class="wrapper ">
    @include('front-end.admin_user.layout_user.sidebar')
    <div class="main-panel">
        <div><a class="btn btn-danger" href="{{ route('index') }}">Quay lại trang chủ</a></div>
        @yield('content')
        <footer class="footer footer-black  footer-white ">
            <div class="container-fluid">
                <div class="row">
                    <nav class="footer-nav">
                        <ul>
                            <li>
                                <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>
                            </li>
                            <li>
                                <a href="http://blog.creative-tim.com/" target="_blank">Blog</a>
                            </li>
                            <li>
                                <a href="https://www.creative-tim.com/license" target="_blank">Licenses</a>
                            </li>
                        </ul>
                    </nav>
                    <div class="credits ml-auto">
              <span class="copyright">
                ©
                <script>
                  document.write(new Date().getFullYear())
                </script>, made with <i class="fa fa-heart heart"></i> by Creative Tim
              </span>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>

{{--end--}}
@include('front-end.admin_user.layout_user.bottom_asset')
</body>
</html>

