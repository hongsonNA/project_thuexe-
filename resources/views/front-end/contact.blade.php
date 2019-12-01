@extends('front-end.layouts.app_front-end')
@section('content')
    <div class="tj-inner-banner">
        <div class="container">
            <h2>Contactus</h2>
        </div>
    </div>
    <!-- banner -->
    <!-- breadcrumb -->
    <div class="tj-breadcrumb">
        <div class="container">
            <ul class="breadcrumb-list">
                <li><a href="home-1.html">Home</a></li>
                <li class="active">Contactus</li>
            </ul>
        </div>
    </div>
    <!--end breadcrumd -->

    <!-- Conatact -->
    <section class="tj-contact-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="tj-heading-style">
                        <h3>Liên hệ với chúng tôi</h3>
                        <p>Hãy cho chúng tôi biết về vấn đề của bạn hoặc bạn có thể góp ý để Website của chúng tôi có thể hoàn thiện hơn.</p>
                    </div>
                </div>
                <div class="col-md-8 col-sm-8">
                    <div class="form-holder">
                        <form method="post"  action="{{ route('contact_create') }}" onsubmit="return checkContact()" class="tj-contact-form" id="contact-form">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="inner-holder">
                                        <label>Họ và tên</label>
                                        <input placeholder="VD: Nguyễn Văn A" name="name" type="text">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="inner-holder">
                                        <label>Email</label>
                                        <input placeholder="VD: nguyenvana@gmail.com" name="email" type="email">
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <div class="inner-holder">
                                        <label>Số điện thoại</label>
                                        <input placeholder="VD: 0868280899" name="phone" type="text">
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <div class="inner-holder">
                                        <label>Nội dung</label>
                                        <textarea name="content" placeholder="VD: Tôi cần hợp tác, hãy liên hệ cho chúng tôi"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <div class="inner-holder">
                                        <button type="submit" class="btn-submit" id="frm_submit_btn">
                                            Gửi liên hệ
                                            <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="address-box">
                        <div class="add-info">
                            <span class="icon-map icomoon"></span>
                            <p>Số 15 Đông Quan, Cầu Giấy<br> Hà Nội</p>
                        </div>
                        <div class="add-info">
                            <span class="icon-phone icomoon"></span>
                            <p>
                                <a href="tel:1-234-567-7892">+1-234-000-2345</a>
                            </p>
                        </div>
                        <div class="add-info">
                            <span class="icon-mail-envelope-open icomoon"></span>
                            <p>
                                <a href="mailto:support@primecabs.com">
                                    support@primecabs.com</a>
                                <a href="mailto:info@primecabs.com"> info@primecabs.com</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End contact -->
    <!-- Map -->
    <div id="tj-map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14899.141320824117!2d105.79380725!3d21.001240550000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2s!4v1571141559960!5m2!1sfr!2s"
            width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </div>
    <!--End Map-->
    <script>
        function checkContact() {

            var name = document.getElementById('name');

            if (name.value == "") {
                $('#error-name').html('nhapp ten');
            }
        }

    </script>
@endsection
