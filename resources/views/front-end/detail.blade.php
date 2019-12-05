@extends('front-end.layouts.app_front-end')
@section('content')
    <div class="container">
        <div class="row">
            <div class="block-area detail-car">
            <div class="col-lg-8 col-md-8">
                <div class="left-content">
                    <div class="shadow p-lg mb-xlg">
                        <div class="model row content-detail ">
                            <div class="col-sm-6 detail-image ">
                                <a href="">  <img src="{{ asset('image_upload/img_vehicle/'.$vechcles->image )}}" alt=""></a>
                            </div>
                            <div class="col-sm-6">
                                <div class="tit3 mt-md mb-xs">{{ $vechcles->name }}</div>
{{--                                <div style="font-weight: 500;">HOẶC TƯƠNG ĐƯƠNG</div>--}}
                                <div class="start_car">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="info mb-none">
                                    <div> <i class="fas fa-gas-pump"></i><span>1.5L</span></div>
                                    <div> <img src="assets/images/icon/ic-tms.png" class="vhc_icon"><span>Số sàn</span></div>
                                    <div><i class="fas fa-swatchbook"></i><span>5 chỗ</span></div>
                                    <div><i class="fas fa-car"></i><span>Sedan</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-xlg">
                            <div class="col-md-12">
                                <div class="mb-md">
                                    <div class="b-tit">ĐỊA CHỈ</div>
                                    <p>{{ $vechcles->address }}</p>
                                </div>
                                <div class="mb-md">
                                    <div class="b-tit">TÍNH NĂNG</div>
                                    <div class="row i-lg fc-car">
                                        <div class="col-lg-4 col-md-6 mb-md"><i class="fas fa-fan"></i><span>Điều hoà (A/C) </span></div>
                                        <div class="col-lg-4 col-md-6 mb-md"><i class="fas fa-map-marked-alt"></i><span>Định vị (GPS) </span></div>
                                        <div class="col-lg-4 col-md-6 mb-md"><i class="fab fa-bluetooth-b"></i><span>Bluetooth </span></div>
                                        <div class="col-lg-4 col-md-6 mb-md"><i class="fab fa-usb"></i><span>Khe cắm USB</span></div>
                                    </div>
                                </div>
                                <div class="mb-md">
                                    <div class="b-tit">GHI CHÚ</div>
                                    <div>
                                        <p> - CMND: Bản gốc</p>
                                        <p> - Sổ hộ khẩu: Bản gốc</p>
                                        <p> - Đặt cọc: giá trị từ 15 triệu đồng trở lên hoặc tài sản tương đương</p>
                                    </div>
                                </div>
                                <div class="mb-md">
                                    <div class="b-tit">Chi tiet xe </div>
                                    <div>
                                        {!! $vechcles->description !!}
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            <div class="col-lg-4 col-md-4">
                <div class="right-info ">
                    <div class="shadow mb-xlg p-lg">
                        <div class="pr text-center">GIÁ VÀ THỦ TỤC</div>
                        <form method="post" action="{{ route('booking_car', $vechcles->id ) }}" class="cap" id="detail-datetime">
                            @csrf
                            <div class="form-group position-relative form-group">
                                <label class=" pt-2">Thời gian nhận xe</label>
                                <div class="box-date ">
                                    <input class="input flatpickr-input form-control" type="text" id="start_date" name="start_date" placeholder="Ngày nhận xe" style="" readonly="readonly">
                                </div>
                            </div>
                            <div class="form-group position-relative form-group">
                                <label class="pt-2">Thời gian trả xe</label>
                                <div class="box-date ">
                                    <input class="input flatpickr-input form-control" type="text" id="end_date" name="end_date" placeholder="Ngày trả xe" style="" readonly="readonly">
                                </div>
                            </div>
                            <div class="form-group mb-none position-relative form-group">
                                <label class="pt-2">CHI TIẾT GIÁ</label>
                                <p class="form-control-static p-none">Đơn giá ngày: <span>{{ number_format($vechcles->price) }} VND</span></p>
                                <input type="hidden" id="peice_vehicles" value="{{$vechcles->price}}">
{{--                                <p class="form-control-static pt-none" id="">Ngày <span>0 ngày</span></p>--}}
                                <input type="hidden" class="calculated">
                            </div>
                            <div class="caculator">
                                <div class="total">
                                    <div class="tong">Tong: </div>
                                    <div class="total-price"></div><span>VND</span>
                                </div>
                            </div>
                            <div class="button-sub">
                                <button type="submit" class="btn btn-info">Đăng ký</button>
                            </div>

                            <p class="text-center mt-lg">
                                <a class="link" id="testLinkURL" href="/">Quay lại</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
            </div>
        </div>
        <div class="area-comment">
            <div>
                <form method="post" action="{{ route('post_comment', $vechcles->id ) }}" id="comment">
                    @csrf
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Để lại ý kiến của bạn</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="content" id="content" rows="4"></textarea>
                        <span id="alert"></span>
                    </div>
                    @if(isset(Auth::user()->email))
                        <div class="request-login">

                        </div>
                    @else
                        <div class="request-login">
                            <p>
                                Hãy <a href="#" class="account-login" data-toggle="modal" data-target="#myModal">đăng nhập</a> để gủi bình luận (Lưu ý: bình luận của bạn sẽ được quản trị xác thực trước khi hiện thị )
                            </p>
                        </div>
                    @endif
                    <button type="submit" id="chekc-comment" class="btn btn-info">Bình luận</button>
                </form>
            </div>
            <!--end -->
            <div class="show-comment">
                <ul class="nav comments">
                    @foreach($comment as $comment_id)
                        <li class="comment_list">
                            <div class="comment-meta image-comment">
                                <img class="avatar" src="{{ asset('image_upload/user/default_avata.png') }}" width="50" alt="">
                                <p class="author-name"><span class="">Hong son</span></p>
                                <p class="comment-content">
                                    {{ $comment_id->content }}
                                </p>
                                <p class="comment-actions">
                                    <a data-id="{{ $comment_id->id }}" id="reply" href="javascript:;">Tra loi</a>
                                    <span></span>
{{--                                    @if($comment_id->user_id != Auth::user()->id)--}}
                                    @if(isset(Auth::user()->id) != $comment_id->user_id )
                                        <a id="report" href="javascript:;">Report</a>
                                    @endif
                                </p>
                            </div>
                            <div class="show-reply">
                                <form action="">
                                    <textarea class="form-control" id="" name="" id="content" rows="3" placeholder="Bạn có đồng ý với Hong Son"></textarea>
                                    <br>
                                    <button  type="submit" class="btn btn-info">Gui binh luan</button>
                                    <a id="close" class="btn">Dong</a>
                                </form>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>

        </div>
        <!--end comment -->
    </div>
    @if(session()->has('alert'))
        <div id="alert_Booking_success" class="alert alert-success">
            {{ session()->get('alert') }}
        </div>
        <script>

        </script>
    @endif

    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.js"></script>--}}
    <script type="text/javascript">
        $(".show-reply").hide();
        $('#reply').click(function () {
            $(".show-reply").show();
        });
        $('#close').click(function () {
            $(".show-reply").hide();

        });
        $(document).ready(function(){
            $("#myBtn").click(function(){
                $("#myModal").hide();
                $("#myModall").modal();
            });
        });
        $('#suces').fadeOut(1000);


    </script>
    <script>
        $(document).ready(function (event) {
            $('#report').click(function () {
                $('#modal-report').modal();
            });
            $('#alert_Booking_success').animate({"right":"-260px"}, 3000)
        });
    </script>
    @endsection
