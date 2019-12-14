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
                                    <a href=""> <img src="{{ asset('image_upload/img_vehicle/'.$vechcles->image )}}"
                                                     alt=""></a>
                                </div>
                                <div class="col-sm-6">
                                    <div class="tit3 mt-md mb-xs">{{ $vechcles->name }}</div>
                                    <div class="info mb-none">
                                        <h5>Chủ sở hữu:&nbsp;&nbsp; <label
                                                class=" pt-2">{{ $vechcles['user']['name'] }}</label></h5><br>
                                        <h5>Giá tiền:&nbsp;&nbsp; <label
                                                class=" pt-2">{{ number_format($vechcles->price) }}</label>&nbsp;VNĐ
                                        </h5>
                                        <p style="color:red">&nbsp;&nbsp;(Giá tiền được tính theo ngày)</p><br>
                                        <h5>Địa chỉ:&nbsp;&nbsp; <label class=" pt-2">{{ $vechcles->address }}</label>
                                        </h5><br>
                                        <h5>Số chỗ:&nbsp;&nbsp; <label class=" pt-2">{{ $vechcles->seat }}</label></h5>
                                        <br>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-xlg">
                                <div class="col-md-12">
                                    <div class="mb-md">
                                        <div class="b-tit">Mô tả và thông số xe</div>
                                        <div>
                                            {!! $vechcles->description !!}
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="area-comment">
                        <div>
                            <form method="post" action="{{ route('vehicle_comment', $vechcles->id ) }}" id="comment">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Để lại ý kiến của bạn</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" name="content"
                                              id="content" rows="4"></textarea>
                                    <span id="alert"></span>
                                </div>
                                @if(isset(Auth::user()->email))
                                    <button type="submit" id="chekc-comment" class="btn btn-info">Bình luận</button>
                                @else
                                    <div class="request-login">
                                        <p>
                                            Hãy <a class="account-login" data-toggle="modal" data-target="#login">Đăng
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
                                @foreach($comments_dl as $comment_id)
                                    @if($vechcles->id == $comment_id['vehicle_id'])
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
                                    @endif
                                @endforeach
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="right-info ">
                    <div class="shadow mb-xlg p-lg">
                    <div class="pr text-center">GIÁ VÀ THỦ TỤC</div>
                    <form method="post" action="{{ route('booking_car', $vechcles->id ) }}" class="cap"
                          id="detail-datetime">
                        @csrf
                        <div class="form-group position-relative form-group">
                            <label class=" pt-2">Thời gian nhận xe</label>
                            <div class="box-date ">
                                <input class="input flatpickr-input form-control" type="text" id="start_date"
                                       name="start_date" value="{{ old('start_date')}}" placeholder="Ngày nhận xe"
                                       style="" readonly="readonly">
                                @if($errors->first('start_date'))
                                    <br><span class="text-danger">{{$errors->first('start_date')}}</span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group position-relative form-group">
                            <label class="pt-2">Thời gian trả xe</label>
                            <div class="box-date ">
                                <input class="input flatpickr-input form-control" type="text" id="end_date"
                                       name="end_date" value="{{ old('end_date')}}" placeholder="Ngày trả xe"
                                       style="" readonly="readonly">
                                @if($errors->first('end_date'))
                                    <br><span class="text-danger">{{$errors->first('end_date')}}</span>
                                @endif
                            </div>
                        </div>
                        {{--                            @dd($vechcles['car_Booking']['start_date']);--}}
{{--                        @if($vechcles['car_Booking']['start_date'])--}}
{{--                            <span>Đã có người đặt</span>--}}
{{--                        @endif--}}
                        <div class="form-group mb-none position-relative form-group">
                            <input type="hidden" id="peice_vehicles" value="{{$vechcles->price}}">
                            <input type="hidden" class="calculated">
                        </div>
                        <div class="caculator">
                            <div class="total">
                                <div class="tong">Tổng giá:</div>
                                <div class="total-price"></div>
                                <span>VND</span>
{{--                                <input type="hidden" name="total" value="">--}}
                            </div>
                        </div>
                        @if(Auth::check())
                            <div class="button-sub">
                                <button type="submit" class="btn btn-info">Đăng ký</button>
                            </div>
                            <p class="text-center mt-lg">
                                <a class="btn  link" id="testLinkURL" href="{{ route('cate') }}">Xem xe khác</a>
                            </p>
                        @else
                            <div class="text-center mt-lg">
                                Hãy <a class="account-login" data-toggle="modal" data-target="#login">Đăng
                                    nhập</a> / <a class="account-register" data-toggle="modal"
                                                  data-target="#register">Đăng
                                    ký</a> để đăng ký xe
                                @endif
                            </div>

                    </form>
                    </div>
                </div>
{{--                tin lien quan--}}

            </div>
        </div>
    </div>
    <!-- xe lien quan -->
    <div class="row topics_car container" id="topics_news">
        <div><h3>Xe liên quan</h3></div>
        @foreach($topic as $id)
            <div class="col-md-4">
                <div class="card">
                    <a href="{{ route('detail', $id->id )  }}">
                        <img class="card-img-top" data-src="{{ asset('image_upload/default-car.jpg') }}" alt=""
                             src="{{ asset('image_upload/img_vehicle/'.$id->image) }}" data-    holder-rendered="true">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">{{ $id->name }}</h5>
                        {{--                        <p class="card-text">{{ $id->name }}</p>--}}
                        <a href="{{ route('detail', $id->id )  }}" class="btn btn-danger">Xem chi tiết</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    @if(session()->has('alert'))
        <div id="alert_Booking_success" class="alert alert-success">
            {{--            {{ session()->get('alert') }}--}}
            <script>
                Swal.fire(
                    'Đăng ký thành công!',
                    '',
                    'success'
                )
            </script>
        </div>


    @endif
@endsection

