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
                        <h3>Contact Us</h3>
                        <p>Lorem Ipsum passages, and more recently with desktop publishing software like aldus pageMaker including versions of all the Lorem Ipsum generators</p>
                    </div>
                </div>
                <div class="col-md-8 col-sm-8">
                    <div class="form-holder">
                        <form method="POST" onsubmit="return checkContact()" class="tj-contact-form" id="contact-form" novalidate="novalidate">
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <!--Inner Holder Start-->
                                    <div class="inner-holder">
                                        <label for="name">Name</label>
                                        <input placeholder="Enter Your Name" name="name" type="text" id="name" required="">
                                        <span id="error-name"></span>
                                    </div>
                                    <!--Inner Holder End-->
                                </div>
                                <div class="col-md-6 col-sm-6 no-pad">
                                    <!--Inner Holder Start-->
                                    <div class="inner-holder">
                                        <label for="email">Email</label>
                                        <input placeholder="Enter Your Email" name="email" type="email" id="email">
                                    </div>
                                    <!--Inner Holder End-->
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <!--Inner Holder Start-->
                                    <div class="inner-holder">
                                        <label for="subject">Subject</label>
                                        <input placeholder="Your Subject" name="subject" type="text" id="subject">
                                    </div>
                                    <!--Inner Holder End-->
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <!--Inner Holder Start-->
                                    <div class="inner-holder">
                                        <label for="message">Message</label>
                                        <textarea name="message" placeholder="Your Message" id="message"></textarea>
                                    </div>
                                    <!--Inner Holder End-->
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <div class="inner-holder">
                                        <button class="btn-submit" type="" id="frm_submit_btn">Send Message <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></button>
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
                            <p>Primecabs, Orlando,<br> United States</p>
                        </div>
                        <div class="add-info">
                            <span class="icon-phone icomoon"></span>
                            <p>
                                <a href="tel:1-234-567-7890">+1 234 567 7890</a>
                                <a href="tel:1-234-567-7892">+1 234 567 7892</a>
                            </p>div
                        </div>
                        <div class="add-info">
                            <span class="icon-mail-envelope-open icomoon"></span>
                            <p>
                                <a href="mailto:support@primecabs.com">
                                    support@primecabs.com</a>
                                <a href="mailto:info@primecabs.com">			 info@primecabs.com</a>
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
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14899.141320824117!2d105.79380725!3d21.001240550000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2s!4v1571141559960!5m2!1sfr!2s"
                width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </div>
    <!--End Map-->
    <script>
        function checkContact(){

            var name = document.getElementById('name');

            if(name.value == ""){
                $('#error-name').html('nhapp ten');
            }
        }

    </script>
@endsection
