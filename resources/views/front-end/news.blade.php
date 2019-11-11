@extends('front-end.layouts.app_front-end')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <!-- block start -->
                <div class="block-area">
                    <div class="row">
                        <div class="gird_thumbgap-30 d-none d-md-block">
                            <div class="row">
                                <div class="col-12">
                                    <h2 class="block-title">
                                        <span class="title-angle-shap"> Category :  Lifestyle </span>
                                    </h2>
                                </div><!-- col end -->
                            </div><!-- row end -->
                            <div class="row ts-gutter-10">
                                @foreach($posts as $key => $id)
                                <div class="col-md-6">
                                    <div class="post-block-style">
                                        <div class="post-thumb">
                                            <a href="#">
                                                <img class="img-fluid" src="{{ asset('image_upload/post/'.$id->image_posts)}}"  alt="">
                                            </a>
                                            <div class="grid-cat">
                                                <a class="post-cat lifestyle" href="#">Lifestyle</a>
                                            </div>
                                        </div>

                                        <div class="post-content">
                                            <h2 class="post-title title-md">
                                                <a href="#">{{ $id->title }}</a>
                                            </h2>
                                            <div class="post-meta mb-7">
                                                <span class="post-author"><i class="fa fa-user"></i> John Doe</span>
                                                <span class="post-date"><i class="fa fa-clock-o"></i> 29 July, 2020</span>
                                            </div>
                                            <p>{{ $id->summary }}</p>
                                        </div><!-- Post content end -->
                                    </div>
                                </div><!-- col end -->
                               @endforeach
                            </div><!-- row end -->
                            <div class="gap-30 d-none d-md-block"></div>

                        </div>
                    </div>
                </div>
                {{ $posts->links() }}
                <!-- End block -->

                <!--Pagination-->
{{--                <div class="clearfix my-4">--}}
{{--                    <nav class="float-left" aria-label="Page navigation example">--}}
{{--                        <!--page number-->--}}
{{--                        <ul class="pagination">--}}
{{--                            <li class="page-item active"><span class="page-link">1</span></li>--}}
{{--                            <li class="page-item"><a class="page-link" href="category2.html">2</a></li>--}}
{{--                            <li class="page-item"><a class="page-link" href="category3.html">3</a></li>--}}
{{--                            <li class="page-item"><a class="page-link" href="category2.html">4</a></li>--}}
{{--                            <li class="page-item"><span class="page-link disabled">....</span></li>--}}
{{--                            <li class="page-item"><a class="page-link" href="category3.html">12</a></li>--}}
{{--                            <li class="page-item">--}}
{{--                                <a class="page-link" href="category2.html" aria-label="Next" title="Next page">--}}
{{--                                    <span aria-hidden="true"><i class="fas fa-chevron-right"></i></span>--}}
{{--                                    <span class="sr-only">Next</span>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
                        <!--end page number-->
{{--                    </nav>--}}
{{--                    <span class="py-2 float-right">Page 1 of 12</span>--}}
{{--                </div>--}}
                <!--end pagination-->
            </div>
            <div class="col-md-4">
                <!-- area-qc -->
                <div class="area-qc mt-3">
                    <a href="javascript:;"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSzYJmLoseZjN6cquRIDWcZShZ7C8T8wsGV1Zrb-KWVfsqNxK1_" alt=""></a>
                </div>
                <div>
                <aside class="widget">
                    <!--Block title-->
                    <div class="block-title-4">
                        <h4 class="h5 title-arrow">
                            <span>Latest news</span>
                        </h4>
                    </div>
                    <!--post big start-->
                    <div class="big-post">
                        <article class="card card-full hover-a mb-4">
                            <!--thumbnail-->
                            <div class="ratio_360-202 image-wrapper">
                                <a href="#">
                                    <img src="{{ asset('front-end-css/images/car-fleet2.jpg')}}" alt="">
                                </a>
                            </div>
                            <div class="card-body">
                                <!--title-->
                                <h2 class="card-title h1-sm h3-md">
                                    <a href="#">MotoGP: Which team needs what in 2019?</a>
                                </h2>
                                <!-- author & date -->
                                <div class="card-text mb-2 text-muted small">
                        <span class="d-none d-sm-inline mr-1">
                          <a class="font-weight-bold" href="#">John Doe</a>
                        </span>
                                    <time datetime="2019-10-22">Oct 22, 2019</time>
                                </div>
                                <!--description-->
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                        </article>
                    </div>
                    <!--end post big-->
                    <!--post small start-->
                    <div class="small-post">
                        <!--post list-->
                        <article class="card card-full hover-a mb-4">
                            <div class="row">
                                <!--thumbnail-->
                                <div class="col-3 col-md-4 pr-2 pr-md-0">
                                    <div class="ratio_110-77 image-wrapper">
                                        <a href="#">
                                            <img src="{{ asset('front-end-css/images/car-fleet2.jpg')}}" alt="">
                                        </a>
                                    </div>
                                </div>
                                <!-- title & date -->
                                <div class="col-9 col-md-8">
                                    <div class="card-body pt-0">
                                        <h3 class="card-title h6 h5-sm h6-md">
                                            <a href="#">Take the kids to Windermere Jetty, Lake District</a>
                                        </h3>
                                        <div class="card-text small text-muted">
                                            <time datetime="2019-10-16">Oct 16, 2019</time>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <!--post list-->
                        <article class="card card-full hover-a mb-4">
                            <div class="row">
                                <!--thumbnail-->
                                <div class="col-3 col-md-4 pr-2 pr-md-0">
                                    <div class="ratio_110-77 image-wrapper">
                                        <a href="#">
                                            <img src="{{ asset('front-end-css/images/car-fleet2.jpg')}}" alt="">
                                        </a>
                                    </div>
                                </div>
                                <!-- title & date -->
                                <div class="col-9 col-md-8">
                                    <div class="card-body pt-0">
                                        <h3 class="h6 h4-sm h6-md">
                                            <a href="#">Wave reviews: Under – Norway's new underwater restaurant</a>
                                        </h3>
                                        <div class="small text-muted">
                                            <time datetime="2019-10-15">Oct 15, 2019</time>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <!--post list-->
                        <article class="card card-full hover-a mb-4">
                            <div class="row">
                                <!--thumbnail-->
                                <div class="col-3 col-md-4 pr-2 pr-md-0">
                                    <div class="ratio_110-77 image-wrapper">
                                        <a href="#">
                                            <img src="{{ asset('front-end-css/images/car-fleet2.jpg')}}" alt="">
                                        </a>
                                    </div>
                                </div>
                                <!-- title & date -->
                                <div class="col-9 col-md-8">
                                    <div class="card-body pt-0">
                                        <h3 class="h6 h4-sm h6-md">
                                            <a href="#">This U.S. Airline Has More Legroom Than Any Other</a>
                                        </h3>
                                        <div class="small text-muted">
                                            <time datetime="2019-10-14">Oct 14, 2019</time>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <!--End post list-->
                    </div>
                    <!--end post small-->
                    <div class="gap-0"></div>
                </aside>
                </div>

            </div>
        </div>
    </div>

    @endsection
