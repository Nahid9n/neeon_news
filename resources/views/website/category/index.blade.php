@extends('website.master')
@section('title','Category Page')
@section('body')
    <!-- Start inner page Banner -->
    <div class="banner inner-banner">
        <div class="container">
            <nav class="rt-breadcrumb-wrap" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="">
                            <i class="fas fa-home"></i>
                            Home
                        </a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        category
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- End inner page Banner -->

    <!-- start rt-sidebar-section-layout-1 -->
    <section class="rt-sidebar-section-layout-1">
        <div class="container">
            <div class="row gutter-40 sticky-coloum-wrap">
                <div class="col-xl-9 sticky-coloum-item">
                    <div class="rt-left-sidebar-sapcer-5">

                        <div class="post-list-style-4">
                            @foreach($blogs as $blog)
                            <div class="post-item wow fadeInUp" data-wow-delay="100ms" data-wow-duration="800ms">
                                <div class="rt-post post-md style-9 grid-meta">
                                    <div class="post-img">
                                        <a href="{{route('blog.details',['id'=>$blog->id])}}">
                                            <img src="{{asset($blog->image)}}" alt="post" width="696" height="491">
                                        </a>
{{--                                        <a href="http://www.youtube.com/watch?v=1iIZeIy7TqM"--}}
{{--                                           class="play-btn play-btn-white_lg rt-play-over">--}}
{{--                                            <i class="fas fa-play"></i>--}}
{{--                                        </a>--}}
                                    </div>
                                    <div class="post-content">
                                        <a href="{{route('category',['id'=>$blog->category_id])}}" class="rt-cat-primary">{{$blog->category->name}}</a>
                                        <h3 class="post-title">
                                            <a href="{{route('blog.details',['id'=>$blog->id])}}">
                                                {{$blog->name}}
                                            </a>
                                        </h3>
                                        <p>
                                            {{$blog->short_description}}
                                        </p>
                                        <div class="post-meta">
                                            <ul>
                                                <li>
                                                <span class="rt-meta">
                                                   by <a href="" class="name">{{$blog->author}}</a>
                                                </span>
                                                </li>
                                                <li>
                                                <span class="rt-meta">
                                                   <i class="far fa-calendar-alt icon"></i>
                                                   {{$blog->created_at}}
                                                </span>
                                                </li>
                                                <li>
                                                <span class="rt-meta">
                                                   <i class="fas fa-share-alt icon"></i>
                                                   3,250
                                                </span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="btn-wrap mt--25">
                                            <a href="{{route('blog.details',['id'=>$blog->id])}}" class="rt-read-more qodef-button-animation-out">
                                                Read More
                                                <svg width="34px" height="16px" viewBox="0 0 34.53 16"
                                                     xml:space="preserve">
                                                <rect class="qodef-button-line" y="7.6" width="34" height=".4">
                                                </rect>
                                                    <g class="qodef-button-cap-fake">
                                                        <path class="qodef-button-cap"
                                                              d="M25.83.7l.7-.7,8,8-.7.71Zm0,14.6,8-8,.71.71-8,8Z"></path>
                                                    </g>
                                             </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end post-item -->
                            @endforeach
                            @foreach($sponsoredBlogs as $blog)
                            <div class="post-item wow fadeInUp" data-wow-delay="100ms" data-wow-duration="800ms">
                                <div class="rt-post post-md style-9 grid-meta">
                                    <div class="post-img">
                                        <a href="{{route('sponsored.details',['id'=>$blog->id])}}">
                                            <img src="{{asset($blog->image)}}" alt="post" width="696" height="491">
                                        </a>
{{--                                        <a href="http://www.youtube.com/watch?v=1iIZeIy7TqM"--}}
{{--                                           class="play-btn play-btn-white_lg rt-play-over">--}}
{{--                                            <i class="fas fa-play"></i>--}}
{{--                                        </a>--}}
                                    </div>
                                    <div class="post-content">
                                        <a href="{{route('category',['id'=>$blog->category_id])}}" class="rt-cat-primary">{{$blog->category->name}}</a>
                                        <a href="{{route('sponsored-blogs')}}" class="rt-cat-primary">Sponsored Blog</a>
                                        <h3 class="post-title">
                                            <a href="{{route('sponsored.details',['id'=>$blog->id])}}">
                                                {{$blog->name}}
                                            </a>
                                        </h3>
                                        <p>
                                            {{$blog->short_description}}
                                        </p>
                                        <div class="post-meta">
                                            <ul>
                                                <li>
                                                <span class="rt-meta">
                                                   by <a href="" class="name">{{$blog->author}}</a>
                                                </span>
                                                </li>
                                                <li>
                                                <span class="rt-meta">
                                                   <i class="far fa-calendar-alt icon"></i>
                                                   {{$blog->created_at}}
                                                </span>
                                                </li>
                                                <li>
                                                <span class="rt-meta">
                                                   <i class="fas fa-share-alt icon"></i>
                                                   3,250
                                                </span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="btn-wrap mt--25">
                                            <a href="{{route('sponsored.details',['id'=>$blog->id])}}" class="rt-read-more qodef-button-animation-out">
                                                Read More
                                                <svg width="34px" height="16px" viewBox="0 0 34.53 16"
                                                     xml:space="preserve">
                                                <rect class="qodef-button-line" y="7.6" width="34" height=".4">
                                                </rect>
                                                    <g class="qodef-button-cap-fake">
                                                        <path class="qodef-button-cap"
                                                              d="M25.83.7l.7-.7,8,8-.7.71Zm0,14.6,8-8,.71.71-8,8Z"></path>
                                                    </g>
                                             </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end post-item -->
                            @endforeach

                        </div>
                        <!-- end post-list-style-4 -->

                        <nav class="rt-pagination-area gap-top-90">
                            <ul class="pagination rt-pagination justify-content-center">
                                <li class="page-item prev">
                                    <a class="page-link" href="#"><i class="fas fa-angle-double-left"></i></a>
                                </li>
                                <li class="page-item active" aria-current="page">
                                    <span class="page-link">1</span>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item next">
                                    <a class="page-link" href="#"><i class="fas fa-angle-double-right"></i></a>
                                </li>
                            </ul>
                        </nav>
                        <!-- end rt-pagination-area -->

                    </div>
                    <!-- end rt-left-sidebar-sapcer-5 -->
                </div>
                <!-- end col-->

                <div class="col-xl-3 col-lg-8 mx-auto sticky-coloum-item">
                    <div class="rt-sidebar sticky-wrap">

                        <div class="sidebar-wrap mb--40">
                            <div class="search-box">
                                <form action="#" class="form search-form-box">
                                    <div class="form-group">
                                        <input type="text" name="sarch" id="search" placeholder="Search..."
                                               class="form-control rt-search-control">
                                        <button type="submit" class="search-submit">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- end sidebar wrap -->

                        <div class="sidebar-wrap mb--40">
                            <h2 class="rt-section-heading style-2 mb--30">
                                <span class="rt-section-text">Popular News </span>
                                <span class="rt-section-dot"></span>
                                <span class="rt-section-line"></span>
                            </h2>
                            <div class="row rt-gutter-10">

                                @foreach($blogPopulars as $blog)
                                <div class="col-6">
                                    <div class="rt-post-grid post-grid-md grid-meta">
                                        <div class="post-img">
                                            <a href="{{route('blog.details',['id'=>$blog->id])}}">
                                                <img src="{{asset($blog->image)}}" alt="post" width="343" height="250">
                                            </a>
                                        </div>
                                        <div class="post-content">
                                            <a href="{{route('category',['id'=>$blog->category_id])}}" class="rt-post-cat-normal">{{$blog->category->name}}</a>
                                            <h4 class="post-title">
                                                <a href="{{route('blog.details',['id'=>$blog->id])}}">
                                                    {{$blog->name}}
                                                </a>
                                            </h4>
                                            <span class="rt-meta">
                                             <i class="far fa-calendar-alt icon"></i>
                                             {{$blog->created_at}}
                                          </span>
                                        </div>
                                    </div>
                                </div>
                                <!-- col-6 -->
                                @endforeach
                            </div>
                            <!-- end row -->

                        </div>
                        <!-- end slidebar wrap  -->

                        <div class="sidebar-wrap mb--40">
                            <div class="ad-banner-img">
                                <a href="#">
                                    <img src="media/gallery/ad-post_5.jpg" alt="ad-banner" width="301" height="270">
                                </a>
                            </div>
                        </div>
                        <!-- end slidebar wrap  -->

                        <div class="sidebar-wrap mb--40">
                            <h2 class="rt-section-heading style-2 mb--30">
                                <span class="rt-section-text">Hot Categories </span>
                                <span class="rt-section-dot"></span>
                                <span class="rt-section-line"></span>
                            </h2>
                            <ul class="rt-categories">
                                <li>
                                    <a href="gaming.html" data-bg-image="media/gallery/cat_1.jpg">
                                        <span class="cat-name">Sports</span>
                                        <span class="count">59</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="life-style.html" data-bg-image="media/gallery/cat_2.jpg">
                                        <span class="cat-name">World</span>
                                        <span class="count">12</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="technology.html" data-bg-image="media/gallery/cat_3.jpg">
                                        <span class="cat-name">Technology</span>
                                        <span class="count">59</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="life-style.html" data-bg-image="media/gallery/cat_4.jpg">
                                        <span class="cat-name">Food</span>
                                        <span class="count">12</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="life-style.html" data-bg-image="media/gallery/cat_5.jpg">
                                        <span class="cat-name">Travel</span>
                                        <span class="count">12</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- end slidebar wrap  -->

                        <div class="sidebar-wrap mb--40">
                            <div class="subscribe-box-style-1" data-bg-image="media/elements/element_5.png">
                                <div class="subscribe-content">
                                    <h3 class="title">
                                        Subscribe To Our Newsletter
                                    </h3>
                                    <p>
                                        No spam, notifications only about
                                        new products, updates.
                                    </p>
                                    <form action="#" class="rt-contact-form subscribe-form rt-form">
                                        <div class="rt-form-group">
                                            <input type="email" class="form-control rt-form-control"
                                                   placeholder="E-mail *" name="email" id="email_1"
                                                   data-error="Email field is required" required>
                                        </div>
                                        <button type="submit" class="rt-submit-btn">Subscribe Now</button>
                                        <div class="form-response"></div>
                                    </form>
                                    <div class="small-text">Don’t worry, we don’t spam</div>
                                </div>
                            </div>
                        </div>
                        <!-- end sidebar wrap -->

                        <div class="sidebar-wrap">
                            <h2 class="rt-section-heading style-2 mb--30">
                                <span class="rt-section-text">Tags </span>
                                <span class="rt-section-dot"></span>
                                <span class="rt-section-line"></span>
                            </h2>
                            <div class="tag-list">
                                <a href="#" class="tag-link">beautiful</a>
                                <a href="#" class="tag-link">travel</a>
                                <a href="#" class="tag-link">technology</a>
                                <a href="#" class="tag-link">chemical</a>
                                <a href="#" class="tag-link">chemical</a>
                                <a href="#" class="tag-link">politics</a>
                                <a href="#" class="tag-link">business</a>
                                <a href="#" class="tag-link">makeup</a>
                                <a href="#" class="tag-link">social</a>
                            </div>
                        </div>
                        <!-- end sidebar wrap -->

                    </div>
                    <!-- end rt-sidebar -->
                </div>
                <!-- end col -->

            </div>
            <!-- end row  -->
        </div>
        <!-- end container -->
    </section>
    <!-- end rt-sidebar-section-layout-1 -->

@endsection
