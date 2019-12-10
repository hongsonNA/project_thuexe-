<section class="tj-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="about-widget widget">
                    <h3>Giới thiệu Prime Car</h3>
                    <p>Primer Car mang đến nền tảng đặt xe công nghệ trong lĩnh vực gia đình, sự kiện, du lịch. Thủ tục nhanh chóng mang đến cảm giác thoải mái cho khách hàng.</p>
                    <ul class="fsocial-links">
                        <li><a href="http://www.facebook.com"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="http://www.twitter.com"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="http://www.linkedin.com"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="http://www.pinterest.com"><i class="fab fa-pinterest-p"></i></a></li>
                        <li><a href="http://www.instagram.com"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2">
                <div class="links-widget widget">
                    <h3>Hỗ trợ</h3>
                    <ul class="flinks-list">
                        <li><a href="">Hướng dẫn thuê xe </a></li>
                        <li><a href="{{ route('cate') }}">Danh sách xe</a></li>
                        <li><a href="javascript:;">PrimerCar Blog</a></li>

{{--                        <li><i class="far fa-folder"></i><a href="">Sitemap</a></li>--}}
{{--                        <li><i class="far fa-folder"></i><a href="">Cancellation</a></li>--}}
{{--                        <li><i class="far fa-folder"></i><a href="">Terms</a></li>--}}
{{--                        <li><i class="far fa-folder"></i><a href="">Privacy Policy</a></li>--}}
{{--                        <li><i class="far fa-folder"></i><a href="">Contact Us</a></li>--}}
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="recent-tweets widget">
                    <h3>Recent Tweets</h3>
                    <div class="tj-tweets">
                        <ul>
                            <li><i class="fab fa-twitter"></i>
                                <div class="tweet_text">RT <a href="https://twitter.com/WordPress" target="_blank"
                                                              title="WordPress on Twitter">@WordPress</a>: WordPress 5.0
                                    Beta&nbsp;2 <a href="https://t.co/Bn5QRqAwLN" target="_blank"
                                                   title="Visit this link">https://t.co/Bn5QRqAwLN</a>}
                                    <div class="date">Nov, 1, 2018</div>
                                </div>
                            </li>
                            <li><i class="fab fa-twitter"></i>
                                <div class="tweet_text">Just setting up my Twitter. <a
                                        href="https://twitter.com/search?q=%23myfirstTweet&amp;src=hash" target="_blank"
                                        title="Search for #myfirstTweet">#myfirstTweet</a>}
                                    <div class="date">Nov, 28, 2017</div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="contact-info widget">
                    <h3>Thông tin liên hệ</h3>
                    <ul class="contact-box">
                        <li>
                            <i class="fas fa-home" aria-hidden="true"></i>15 Đông Quan, Cầu Giấy, Hà Nội
                        </li>
                        <li>
                            <i class="far fa-envelope-open"></i>
                            <a href="mailto:primecab@booking.com">
                                primecar@gmail.com</a>
                        </li>
                        <li>
                            <i class="fas fa-phone-square"></i>
                            +1-333-444-555
                        </li>
                        <li>
                            <i class="fas fa-globe-asia"></i>
                            <a href="www.primecab.com">www.primecar.com</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="recent-tweets widget">
                    <h3>Theo dõi Prime Car</h3>
                    <div class="tj-tweets"><ul><li><i class="fab fa-twitter"></i><div class="tweet_text">RT <a href="https://twitter.com/WordPress" target="_blank" title="WordPress on Twitter">@WordPress</a>: WordPress 5.0 Beta&nbsp;2 <a href="https://t.co/Bn5QRqAwLN" target="_blank" title="Visit this link">https://t.co/Bn5QRqAwLN</a>} <div class="date">Nov, 1, 2018</div></div></li><li><i class="fab fa-twitter"></i><div class="tweet_text">Just setting up my Twitter. <a href="https://twitter.com/search?q=%23myfirstTweet&amp;src=hash" target="_blank" title="Search for #myfirstTweet">#myfirstTweet</a>} <div class="date">Nov, 28, 2017</div></div></li></ul></div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<a href="javascript:;"  class="back-top" id="back-to-top" title="Back to top"><i class="fas fa-arrow-circle-up"></i></a>
<script>
    $(window).scroll(function(){
        if ($(this).scrollTop() > 100) {
            $(".back-top").css("display","block");
        }else{$(".back-top").css("display","none");}
    });
    $("#back-to-top").click(function () {
        $("html, body").animate({scrollTop: 0}, 1000);
    })
    //    animation
    $(".reEmail").hide();
    $('#regiterEmail').click(function () {
        $('#content-offer').slideUp(1000);
        $(".reEmail").show().slideDown(5000);
    })
</script>
