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
{{--              <li><a href="/">Home</a></li>--}}
{{--              <li class="javascript:;">Danh muc</li>--}}
          </ul>
      </div>
  </div>
  <!--end breadcrumd -->
    <section class="tj-cab-collection" style="padding: 4rem 0 80px;">

        <div class="container">
            <!-- search cate -->
            <div class="search-cate">
                <form action="{{ route('search_cate') }}" method="post">
                    @csrf
                    <div class="box-combo">
                        <div class="field-outer row">
                        <select name="cate_id" id="filter_cate" class="form-control " style="margin-bottom: 10px" id="">
                            <option value="">--Chọn danh mục--</option>
                            @foreach($category as $key => $id)
                                <option value="{{ $id->id }}">{{ $id->name }}</option>
                            @endforeach
                        </select>
                            <div class="field-outer">
                                <select name="city_id" class="form-control pb-2" style="margin-bottom: 10px" id="filte_city">
                                    <option value="">--Chọn thành phố--</option>
                                    @foreach($city as $key => $id)
                                        <option id="city" value="{{ $id->id }}" >{{ $id->name }}</option>
                                    @endforeach
                                </select>

                            </div>
                        </div>
                        <div class="row">
                            <div class="field-outer">
                                <select name="model_id" class="form-control pb-2" style="margin-bottom: 10px" id="">
                                    <option value="">--Chọn hãng xe --</option>
                                    @foreach($model_car as $key => $id)
                                        <option id="model" value="{{ $id->id }}" >{{ $id->name }}</option>
                                    @endforeach
                                </select>

                            </div>
                            <div class="field-outer" >
                                <select name="district_id" class="form-control pb-2" style="margin-bottom: 10px" id="select_district" >
                                    <option value="0" >--Chọn quận huyện--</option>
{{--                                        <option id="distri" value="0" ></option>--}}
                                </select>

                            </div>
                        </div>
                        <div class="field-outer">
                            <div class="field-outer">
                                <select name="seat" class="form-control pb-2" style="margin-bottom: 10px" id="">
                                    <option value="0" >--Chọn chỗ--</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                </select>
                            </div>
                          <div class="field-outer">
                              <button style="width: 100%" type="submit" class="btn btn-danger">Tìm kiếm</button>
                          </div>
                        </div>
                </form>

            </div>
            <!-- end -->
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="tj-heading-style">
                        <h3>Danh sách xe</h3>
                        <p></p>
                    </div>
                </div>

                <div class="cab-col-outer">
                    <!--Fleet Grid Box Start-->
                    @foreach($list_cate as $key => $id)
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
                                    <span class="rated"></span>
                                </figcaption>
                            </figure>
                            <!--Fleet Grid Thumb End-->
                            <!--Fleet Grid Text Start-->
                            <div class="fleet-info-box">
                                <div class="fleet-info">
                                    <h3>{{ $id->name }}</h3>
{{--                                    <span class="fas fa-star"></span>--}}
{{--                                    <span class="fas fa-star"></span>--}}
{{--                                    <span class="fas fa-star"></span>--}}
{{--                                    <span class="fas fa-star"></span>--}}
{{--                                    <span class="fas fa-star"></span>--}}

                                    <ul class="fleet-meta">

                                        <li><i class="fas fa-taxi"></i>{{ $id['modelCar']['name'] }}</li>
                                        <li><i class="fas fa-user-circle"></i>
                                            <a class="title_user" href="{{ route('cateUser', $id->user_id) }}">{{ $id['user']['name'] }}</a>
                                        </li>
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

  <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
  <script>
      $(document).ready(function () {
          $('#filte_city').change(function () {
              var id = $(this).val();
              console.log(id);
              if (id){
                  $.ajax({
                      type:"get",
                      url:'state_cate/'+id,
                      dataType: "html",
                      success:function (res) {
                          if (res){
                              $("#select_district").append(res);
                          }
                      }
                  });
              }
          })
      });
  </script>
@endsection
