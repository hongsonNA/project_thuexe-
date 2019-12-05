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
                        <a href="#" >
                            <img class="image_t" src="{{ asset('image_upload/post/'.$id_topic->image_posts) }}" width="100%" alt="">
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
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="content" id="content" rows="4"></textarea>
                    <span id="alert"></span>
                </div>
                @if(isset(Auth::user()->email))
                    <div class="request-login">
                        <p>
                            bình luận bài viết:{{ $post->title }}
{{--                            (Lưu ý: bình luận của bạn sẽ được quản trị xác thực trước khi hiện thị )--}}
                        </p>
                    </div>
                @else
                    <div class="request-login">
                        <p>
                            Hãy <a href="#" class="account-login" data-toggle="modal" data-target="#myModal">đăng nhập</a> để gủi bình luận (Lưu ý: bình luận của bạn sẽ được quản trị xác thực trước khi hiện thị )
                        </p>
                    </div>
                @endif
                <button type="submit" id="chekc-comment" class="btn btn-info">Bình luận</button>
            </form>
            </div>
            <!--end -->
            <div class="show-comment">
                <ul class="nav comments">
                    @foreach($comment as $key => $comment_id)
                    <li class="comment_list">
                        <div class="comment-meta image-comment">
                            <img class="avatar" src="{{ asset('image_upload/post/image_post_1574214572.jpeg') }}" width="50" alt="">
                            <p class="author-name"><span class="">Hong son</span></p>
                            <p class="comment-content">
                                {{ $comment_id->content }}
                            </p>
                            <p class="comment-actions">
                                <a data-id="{{ $comment_id->id }}" id="reply" href="javascript:;">Tra loi</a>
                                <span></span>
{{--                                @if($comment_id->user_id != Auth::user()->id )--}}
                                <a id="report" href="javascript:;">Report</a>
{{--                                @endif--}}
                            </p>
                        </div>
                        <div class="show-reply">
                            <form action="">
                                <textarea class="form-control" id="" name="" id="content" rows="3" placeholder="Bạn có đồng ý với Hong Son"></textarea>
                                <br>
                                <button type="submit"  class="btn btn-info">Gui binh luan</button>
                                <a id="close" class="btn">Dong</a>
                            </form>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>

        </div>
        <!-- Modal-report -->
        <div class="modal fade" id="modal-report" role="dialog">
            <div class="modal-dialog subcribe" style="top: 20%;width: 355px;border-radius: 5px;">
                <!-- Modal content-->
                <h3>Báo cáo hành động tiêu cực</h3>
                <div class="form-register">
                    <div class="modal-register" id="modal-register">
                        <form class="reg-frm" method="POST" action="{{ route('report_comment', $comment_id->id) }}">
                            @csrf
{{--                            <input type="hidden" name="report_uID" value="{{ $comment_id->id }}">--}}
                            <input type="hidden" name="status" value="2">
                            <div class="field-holder">
                                <span class="fas fa-report"></span>
                                <input type="text" name="report_content" placeholder="Noi dung bao cao" class="">
                            </div>
                            <button type="submit" class="btn btn-danger">Bao cao sai pham</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @if(session()->has('message'))
            <div id="suces" class="alert alert-success">
                {{ session()->get('message') }}
            </div>
    @endif
        <!-- end -->
        </div>
               <!-- end -->

    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.js"></script>--}}
    <script type="text/javascript">
        $(".show-reply").hide();
        $('#reply').click(function () {
            $(".show-reply").show();
        });
        $('#close').click(function () {
            $(".show-reply").hide();

        });
        $(document).ready(function(){
            $("#myBtn").click(function(){
                $("#myModal").hide();
                $("#myModall").modal();
            });
        });
        $('#suces').fadeOut(5000);


    </script>
    <script>
        $(document).ready(function (event) {
            $('#report').click(function () {
               $('#modal-report').modal();
            });
        });
    </script>
    @endsection

