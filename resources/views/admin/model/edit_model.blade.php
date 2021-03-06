@extends('admin.layouts.app_dashboard')
@section('title', 'Chỉnh sửa hãng xe')

@section('content')
    <div class="content">
        <div class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-8 ml-auto mr-auto">


                        <form method="post" action="{{ route('model_edit', $model_car->id) }}" novalidate="novalidate">
                            <input type="hidden" name="_token" value="{!! csrf_token() !!}">

                            <div class="card">
                                <div class="card-header card-header-text card-header-success">
                                    <div class="card-text">
                                        <h4 class="card-title">Sửa hãng xe</h4>
                                    </div>
                                </div>

                                <div class="card-body ">
                                    <div class="row">
                                        <label class="col-sm-3 col-form-label lg_em_pa">Tên hãng xe</label>
                                        <div class="col-sm-7">
                                            <div class="form-group bmd-form-group">
                                                <input type="text" name="name" value="{{ $model_car->name }}" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-footer ml-auto mr-auto">
                                    <button type="submit" class="btn btn-success" style="margin-right: 15px">Save</button>
                                    <a href="{{ route('model_list') }}" role="button" class="btn btn-default"> Huỷ</a>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
