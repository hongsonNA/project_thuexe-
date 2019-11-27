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
                        <form method="post" action="{{ route('booking_car') }}" class="cap" id="detail-datetime">
                            @csrf
                            <input type="hidden" name="vehicle_id" value="{{ $vechcles->id }}">
                            <input type="hidden" name="city_id" value="{{ $vechcles->city_id }}">
                            <input type="hidden" name="district_id" value="{{ $vechcles->district_id }}">
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                            <input type="hidden" name="status" value="1">
                            <input type="hidden" name="order_id" value="1">
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
    <a href="#" id="carbooking">click</a>
    <div id="booking-sucsess">
        <button>ok</button>
    </div>

    @if(session()->has('alert'))
        <div class="alert alert-success">
            {{ session()->get('alert') }}
        </div>
    @endif
    @endsection
