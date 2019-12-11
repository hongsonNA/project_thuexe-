@extends('admin.layouts.app_dashboard')
@section('title', 'Chỉnh sửa liên hệ')

@section('content')
    <div class="content">
        <div class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-8">

                        <div class="card">
                            <div class="card-header card-header-text card-header-success">
                                <div class="card-text">
                                    <h4 class="card-title">Thông tin liên hệ</h4>
                                </div>
                            </div>

                            <div class="card-body ">
                                <div class="row">
                                    <label class="col-sm-3 col-form-label lg_em_pa">Họ và tên</label>
                                    <div class="col-sm-7">
                                        <div class="form-group bmd-form-group">
                                            <input value="{{ $contact->name }}" class="form-control" disabled>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body ">
                                <div class="row">
                                    <label class="col-sm-3 col-form-label lg_em_pa">Email</label>
                                    <div class="col-sm-7">
                                        <div class="form-group bmd-form-group">
                                            <input value="{{ $contact->email }}" class="form-control" disabled>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body ">
                                <div class="row">
                                    <label class="col-sm-3 col-form-label lg_em_pa">Số điện thoại</label>
                                    <div class="col-sm-7">
                                        <div class="form-group bmd-form-group">
                                            <input value="{{ $contact->phone }}" class="form-control" disabled>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body ">
                                <div class="row">
                                    <label class="col-sm-3 col-form-label lg_em_pa">Nội dung</label>
                                    <div class="col-sm-7">
                                        <div class="form-group bmd-form-group">
                                            <textarea class="form-control" cols="50" rows="10" disabled>{{ $contact->content }}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-8">

                        <form method="post" action="{{ route('contact_update', $contact->id) }}" novalidate="novalidate">
                            <input type="hidden" name="_token" value="{!! csrf_token() !!}">

                            <div class="card">

                                <div class="card-body ">
                                    <div class="row">
                                        <label class="col-sm-4 col-form-label lg_em_pa">Trạng thái</label>
                                        <div class="col-sm-4">
                                            <div class="form-group bmd-form-group">
                                                <select class="selectpicker" name="status" data-style="select-with-transition" data-size="7">
                                                    <option value="1" @if($contact->status == 1) selected @endif>Chưa liên hệ lại</option>
                                                    <option value="2" @if($contact->status == 2) selected @endif>Đã liên hệ lại</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-footer ml-auto mr-auto">
                                    <button type="submit" class="btn btn-success" style="margin-right: 15px">Save</button>
                                    <a href="{{ route('contact_list') }}" role="button" class="btn btn-default"> Huỷ</a>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
