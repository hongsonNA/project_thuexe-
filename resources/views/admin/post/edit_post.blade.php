@extends('admin.layouts.app_dashboard')
@section('title', 'Chỉnh sửa bài viết')

@section('content')
    <script src="{{ asset('editor/ckeditor/ckeditor.js') }}"></script>
    <div class="content">
        <div class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-12">

                        <form method="post" action="{{ route('post_update', $post->id) }}" enctype="multipart/form-data"
                              novalidate>
                            <input type="hidden" name="_token" value="{!! csrf_token() !!}">

                            <div class="card">
                                <div class="card-header card-header-text card-header-success">
                                    <div class="card-text">
                                        <h4 class="card-title">Chỉnh sửa bài viết</h4>
                                    </div>
                                </div>

                                <div class="card-body ">
                                    <div class="row">
                                        <label class="col-sm-1 col-form-label lg_em_pa">Tiêu đề</label>
                                        <div class="col-sm-10">
                                            <div class="form-group bmd-form-group">
                                                <input type="text" name="title" value="{{ $post->title }}"
                                                       class="form-control">
                                            </div>
                                            @if($errors->first('title'))
                                                <br><span class="text-danger">{{$errors->first('title')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body ">
                                    <div class="row">
                                        <label class="col-sm-1 col-form-label lg_em_pa">Tin vắn tắt</label>
                                        <div class="col-sm-10">
                                            <div class="form-group bmd-form-group">
                                                <textarea name="summary" cols="30" rows="4"
                                                          class="form-control">{{ $post->summary }}</textarea>
                                            </div>
                                            @if($errors->first('summary'))
                                                <br><span class="text-danger">{{$errors->first('summary')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body ">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <label class="col-form-label lg_em_pa">Nội dung</label>
                                            <div class="form-group bmd-form-group">
                                                <textarea name="content" id="editor1">{{ $post->content }}</textarea>
                                                <script>CKEDITOR.replace('editor1');</script>
                                                @if($errors->first('content'))
                                                    <span class="text-danger">{{$errors->first('content')}}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="text-center">
                                    <h4 class="title">Ảnh bài viết</h4>
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <div class="fileinput-new thumbnail">
                                            <img src="/image_upload/post/{{ $post->image_posts }}">
                                        </div>
                                        @if($errors->first('image_posts'))
                                            <br><span class="text-danger">{{$errors->first('image_posts')}}</span>
                                        @endif
                                        <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                        <div>
                                        <span class="btn btn-default btn-round btn-file">
                                        <span class="fileinput-new">Select image</span>
                                        <span class="fileinput-exists">Change</span>
                                        <input type="file" name="image_posts">
                                        </span>
                                            <a href="#post" class="btn btn-danger btn-round fileinput-exists"
                                               data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body ">
                                    <div class="row">
                                        <div class="col-sm-8">
                                            <div class="card-footer text-right">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        {{--                                                        @if($post->status == 1)checked @endif--}}
                                                        <input class="form-check-input" name="status" type="checkbox"
                                                               @if($post->status == 1)checked @endif value="1">
                                                        Đăng bài viết
                                                        <span class="form-check-sign">
                                                            <span class="check"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <label class="col-form-label lg_em_pa">Tác giả</label>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="">
                                                <div class="form-group bmd-form-group">
                                                    <input disabled name="user_id" value="{{ $post['user']['name'] }}"
                                                           class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="card-footer ml-auto mr-auto">
                                    <button type="submit" class="btn btn-success" style="margin-right: 15px">Lưu bài
                                        viết
                                    </button>
                                    <a href="{{ route('post_list') }}" role="button" class="btn btn-default">Huỷ</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
