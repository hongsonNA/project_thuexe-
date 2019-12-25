@extends('front-end.admin_user.layout_user.main')
@section('content')
    <style>.default-image img {height: 100%;width: 100%;}.default-image {width: 100%;height: 262px;}</style>
    <script src="{{ asset('editor/ckeditor/ckeditor.js') }}"></script>
    <div class="content" style="margin-top: 30px">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Cập nhật xe </h4>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                    <div class="card-body col-lg-12">
                        <div class="">
                            <form action="{{ route('update_vehicles', $maga_edit->id) }}" method="POST" enctype="multipart/form-data" novalidate>
                                @csrf
                                <input type="hidden" name="status" value="1">
                                <div class="row" style="padding-bottom: 20px;">
                                    <div class="col-lg-7">
                                        <div class="form-group">
                                            <label for="formGroupExampleInput">Tên Xe </label>
                                            <input type="text" class="form-control" name="name" value="{{ $maga_edit->name }}"
                                                   placeholder="Lamboghini">
                                            @if($errors->first('name'))
                                                <br><span class="text-danger">{{$errors->first('name')}}</span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="">Gia cho thue</label>
                                            <input  value="{{ $maga_edit->price }}" type="number" name="price" class="form-control" id="" placeholder="500.000">
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6 mb-3">
                                                <label for="">So cho </label>
                                                <input  value="{{ $maga_edit->seat }}" type="number" name="seat" class="form-control" id="" placeholder="VD: xe 4 cho" value="" >
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="">Hãng xe </label>
                                                <select name="model_id" class="form-control " style="margin-bottom: 10px" value="{{ old('model_id') }}">
                                                    <option  value="0" selected disabled>--Chọn hãng xe --</option>
                                                    @foreach($model_car as $model_id)
                                                        <option value="{{ $model_id->id }}">{{ $model_id->name }}</option>
                                                    @endforeach
                                                </select>
                                                @if($errors->first('model_id'))
                                                    <br><span class="text-danger">{{$errors->first('model_id')}}</span>
                                                @endif
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="">Danh muc</label>


                                                <select  class="form-control" name="cate_id">
                                                    @foreach($category as $key => $cate)
                                                        <option name="" @if($cate->id == $maga_edit->cate_id) selected @endif  value="{{ $cate->id }}">{{ $cate->name }}</option>
                                                    @endforeach
                                                </select>

                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6 mb-3">
                                                <label for="">Thanh pho</label>
                                                <select class="form-control" id="select_city" name="city_id">
                                                    <option value="">--Chon thanh pho--</option>
                                                    @foreach($citys as $key => $id)
                                                        <option id="" value="{{ $id->id }}" @if($id->id == $maga_edit->city_id) selected @endif >{{ $id->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="">Quan huyen</label>
                                                <select class="form-control" id="select_district" name="district_id">
                                                    <option value="1">--chọn quận huyện --</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Dia chia chi tiet</label>
                                            <input value="{{ $maga_edit->address }}" type="text" name="address" class="form-control" id="" placeholder="500.000">
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="form-group">
                                            <label for="exampleFormControlFile1">Anh dai dien</label>
                                            <div class="default-image">

                                                @if($maga_edit->image)
                                                    <img name="image_save" src="{{ asset('image_upload/img_vehicle/'.$maga_edit->image) }}" alt="" width="100">
                                                    @endif
                                            </div>
                                        </div>
                                        <div>
                                            <input type="file" name="image" class="" id="imgInp" >
                                        </div>
                                    </div>
                                </div>
                                <textarea name="description" id="editor1" style="margin-top: 5px" >
                                    {{ $maga_edit->description }}
                                </textarea>
                                <script>CKEDITOR.replace('editor1');</script>
                                <!-- check -->
                                <div>
                                    <button type="submit" class="btn btn-info">Cập nhật</button>
                                    <a href="{{ route('manage') }}" class="btn btn-danger card-title">Hủy</a>
                                </div>
                                <div class="card-header">

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
        $(document).ready(function(){
            $( "#select_city" ).change(function () {
                var city_id = $(this).val();
                console.log(city_id);
                if(city_id){
                    $.ajax({
                        type:"get",
                        url:'states_update/'+city_id,
                        dataType: "json",
                        success:function (res) {
                            if (res){
                                $('#select_district').empty();
                                $.each(res,function(key,value){
                                    $("#select_district").append('<option value="'+key+'">'+value+'</option>');
                                });
                            }
                        }
                    });
                }
            });
        });

        function preView(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#blah').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#imgInp").change(function() {
            preView(this);
        });

    </script>
@endsection
