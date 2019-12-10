
<link href="{{asset("front-end-css/css/bootstrap.css")}}" rel="stylesheet">
<link href="{{asset('front-end-css/css/style.css')}}" rel="stylesheet">
<link rel="stylesheet" href="{{asset("front-end-css/css/fontawesome-all.min.css")}}">
<link id="switcher" href="{{asset('front-end-css/css/color.css')}}" rel="stylesheet">
<link href="{{asset('front-end-css/css/color-switcher.css')}}" rel="stylesheet">
<link href="{{asset('front-end-css/css/owl.carousel.css')}}" rel="stylesheet">
<link href="{{asset('front-end-css/css/responsive.css')}}" rel="stylesheet">
<link href="{{asset('front-end-css/css/icomoon.css')}}" rel="stylesheet">
<link href="{{asset('front-end-css/css/animate.css')}}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('js/jquery-ui-1.12.1.custom/jquery-ui.min.css') }}">
<link rel="stylesheet" href="{{ asset('package/css/swiper.min.css') }}">
<link rel="stylesheet" href="{{ asset('front-end-css/css/animatePhone.css') }}">


<!-- Css Files End -->
{{--css menu---}}
<style>
    .topmenu li a {
        color: #000;
        color: #656667;
        font-size: 14px;
    }

    .fleet-grid-box .fleet-thumb img {
        height: 100%;
    }

    .fleet-grid-box .fleet-thumb {
        height: 313px
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
        background: #cdd3d8;
        border-radius: 100%;

    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f1f1f1;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
        right: 5%;
    }

    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        transition: .5s
    }

    .profile-user {
        padding-top: 12px;
        padding-left: 20px
    }

    .dropdown-content a:hover {
        background-color: pink;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }

    .dropdown:hover .dropbtn {
        background-color: red;
    }

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

    article .posts_img {
        width: 360px;
        height: 250px;
        margin-top: 15px;
        overflow: hidden;
    }

    .card-full img {
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

    .area-qc img {
        width: 100%;
        height: 100%
    }

    .area-qc {
        margin-top: 50px;
        margin-bottom: 20px;
        -webkit-box-shadow: -4px 3px 10px -4px rgba(0, 0, 0, 0.75);
        -moz-box-shadow: -4px 3px 10px -4px rgba(0, 0, 0, 0.75);
        box-shadow: -4px 3px 10px -4px rgba(0, 0, 0, 0.75);
    }

    /*    */
    .post-block-style .post-thumb {
        border-radius: 5px;
        max-width: 100%;
        position: relative;
        overflow: hidden;
    }

    .grid-cat {
        position: absolute;
        bottom: 15px;
        left: 15px;
    }

    .grid-cat a:link, a:visited {
        text-decoration: none;
    }

    .post-cat {
        position: relative;
        font-size: 10px;
        padding: 0 10px;
        background: #1c1c1c;
        text-transform: uppercase;
        font-weight: 700;
        color: #fff;
        height: 20px;
        line-height: 20px;
        display: inline-block;
        border-radius: 5px;
    }

    .post-title.title-md {
        font-size: 24px;
        line-height: 28px;
        margin-top: 15px;
        margin-bottom: 15px;
        font-weight: 700;
    }

    .post-title a {
        color: #000;
    }

    .post-meta span {
        font-size: 12px;
        color: #a3a3a3;
        margin-right: 8px;
        padding-right: 10px;
        line-height: 12px;
        display: inline-block;
    }

    .lifestyle {
        background: #ea8f00;
    }

    .post-thumb img {
        width: 100%;
        height: 231px;
    }

    .block-title {
        letter-spacing: .64px;
        color: #fc4a00;
        line-height: 25px;
        font-weight: 800;
        font-size: 16px;
        text-transform: uppercase;
        margin-bottom: 20px;
    }

    .block-title .title-angle-shap {
        display: inline-block;
        padding: 0 0 0 15px;
        position: relative;
    }

    .block-title .title-angle-shap {
        display: inline-block;
        padding: 0 0 0 15px;
        position: relative;
    }

    .block-title .title-angle-shap::before {
        width: 3px;
        height: 12px;
    }

    .block-title .title-angle-shap::after, .block-title .title-angle-shap::before {
        position: absolute;
        top: 0;
        content: '';
        background: #fc4a00;
        left: 0;
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

    .support-service {
        padding-top: 20px;
    }

    .call-support .icon-support {
        font-size: 29px;
    }

    .call-support .icon-support a {
        color: #000000
    }

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

    .modal-login h3 {
        text-align: center
    }

    .form-register .modal-register .reg-frm {
        max-width: 100%;
        float: none;
        padding: 40px 10px 100px 10px;;
    }

    .form-row {
        display: flex
    }

    .form-row .field-outer {
        padding: 0 5px;
    }

    .subcribe {
        background: #fff;
        text-align: center;
        padding: 10px;
    }

    .alert.alert-success {
        position: fixed;
        bottom: 1%;
        right: 2%;
        color: #ffffff;
        background-color: #e04857;
        border-color: #d6e9c6;
        font-weight: 700;

    }

    /*slide css*/
    .toogle-title {
        position: absolute;
        z-index: 999999;
        color: #fff;
        font-size: 20px;
        font-weight: bold;
        left: 5%;
    }

    .toogle-title .title-slider {
        white-space: nowrap;
        font-size: 4.3rem;
        line-height: 80px;
        font-weight: 900;
        font-family: Roboto;
    }

    .toogle-title .more_slider span {
        background: #dd3e51;
        padding: 5px 35px 5px 35px;
        border-radius: 2px;
    }

    .toogle-title .more_slider span a {
        color: #fff;
        font-size: 1.8rem;
        /* font-family: roboto; */
    }

    .title-slider2 {
        transition-timing-function: cubic-bezier(0.52, 1.64, 0.37, 0.66);
    }

    .toogle-title .more_slider {
        text-align: start;
    }

    .search-car {
        position: absolute;
        top: 90%;

    }

    .form-car {
        border: 1px solid #d4d2d2;
    }

    /*cate*/
    .box-combo {
        display: flex;
    }

    .box-combo .field-outer {
        width: 29rem;
    }

    .box-combo .field-outer .bt_search {
        border: 1px solid #ccc;
        padding: 7px;
        border-radius: 5px;
        width: 40%;
        text-align: center;
        background: #dd3e51;
    }

    .box-combo .field-outer .bt_search a {
        color: #fff;
        font-weight: 800;
    }

    /*detail*/
    .content-detail .detail-image img {
        width: 100%;
        height: auto;
    }

    .p-lg {
        padding: 20px !important;
    }

    .mb-xlg {
        margin-bottom: 30px !important;
    }

    .content-detail .start_car {
        color: #F8C422;
        font-size: 2.2rem;
    }

    .tit3 {
        color: #e04857;
        font-size: 24px;
        font-weight: 700;
        text-transform: uppercase;
        text-align: left;
        margin-bottom: 13px;
    }

    .shadow {
        -webkit-box-shadow: 0px 2px 14.7px 1.3px rgba(0, 0, 0, 0.16);
        box-shadow: 0 0px 10px 0 rgba(31, 28, 38, 0.35);
        border-radius: 5px;
        margin-bottom: 15px;
        background: #fff;
        overflow: hidden;
        border-radius: 8px;
    }

    .model .info div {
        font-size: 16px;
        margin-bottom: 12px;
        text-align: left;
        width: 50%;
        float: left;
    }

    .mb-md {
        margin-bottom: 15px !important;
    }

    .mt-xlg {
        margin-top: 30px !important;
    }

    .form-group {
        padding: 0 !important;
        margin-bottom: 12px;
    }

    form.cap label, .b-tit {
        font-size: 16px;
        text-transform: uppercase;
        font-weight: 600;
        color: #333;
        margin-bottom: 10px;
        text-align: left;
    }

    .sum {
        border-top: 2px solid #dedede;
        padding-top: 10px;
    }

    .caculator .total {
        display: flex;
        justify-content: space-between;
    }

    .caculator .total {
        display: flex;
        justify-content: space-between;
        border-top: 1px solid #d6d6d6;
        padding-top: 10px;
        font-size: 2rem;
    }

    .button-sub button {
        width: 100%;
        margin: 12px 0 15px 0;
    }

    .container-detail {
        padding-top: 6rem;
    }

    .info.mb-none {
        padding-top: 20px;
    }

    .info.mb-none {
        padding-top: 20px;
    }

    .info.mb-none i {
        font-size: 2rem;
        color: #1c2b39;
        padding-right: 10px;
    }

    .fc-car i {
        font-size: 2rem;
        color: #1c2b39;
        padding-right: 10px;
    }

    .detail-car {
        padding-top: 10rem;
    }

    /*detail post*/
    .container {
        color: #000000;
        font-family: 'Noto Serif', serif;
        margin: auto;
    }

    .container .title-contet .title-post {
        font-size: 4rem;
        color: #000;
        font-weight: bold;
        width: 600px;
        margin: auto;
        line-height: 1.2;
        letter-spacing: -1px;
        padding-top: 3rem;
    }

    .container .bec {
        width: 600px;
        font-size: 18px;
        padding: 20px 0 0 0;
        margin: auto;
    }

    .container .content {
        width: 800px;
        text-align: center;
        font-size: 20px;
        margin: auto;
        line-height: 1.6;
    }

    .container .summary {
        font-size: 1.8rem;
        font-weight: bold;
        line-height: 1.6;
        width: 600px;
        margin: auto;
        text-align: center;
        padding: 20px 02px;
    }

    .topic_cate {
        width: 800px;
        margin: auto;
        padding: 10px;
        border-top: 1px solid #d6d4d4;
        color: #000;
    }

    .topic-iamge {
        width: 90%;
        height: 170px;
    }

    .topic-iamge .image_t {
        width: 100%;
        height: 100%;
    }

    .title-topic .acticel-title {
        margin: 0;
        padding-bottom: 16px;
    }

    .title-topic .acticel-title a {
        text-decoration: none;
        color: #000;
        font-weight: 600;
        font-family: 'Noto Serif', serif;
    }

    /*.area-comment {*/
    /*    background: #2335441a;*/
    /*    padding: 15px;*/
    /*    width: 90%;*/
    /*    margin: auto;*/
    /*    margin-bottom: 10px;*/
    /*}*/
    .comment-meta {
        font-family: sans-serif;
        font-size: 14px;
        color: #141823;
        line-height: 20px;
        width: 100%;
        float: left;
        margin-bottom: 5px;
        margin-left: 19px;
    }

    .avatar {
        position: absolute;
        top: 21px;
        left: 0;
    }

    .show-comment .author-name {
        font-size: 16px;
        font-weight: 600;
        color: #000;
        font-weight: bold;
        font-size: 14px;
        line-height: 19px;
        display: inline-block;
        margin-bottom: 0;
    }

    .show-comment .author-name {
        font-size: 16px;
        font-weight: 600;
    }

    .show-comment {
        margin-top: 10px;
        padding-top: 10px;
        border-top: 1px solid #808080;
    }

    .comment-content {
        width: 100%;
        font-size: 14px;
        line-height: 1.43;
    }

    .comment_list {
        float: left;
        width: 100%;
        padding: 18px 0 18px;
        padding-left: 40px;
        position: relative;
        border-bottom: 1px solid #eee;
    }

    .comment-actions {
        float: left;
        width: 100%;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: start;
        -ms-flex-pack: start;
        justify-content: flex-start;
        margin-top: 2px;
        font-size: 12px;
        font-weight: normal;
        line-height: 1.67;
        position: relative;
    }

    .comment-actions span {
        padding: 0 10px 0 13px;
    }
    .right-info  .pr {
        font-size: 2rem;
        font-weight: bold;
        padding: 0 0 30px;
    }
/*xe lien quan */
    .topics_car{padding: 1rem;}
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
