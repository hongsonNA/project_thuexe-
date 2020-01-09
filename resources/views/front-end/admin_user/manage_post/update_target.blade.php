@extends('front-end.admin_user.layout_user.main')
@section('content')
    <style>.default-image img {
            height: 100%;
            width: 100%; padding:10px
        }
        /*#result{display: inline-block;height: 600px;overflow: scroll;}*/
        .default-image {
            width: 100%;
            height: 262px;
        }</style>
    <script src="{{ asset('editor/ckeditor/ckeditor.js') }}"></script>
    <div class="content" style="margin-top: 30px">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Thêm mới xe </h4>
                    </div>
                    <div class="card-body col-lg-12">
                        <div class="">
                            <form action="{{ route('updateTarget', $maga_edit->id) }}" method="POST" enctype="multipart/form-data" novalidate>
                                @csrf
{{--                                <input type="hidden" name="status" value="1">--}}
                                <div class="row" style="padding-bottom: 20px;">
                                    <div class="col-lg-7">
                                        <div class="form-group">
                                            <label for="formGroupExampleInput">Tên Xe </label>
                                            <input type="text" class="form-control" name="name" value="{{ $maga_edit->name }}"
                                                   placeholder="">
                                            @if($errors->first('name'))
                                                <br><span class="text-danger">{{$errors->first('name')}}</span>
                                            @endif

                                        </div>
                                        <div class="form-group">
                                            <div class="">
                                                <label for="">Giá cho thuê</label>
                                                <input type="number" name="price" class="form-control" value="{{ $maga_edit->price }}"
                                                       placeholder="">
                                                @if($errors->first('price'))
                                                    <br><span class="text-danger">{{$errors->first('price')}}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6 mb-3">
                                                <label for="">Biển số xe: </label>
                                                <input type="text" name="license_plate" class="form-control" value="{{ $maga_edit->license_plate }}"
                                                       placeholder="" value="">
                                                @if($errors->first('license_plate'))
                                                    <br><span class="text-danger">{{$errors->first('seat')}}</span>
                                                @endif
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="">Hộp số:  </label>
                                                <select name="gear" class="form-control " style="margin-bottom: 10px" >
                                                    <option  value="0" selected disabled>--Chọn kiểu --</option>
                                                    <option @if($maga_edit->gear == 1)selected @endif  value="1">Số sàn</option>
                                                    <option @if($maga_edit->gear == 2)selected @endif value="2">Số tự động</option>
                                                </select>
                                                @if($errors->first('model_id'))
                                                    <br><span class="text-danger">{{$errors->first('model_id')}}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-3">
                                                <label for="">Thủ tục nhận xe: </label>
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" id="produce" class="form-control" name="procedure" value="{{ $maga_edit->procedure }}" data-role="tagsinput"/>
                                            </div>
                                            @if($errors->first('procedure'))
                                                <br><span class="text-danger">{{$errors->first('procedure')}}</span>
                                            @endif

                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-3">
                                                <label for="">tinh nang xe: </label>
                                                <a href="javascrip:;"></a>
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" id="utility" name="utility" class="form-control" value="{{ $maga_edit->utility }}" data-role="tagsinput"/>
                                            </div>
                                            @if($errors->first('utility'))
                                                <br><span class="text-danger">{{$errors->first('utility')}}</span>
                                            @endif

                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-3">
                                                <label for="">Dung tích xăng: </label>
                                                <a href="javascrip:;"></a>
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="number" id="" name="capacity" class="form-control" value="{{ $maga_edit->capacity }}" data-role=""/>
                                            </div>
                                            @if($errors->first('capacity'))
                                                <br><span class="text-danger">{{$errors->first('capacity')}}</span>
                                            @endif

                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6 mb-3">
                                                <label for="">Số chỗ</label>
                                                <input type="number" name="seat" class="form-control" value="{{ $maga_edit->seat }}"
                                                       placeholder="" value="">
                                                @if($errors->first('seat'))
                                                    <br><span class="text-danger">{{$errors->first('seat')}}</span>
                                                @endif
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="">Hãng xe </label>
                                                <select name="model_id" class="form-control " style="margin-bottom: 10px" value="{{ old('model_id') }}">
                                                    <option  value="0" selected disabled>--Chọn hãng xe --</option>
                                                    @foreach($model_car as $model_id)
                                                        <option @if($maga_edit->model_id == $model_id->id )selected @endif  value="{{ $model_id->id }}">{{ $model_id->name }}</option>
                                                    @endforeach
                                                </select>
                                                @if($errors->first('model_id'))
                                                    <br><span class="text-danger">{{$errors->first('model_id')}}</span>
                                                @endif
                                            </div>

                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6 mb-3">
                                                <label for="">Thành phố</label>
                                                <select class="form-control" id="select_city" name="city_id" value="{{ old('city_id') }}">
                                                    <option value="">--Chon thanh pho--</option>
                                                    @foreach($citys as $key => $id)
                                                        <option @if($maga_edit->city_id == $id->id )selected @endif id="" value="{{ $id->id }}">{{ $id->name }}</option>
                                                    @endforeach
                                                </select>
                                                @if($errors->first('city_id'))
                                                    <br><span class="text-danger">{{$errors->first('city_id')}}</span>
                                                @endif
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="">Quận huyện</label>
                                                <select class="form-control" id="select_district" name="district_id" value="{{ old('district_id') }}">
                                                    <option value="">--chọn quận huyện --</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Địa chỉ chi tiết</label>
                                            <input type="text" name="address" class="form-control" value="{{ $maga_edit->address }}"
                                                   placeholder="">
                                            @if($errors->first('address'))
                                                <br><span class="text-danger">{{$errors->first('address')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="">
                                            <label for="exampleFormControlFile1">Ảnh đại diện</label>
                                            <input type="file" id="image_vehicle" name="image_vehicle[]" class="" id="imgInp" multiple>
{{--                                            <div class="default-image">--}}
{{--                                               --}}
{{--                                                <img id="blah" src="{{ asset('image_upload/default-car.jpg') }}" alt="">--}}
{{--                                            </div>--}}
                                            <output id="result" />
                                            @foreach( $image_array['image_vehicle'] as $key => $value )
                                                    <img  class="appen_close"  class="p-3" src="/image_upload/img_vehicle/{{ $value['image_vehicle'] }}" alt="">
                                                <a href="{{ route('remove_image', $value['id']) }}" class="remove_image"  id="remove" >Xoa anh</a>
                                            @endforeach
                                        </div>
                                        <div>
                                        </div>

                                        @if($errors->first('image'))
                                            <br><span class="text-danger">{{$errors->first('image')}}</span>
                                        @endif
                                    </div>
                                </div>
                                <textarea name="description" id="editor1" style="margin-top: 5px">{{ $maga_edit->description }}</textarea>
                                <script>CKEDITOR.replace('editor1');</script>
                                @if($errors->first('description'))
                                    <br><span class="text-danger">{{$errors->first('description')}}</span>
                            @endif
                            <!-- check -->
                                <div>
                                    <button type="submit" class="btn btn-info">Them Moi</button>
                                    <a href="{{ route('manage') }}" class="btn btn-danger card-title">Hủy</a>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- col 12 -->
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script>
        $(document).ready(function () {
            $("#select_city").change(function () {
                var city_id = $(this).val();
                console.log(city_id);
                if (city_id) {
                    $.ajax({
                        type: "get",
                        url: 'states/' + city_id,
                        dataType: "json",
                        success: function (res) {
                            if (res) {
                                $('#select_district').empty();
                                $.each(res, function (key, value) {
                                    $("#select_district").append('<option value="' + key + '">' + value + '</option>');
                                });
                            }
                        }
                    });
                }
            });
        });

    </script>
@endsection
@push('scripts')
    <script>
        if(window.File && window.FileList && window.FileReader)
        {
            var filesInput = document.getElementById("image_vehicle");
            filesInput.addEventListener("change", function(event){

                var files = event.target.files; //FileList object
                var output = document.getElementById("result");

                for(var i = 0; i< files.length; i++)
                {
                    var file = files[i];

                    //Only pics
                    if(!file.type.match('image'))
                        continue;

                    var picReader = new FileReader();

                    picReader.addEventListener("load",function(event){

                        var picFile = event.target;

                        var div = document.createElement("div");

                        div.innerHTML = "<img class='thumbnail' name='image_vehicle' src='" + picFile.result + "'" +
                            "title='" + picFile.name + "'/>";

                        output.insertBefore(div,null);

                    });

                    //Read the image
                    picReader.readAsDataURL(file);
                }

            });
        } else {
            console.log(" Trình duyệt của bạn không hỗ trợ ");
        }


        $('#produce').tagsinput('items');
        function preView(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#blah').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#imgInp").change(function () {
            preView(this);
        });
    </script>
@endpush
