@extends('front-end.layouts.app_front-end')
@section('content')
    <style>
        .fleet-grid-box .price-box {
            position: absolute;
            top: 15px;
            right: 20px;
            background-color: #EE871D !important;
            padding: 3px;
        }
        .fleet-grid-box .price-box strong{color:#fff;}
        .fleet-thumb{height: 310px}
    </style>
    <!-- breadcrumb -->
    <div class="tj-breadcrumb">
        <div class="container">
            <ul class="breadcrumb-list">
                <li><a href="/">Home</a></li>
                <li class="javascript:;">Danh muc </li>
            </ul>
        </div>
    </div>
    <!--end breadcrumd -->
    <section class="tj-cab-collection" style="padding: 4rem 0 80px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="tj-heading-style">
                        <h3>Danh sách xe</h3>
                        <p></p>
                    </div>
                </div>

                <div class="cab-col-outer">
                    <!--Fleet Grid Box Start-->

                    @foreach($carUser as $key => $id)
                        <div class="col-md-6 col-sm-6">
                            <div class="fleet-grid-box">
                                <!--Fleet Grid Thumb Start-->
                                <figure class="fleet-thumb">
                                    <a href="{{ route('detail', $id->id)  }}">
                                        <img src="{{ asset('image_upload/img_vehicle/'.$id->image )}}" alt="">
                                    </a>
                                    <figcaption class="fleet-caption">
                                        <div class="price-box">
                                            <strong>{{ $id->price }} <span>/ day</span></strong>
                                        </div>
                                        <span class="rated">Nổi bật</span>
                                    </figcaption>
                                </figure>
                                <!--Fleet Grid Thumb End-->
                                <!--Fleet Grid Text Start-->
                                <div class="fleet-info-box">
                                    <div class="fleet-info">
                                        <h3>{{ $id->name }}</h3>
                                        <ul class="fleet-meta">
                                            <li><i class="fas fa-taxi"></i>{{ $id['modelCar']['name'] }}</li>
                                            <li><i class="fas fa-user-circle"></i> {{ $id['user']['name'] }}</li>
                                            <li><i class="fas fa-tachometer-alt"></i>
                                                {{ $id->seat }}chỗ
                                            </li>
                                        </ul>
                                    </div>
                                    <a href="{{ route('detail', $id->id )  }}" class="tj-btn2">Xem chi tiết<i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                                </div>
                                <!--Fleet Grid Text End-->
                            </div>
                        </div>
                @endforeach
                <!--Fleet Grid Box End-->

                </div>
            </div>
        </div>
    </section>

{{--    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>--}}
{{--    <script>--}}
{{--        $(document).ready(function () {--}}
{{--            $('#filte_city').change(function () {--}}
{{--                var id = $(this).val();--}}
{{--                console.log(id);--}}
{{--                if (id){--}}
{{--                    $.ajax({--}}
{{--                        type:"get",--}}
{{--                        url:'state_cate/'+id,--}}
{{--                        dataType: "html",--}}
{{--                        success:function (res) {--}}
{{--                            if (res){--}}
{{--                                $("#select_district").append(res);--}}
{{--                            }--}}
{{--                        }--}}
{{--                    });--}}
{{--                }--}}
{{--            })--}}
{{--        });--}}
{{--    </script>--}}
@endsection
