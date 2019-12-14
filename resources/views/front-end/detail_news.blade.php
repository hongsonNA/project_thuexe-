@extends('front-end.layouts.app_front-end')
@section('content')
    <div class="container block-area">
        <div class="becrum">
            <div class="bec">
                <a href="/">Home</a>
                <span>/</span>
                <a href="{{ route('news') }}">Tin tức</a>
            </div>
        </div>
        <div class="title-contet">
            <h3 class="title-post">{{ $post->title }}</h3>
        </div>
        <div class="summary">
            {{ $post->summary }}
        </div>
        <div class="content">
            {!! $post->content  !!}
        </div>
        <!--        tien lien quan  -->>
        <div class="topic_cate">
            @foreach($topic as $id_topic)
                <div class="row">
                    <div class="col-sm-5">
                        <div class="topic-iamge">
                            <a href="#">
                                <img class="image_t" src="{{ asset('image_upload/post/'.$id_topic->image_posts) }}"
                                     width="100%" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-7" style="margin-left: -34px;">
                        <div class="title-topic">
                            <h3 class="acticel-title">
                                <a href="{{ route('detail', $id_topic->id ) }}">{{ $id_topic->title }}</a>
                            </h3>
                            <p class="acticel-image">
                                {{ $id_topic->summary }}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="area-comment">
            <div>
                <form method="post" action="{{ route('post_comment', $post->id) }}" id="comment">
                    @csrf
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Để lại ý kiến của bạn</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="content" id="content"
                                  rows="4"></textarea>
                        <span id="alert"></span>
                    </div>
                    @if(isset(Auth::user()->email))
                        <div class="request-login">
                            <p>
                                Bạn đang bình luận bài viết:{{ $post->title }}
                            </p>
                        </div>
                        <button type="submit" id="chekc-comment" class="btn btn-info">Bình luận</button>
                    @else
                        <div class="request-login">
                            <p>
                                Hãy <a class="account-login" data-toggle="modal" data-target="#login">Đăng
                                    nhập</a> / <a class="account-register" data-toggle="modal" data-target="#register">Đăng
                                    ký</a> để gủi bình luận.
                            </p>
                        </div>
                    @endif
                </form>
            </div>
            <!--end -->
            <div class="show-comment">
                <ul class="nav comments">
                    @foreach($comments as $comment_id)
                        @if($post->id == $comment_id['post_id'])
                            <li class="comment_list">
                                <div class="comment-meta image-comment">
                                    <img class="avatar"
                                         src="{{ asset('image_upload/post/image_post_1574214572.jpeg') }}"
                                         width="50" alt="">
                                    <p class="author-name"><span class="">{{ $comment_id['user']['name'] }}</span></p>
                                    <p class="comment-content">
                                        {{ $comment_id['content'] }}
                                    </p>
                                </div>
                            </li>
                        @endif
                    @endforeach
                </ul>
            </div>
        </div>
        <!-- Modal-report -->

        @if(session()->has('message'))
            <div id="suces" class="alert alert-success">
                {{ session()->get('message') }}
            </div>
    @endif
    <!-- end -->
    </div>
    <!-- end -->
@endsection

