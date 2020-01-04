@extends('front-end.admin_user.layout_user.main')
@section('content')
<style>
    swiper-container {
        width: 100%;
        height: 100%;
    }
    .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;

        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
    }
</style>
    <div class="content" style="margin-top: 30px">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <form class="form-horizontal">

                            <div class="row container">
                                <div class="block-area w-100">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="left-content">
                                            <div class="shadow p-lg mb-xlg">
                                                <div class="model row content-detail ">
                                                    <div class="col-sm-12 detail-image car_slider">
                                                        <div class="swiper-container">
                                                            <div class="swiper-wrapper">
                                                                @foreach( $image_array['image_vehicle'] as $key => $value )
                                                                    <div class="swiper-slide">
                                                                        <img src="/image_upload/img_vehicle/{{ $value['image_vehicle'] }}" height="398px" alt="">
                                                                    </div>
                                                                @endforeach
                                                            </div>
                                                            <!-- Add Arrows -->
                                                            <div class="swiper-button-next"></div>
                                                            <div class="swiper-button-prev"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 mt-3">
                                                        <div class="w-100">
                                                            <ul class="nav nav-tabs" role="tablist">
                                                                <li class="nav-item">
                                                                    <a class="nav-link active" href="#profile" role="tab" data-toggle="tab">Thông tin xe</a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link" href="#buzz" role="tab" data-toggle="tab">Mô tả xe</a>
                                                                </li>

                                                            </ul>

                                                            <!-- Tab panes -->
                                                            <div class="tab-content">
                                                                <div role="tabpanel" class="tab-pane  in active" id="profile">
                                                                    <div class="card-content">
                                                                        <div class="form-group">
                                                                            <div class="col-sm-10">
                                                                                <p class="form-control-static">
                                                                                    <label style="font-size: 15px; font-weight: bold; color: black">
                                                                                        Chủ xe: &nbsp;
                                                                                    </label>
                                                                                    {{ $vehicle['user']['name'] }}
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <div class="col-sm-10">
                                                                                <p class="form-control-static">
                                                                                    <label style="font-size: 15px; font-weight: bold; color: black">
                                                                                        Tên xe: &nbsp;
                                                                                    </label>
                                                                                    {{ $vehicle['name'] }}
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <div class="col-sm-10">
                                                                                <p class="form-control-static">
                                                                                    <label style="font-size: 15px; font-weight: bold; color: black">
                                                                                        Giá xe : &nbsp;
                                                                                    </label>
                                                                                    {{ $vehicle['price'] }}
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <div class="col-sm-10">
                                                                                <p class="form-control-static">
                                                                                    <label style="font-size: 15px; font-weight: bold; color: black">
                                                                                        Hãng xe: &nbsp;
                                                                                    </label>
                                                                                    {{ $vehicle['model_id'] }}
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <div class="col-sm-10">
                                                                                <p class="form-control-static">
                                                                                    <label style="font-size: 15px; font-weight: bold; color: black">
                                                                                        Hộp số: &nbsp;
                                                                                    </label>
                                                                                    @if($vehicle->gear == 1) Số sàn @else Số tự động @endif
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <div class="col-sm-10">
                                                                                <p class="form-control-static">
                                                                                    <label style="font-size: 15px; font-weight: bold; color: black">
                                                                                        Tiện ích: &nbsp;
                                                                                    </label>
                                                                                    {{ $vehicle['utility'] }}
                                                                                </p>
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <div class="col-sm-10">
                                                                                <p class="form-control-static">
                                                                                    <label style="font-size: 15px; font-weight: bold; color: black">
                                                                                        Thành phố: &nbsp;
                                                                                    </label>
                                                                                    {{ $vehicle['city']['name'] }}
                                                                                </p>
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <div class="col-sm-10">
                                                                                <p class="form-control-static">
                                                                                    <label style="font-size: 15px; font-weight: bold; color: black">
                                                                                        Quận huyện: &nbsp;
                                                                                    </label>
                                                                                    {{ $vehicle['district']['name'] }}
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div role="tabpanel" class="tab-pane fade" id="buzz"> {!! $vehicle->description !!}</div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <form method="POST" action="{{ route('update_target', $vehicle->id) }}" class="form-horizontal">
                            @csrf
                            <div class="card-header">
                                <h5 class="card-title">
                                    Duyệt xe
                                </h5>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-10">
                                    <label style="font-size: 15px; font-weight: bold; color: black">
                                        Trạng thái: &nbsp;
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-10 offset-md-1">
                                <select class="form-control form-control-sm" name="status">
                                    <option value="2" @if ($vehicle->status == 2) checked @endif>Xe đã kiểm duyệt</option>
                                    <option value="3">Không đủ tiêu chuẩn </option>
                                </select>
                            </div>
                            <br>
                            <div class="form-group">
                                <div class="col-sm-10">
                                    <label style="font-size: 15px; font-weight: bold; color: black">
                                        Nhận xét: &nbsp;
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-10 offset-md-1">
                                <textarea class="form-control" name="description" style="height: 100px"></textarea>

                            </div>
                            <div class="card-footer">
                                <div class="form-group">
                                    <label class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <button type="submit" class="btn btn-fill btn-info">
                                            Lưu
                                        </button>
                                        <a href="{{ route('index_target') }}" type="submit"
                                           class="btn btn-fill btn-raised">
                                            Hủy
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div> <!-- end row -->
        </div>


    </div>
@endsection
@push('scripts')
    <script>
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>
@endpush
