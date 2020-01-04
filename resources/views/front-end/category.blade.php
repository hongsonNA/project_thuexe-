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
      #loading{
          width: 20%;
          height: 136px;
          margin: auto;
          background-repeat: no-repeat;
          margin-top: 10%;
          background-image: url("{{ asset('front-end-css/images/pre-loader.gif') }}");
      }
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
            <div class="row">
                <div class="col-sm-9">
                    <div class="listings">
                        <div class="heading clearfix">
                            <h5>Danh sách</h5>
                            <div class="view">
{{--                                <a href="listing-list-view.html"><i class="fa fa-th-list"></i></a>--}}
{{--                                <a href="listing-grid-view.html" class="active"><i class="fa fa-th"></i></a>--}}
                            </div> <!-- end .view -->
                            <div class="select-wrapper sort">
                                <select class="filter_car form-control option-select" >
                                    <option value="0">Sắp xếp</option>
                                    <option  value="2">Sắp xếp tăng dần</option>
                                    <option value="1">Sắp xếp giảm dần</option>
                                </select>
                            </div>
                            <!-- end .select-wrapper -->
                        </div>
                        <div class="listings-grid clearfix" id="result_fillter">
{{--                            @foreach($model_car as $key => $id)--}}
{{--                                <div class="listing">--}}
{{--                                    <div class="image">--}}
{{--                                        <a href="{{ route('detail', $id->id)  }}">--}}
{{--                                            <img src="https://s3.amazonaws.com/files.activate.social/user-image-32740129-1552215451-5c84ed9b68ace" alt="listing" class="img-responsive">--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                    <div class="content_car">--}}
{{--                                        <div class="title"><a href="javscript:;">Ferrari <span>[ Grand ]</span></a></div>--}}
{{--                                        <a href="{{ route('detail', $id->id)  }}">{{ $id->name }}</a>--}}
{{--                                        <div class="price">{{ number_format($id->price) }}<span> VND</span></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            @endforeach--}}
                        </div>
                    </div>
                    <div class="row filter_data">

                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="select-fillter">
                        <form method="POST" action="{{ route('search_cate') }}" class=""
                              role="search">
                            @csrf
                            <div class="field-outer ">
                                <select name="model_id" class="common_selector model  form-control pb-2 " style="margin-bottom: 10px" id="">
                                    <option value="">--Chọn hãng xe --</option>
                                    @foreach($model as $key => $id)
                                        <option id="model" value="{{ $id->id }}" >{{ $id->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="field-outer ">
                                <select name="seat" class="common_selector seat form-control pb-2 " style="margin-bottom: 10px" id="">
                                    <option value="0" >--Chọn chỗ--</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                </select>
                            </div>
                            <div class="field-outer ">
                                <select name="city_id" class="common_selector city form-control pb-2 " style="margin-bottom: 10px" id="filte_city">
                                    <option value="">--Chọn thành phố--</option>
                                    @foreach($city as $key => $id)
                                        <option id="city" value="{{ $id->id }}" >{{ $id->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="field-outer " >
                                <select name="district_id" class="form-control pb-2 " style="margin-bottom: 10px" id="select_district" >
                                    <option value="0" >--Chọn quận huyện--</option>
                                </select>
                            </div>
                            <div class="field-outer">
                                <button style="width: 100%" type="submit" class="btn btn-danger option-select   ">Tìm kiếm</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
@push('scripts')
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
            });
            //=====filter car ==========//
            filter_data();
            function filter_data() {
                // $('.filter_data').html('<div id="loading" style="" ></div>');
                var action = 'fetch_data_car';
                var model = get_filter('model');
                var seat = get_filter('seat');
                var city = get_filter('city')
                $.ajax({
                    type :"POST",
                    url : "{{ route('fetch_data_car') }}",
                    data : {action : action, model : model, seat : seat, city : city,"_token": "{{ csrf_token() }}"},
                    success:function (data) {
                        $('.listings-grid').html(data);
                    }
                });
            }
            function get_filter(class_name) {
                var filter = [];
                $('.'+class_name).each(function () {
                    filter.push($(this).val());
                });
                console.log(filter);
                return filter;
            }
            $('.common_selector').on('change', function(){
                filter_data();
            });
        });
    </script>

    @endpush
