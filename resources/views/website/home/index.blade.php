@extends('website.master')
@section('title','Home Page')
@section('body')
    <!-- start feature-section-style-1  -->
    <section class="rt-feature-section feature-section-style-1 overflow-hidden"
             data-bg-image="{{asset('/')}}website/media/elements/element_1.png">
        <div class="container">
            <div class="row gutter-24">
                @foreach($categories4 as $category)
                <div class="col-xl-3 col-md-6 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="800ms">
                    <div class="rt-post post-sm style-1">
                        <div class="post-img">
                            <a href="{{route('category',['id'=>$category->id])}}">
                                <img src="{{asset($category->image)}}" alt="post" width="100" height="100">
                            </a>
                        </div>
                        <div class="ms-4 post-content">
                            <a href="{{route('category',['id'=>$category->id])}}" class="rt-post-cat-normal fw-bold text-dark">{{$category->name}}</a>
                            <h3 class="post-title">
                                <a href="{{route('category',['id'=>$category->id])}}"></a>
                            </h3>
                            <span class="rt-meta text-dark">
                                 <i class="far fa-calendar-alt icon"></i>
                                 {{$category->created_at}}
                              </span>
                        </div>
                    </div>
                </div>
                <!-- end col -->
                @endforeach
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end feature-section-style-1  -->

    <!-- start main post section style 1 -->
    <section class="rt-main-post-section main-post-section-style-1 section-padding">
        <div class="container">
            <div class="row gutter-24">
                @foreach($blogs as $blog)
                <div class="col-xl-7 col-lg-6 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="800ms">
                    <div class="rt-post-overlay rt-post-overlay-xl layout-1">
                        <div class="post-img">
                            <a href="{{route('blog.details',['id'=>$blog->id])}}" class="img-link">
                                <img src="{{asset($blog->image)}}" alt="post-xl_1" width="900" height="600">
                            </a>
                        </div>
                        <div class="post-content">
                            <a href="{{route('category',['id'=>$blog->category_id])}}" class="fashion">{{$blog->category->name}}</a>
                            <h3 class="post-title bold-underline">
                                <a href="{{route('blog.details',['id'=>$blog->id])}}">
                                    {{$blog->name}}
                                </a>
                            </h3>
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
                                          <i class="far fa-comments icon"></i>
                                          <a href="#"> 3,250</a>
                                       </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end col -->
                @endforeach

                <div class="col-xl-5 col-lg-6">
                    <div class="row gutter-24">
                        @foreach($blog3 as $blog)
                        <div class="col-12 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="800ms">
                            <div class="rt-post post-md style-10">
                                <div class="post-img">
                                    <a href="{{route('blog.details',['id'=>$blog->id])}}">
                                        <img src="{{asset($blog->image)}}" alt="post" width="696" height="491">
                                    </a>
                                </div>
                                <div class="post-content">
                                    <a href="{{route('category',['id'=>$blog->category_id])}}" class="food">{{$blog->category->name}}</a>
                                    <h3 class="post-title">
                                        <a href="{{route('blog.details',['id'=>$blog->id])}}">
                                            {{$blog->name}}
                                        </a>
                                    </h3>
                                    <span class="rt-meta">
                                       <i class="far fa-calendar-alt icon"></i>
                                       {{$blog->created_at}}
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                        @endforeach
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end main post section style 1 -->

    <!-- start rt ad banner -->
    <div class="rt-ad-banner rt-ad-banner-style-1 section-padding pt-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="ad-banner-img">
                        <a href="#">
                            <img src="{{asset('/')}}website/media/gallery/ad-banner_1.jpg" alt="ad-banner" width="1400" height="181">
                        </a>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end rt ad banner -->

    <!-- start top stories style 1 -->
    <section class="top-stories-style-1 section-padding motion-effects-wrap">
        <ul class="element-list d-none d-xl-block">
            <li class="motion-effects1"><img class="wow fadeInLeft" data-wow-delay="200ms"
                                             data-wow-duration="800ms" src="{{asset('/')}}website/media/elements/element_2.png" alt="element_1" width="88"
                                             height="58"></li>
            <li><img class="wow fadeInDown" data-wow-delay="400ms" data-wow-duration="800ms"
                     src="{{asset('/')}}website/media/elements/element_3.png" alt="element_2" width="182" height="72"></li>
            <li><img class="wow fadeInRight" data-wow-delay="600ms" data-wow-duration="800ms"
                     src="{{asset('/')}}website/media/elements/element_4.png" alt="element_3" width="199" height="128"></li>
        </ul>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="rt-section-heading">
                        <span class="rt-section-text">Top Stories </span>
                        <span class="rt-section-dot"></span>
                        <span class="rt-section-line"></span>
                    </h2>
                </div>
            </div>
            <div class="row gutter-24">

                @foreach($blogTops as $blog)
                <div class="col-xl-3 col-md-6 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="800ms">
                    <div class="rt-post-grid grid-meta">
                        <div class="post-img">
                            <a href="{{route('blog.details',['id'=>$blog->id])}}">
                                <img src="{{asset($blog->image)}}" alt="post" width="551" height="431">
                            </a>
                        </div>
                        <div class="post-content">
                            <a href="{{route('category',['id'=>$category->id])}}" class="rt-post-cat-normal">{{$blog->category->name}}</a>
                            <h3 class="post-title">
                                <a href="{{route('blog.details',['id'=>$blog->id])}}">
                                    {{$blog->name}}
                                </a>
                            </h3>
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
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end col -->
                @endforeach
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end top stories style 1 -->

    <!-- start what's new section -->
    <section class="whats-new-style-1 section-padding">
        <div class="container">
            <div class="row gutter-30 sticky-coloum-wrap">

                <div class="col-xl-9 sticky-coloum-item">
                    <div class="featured-area-style-1 overflow-hidden">

                        <div class="wrap mb--60">
                            <div class="featured-tab-title">
                                <h2 class="rt-section-heading">
                                    <span class="rt-section-text">What’s New </span>
                                    <span class="rt-section-dot"></span>
                                    <span class="rt-section-line"></span>
                                </h2>
                            </div>
                            <!-- end featured-tab-title -->

                            <div class="tab-content" id="myTabContent">

                                <div class="tab-pane tab-item animated fadeInUp show active" id="menu-1"
                                     role="tabpanel" aria-labelledby="menu-1-tab">
                                    <div class="row gutter-24">
                                        @foreach($blog1 as $blog)
                                        <div class="col-lg-7">
                                            <div class="rt-post-overlay rt-post-overlay-lg">
                                                <div class="post-img">
                                                    <a href="{{route('blog.details',['id'=>$blog->id])}}" class="img-link">
                                                        <img src="{{asset($blog->image)}}" alt="post-xl-2" width="900"
                                                             height="600">
                                                    </a>
                                                </div>
                                                <div class="post-content">
                                                    <a href="{{route('category',['id'=>$blog->category_id])}}" class="world">{{$blog->category->name}}</a>
                                                    <h3 class="post-title bold-underline">
                                                        <a href="{{route('blog.details',['id'=>$blog->id])}}">
                                                            {{$blog->name}}
                                                        </a>
                                                    </h3>

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
                                                            <i class="far fa-comments icon"></i>
                                                            <a href="#"> 3,250</a>
                                                         </span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        <div class="col-lg-5">
                                            <div class="row gutter-24">
                                                @foreach($blog4 as $blog)
                                                <div class="col-12">
                                                    <div class="rt-post post-sm style-2">
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
                                                        <div class="post-img">
                                                            <a href="{{route('blog.details',['id'=>$blog->id])}}">
                                                                <img src="{{asset($blog->image)}}" alt="post" width="143" height="110">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end ./tab item -->

                            </div> <!-- end /.tab-content -->
                        </div>

                        <div class="wrap">
                            @foreach($categories1 as $category)
                            <h2 class="rt-section-heading">
                                <span class="rt-section-text">{{$category->name}}</span>
                                <span class="rt-section-dot"></span>
                                <span class="rt-section-line"></span>
                            </h2>
                            @endforeach
                            <div class="row gutter-10">
                                @foreach($category->blog as $blog)
                                <div class="col-lg-6 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="800ms">
                                    <div class="rt-post-overlay rt-post-overlay-md">
                                        <div class="post-img">
                                            <a href="{{route('blog.details',['id'=>$blog->id])}}" class="img-link">
                                                <img src="{{asset($blog->image)}}" alt="post-xl_4" width="900" height="600">
                                            </a>
                                        </div>
                                        <div class="post-content">
                                            <h3 class="post-title bold-underline">
                                                <a href="{{route('blog.details',['id'=>$blog->id])}}">
                                                    {{$blog->name}}
                                                </a>
                                            </h3>

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
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->
                                @endforeach
                            </div>
                            <!-- end inner row -->
                        </div>

                    </div>
                    <!-- end featured-area-style-1 -->
                </div>
                <!-- end col -->

                <div class="col-xl-3 col-lg-8 mx-auto sticky-coloum-item">
                    <div class="rt-sidebar sticky-wrap">

                        <div class="sidebar-wrap mb--40">
                            <h2 class="rt-section-heading style-2 mb--30">
                                <span class="rt-section-text">Stay Connected </span>
                                <span class="rt-section-dot"></span>
                                <span class="rt-section-line"></span>
                            </h2>
                            <ul class="social-connection">
                                <li>
                                    <a href="https://www.facebook.com/">
                                        <i class="fab fa-facebook-f facebook"></i>
                                        <span class="text"><span>15,985</span> Fans</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/">
                                        <i class="fab fa-twitter twitter"></i>
                                        <span class="text"><span>20,751</span> Follower</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.youtube.com/">
                                        <i class="fab fa-youtube youtube"></i>
                                        <span class="text"><span>35,999</span> Subscriber</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://cloud.google.com/">
                                        <i class="fas fa-cloud cloud"></i>
                                        <span class="text"><span>35,999</span> Subscriber</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://dribbble.com/">
                                        <i class="fab fa-dribbble dribbble"></i>
                                        <span class="text"><span>35,999</span> Subscriber</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- end slidebar wrap  -->

                        <div class="sidebar-wrap mb--40">
                            <h2 class="rt-section-heading style-2 mb--30">
                                <span class="rt-section-text">Popular News </span>
                                <span class="rt-section-dot"></span>
                                <span class="rt-section-line"></span>
                            </h2>
                            <div class="post-list">
                            @foreach($blogPopular as $blog)
                                <div class="item">
                                    <div class="rt-post post-sm style-1">
                                        <div class="post-img">
                                            <a href="{{route('blog.details',['id'=>$blog->id])}}">
                                                <img src="{{asset($blog->image)}}" alt="post" width="100" height="100">
                                            </a>
                                        </div>
                                        <div class="ms-4 post-content">
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
                                @endforeach
                            </div>
                        </div>
                        <!-- end slidebar wrap  -->

                        <div class="sidebar-wrap">
                            <div class="post-banner-style-1">
                                <a href="#" class="image-link">&nbsp;</a>
                                <div class="post-content">
                                    <div class="logo">
                                        <a href="index.html">
                                            <img src="{{asset('/')}}website/media/logo/logo-light.svg" alt="logo" width="162" height="52">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="#">
                                            The Most Powerful
                                            <span>News & Magazine WP Theme</span>
                                        </a>
                                    </h3>
                                    <div class="btn-wrap">
                                        <a href="#" class="btn-white-sm">
                                            shop now
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end slidebar wrap  -->

                    </div>
                </div>
                <!-- end col -->

            </div>
            <!-- end row -->
        </div>
        <!--  end container -->
    </section>
    <!-- end what's new section -->

    <!-- start video section style 1 -->
    <section class="video-section-style-1">

        <div class="swiper-container video-slider-style-1">
            <div class="swiper-wrapper">
                @foreach($blog8 as $blog)
                <div class="swiper-slide">
                    <div class="item  video-slide" data-bg-image="{{asset($blog->image)}}">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-xl-7 col-lg-8 col-md-10">
                                    <div class="post-content text-center">
                                        <a href="{{route('category',['id'=>$blog->category_id])}}" class="rt-post-cat-normal text--white fw-bold fs-5">{{$blog->category->name}}</a>
                                        <h2 class="post-title bold-underline">
                                            <a href="{{route('blog.details',['id'=>$blog->id])}}">
                                                {{$blog->name}}
                                            </a>
                                        </h2>
                                        <div class="post-meta">
                                            <ul class="justify-content-center">
                                                <li>
                                                <span class="rt-meta">
                                                   <i class="far fa-calendar-alt icon"></i>
                                                   {{$blog->name}}
                                                </span>
                                                </li>
                                                <li>
                                                <span class="rt-meta">
                                                   <i class="fas fa-user icon"></i>
                                                   {{$blog->author}}
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
                                        <div class="btn-wrap mt--30">
                                            <a href="http://www.youtube.com/watch?v=1iIZeIy7TqM"
                                               class="play-btn play-btn-primary">
                                                <i class="fas fa-play"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end swiper-slide -->
                @endforeach
            </div>
        </div>
        <!-- end video-slider-style-1 -->

        <!-- start video-thumnail-area -->
        <div class="video-thumnail-area">
            <div class="container">
                <div class="swiper-container video-slider-thumbnail-style-1">
                    <div class="swiper-wrapper">
                        @foreach($blog8 as $blog)
                        <div class="swiper-slide">
                            <div class="item video-slide-thumb">
                                <div class="rt-post post-sm post-thumb">
                                    <div class="post-img">
                                        <img src="{{asset($blog->image)}}" alt="post" width="130" height="100">
                                    </div>
                                    <div class="ms-3 post-content">
                                        <a href="{{route('category',['id'=>$blog->category_id])}}" class="rt-post-cat-normal">{{$blog->category->name}}</a>
                                        <h4 class="post-title">
                                          <span class="title-ex">
                                             {{$blog->name}}
                                          </span>
                                        </h4>
                                        <span class="rt-meta">
                                          <i class="far fa-calendar-alt icon"></i>
                                          {{$blog->created_at}}
                                       </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end thumb slide -->
                        @endforeach
                    </div>
                    <!-- swiper-pagination -->
                    <div class="swiper-pagination"></div>
                </div>
                <!-- end video-slider-thumbnail-style-1 -->
            </div>
            <!-- end container -->
        </div>
        <!-- end video-thumnail-area -->

    </section>
    <!-- end video section style 1 -->

    <!-- start news and feature  section -->
    <section class="section-padding">
        <div class="container">

            <div class="row gutter-24 sticky-coloum-wrap">
                <div class="col-xl-9 sticky-coloum-item">
                    <div class="featured-area-style-1 sticky-wrap">

                        <div class="wrap mb--60">
                            <div class="ad-banner-img">
                                <a href="#">
                                    <img src="{{asset('/')}}website/media/gallery/ad-banner_2.jpg" alt="ad-banner" width="960" height="150">
                                </a>
                            </div>
                        </div>
                        <!-- end wrap -->

                        <div class="wrap post-wrap mb--60">
                            <h2 class="rt-section-heading">
                                <span class="rt-section-text">Latest News </span>
                                <span class="rt-section-dot"></span>
                                <span class="rt-section-line"></span>
                            </h2>
                            @foreach($blog5 as $blog)
                            <div class="post-item wow fadeInUp" data-wow-delay="200ms" data-wow-duration="800ms">
                                <div class="rt-post post-md style-2 grid-meta">
                                    <div class="post-img">
                                        <a href="{{route('blog.details',['id'=>$blog->id])}}">
                                            <img src="{{asset($blog->image)}}" alt="post" width="696" height="491">
                                        </a>
                                    </div>
                                    <div class="post-content">
                                        <a href="{{route('category',['id'=>$blog->category_id])}}" class="animal">{{$blog->category->name}}</a>
                                        <h3 class="post-title bold-underline">
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
                                                   by <a href="{{route('blog.details',['id'=>$blog->id])}}" class="name">{{$blog->author}}</a>
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
                                            <a href="{{route('blog.details',['id'=>$blog->id])}}" class="rt-read-more rt-button-animation-out">
                                                Read More
                                                <svg width="34px" height="16px" viewBox="0 0 34.53 16"
                                                     xml:space="preserve">
                                                <rect class="rt-button-line" y="7.6" width="34" height=".4">
                                                </rect>
                                                    <g class="rt-button-cap-fake">
                                                        <path class="rt-button-cap"
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
                        <!-- end wrap -->

                        <div class="wrap ">
                            <div class="ad-banner-img">
                                <a href="#">
                                    <img src="{{asset('/')}}website/media/gallery/ad-banner_3.jpg" alt="ad-banner" width="960" height="150">
                                </a>
                            </div>
                        </div>
                        <!-- end wrap -->

                    </div>
                    <!-- end featured-area-style-1 -->
                </div>
                <!-- end col -->

                <div class="col-xl-3 col-lg-8 mx-auto sticky-coloum-item">
                    <div class="rt-sidebar">

                        <div class="sidebar-wrap mb--40">
                            <div class="subscribe-box-style-1" data-bg-image="{{asset('/')}}website/media/elements/element_5.png">
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

                        <div class="sidebar-wrap mb--40">
                            <h2 class="rt-section-heading style-2 mb--30">
                                <span class="rt-section-text">Hot Categories </span>
                                <span class="rt-section-dot"></span>
                                <span class="rt-section-line"></span>
                            </h2>
                            <ul class="rt-categories">
                                @foreach($categoriesHot as $category)
                                <li>
                                    <a href="{{route('category',['id'=>$category->id])}}" data-bg-image="{{asset($category->image)}}">
                                        <span class="cat-name">{{$category->name}}</span>
                                        <span class="count">{{count($category->blog)}}</span>
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <!-- end slidebar wrap  -->

                        <div class="sidebar-wrap mb--40">
                            <div class="ad-banner-img">
                                <a href="#">
                                    <img src="{{asset('/')}}website/media/gallery/ad-post_1.jpg" alt="ad-banner" width="310" height="250">
                                </a>
                            </div>
                        </div>
                        <!-- end slidebar wrap  -->

                        <div class="sidebar-wrap ">
                            <h2 class="rt-section-heading style-2 mb--30">
                                <span class="rt-section-text">Popular News </span>
                                <span class="rt-section-dot"></span>
                                <span class="rt-section-line"></span>
                            </h2>
                            <div class="row rt-gutter-10">
                                @foreach($blogPopular as $blog)
                                <div class="col-6">
                                    <div class="rt-post-grid post-grid-md grid-meta">
                                        <div class="post-img">
                                            <a href="">
                                                <img src="{{asset($blog->image)}}" alt="post" width="343"
                                                     height="250">
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

                    </div>
                    <!-- end rt-sidebar -->
                </div>
                <!-- end col -->
            </div>

            <div class="row mt--60">
                <div class="col-12">
                    <div class="wrap">
                        <div class="featured-tab-title">
                            <h2 class="rt-section-heading">
                                <span class="rt-section-text">Sponsored Post </span>
                                <span class="rt-section-dot"></span>
                                <span class="rt-section-line"></span>
                            </h2>
                        </div>
                        <!-- end featured-tab-title -->

                        <div class="tab-content" id="myTabContent-2">
                            <div class="tab-pane tab-item animated fadeInUp show active" id="menu-11" role="tabpanel"
                                 aria-labelledby="menu-11-tab">
                                <div class="row gutter-24">

                                    @foreach($sponsoredBlogs as $sponsoredBlog)
                                    <div class="col-xl-4 col-lg-6">
                                        <div class="rt-post-overlay rt-post-overlay-md">
                                            <div class="post-img">
                                                <a href="" class="img-link">
                                                    <img src="{{asset($sponsoredBlog->image)}}" alt="post-xl-3" width="900"
                                                         height="600">
                                                </a>
                                            </div>
                                            <div class="post-content">
                                                <a href="{{route('category',['id'=>$sponsoredBlog->category_id])}}" class="music">{{$sponsoredBlog->category->name}}</a>
                                                <h3 class="post-title">
                                                    <a href="{{route('sponsored.details',['id'=>$sponsoredBlog->id])}}">
                                                        {{$sponsoredBlog->name}}
                                                    </a>
                                                </h3>

                                                <div class="post-meta">
                                                    <ul>
                                                        <li>
                                                      <span class="rt-meta">
                                                         by <a href="{{route('sponsored.details',['id'=>$sponsoredBlog->id])}}" class="name">{{$sponsoredBlog->author}}</a>
                                                      </span>
                                                        </li>
                                                        <li>
                                                      <span class="rt-meta">
                                                         <i class="far fa-calendar-alt icon"></i>
                                                         {{$sponsoredBlog->created_at}}
                                                      </span>
                                                        </li>
                                                    </ul>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                    @endforeach
                                </div>
                                <!-- end innrer row -->

                            </div>
                            <!-- end ./tab item -->

                            <div class="tab-pane tab-item animated fadeInUp  " id="menu-22" role="tabpanel"
                                 aria-labelledby="menu-22-tab">
                                <div class="row gutter-24">

                                    <div class="col-xl-4 col-lg-6">
                                        <div class="rt-post-overlay rt-post-overlay-md">
                                            <div class="post-img">
                                                <a href="single-post1.html" class="img-link">
                                                    <img src="{{asset('/')}}website/media/gallery/post-xl_3.jpg" alt="post-xl-3" width="900"
                                                         height="600">
                                                </a>
                                            </div>
                                            <div class="post-content">
                                                <h3 class="post-title">
                                                    <a href="single-post1.html">
                                                        African ations Are Singing
                                                        To Save Their Wildlife
                                                    </a>
                                                </h3>

                                                <div class="post-meta">
                                                    <ul>
                                                        <li>
                                                      <span class="rt-meta">
                                                         by <a href="author.html" class="name">Willum Skeem</a>
                                                      </span>
                                                        </li>
                                                        <li>
                                                      <span class="rt-meta">
                                                         <i class="far fa-calendar-alt icon"></i>
                                                         DECEMBER 9, 2022
                                                      </span>
                                                        </li>
                                                    </ul>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- end col -->

                                    <div class="col-xl-4 col-lg-6">

                                        <div class="post-grid-md-list gutter-24">
                                            <div class="item">
                                                <div class="rt-post post-md style-8">
                                                    <div class="post-img">
                                                        <a href="single-post1.html">
                                                            <img src="{{asset('/')}}website/media/gallery/post-md_4.jpg" alt="post" width="343"
                                                                 height="250">
                                                        </a>
                                                    </div>
                                                    <div class="post-content">
                                                        <a href="technology.html" class="rt-post-cat-normal">Technology</a>
                                                        <h4 class="post-title">
                                                            <a href="single-post1.html">
                                                                After Moon They Land
                                                                CloseSpace Really?
                                                            </a>
                                                        </h4>
                                                        <span class="rt-meta">
                                                      <i class="far fa-calendar-alt icon"></i>
                                                      DECEMBER 9, 2022
                                                   </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end rt-post post-md item -->

                                            <div class="item">
                                                <div class="rt-post post-md style-8">
                                                    <div class="post-img">
                                                        <a href="single-post1.html">
                                                            <img src="{{asset('/')}}website/media/gallery/post-grid-md_7.jpg" alt="post" width="343"
                                                                 height="250">
                                                        </a>
                                                    </div>
                                                    <div class="post-content">
                                                        <a href="life-style.html" class="rt-post-cat-normal">Travel</a>
                                                        <h4 class="post-title">
                                                            <a href="single-post1.html">
                                                                After Moon They Land
                                                                CloseSpace Really?
                                                            </a>
                                                        </h4>
                                                        <span class="rt-meta">
                                                      <i class="far fa-calendar-alt icon"></i>
                                                      DECEMBER 9, 2022
                                                   </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end rt-post post-md item -->

                                            <div class="item">
                                                <div class="rt-post post-md style-8">
                                                    <div class="post-img">
                                                        <a href="single-post1.html">
                                                            <img src="{{asset('/')}}website/media/gallery/post-grid-md_8.jpg" alt="post" width="343"
                                                                 height="250">
                                                        </a>
                                                    </div>
                                                    <div class="post-content">
                                                        <a href="life-style.html" class="rt-post-cat-normal">Food</a>
                                                        <h4 class="post-title">
                                                            <a href="single-post1.html">
                                                                After Moon They Land
                                                                CloseSpace Really?
                                                            </a>
                                                        </h4>
                                                        <span class="rt-meta">
                                                      <i class="far fa-calendar-alt icon"></i>
                                                      DECEMBER 9, 2022
                                                   </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end rt-post post-md item -->

                                        </div>
                                        <!-- end post grid md list -->

                                    </div>
                                    <!-- end col -->

                                    <div class="col-xl-4 col-lg-6">

                                        <div class="post-grid-md-list gutter-24">
                                            <div class="item">
                                                <div class="rt-post post-md style-8">
                                                    <div class="post-img">
                                                        <a href="single-post1.html">
                                                            <img src="{{asset('/')}}website/media/gallery/post-grid-md_9.jpg" alt="post" width="343"
                                                                 height="250">
                                                        </a>
                                                    </div>
                                                    <div class="post-content">
                                                        <a href="life-style.html" class="rt-post-cat-normal">Travel</a>
                                                        <h4 class="post-title">
                                                            <a href="single-post1.html">
                                                                After Moon They Land
                                                                CloseSpace Really?
                                                            </a>
                                                        </h4>
                                                        <span class="rt-meta">
                                                      <i class="far fa-calendar-alt icon"></i>
                                                      DECEMBER 9, 2022
                                                   </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end rt-post post-md item -->

                                            <div class="item">
                                                <div class="rt-post post-md style-8">
                                                    <div class="post-img">
                                                        <a href="single-post1.html">
                                                            <img src="{{asset('/')}}website/media/gallery/post-grid-md_10.jpg" alt="post"
                                                                 width="343" height="250">
                                                        </a>
                                                    </div>
                                                    <div class="post-content">
                                                        <a href="technology.html" class="rt-post-cat-normal">Technology</a>
                                                        <h4 class="post-title">
                                                            <a href="single-post1.html">
                                                                After Moon They Land
                                                                CloseSpace Really?
                                                            </a>
                                                        </h4>
                                                        <span class="rt-meta">
                                                      <i class="far fa-calendar-alt icon"></i>
                                                      DECEMBER 9, 2022
                                                   </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end rt-post post-md item -->

                                            <div class="item">
                                                <div class="rt-post post-md style-8">
                                                    <div class="post-img">
                                                        <a href="single-post1.html">
                                                            <img src="{{asset('/')}}website/media/gallery/post-grid-md_11.jpg" alt="post"
                                                                 width="343" height="250">
                                                        </a>
                                                    </div>
                                                    <div class="post-content">
                                                        <a href="life-style.html" class="rt-post-cat-normal">World</a>
                                                        <h4 class="post-title">
                                                            <a href="single-post1.html">
                                                                After Moon They Land
                                                                CloseSpace Really?
                                                            </a>
                                                        </h4>
                                                        <span class="rt-meta">
                                                      <i class="far fa-calendar-alt icon"></i>
                                                      DECEMBER 9, 2022
                                                   </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end rt-post post-md item -->

                                        </div>
                                        <!-- end post grid md list -->

                                    </div>
                                    <!-- end col -->

                                </div>
                                <!-- end innrer row -->
                            </div>
                            <!-- end ./tab item -->

                            <div class="tab-pane tab-item animated fadeInUp  " id="menu-33" role="tabpanel"
                                 aria-labelledby="menu-33-tab">
                                <div class="row gutter-24">

                                    <div class="col-xl-4 col-lg-6">
                                        <div class="rt-post-overlay rt-post-overlay-md">
                                            <div class="post-img">
                                                <a href="single-post1.html" class="img-link">
                                                    <img src="{{asset('/')}}website/media/gallery/post-xl_3.jpg" alt="post-xl-3" width="900"
                                                         height="600">
                                                </a>
                                            </div>
                                            <div class="post-content">
                                                <a href="life-style.html" class="music">Music</a>
                                                <h3 class="post-title">
                                                    <a href="single-post1.html">
                                                        African ations Are Singing
                                                        To Save Their Wildlife
                                                    </a>
                                                </h3>

                                                <div class="post-meta">
                                                    <ul>
                                                        <li>
                                                      <span class="rt-meta">
                                                         by <a href="author.html" class="name">Willum Skeem</a>
                                                      </span>
                                                        </li>
                                                        <li>
                                                      <span class="rt-meta">
                                                         <i class="far fa-calendar-alt icon"></i>
                                                         DECEMBER 9, 2022
                                                      </span>
                                                        </li>
                                                    </ul>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- end col -->

                                    <div class="col-xl-4 col-lg-6">

                                        <div class="post-grid-md-list gutter-24">
                                            <div class="item">
                                                <div class="rt-post post-md style-8">
                                                    <div class="post-img">
                                                        <a href="single-post1.html">
                                                            <img src="{{asset('/')}}website/media/gallery/post-md_4.jpg" alt="post" width="343"
                                                                 height="250">
                                                        </a>
                                                    </div>
                                                    <div class="post-content">

                                                        <a href="technology.html" class="rt-post-cat-normal">Technology</a>
                                                        <h4 class="post-title">
                                                            <a href="single-post1.html">
                                                                After Moon They Land
                                                                CloseSpace Really?
                                                            </a>
                                                        </h4>
                                                        <span class="rt-meta">
                                                      <i class="far fa-calendar-alt icon"></i>
                                                      DECEMBER 9, 2022
                                                   </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end rt-post post-md item -->

                                            <div class="item">
                                                <div class="rt-post post-md style-8">
                                                    <div class="post-img">
                                                        <a href="single-post1.html">
                                                            <img src="{{asset('/')}}website/media/gallery/post-grid-md_7.jpg" alt="post" width="343"
                                                                 height="250">
                                                        </a>
                                                    </div>
                                                    <div class="post-content">
                                                        <a href="life-style.html" class="rt-post-cat-normal">Travel</a>
                                                        <h4 class="post-title">
                                                            <a href="single-post1.html">
                                                                After Moon They Land
                                                                CloseSpace Really?
                                                            </a>
                                                        </h4>
                                                        <span class="rt-meta">
                                                      <i class="far fa-calendar-alt icon"></i>
                                                      DECEMBER 9, 2022
                                                   </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end rt-post post-md item -->

                                            <div class="item">
                                                <div class="rt-post post-md style-8">
                                                    <div class="post-img">
                                                        <a href="single-post1.html">
                                                            <img src="{{asset('/')}}website/media/gallery/post-grid-md_8.jpg" alt="post" width="343"
                                                                 height="250">
                                                        </a>
                                                    </div>
                                                    <div class="post-content">
                                                        <a href="life-style.html" class="rt-post-cat-normal">Food</a>
                                                        <h4 class="post-title">
                                                            <a href="single-post1.html">
                                                                After Moon They Land
                                                                CloseSpace Really?
                                                            </a>
                                                        </h4>
                                                        <span class="rt-meta">
                                                      <i class="far fa-calendar-alt icon"></i>
                                                      DECEMBER 9, 2022
                                                   </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end rt-post post-md item -->

                                        </div>
                                        <!-- end post grid md list -->

                                    </div>
                                    <!-- end col -->

                                    <div class="col-xl-4 col-lg-6">

                                        <div class="post-grid-md-list gutter-24">
                                            <div class="item">
                                                <div class="rt-post post-md style-8">
                                                    <div class="post-img">
                                                        <a href="single-post1.html">
                                                            <img src="{{asset('/')}}website/media/gallery/post-grid-md_9.jpg" alt="post" width="343"
                                                                 height="250">
                                                        </a>
                                                    </div>
                                                    <div class="post-content">
                                                        <a href="life-style.html" class="rt-post-cat-normal">Travel</a>
                                                        <h4 class="post-title">
                                                            <a href="single-post1.html">
                                                                After Moon They Land
                                                                CloseSpace Really?
                                                            </a>
                                                        </h4>
                                                        <span class="rt-meta">
                                                      <i class="far fa-calendar-alt icon"></i>
                                                      DECEMBER 9, 2022
                                                   </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end rt-post post-md item -->

                                            <div class="item">
                                                <div class="rt-post post-md style-8">
                                                    <div class="post-img">
                                                        <a href="single-post1.html">
                                                            <img src="{{asset('/')}}website/media/gallery/post-grid-md_10.jpg" alt="post"
                                                                 width="343" height="250">
                                                        </a>
                                                    </div>
                                                    <div class="post-content">
                                                        <a href="technology.html" class="rt-post-cat-normal">Technology</a>
                                                        <h4 class="post-title">
                                                            <a href="single-post1.html">
                                                                After Moon They Land
                                                                CloseSpace Really?
                                                            </a>
                                                        </h4>
                                                        <span class="rt-meta">
                                                      <i class="far fa-calendar-alt icon"></i>
                                                      DECEMBER 9, 2022
                                                   </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end rt-post post-md item -->

                                            <div class="item">
                                                <div class="rt-post post-md style-8">
                                                    <div class="post-img">
                                                        <a href="single-post1.html">
                                                            <img src="{{asset('/')}}website/media/gallery/post-grid-md_11.jpg" alt="post"
                                                                 width="343" height="250">
                                                        </a>
                                                    </div>
                                                    <div class="post-content">
                                                        <a href="life-style.html" class="rt-post-cat-normal">World</a>
                                                        <h4 class="post-title">
                                                            <a href="single-post1.html">
                                                                After Moon They Land
                                                                CloseSpace Really?
                                                            </a>
                                                        </h4>
                                                        <span class="rt-meta">
                                                      <i class="far fa-calendar-alt icon"></i>
                                                      DECEMBER 9, 2022
                                                   </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end rt-post post-md item -->

                                        </div>
                                        <!-- end post grid md list -->

                                    </div>
                                    <!-- end col -->

                                </div>
                                <!-- end innrer row -->
                            </div>
                            <!-- end ./tab item -->

                            <div class="tab-pane tab-item animated fadeInUp  " id="menu-44" role="tabpanel"
                                 aria-labelledby="menu-44-tab">
                                <div class="row gutter-24">

                                    <div class="col-xl-4 col-lg-6">
                                        <div class="rt-post-overlay rt-post-overlay-md">
                                            <div class="post-img">
                                                <a href="single-post1.html" class="img-link">
                                                    <img src="{{asset('/')}}website/media/gallery/post-xl_3.jpg" alt="post-xl-3" width="900"
                                                         height="600">
                                                </a>
                                            </div>
                                            <div class="post-content">
                                                <a href="life-style.html" class="music">Music</a>
                                                <h3 class="post-title">
                                                    <a href="single-post1.html">
                                                        African ations Are Singing
                                                        To Save Their Wildlife
                                                    </a>
                                                </h3>

                                                <div class="post-meta">
                                                    <ul>
                                                        <li>
                                                      <span class="rt-meta">
                                                         by <a href="author.html" class="name">Willum Skeem</a>
                                                      </span>
                                                        </li>
                                                        <li>
                                                      <span class="rt-meta">
                                                         <i class="far fa-calendar-alt icon"></i>
                                                         DECEMBER 9, 2022
                                                      </span>
                                                        </li>
                                                    </ul>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- end col -->

                                    <div class="col-xl-4 col-lg-6">

                                        <div class="post-grid-md-list gutter-24">
                                            <div class="item">
                                                <div class="rt-post post-md style-8">
                                                    <div class="post-img">
                                                        <a href="single-post1.html">
                                                            <img src="{{asset('/')}}website/media/gallery/post-md_4.jpg" alt="post" width="343"
                                                                 height="250">
                                                        </a>
                                                    </div>
                                                    <div class="post-content">
                                                        <a href="technology.html" class="rt-post-cat-normal">Technology</a>
                                                        <h4 class="post-title">
                                                            <a href="single-post1.html">
                                                                After Moon They Land
                                                                CloseSpace Really?
                                                            </a>
                                                        </h4>
                                                        <span class="rt-meta">
                                                      <i class="far fa-calendar-alt icon"></i>
                                                      DECEMBER 9, 2022
                                                   </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end rt-post post-md item -->

                                            <div class="item">
                                                <div class="rt-post post-md style-8">
                                                    <div class="post-img">
                                                        <a href="single-post1.html">
                                                            <img src="{{asset('/')}}website/media/gallery/post-grid-md_7.jpg" alt="post" width="343"
                                                                 height="250">
                                                        </a>
                                                    </div>
                                                    <div class="post-content">
                                                        <a href="life-style.html" class="rt-post-cat-normal">Travel</a>
                                                        <h4 class="post-title">
                                                            <a href="single-post1.html">
                                                                After Moon They Land
                                                                CloseSpace Really?
                                                            </a>
                                                        </h4>
                                                        <span class="rt-meta">
                                                      <i class="far fa-calendar-alt icon"></i>
                                                      DECEMBER 9, 2022
                                                   </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end rt-post post-md item -->

                                            <div class="item">
                                                <div class="rt-post post-md style-8">
                                                    <div class="post-img">
                                                        <a href="single-post1.html">
                                                            <img src="{{asset('/')}}website/media/gallery/post-grid-md_8.jpg" alt="post" width="343"
                                                                 height="250">
                                                        </a>
                                                    </div>
                                                    <div class="post-content">
                                                        <a href="life-style.html" class="rt-post-cat-normal">Food</a>
                                                        <h4 class="post-title">
                                                            <a href="single-post1.html">
                                                                After Moon They Land
                                                                CloseSpace Really?
                                                            </a>
                                                        </h4>
                                                        <span class="rt-meta">
                                                      <i class="far fa-calendar-alt icon"></i>
                                                      DECEMBER 9, 2022
                                                   </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end rt-post post-md item -->

                                        </div>
                                        <!-- end post grid md list -->

                                    </div>
                                    <!-- end col -->

                                    <div class="col-xl-4 col-lg-6">

                                        <div class="post-grid-md-list gutter-24">
                                            <div class="item">
                                                <div class="rt-post post-md style-8">
                                                    <div class="post-img">
                                                        <a href="single-post1.html">
                                                            <img src="{{asset('/')}}website/media/gallery/post-grid-md_9.jpg" alt="post" width="343"
                                                                 height="250">
                                                        </a>
                                                    </div>
                                                    <div class="post-content">
                                                        <a href="life-style.html" class="rt-post-cat-normal">Travel</a>
                                                        <h4 class="post-title">
                                                            <a href="single-post1.html">
                                                                After Moon They Land
                                                                CloseSpace Really?
                                                            </a>
                                                        </h4>
                                                        <span class="rt-meta">
                                                      <i class="far fa-calendar-alt icon"></i>
                                                      DECEMBER 9, 2022
                                                   </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end rt-post post-md item -->

                                            <div class="item">
                                                <div class="rt-post post-md style-8">
                                                    <div class="post-img">
                                                        <a href="single-post1.html">
                                                            <img src="{{asset('/')}}website/media/gallery/post-grid-md_10.jpg" alt="post"
                                                                 width="343" height="250">
                                                        </a>
                                                    </div>
                                                    <div class="post-content">
                                                        <a href="technology.html" class="rt-post-cat-normal">Technology</a>
                                                        <h4 class="post-title">
                                                            <a href="single-post1.html">
                                                                After Moon They Land
                                                                CloseSpace Really?
                                                            </a>
                                                        </h4>
                                                        <span class="rt-meta">
                                                      <i class="far fa-calendar-alt icon"></i>
                                                      DECEMBER 9, 2022
                                                   </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end rt-post post-md item -->

                                            <div class="item">
                                                <div class="rt-post post-md style-8">
                                                    <div class="post-img">
                                                        <a href="single-post1.html">
                                                            <img src="{{asset('/')}}website/media/gallery/post-grid-md_11.jpg" alt="post"
                                                                 width="343" height="250">
                                                        </a>
                                                    </div>
                                                    <div class="post-content">
                                                        <a href="life-style.html" class="rt-post-cat-normal">World</a>
                                                        <h4 class="post-title">
                                                            <a href="single-post1.html">
                                                                After Moon They Land
                                                                CloseSpace Really?
                                                            </a>
                                                        </h4>
                                                        <span class="rt-meta">
                                                      <i class="far fa-calendar-alt icon"></i>
                                                      DECEMBER 9, 2022
                                                   </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end rt-post post-md item -->

                                        </div>
                                        <!-- end post grid md list -->

                                    </div>
                                    <!-- end col -->

                                </div>
                                <!-- end innrer row -->
                            </div>
                            <!-- end ./tab item -->

                        </div>
                        <!-- end /.tab-content -->

                    </div>
                    <!-- end  wrap  -->
                </div>
                <!-- end col  -->
            </div>
            <!-- end row -->

        </div>
        <!-- end container -->
    </section>
    <!-- end news and feature section -->

    <!-- start subscribe section -->
    <div class="section subscribe-section-style-1">
        <div class="container">
            <div class="row  justify-content-evenly">

                <div class="col-lg-4 align-self-end wow fadeInLeft d-none d-lg-block" data-wow-delay="300ms"
                     data-wow-duration="800ms">
                    <div class="subscribe-img bouncing-bubble-animation">
                        <img src="{{asset('/')}}website/media/gallery/subscrible-img_1.png" alt="subscrible" width="401" height="327">
                    </div>
                </div>
                <!-- end col -->

                <div class="col-lg-6 align-self-center wow fadeInRight" data-wow-delay="600ms"
                     data-wow-duration="800ms">
                    <div class="rt-subscribe-box">
                        <h3 class="title">
                            Get The Best Blog Stories
                            into Your inbox!
                        </h3>
                        <form action="#" class="rt-contact-form subscribe-form-style-2">
                            <div class="rt-subs-group">
                                <input type="email" name="email" id="email_2" class="subscribe-form"
                                       placeholder="Your e-mail" data-error="Email field is required" required>
                                <button type="submit" class="subscribe-btn">Subscribe </button>
                                <div class="form-response"></div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- end col -->

            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end subscribe section -->

@endsection
