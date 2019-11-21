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
                                <div style="font-weight: 500;">HOẶC TƯƠNG ĐƯƠNG</div>
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
                        <form class="cap" id="detail-datetime">
{{--                            <div class="form-group position-relative form-group">--}}
{{--                                <label class=" text-sm-right pt-2">HÌNH THỨC NHẬN XE</label>--}}
{{--                                <div class="input-form select-box ">--}}
{{--                                    <div>--}}
{{--                                        <select name="cruise-line">--}}
{{--                                            <option value="dealer">Nhận xe tại đại lý</option>--}}
{{--                                            <option value="home">Nhận xe tại nhà</option>--}}
{{--                                        </select>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                            <div class="form-group position-relative form-group">
                                <label class=" pt-2">Thời gian nhận xe</label>
                                <div class="box-date ">
                                    <input class="input flatpickr-input form-control" type="text" id="rental-datetime3" name="rental-datetime3" placeholder="Ngày nhận xe" style="background: url(&quot;assets/images/icon/calendar.png&quot;) right center / 37px no-repeat;" readonly="readonly">
                                </div>
                            </div>
                            <div class="form-group position-relative form-group">
                                <label class=" pt-2">Thời gian trả xe</label>
                                <div class="box-date ">
                                    <input class="input flatpickr-input form-control" type="text" id="return-datetime3" name="return-datetime3" placeholder="Ngày trả xe" style="background: url(&quot;assets/images/icon/calendar.png&quot;) right center / 37px no-repeat;" readonly="readonly">
                                </div>
                            </div>
                            <div class="form-group mb-none position-relative form-group">
                                <label class="pt-2">CHI TIẾT GIÁ</label>
                                <p class="form-control-static p-none">Đơn giá ngày: <span>{{ number_format($vechcles->price) }} VND</span></p>
{{--                                <p class="form-control-static pt-none">Ngày <span>0 ngày</span></p>--}}
                            </div>
                            <div class="caculator">
                                <div class="total">
                                    <div class="tong">Tong: </div>
                                    <div class="total-price">700.000 VND</div>
                                </div>
                            </div>
                            <div class="button-sub">
                                <button type="submit" class="btn btn-danger">Danger</button>
                            </div>

                            <p class="text-center mt-lg">
                                <a class="link" href="/">Quay lại</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
            </div>
        </div>
{{--        comment  --}}
{{--        <div class="comment-user">--}}
{{--            <form>--}}
{{--                <div class="form-group">--}}
{{--                    <label for="exampleFormControlInput1">Email address</label>--}}
{{--                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">--}}
{{--                </div>--}}
{{--                <div class="form-group">--}}
{{--                    <label for="exampleFormControlSelect1">Example select</label>--}}
{{--                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">--}}
{{--                </div>--}}
{{--               --}}
{{--                <div class="form-group">--}}
{{--                    <label for="exampleFormControlTextarea1">Example textarea</label>--}}
{{--                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>--}}
{{--                </div>--}}
{{--            </form>--}}
{{--        </div>--}}
    </div>
    @endsection
