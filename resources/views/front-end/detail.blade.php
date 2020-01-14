@extends('front-end.layouts.app_front-end')
@section('content')
    <style>
        .swiper-container {
            width: 100%;
            height: 300px;
            margin-left: auto;
            margin-right: auto;
        }

        .swiper-slide {
            background-size: cover;
            background-position: center;
        }

        .gallery-top {
            height: 80%;
            width: 100%;
        }

        .gallery-thumbs {
            height: 20%;
            box-sizing: border-box;
            padding: 10px 0;
        }

        .gallery-thumbs .swiper-slide {
            width: 25%;
            height: 100%;
            opacity: 0.4;
        }

        .gallery-thumbs .swiper-slide-thumb-active {
            opacity: 1;
        }

        .option_car .item_car {
            font-size: 17px;
            padding: 5px;
            border-bottom: 1px dotted #0000003b;
        }
.bookingStyle{
    color:red !important;
}
.bookingStyle .ui-state-default{
    background: red !important;
}
    </style>
    <div class="">
        <div class="row container">
            <div class="block-area detail-car">
                @if(Auth::check() && Auth::user()->id == $vechcles->user_id )
                    <div class="col-lg-12 col-md-12">
                        <div class="left-content">
                            <div class="shadow p-lg mb-xlg">
                                <div class="model row content-detail ">
                                    <div class="col-sm-12 detail-image car_slider">
                                        <div class="swiper-container gallery-top">
                                            <div class="swiper-wrapper">
                                                @foreach( $image_array['image_vehicle'] as $key => $value )
                                                    <div class="swiper-slide">
                                                        <img
                                                            src="/image_upload/img_vehicle/{{ $value['image_vehicle'] }}"
                                                            alt="">
                                                    </div>
                                                @endforeach
                                            </div>
                                            <!-- Add Arrows -->
                                            <div class="swiper-button-next swiper-button-white"></div>
                                            <div class="swiper-button-prev swiper-button-white"></div>
                                        </div>
                                        <div class="swiper-container gallery-thumbs">
                                            <div class="swiper-wrapper">
                                                @foreach( $image_array['image_vehicle'] as $key => $value )
                                                    <div class="swiper-slide">
                                                        <img
                                                            src="/image_upload/img_vehicle/{{ $value['image_vehicle'] }}"
                                                            alt="">
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="tit3 mt-md mb-xs">{{ $vechcles->name }}</div>
                                    </div>
                                    <div class="row mt-xlg">
                                        <div class="col-md-12">
                                            {{--
                                            <div class="mb-md">--}} {{--
                                    <div class="b-tit">Mô tả và thông số xe</div>--}} {{--
                                    <div>--}} {{-- {!! $vechcles->description !!}--}} {{-- </div>--}} {{-- </div>--}}
                                            <div class="tabpanel border" role="tabpanel">
                                                <ul class="nav nav-tabs" role="tablist">
                                                    <li role="presentation" class="active"><a href="#heading-tab4"
                                                                                              aria-controls="heading-tab4"
                                                                                              role="tab"
                                                                                              data-toggle="tab"
                                                                                              aria-expanded="true">Mô tả
                                                            xe</a></li>
                                                    <li role="presentation" class=""><a href="#heading-tab5"
                                                                                        aria-controls="heading-tab5"
                                                                                        role="tab" data-toggle="tab"
                                                                                        aria-expanded="false">Thông số
                                                            kĩ thuật</a></li>
                                                    {{--
                                                    <li role="presentation" class=""><a href="#heading-tab6" aria-controls="heading-tab6" role="tab" data-toggle="tab" aria-expanded="false">Đánh giá</a></li>--}}
                                                </ul>
                                                <!-- end .nav-tabs -->
                                                <div class="tab-content">
                                                    <div role="tabpanel" class="tab-pane fade active in"
                                                         id="heading-tab4">
                                                        <br>
                                                        {!! $vechcles->description !!}
                                                    </div>
                                                    <!-- end .tab-panel -->
                                                    <div role="tabpanel" class="tab-pane fade" id="heading-tab5">
                                                        <div class="option_car">
                                                            <div class="genarel-column">
                                                                <div class="item_car row">
                                                                    <div class="option col-md-6">Chủ xe</div>
                                                                    <div
                                                                        class="option-content col-md-offset-6">{{ $vechcle[0]->name	 }}</div>
                                                                </div>
                                                                <div class="item_car row">
                                                                    <div class="option col-md-6">Ngày hết hạn đăng
                                                                        kiểm
                                                                    </div>
                                                                    <div
                                                                        class="option-content col-md-offset-6">{{ date('d-m-Y', strtotime($vechcle[0]->end_date))}}</div>
                                                                </div>
                                                                <div class="item_car row">
                                                                    <div class="option col-md-6">Biển kiểm soát</div>
                                                                    <div
                                                                        class="option-content col-md-offset-6">{{ $vechcles->license_plate	 }}</div>
                                                                </div>
                                                                <div class="item_car row">
                                                                    <div class="option col-md-6">Mẫu xe</div>
                                                                    <div
                                                                        class="option-content col-md-offset-6">{{ $vechcles['model']['name'] }}</div>
                                                                </div>
                                                                <div class="item_car row">
                                                                    <div class="option col-md-6">Hộp số</div>
                                                                    <div class="option-content col-md-offset-6">
                                                                        @if($vechcles->gear == 1) Số sàn @else Số tự
                                                                        động @endif
                                                                    </div>
                                                                </div>
                                                                <div class="item_car row">
                                                                    <div class="option col-md-6">Tiện ích</div>
                                                                    <div
                                                                        class="option-content col-md-offset-6">{{ $vechcles->utility	 }}</div>
                                                                </div>
                                                                <div class="item_car row">
                                                                    <div class="option col-md-6">Thủ tục nhận xe</div>
                                                                    <div
                                                                        class="option-content col-md-offset-6">{{ $vechcles->procedure}}</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end .tab-content -->
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="area-comment">
                                <div>
                                    <form method="post" action="{{ route('vehicle_comment', $vechcles->id ) }}"
                                          id="comment">
                                        @csrf
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Để lại ý kiến của bạn</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1"
                                                      name="content" id="content" rows="4"></textarea>
                                            <span id="alert"></span>
                                        </div>
                                        @if(isset(Auth::user()->email))
                                            <button type="submit" id="chekc-comment" class="btn btn-info">Bình luận
                                            </button>
                                        @else
                                            <div class="request-login">
                                                <p>
                                                    Hãy <a class="account-login" data-toggle="modal"
                                                           data-target="#login">Đăng
                                                        nhập</a> / <a class="account-register" data-toggle="modal"
                                                                      data-target="#register">Đăng
                                                        ký</a> để gửi bình luận.
                                                </p>
                                            </div>
                                        @endif
                                    </form>
                                </div>
                                <!--end -->
                                <div class="show-comment">
                                    <ul class="nav comments">
                                        @foreach($comments_dl as $comment_id) @if($vechcles->id == $comment_id['vehicle_id'])
                                            <li class="comment_list">
                                                <div class="comment-meta image-comment">
                                                    <img class="avatar"
                                                         src="{{ asset('image_upload/post/image_post_1574214572.jpeg') }}"
                                                         width="50" alt="">
                                                    <p class="author-name"><span
                                                            class="">{{ $comment_id['user']['name'] }}</span></p>
                                                    <p class="comment-content">
                                                        {{ $comment_id['content'] }}
                                                    </p>
                                                </div>
                                            </li>
                                        @endif @endforeach
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                @else
                    @if($vechcles->status == 2)
                    <div class="col-lg-8 col-md-8">
                        <div class="left-content">
                            <div class="shadow p-lg mb-xlg">
                                <div class="model row content-detail ">
                                    <div class="col-sm-12 detail-image car_slider">
                                        <div class="swiper-container gallery-top">
                                            <div class="swiper-wrapper">
                                                @foreach( $image_array['image_vehicle'] as $key => $value )
                                                    <div class="swiper-slide">
                                                        <img
                                                            src="/image_upload/img_vehicle/{{ $value['image_vehicle'] }}"
                                                            alt="">
                                                    </div>
                                                @endforeach
                                            </div>
                                            <!-- Add Arrows -->
                                            <div class="swiper-button-next swiper-button-white"></div>
                                            <div class="swiper-button-prev swiper-button-white"></div>
                                        </div>
                                        <div class="swiper-container gallery-thumbs">
                                            <div class="swiper-wrapper">
                                                @foreach( $image_array['image_vehicle'] as $key => $value )
                                                    <div class="swiper-slide">
                                                        <img
                                                            src="/image_upload/img_vehicle/{{ $value['image_vehicle'] }}"
                                                            alt="">
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="tit3 mt-md mb-xs">{{ $vechcles->name }}</div>
                                    </div>
                                    <div class="row mt-xlg">
                                        <div class="col-md-12">
                                            <div class="tabpanel border" role="tabpanel">
                                                <ul class="nav nav-tabs" role="tablist">
                                                    <li role="presentation" class="active"><a href="#heading-tab4"
                                                                                              aria-controls="heading-tab4"
                                                                                              role="tab"
                                                                                              data-toggle="tab"
                                                                                              aria-expanded="true">Thông số
                                                            kĩ thuật
                                                            xe</a></li>
                                                    <li role="presentation" class=""><a href="#heading-tab5"
                                                                                        aria-controls="heading-tab5"
                                                                                        role="tab" data-toggle="tab"
                                                                                        aria-expanded="false">Mô tả</a></li>

                                                    <li role="presentation" class=""><a href="#heading-tab6" aria-controls="heading-tab6" role="tab" data-toggle="tab" aria-expanded="false"> Lịch hoạt động của xe</a></li>
                                                </ul>
                                                <!-- end .nav-tabs -->
                                                <div class="tab-content">
                                                    <div role="tabpanel" class="tab-pane fade active in"
                                                         id="heading-tab4">
                                                        <br>

                                                        <div class="option_car">
                                                            <div class="genarel-column">
                                                                <div class="item_car row">
                                                                    <div class="option col-md-6">Chủ xe</div>
                                                                    <div
                                                                        class="option-content col-md-offset-6">{{ $vechcle[0]->name	 }}</div>
                                                                </div>
                                                                <div class="item_car row">
                                                                    <div class="option col-md-6">Ngày hết hạn đăng
                                                                        kiểm
                                                                    </div>
                                                                    <div
                                                                        class="option-content col-md-offset-6">{{ date('d-m-Y', strtotime($vechcle[0]->end_date))}}</div>
                                                                </div>
                                                                <div class="item_car row">
                                                                    <div class="option col-md-6">Biển kiểm soát</div>
                                                                    <div
                                                                        class="option-content col-md-offset-6">{{ $vechcles->license_plate	 }}</div>
                                                                </div>
                                                                <div class="item_car row">
                                                                    <div class="option col-md-6">Mẫu xe</div>
                                                                    <div
                                                                        class="option-content col-md-offset-6">{{ $vechcles['model']['name'] }}</div>
                                                                </div>
                                                                <div class="item_car row">
                                                                    <div class="option col-md-6">Hộp số</div>
                                                                    <div class="option-content col-md-offset-6">
                                                                        @if($vechcles->gear == 1) Số sàn @else Số tự
                                                                        động @endif
                                                                    </div>
                                                                </div>
                                                                <div class="item_car row">
                                                                    <div class="option col-md-6">Tiện ích</div>
                                                                    <div
                                                                        class="option-content col-md-offset-6">{{ $vechcles->utility	 }}</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end .tab-panel -->
                                                    <div role="tabpanel" class="tab-pane fade" id="heading-tab5">
                                                        {!! $vechcles->description !!}
                                                    </div>
                                                     <div role="tabpanel" class="tab-pane fade" id="heading-tab6">
                                                        @foreach($listBooking as $booking_id)
                                                                <div class="item_car row">
                                                                    <div class="option col-md-3">{{ $booking_id->start_date }} <span>===></span>  </div>
                                                                    <div class="option-content col-md-3">{{ $booking_id->end_date }}</div>
                                                                </div>


                                                        @endforeach
                                                    </div>
                                                </div>
                                                <!-- end .tab-content -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <input type="hidden" class="getValueBooking" value="{{ json_encode($res) }}">
                            </div>
                            <div class="area-comment">
                                <div>
                                    <form method="post" action="{{ route('vehicle_comment', $vechcles->id ) }}"
                                          id="comment">
                                        @csrf
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Để lại ý kiến của bạn</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1"
                                                      name="content" id="content" rows="4"></textarea>
                                            <span id="alert"></span>
                                        </div>
                                        @if(isset(Auth::user()->email))
                                            <button type="submit" id="chekc-comment" class="btn btn-info">Bình luận
                                            </button>
                                        @else
                                            <div class="request-login">
                                                <p>
                                                    Hãy <a class="account-login" data-toggle="modal"
                                                           data-target="#login">Đăng
                                                        nhập</a> / <a class="account-register" data-toggle="modal"
                                                                      data-target="#register">Đăng
                                                        ký</a> để gửi bình luận.
                                                </p>
                                            </div>
                                        @endif
                                    </form>
                                </div>
                                <!--end -->
                                <div class="show-comment">
                                    <ul class="nav comments">
                                        @foreach($comments_dl as $comment_id) @if($vechcles->id == $comment_id['vehicle_id'])
                                            <li class="comment_list">
                                                <div class="comment-meta image-comment">
                                                    <img class="avatar"
                                                         src="{{ asset('image_upload/post/image_post_1574214572.jpeg') }}"
                                                         width="50" alt="">
                                                    <p class="author-name"><span
                                                            class="">{{ $comment_id['user']['name'] }}</span></p>
                                                    <p class="comment-content">
                                                        {{ $comment_id['content'] }}
                                                    </p>
                                                </div>
                                            </li>
                                        @endif @endforeach
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4">
                        <div class="right-info ">
                            <div class="shadow mb-xlg p-lg">
                                <div class="pr text-center">ĐĂNG KÝ THÔNG TIN</div>
                                <form onsubmit="return bookingCar();" id="bookingCar"  method="post" action="{{ route('booking_car', $vechcles->id ) }}" class="cap"
                                      id="detail-datetime">
                                    @csrf
                                    <div class="tit3 mt-md mb-xs">{{ $vechcles->name }}</div>
                                    @if(Auth::check())
                                        <div class="form-group position-relative form-group">
                                            <label class=" pt-2">Họ tên :</label>
                                            <div class="box-date ">
                                                <input class="input flatpickr-input form-control" type="text" id=""
                                                       name="name" id="name" value="{{ Auth::user()->name }}">
                                                <span class="err_phone text-danger" id="errName" style="color: red;"></span>
                                            </div>
                                        </div>
                                        <div class="form-group position-relative form-group">
                                            <label class=" pt-2">Email :</label>
                                            <div class="box-date ">
                                                <input class="input flatpickr-input form-control" type="text" id=""
                                                       name="email" id="email" value="{{ Auth::user()->email }}">
                                                <span class="err_phone text-danger" id="errEmail" style="color: red;"></span>
                                            </div>
                                        </div>
                                        <div class="form-group position-relative form-group">
                                            <label class=" pt-2">Số điện thoại</label>
                                            <div class="box-date ">
                                                <input class="input flatpickr-input form-control" type="number" id="phone"
                                                       name="phone" value="{{ Auth::user()->phone  }} {{ old('phone')  }}"><br>
                                                <span class="err_phone text-danger" id="errPhone" style="color: red;"></span>
                                            </div>
                                        </div>
                                    @endif
                                    <div class="form-group position-relative form-group">
                                        <label class=" pt-2">Thời gian nhận xe</label>
                                        <div class="box-date ">
                                            <input class="input flatpickr-input form-control" type="text"
                                                   id="start_date" name="start_date" value="{{ old('start_date')}}"
                                                   placeholder="Ngày nhận xe" style=""
                                                   readonly="readonly"> @if($errors->first('start_date'))
                                                <br><span
                                                    class="text-danger">{{$errors->first('start_date')}}</span> @endif
                                        </div>
                                    </div>
                                    <div class="form-group position-relative form-group">
                                        <label class="pt-2">Thời gian trả xe</label>
                                        <div class="box-date ">
                                            <input class="input flatpickr-input form-control" type="text" id="end_date"
                                                   name="end_date" value="{{ old('end_date')}}"
                                                   placeholder="Ngày trả xe" style=""
                                                   readonly="readonly"> @if($errors->first('end_date'))
                                                <br><span
                                                    class="text-danger">{{$errors->first('end_date')}}</span> @endif
                                        </div>
                                    </div>
                                    <br/>
                                    <h5>Giá tiền:&nbsp;
&nbsp;
 <label
                                            class=" pt-2">{{ number_format($vechcles->price) }}</label>&nbsp;VNĐ</h5>
                                    {{-- @dd($vechcles['car_Booking']['start_date']);--}} {{-- @if($vechcles['car_Booking']['start_date'])--}} {{-- <span>Đã có người đặt</span>--}} {{-- @endif--}}
                                    <div class="form-group mb-none position-relative form-group">
                                        <input type="hidden" id="peice_vehicles" name="total"
                                               value="{{$vechcles->price}}">
                                        <input type="hidden" class="calculated">
                                    </div>
                                    <div class="caculator">
                                        <div class="total">
                                            <div class="tong">Tổng giá:</div>
                                            <div class="total-price"></div>
                                            <span>VND</span>
                                            <input type="hidden" id="total-price" name="" value="">
                                        </div>
                                    </div>
                                    @if(Auth::check())
                                        <div class="button-sub">
                                            <button type="submit" class="btn btn-info">Đăng ký</button>
                                        </div>
                                        <p class="text-center mt-lg">
                                            <a class="btn  link" id="testLinkURL" href="{{ route('cate') }}">Xem xe
                                                khác</a>
                                        </p>
                                    @else
                                        <div class="text-center mt-lg">
                                            Hãy <a class="account-login" data-toggle="modal" data-target="#login">Đăng
                                                nhập</a>/
                                            <a class="account-register" data-toggle="modal" data-target="#register">Đăng
                                                ký</a> để đăng ký xe @endif
                                        </div>

                                </form>
                            </div>
                        </div>
                        {{-- tin lien quan--}}

                    </div>
                @endif
                @endif
            </div>
        </div>
        <!-- xe lien quan -->
        <div class="row topics_car container" id="topics_news">
            <div>
                <h3>Xe liên quan</h3></div>
            @foreach($topic as $id)
                <div class="col-md-4">
                    <div class="card">
                        <a href="{{ route('detail', $id->id )  }}">
                            <img class="card-img-top" data-src="{{ asset('image_upload/default-car.jpg') }}" alt=""
                            {{--                             src="{{ asset('image_upload/img_vehicle/'.$id['images']['image_vehicle']) }}" data-holder-rendered="true">--}}
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">{{ $id->name }}</h5> {{--
                <p class="card-text">{{ $id->name }}</p>--}}
                            <a href="{{ route('detail', $id->id )  }}" class="btn btn-danger">Xem chi tiết</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        @if(session()->has('alert'))
        <div>
            <script>
                Swal.fire(
                    'Đăng ký thành công!',
                    '',
                    'success'
                )
            </script>
        </div>
    </div>
    @endif

@endsection
@push('scripts')
    <script>
        // function bookingCar(){
        //     var patemPhone = /((09|03|07|08|05)+([0-9]{8})\b)/g;
        //     var pathEmail = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        //     var phone = $('#phone').val();
        //     var email = $('#email').val();
        //     var name = $('#name').val();
        //     if (phone !== "") {
        //         if (patemPhone.test(phone)) {
        //             $('#errPhone').html('so dien thoai chua dung dinh dang ');
        //             return false;
        //         }
        //     }else if(email !== ""){
        //         if(pathEmail.test(email)){
        //             $('#errEmail').html('khong dung dinh dang email ');
        //             return false;
        //         }
        //     }else{
        //         return true;
        //     }
        //
        // }


        $(document).ready(function () {
            var valuCar =  $(".getValueBooking").val();
            var obj = JSON.parse(valuCar);
            var arr1 = obj.start_date;
             var arr2 = obj.end_date
             // var arrRes = arr1.concat(arr2);
             var creArray =  [arr1,arr2];
            console.log(creArray);

            var unavailableDates = creArray;

            function unavailable(date) {
                let dmy;
                dmy = date.getDate() + "-" + (date.getMonth() + 1) + "-" + date.getFullYear();
                if ($.inArray(dmy, unavailableDates) == -1) {
                    return [true, ""];
                } else {
                    return [false, "bookingStyle", "Unavailable"];
                }
            }

            $("#start_date").datepicker({
                dateFormat: 'yy-m-dd',
                changeMonth: true,
                changeYear: true,
                minDate: new Date(),
                maxDate: '+30D',
                beforeShowDay: unavailable
            });
            $('#end_date').datepicker({
                dateFormat: 'yy-m-dd',
                changeMonth: true,
                changeYear: true,
                minDate: new Date(),
                maxDate: '+30D',
                beforeShowDay: unavailable
            });
            $('#start_date').datepicker().bind("change", function () {
                var minValue = $(this).val();
                minValue = $.datepicker.parseDate("yy-mm-dd", minValue);
                $('#end_date').datepicker("option", "minDate", minValue);
                calculate();


            });
            $('#end_date').datepicker().bind("change", function () {
                var maxValue = $(this).val();
                maxValue = $.datepicker.parseDate("yy-mm-dd", maxValue);
                $('#start_date').datepicker("option", "maxDate", maxValue);
                calculate();

            });

            function calculate() {
                var asd = $('#peice_vehicles').val();
                var d1 = $('#start_date').datepicker('getDate');
                var d2 = $('#end_date').datepicker('getDate');
                var oneDay = 24 * 60 * 60 * 1000;
                var diff = 0;
                var countVe = 0;
                if (d1 && d2) {

                    diff = Math.round(Math.abs((d2.getTime() - d1.getTime()) / (oneDay)));
                    countVe = asd * diff;
                }
                $('.calculated').val(diff);
                $('.total-price').html(countVe);
                $('#total-price').append(countVe);

            }
        });
    </script>
@endpush

