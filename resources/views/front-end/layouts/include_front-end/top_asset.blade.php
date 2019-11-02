
<!-- Css Files Start -->
<link href="{{asset("front-end-css/css/bootstrap.css")}}" rel="stylesheet">
<link href="{{asset('front-end-css/css/style.css')}}" rel="stylesheet">
<link rel="stylesheet" href="{{asset("front-end-css/css/fontawesome-all.min.css")}}">
<link id="switcher" href="{{asset('front-end-css/css/color.css')}}" rel="stylesheet">
<link href="{{asset('front-end-css/css/color-switcher.css')}}" rel="stylesheet">
<link href="{{asset('front-end-css/css/owl.carousel.css')}}" rel="stylesheet">
<link href="{{asset('front-end-css/css/responsive.css')}}" rel="stylesheet">
<link href="{{asset('front-end-css/css/icomoon.css')}}" rel="stylesheet">
<link href="{{asset('front-end-css/css/animate.css')}}" rel="stylesheet">
<!-- Link Swiper's CSS -->
<link rel="stylesheet" href="{{ asset('package/css/swiper.min.css') }}">

<!-- Css Files End -->
{{--css menu---}}
<style>.topmenu li a {
        color: #000;
        color: #656667;
        font-size: 14px;
    }
    .dropbtn {
        background-color: #4CAF50;
        color: white;
        padding: 16px;
        font-size: 16px;
        border: none;
    }

    .dropdown {
        position: relative;
        display: inline-block;
    }
    .Profile {
        width: 29px;
        background: pink;
        border-radius: 100%;

    }
    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f1f1f1;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
        right:5%;
    }

    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        transition:.5s
    }
    .profile-user{padding-top: 12px;padding-left:20px}
    .dropdown-content a:hover {background-color: pink;}

    .dropdown:hover .dropdown-content {display: block;}

    .dropdown:hover .dropbtn {background-color: red;}
     /*back to top*/
    .back-top:hover {
        transition: opacity 0.2s ease-out;
        color: #dd3e51;
    }
    .back-top {
        color: #dd3e51;
        display: none;
        padding: 3px 15px 8px 15px;
        font-size: 40px;
        position: fixed;
        z-index: 9999;
        right: 11px;
        bottom: 0;
        text-decoration: none;
        transition: opacity 0.2s ease-out;
        border-radius: 2px;
    }
/*    news css*/
    .btn-outline-primary {
        color: #6c63ff;
        border-color: #6c63ff;
    }
    article  .posts_img {
        width: 360px;
        height: 250px;
        margin-top: 15px;
        overflow: hidden;
    }
    .card-full img{
        width: 100%;
        height: 100%;
    }
    .block-area, .widget {
        position: relative;
        clear: both;
        margin-bottom: 1.5rem;
    }
    .block-title-4 {
        position: relative;
        margin-bottom: 1.5rem;
        padding-bottom: 0.5rem;
        border-bottom: #dee2e6 2px solid;
    }
    .title-arrow:before {
        content: '';
        width: 22%;
        height: 2px;
        position: absolute;
        top: 3rem;
        background: #6c63ff;
    }
    .area-qc {
        width: 285px;
        height: 180px;
    }
    .area-qc img{width: 100%;height: 100%}
    .area-qc {
        margin-top: 50px;
        margin-bottom: 20px;
        -webkit-box-shadow: -4px 3px 10px -4px rgba(0,0,0,0.75);
        -moz-box-shadow: -4px 3px 10px -4px rgba(0,0,0,0.75);
        box-shadow: -4px 3px 10px -4px rgba(0,0,0,0.75);
    }
/*    profile */
    .container .card .user_image {
        width: 15rem;
        height: auto;
        border-radius: 100%;
    }
    /*.container .row .card {*/
    /*    padding: 30% 0 0 30%;*/
    /*}*/
    .renMal_boy {
        padding: 10px;
    }
    .profile_user .form-group.row {
        padding: 10px;
    }
    .tab-content.profile_user {
        padding: 15px !important;
    }
    .profile_user .form-group.row label {
        padding: 0;
    }
    .profi .nav ul li {
        list-style: none;
        padding: 7px 0;
    }
    .profi ul li label {
        font-size: 20px;
    }
    .profi .nav ul li {
        list-style: none;
        padding: 7px 0;
        /* color: #000; */
        transition: .3s;
    }
    .profi .nav ul li a:hover {
        text-decoration: none;
        color: #dd3e51;
        transition: .3s;
    }
    /* support*/
    .block-area .image_support img {
        width: 100%;
        height: 100%;
    }
    .support-service{padding-top: 20px;}
    .call-support .icon-support {
        font-size: 29px;
    }
    .call-support .icon-support a{color:#000000}
    .call-support {
        position: fixed;
        z-index: 99999;
        background: #dd3e51;
        left: 1%;
        bottom: 40%;
        /* font-size: 7rem; */
        padding: 20px;
        color: #000;
        border-radius: 100%;
    }
    .slider-support {
        width: 100%;
        height: 500px;
        overflow: hidden;
    }
    .title-service h3 {
        font-size: 3.5rem;
        padding: 20px;
        font-weight: 900;
    }
    .title-service {
        text-align: center;
        color: #dd3e51;
    }
    .slide-brand {
        width: 100%;
        float: left;
        padding: 52px 0;
    }
/*    modal box */
    .modal-login .login-frm {
        max-width: 100%;
        padding: 40px 20px 100px 20px;
    }
    .modal-login h3 {text-align: center}
    .form-register .modal-register .reg-frm {
        max-width: 100%;
        float: none;
        padding: 40px 20px 100px 20px;
    }
</style>



{{--<style>--}}
{{--    html {--}}
{{--        font-size: 14px;--}}
{{--    }--}}

{{--    @media (min-width: 768px) {--}}
{{--        html {--}}
{{--            font-size: 16px;--}}
{{--        }--}}
{{--    }--}}

{{--    .container {--}}
{{--        max-width: 960px;--}}
{{--    }--}}

{{--    .pricing-header {--}}
{{--        max-width: 700px;--}}
{{--    }--}}

{{--    .card-deck .card {--}}
{{--        min-width: 220px;--}}
{{--    }--}}

{{--    .bd-placeholder-img {--}}
{{--        font-size: 1.125rem;--}}
{{--        text-anchor: middle;--}}
{{--        -webkit-user-select: none;--}}
{{--        -moz-user-select: none;--}}
{{--        -ms-user-select: none;--}}
{{--        user-select: none;--}}
{{--    }--}}

{{--    @media (min-width: 768px) {--}}
{{--        .bd-placeholder-img-lg {--}}
{{--            font-size: 3.5rem;--}}
{{--        }--}}
{{--    }--}}
{{--</style>--}}
