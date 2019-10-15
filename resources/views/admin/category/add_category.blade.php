@extends('admin.layouts.app_dashboard')
@section('title', 'Thêm danh mục')

@section('content')
    <div class="content">
        <div class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-8 ml-auto mr-auto">


                        <form method="post" action="{{ route('category_create') }}" novalidate="novalidate">
                            <input type="hidden" name="_token" value="{!! csrf_token() !!}">

                            <div class="card">
                                <div class="card-header card-header-text card-header-success">
                                    <div class="card-text">
                                        <h4 class="card-title">Thêm danh mục</h4>
                                    </div>
                                </div>

                                <div class="card-body ">
                                    <div class="row">
                                        <label class="col-sm-3 col-form-label lg_em_pa">Tên danh mục</label>
                                        <div class="col-sm-7">
                                            <div class="form-group bmd-form-group">
                                                <input type="text" name="name" value="{{ old('name') }}" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-footer ml-auto mr-auto">
                                    <button type="submit" class="btn btn-success">Save</button>
                                </div>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
