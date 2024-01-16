@extends('website.master')
@section('title','Blog Detail Page')
@section('body')
    <!-- Start inner page Banner -->
    <div class="banner inner-banner">
        <div class="container">
            <nav class="rt-breadcrumb-wrap" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{route('home')}}">
                            <i class="fas fa-home"></i>
                            Home
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="">
                            {{$blog->category->name}}
                        </a>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- End inner page Banner -->
    <p class="text-center text-success my-2">{{session('message')}}</p>
    <!-- start rt-sidebar-section-layout-2 -->
    <section class="rt-sidebar-section-layout-2">
        <div class="container">
            <div class="row gutter-40 sticky-coloum-wrap">

                <div class="col-xl-9 sticky-coloum-item">
                    <div class="rt-left-sidebar-sapcer-5">

                        <div class="rt-main-post-single grid-meta">

                            <!-- start post header -->
                            <div class="post-header">
                                <span class="rt-cat-primary">{{$blog->category->name}}</span>
                                <h2 class="title">
                                    {{$blog->name}}
                                </h2>
                                <div class="post-meta">
                                    <ul>
                                        <li>
                                          <span class="rt-meta">
                                             by <a href="author.html" class="name">{{$blog->author}}</a>
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
                                             {{count($comments)}} Comments
                                          </span>
                                        </li>
                                        <li>
                                          <span class="rt-meta">
                                             <i class="far fa-clock icon"></i>
                                             2 minute read
                                          </span>
                                        </li>
                                        <li>
                                          <span class="rt-meta">
                                             <i class="fas fa-signal icon"></i>
                                             3,250 Views
                                          </span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="share-box-area">
                                    <div class="left-area">
                                        <div class="social-share-box">
                                            <div class="share-text mb--10">
                                             <span class="rt-meta">
                                                <i class="fas fa-share-alt icon"></i>
                                                Share: 1,509
                                             </span>
                                            </div>
                                            <ul class="social-share-style-1 mb--10">
                                                <li>
                                                    <a class="fb" target="_blank" href="https://www.facebook.com/">
                                                        <i class="social-icon fab fa-facebook-f"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="tw" target="_blank" href="https://twitter.com/">
                                                        <i class="social-icon fab fa-twitter"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="yu" target="_blank" href="https://www.youtube.com/">
                                                        <i class="social-icon fab fa-youtube"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dr" target="_blank" href="https://dribbble.com/">
                                                        <i class="social-icon fab fa-dribbble"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dw" target="_blank" href="https://cloud.google.com/">
                                                        <i class="social-icon fas fa-cloud"></i>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a class="wh" target="_blank" href="https://www.whatsapp.com/">
                                                        <i class="social-icon fab fa-whatsapp"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="right-area">
                                        <ul class="social-share-style-1 layout-2 mb--10">
                                            <li>
                                                <a target="_blank" href="https://www.facebook.com/">
                                                    <i class="social-icon fas fa-envelope"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a target="_blank" href="https://twitter.com/">
                                                    <i class="social-icon fas fa-print"></i>
                                                </a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- end post-header -->

                            <!-- strat post img -->
                            <figure class="post-img text-center">
                                <img src="{{asset($blog->image)}}" alt="post-img" width="700" height="500">
                            </figure>
                            <!-- end post-img -->

                            <!-- strat psot body -->
                            <div class="post-body">
                                <p class="rt-dropcap-style-1">
                                    {!! $blog->long_description !!}
                                </p>
                                <!-- ad banner -->
                                <div class="ad-banner-img mt--45 mb--40">
                                    <a href="#">
                                        <img src="{{asset('/')}}website/media/gallery/ad-banner_4.jpg" alt="ad-banner" width="960" height="150">
                                    </a>
                                </div>

                            </div>
                            <!-- end post body -->

                            <!-- start social-share-box-2 -->
                            <div class="social-share-box-2 mb--40">
                                <div class="row gutter-30">
                                    <div class="col-xl-7 col-lg-6">
                                        <div class="conent-block">
                                            <h4 class="block-tile mb--20">Popular Tags:</h4>
                                            <div class="tag-list">
                                                @foreach($categories as $category)
                                                <a href="{{route('category',['id'=>$category->id])}}" class="tag-link">{{$category->name}}</a>
                                                @endforeach

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-5 col-lg-6 d-flex justify-content-start justify-content-lg-end">
                                        <div class="conent-block">
                                            <h4 class="block-tile mb--20">Share This Post:</h4>
                                            <ul class="social-share-style-1 ">
                                                <li>
                                                    <a class="fb" target="_blank" href="https://www.facebook.com/">
                                                        <i class="social-icon fab fa-facebook-f"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="tw" target="_blank" href="https://twitter.com/">
                                                        <i class="social-icon fab fa-twitter"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="yu" target="_blank" href="https://www.youtube.com/">
                                                        <i class="social-icon fab fa-youtube"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dr" target="_blank" href="https://dribbble.com/">
                                                        <i class="social-icon fab fa-dribbble"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dw" target="_blank" href="https://cloud.google.com/">
                                                        <i class="social-icon fas fa-cloud"></i>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a class="wh" target="_blank" href="https://www.whatsapp.com/">
                                                        <i class="social-icon fab fa-whatsapp"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end social-share-box-2 -->

                            <!-- start author box -->
                            <div class="author-box-style-1 mb--50">
                                <div class="author-img">
                                    <img src="{{asset('/')}}website/media/gallery/author-img_1.jpg" alt="author-img_1" width="170"
                                         height="170">
                                </div>
                                <div class="author-content">
                                    <h3 class="author-name">{{$blog->author}}</h3>
                                    <span class="author-role">{{$blog->user->designation ?? ''}}</span>
                                    <p class="user-desc">
                                        {{$blog->user->biographicalInfo ?? ''}}
                                    </p>
                                    <ul class="social-style-5">

                                        <li>
                                            <a target="_blank" href="https://www.facebook.com/">
                                                <i class="social-icon fab fa-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a target="_blank" href="https://twitter.com/">
                                                <i class="social-icon fab fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a target="_blank" href="https://www.pinterest.com/">
                                                <i class="fab fa-pinterest-p"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a target="_blank" href="https://www.instagram.com/">
                                                <i class="fab fa-instagram"></i>
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                            <!-- end author box -->
                            <div class="comments-area">
                                <div class="comments-section" id="comment">
                                    <h3 class="comments-title">{{count($comments)}} Comments</h3>
                                    <ol class="comments">
                                        <li class="comment even thread-even depth-1" id="comment-1">
                                            @foreach($comments as $comment)
                                                <div class="div-comment-1 col-12 d-flex mt-2">
                                                    <div class="col-2">
                                                        <div class="author-img">
                                                            <img class="rounded-circle" width="70" height="70" src="{{asset('/')}}website/media/gallery/author-img_1.jpg" alt>
                                                        </div>
                                                    </div>
                                                    <div class="col-10">
                                                        <div class="comment-wrapper">
                                                            <div class="comments-meta">
                                                                <h4>{{$comment->name}}</h4>
                                                                <p><span class="comments-date"> {{$comment->date}}</span></p>
                                                            </div>
                                                            <div class="comment-area">
                                                                <p>{{$comment->comment}}</p>
                                                                <div class="comments-reply">
                                                                    <a class="comment-reply-link"
                                                                       href="#"><span>Reply</span></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </li>
                                    </ol>
                                </div> <!-- end comments-section -->



                            </div> <!-- end comments-area -->

                            @if(Session::get('user_id'))
                            <!-- start blog-post-comment -->
                            <div class="blog-post-comment mb--50">
                                    <h5 class="fw-bold text-center">Comment Form</h5>
                                    <div class="row">
                                        <form action="{{route('comment.store')}}" class="comments-form-style-1" method="post">
                                            @csrf
                                            <div class="col-xl-4">
                                                <div class="rt-form-group" hidden>
                                                    <label for="name">Your Name *</label>
                                                    <input type="text" value="{{Session::get('user_name')}}" name="name" id="name" class="form-control" data-error="Name field is required" readonly>
                                                </div>
                                            </div>
                                            <div class="col-xl-4">
                                                <div class="rt-form-group" hidden>
                                                    <label for="email">E-mail *</label>
                                                    <input type="email" value="{{Session::get('user_email')}}" name="email" id="email" class="form-control" readonly>
                                                    <input placeholder="" value="{{$blog->id}}" type="email" name="blog_id" readonly>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="rt-form-group">
                                                    <label for="comment">Comments *</label>
                                                    <textarea name="comment" id="comment" class="form-control text-area" required></textarea>
                                                    <span class="text-danger">{{$errors->has('comment')?$errors->first('comment'):''}}</span>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <input id="submit" class="btn btn-primary" value="Post Comment" type="submit">
                                            </div>
                                        </form>
                                    </div>

                            </div>
                            <!-- end blog-post-comment -->
                            @else
                                    <div class="comment-respond">
                                        <h3 class="comment-reply-title"><a href="{{route('user.login')}}">Login here for Leave a reply</a></h3>
                                    </div>
                            @endif
                            <!-- start related-post-box -->
                            <div class="related-post-box">
                                <div class="titile-wrapper mb--40">
                                    <h2 class="rt-section-heading mb-0 flex-grow-1 me-3">
                                        <span class="rt-section-text">Related Post </span>
                                        <span class="rt-section-dot"></span>
                                        <span class="rt-section-line"></span>
                                    </h2>

                                    <div class="slider-navigation style-2">
                                        <i class="fas fa-chevron-left slider-btn btn-prev"></i>
                                        <i class="fas fa-chevron-right slider-btn btn-next"></i>
                                    </div>
                                </div>
                                <!-- end titile-wrapper -->

                                <div class="swiper-container rt-post-slider-style-5">
                                    <div class="swiper-wrapper">
                                        @foreach($relatedBlogs as $blog)
                                        <div class="swiper-slide">
                                            <div class="slide-item">
                                                <div class="rt-post-grid grid-meta">
                                                    <div class="post-img">
                                                        <a href="{{route('blog.details',['id'=>$blog->id])}}">
                                                            <img src="{{asset($blog->image)}}" alt="post" width="551"
                                                                 height="431">
                                                        </a>
                                                    </div>
                                                    <div class="post-content">
                                                        <a href="{{route('category',['id'=>$blog->id])}}" class="rt-post-cat-normal">{{$blog->category->name}}</a>
                                                        <h4 class="post-title">
                                                            <a href="{{route('blog.details',['id'=>$blog->id])}}">
                                                                {{$blog->name}}
                                                            </a>
                                                        </h4>
                                                        <span class="rt-meta">
                                                      <i class="far fa-calendar-alt icon"></i>
                                                      {{date('d-m-Y', strtotime($blog->created_at))}}
                                                   </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        <!-- end swiper slide -->



                                    </div>
                                    <!-- end swiper wrapper -->
                                </div>
                                <!-- end swiper container + editor-choice-slider-style-1  -->

                            </div>
                            <!-- end related-post-box -->

                        </div>
                        <!-- end rt-main-post-single -->
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
                            <div class="post-banner-style-1">
                                <a href="#" class="image-link">&nbsp;</a>
                                <div class="post-content">
                                    <div class="logo">
                                        <a href="{{route('home')}}">
                                            @foreach($websiteInfos as $websiteInfo)
                                            <img src="{{asset($websiteInfo->logo)}}" alt="logo" width="162" height="52">
                                            @endforeach
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="#">
                                            The Most Powerful
                                            <span>News & Magazine WP Theme</span>
                                        </a>
                                    </h3>
                                    <div class="btn-wrap">
                                        <a href="{{route('blogs')}}" class="btn-white-sm">
                                            Read Blogs
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end slidebar wrap  -->

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
                                <div class="item">
                                    <div class="rt-post post-sm style-1">
                                        <div class="post-img">
                                            <a href="single-post1.html">
                                                <img src="{{asset('/')}}website/media/gallery/post-sm_1.jpg" alt="post" width="100" height="100">
                                            </a>
                                        </div>
                                        <div class="ms-4 post-content">
                                            <a href="gaming.html" class="rt-post-cat-normal">Sports</a>
                                            <h4 class="post-title">
                                                <a href="single-post1.html">
                                                    Top Beste ampute are
                                                    Speak Market.
                                                </a>
                                            </h4>
                                            <span class="rt-meta">
                                             <i class="far fa-calendar-alt icon"></i>
                                             DECEMBER 9, 2022
                                          </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="rt-post post-sm style-1">
                                        <div class="post-img">
                                            <a href="single-post1.html">
                                                <img src="{{asset('/')}}website/media/gallery/post-sm_2.jpg" alt="post" width="100" height="100">
                                            </a>
                                        </div>
                                        <div class="ms-4 post-content">
                                            <a href="gaming.html" class="rt-post-cat-normal">Sports</a>
                                            <h4 class="post-title">
                                                <a href="single-post1.html">
                                                    Top Beste ampute are
                                                    Speak Market.
                                                </a>
                                            </h4>
                                            <span class="rt-meta">
                                             <i class="far fa-calendar-alt icon"></i>
                                             DECEMBER 9, 2022
                                          </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="rt-post post-sm style-1">
                                        <div class="post-img">
                                            <a href="single-post1.html">
                                                <img src="{{asset('/')}}website/media/gallery/post-sm_3.jpg" alt="post" width="100" height="100">
                                            </a>
                                        </div>
                                        <div class="ms-4 post-content">
                                            <a href="gaming.html" class="rt-post-cat-normal">Sports</a>
                                            <h4 class="post-title">
                                                <a href="single-post1.html">
                                                    Top Beste ampute are
                                                    Speak Market.
                                                </a>
                                            </h4>
                                            <span class="rt-meta">
                                             <i class="far fa-calendar-alt icon"></i>
                                             DECEMBER 9, 2022
                                          </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="rt-post post-sm style-1">
                                        <div class="post-img">
                                            <a href="single-post1.html">
                                                <img src="{{asset('/')}}website/media/gallery/post-sm_4.jpg" alt="post" width="100" height="100">
                                            </a>
                                        </div>
                                        <div class="ms-4 post-content">
                                            <a href="gaming.html" class="rt-post-cat-normal">Sports</a>
                                            <h4 class="post-title">
                                                <a href="single-post1.html">
                                                    Top Beste ampute are
                                                    Speak Market.
                                                </a>
                                            </h4>
                                            <span class="rt-meta">
                                             <i class="far fa-calendar-alt icon"></i>
                                             DECEMBER 9, 2022
                                          </span>
                                        </div>
                                    </div>
                                </div>
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
                                    <a href="gaming.html" data-bg-image="{{asset('/')}}website/media/gallery/cat_1.jpg">
                                        <span class="cat-name">Sports</span>
                                        <span class="count">59</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="life-style.html" data-bg-image="{{asset('/')}}website/media/gallery/cat_2.jpg">
                                        <span class="cat-name">World</span>
                                        <span class="count">12</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="technology.html" data-bg-image="{{asset('/')}}website/media/gallery/cat_3.jpg">
                                        <span class="cat-name">Technology</span>
                                        <span class="count">59</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="life-style.html" data-bg-image="{{asset('/')}}website/media/gallery/cat_4.jpg">
                                        <span class="cat-name">Food</span>
                                        <span class="count">12</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="life-style.html" data-bg-image="{{asset('/')}}website/media/gallery/cat_5.jpg">
                                        <span class="cat-name">Travel</span>
                                        <span class="count">12</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- end slidebar wrap  -->

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
                                    <form action="#" method="post" class="subscribe-form rt-form">
                                        <div class="rt-form-group">
                                            <input type="email" name="email" id="email_1" placeholder="enter e-mail"
                                                   class=" rt-form-control">
                                        </div>

                                        <button type="submit" class="rt-submit-btn">Subscribe Now</button>

                                    </form>
                                    <div class="small-text">Don’t worry, we don’t spam</div>
                                </div>
                            </div>
                        </div>
                        <!-- end sidebar wrap -->

                        <div class="sidebar-wrap mb--40">
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
    <!-- end rt-sidebar-section-layout-2 -->

@endsection
