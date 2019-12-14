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
                        <div class="area-comment">
                            <div>
                                <form method="post" action="{{ route('post_comment', $vechcles->id ) }}" id="comment">
                                    @csrf
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Để lại ý kiến của bạn</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" name="content"
                                                  id="content" rows="4"></textarea>
                                        <span id="alert"></span>
                                    </div>
                                    @if(isset(Auth::user()->email))
                                        <div class="request-login">

                                        </div>
                                    @else
                                        <div class="request-login">
                                            <p>
                                                Hãy <a href="#" class="account-login" data-toggle="modal"
                                                       data-target="#myModal">đăng nhập</a> để gủi bình luận (Lưu ý:
                                                bình luận của bạn sẽ được quản trị xác thực trước khi hiện thị )
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
                                                <img class="avatar"
                                                     src="{{ asset('image_upload/user/default_avata.png') }}" width="50"
                                                     alt="">
                                                <p class="author-name"><span class="">Hong son</span></p>
                                                <p class="comment-content">
                                                    {{ $comment_id->content }}
                                                </p>
                                                <p class="comment-actions">
                                                    <a data-id="{{ $comment_id->id }}" id="reply" href="javascript:;">Tra
                                                        loi</a>
                                                    <span></span>
                                                    {{--                                    @if($comment_id->user_id != Auth::user()->id)--}}
                                                    @if(isset(Auth::user()->id) != $comment_id->user_id )
                                                        <a id="report" href="javascript:;">Report</a>
                                                    @endif
                                                </p>
                                            </div>
                                            <div class="show-reply">
                                                <form action="">
                                                    <textarea class="form-control" id="" name="" id="content" rows="3"
                                                              placeholder="Bạn có đồng ý với Hong Son"></textarea>
                                                    <br>
                                                    <button type="submit" class="btn btn-info">Gui binh luan</button>
                                                    <a id="close" class="btn">Dong</a>
                                                </form>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="right-info ">

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
                            @if($vechcles['car_Booking']['start_date'])
                                <span>Đã có người đặt</span>
                            @endif
                            <div class="form-group mb-none position-relative form-group">
                                <input type="hidden" id="peice_vehicles" value="{{$vechcles->price}}">
                                <input type="hidden" class="calculated">
                            </div>
                            <div class="caculator">
                                <div class="total">
                                    <div class="tong">Tổng giá:</div>
                                    <div class="total-price"></div>
                                    <span>VND</span>
                                </div>
                            </div>
                            @if(Auth::check())
                                <div class="button-sub">
                                    <button type="submit" class="btn btn-info">Đăng ký</button>
                                </div>
                            @else
                                <div class="text-center mt-lg">
                                    Hãy <a class="account-login" data-toggle="modal" data-target="#login">Đăng
                                        nhập</a> / <a class="account-register" data-toggle="modal"
                                                      data-target="#register">Đăng
                                        ký</a> để đăng ký xe
                                    @endif
                                </div>
                                <p class="text-center mt-lg">
                                    <a class="btn  link" id="testLinkURL" href="{{ route('cate') }}">Xem xe khác</a>
                                </p>
                        </form>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--end comment -->
    <!-- xe lien quan -->
    <div class="row topics_car">
        <div><h3>Xe liên quan</h3></div>
        @foreach($topic as $id)
            <div class="col-md-4">
                <div class="card">
                    <a href="{{ route('detail', $id->id )  }}">
                        <img class="card-img-top" data-src="{{ asset('image_upload/default-car.jpg') }}" alt=""
                             src="{{ asset('image_upload/img_vehicle/'.$id->image) }}" data-holder-rendered="true">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">{{ $id->name }}</h5>
                        {{--                        <p class="card-text">{{ $id->name }}</p>--}}
                        <a href="{{ route('detail', $id->id )  }}" class="btn btn-primary">Xem chi tiet</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
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
        $(document).ready(function () {
            $("#myBtn").click(function () {
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
            $('#alert_Booking_success').animate({"right": "-260px"}, 3000)
        });
    </script>
@endsection
