@extends('website.master')
@section('title','Blog Page')
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
                    <li class="breadcrumb-item active" aria-current="page">
                        All Blogs
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- End inner page Banner -->

    <!-- start rt-sidebar-section-layout-1 -->
    <section class="rt-sidebar-section-layout-1">
        <div class="container sticky-coloum-wrap">
            <div class="row gutter-40 sticky-coloum-wrap">
                <div class="col-xl-9 sticky-coloum-item">
                    <div class="rt-left-sidebar-sapcer-5">

                        <div class="row gutter-24">

                            @foreach($blogs as $blog)
                            <div class="col-md-4 wow fadeInUp" data-wow-delay="100ms" data-wow-duration="800ms">
                                <div class="rt-post-overlay rt-post-overlay-md layout-6">
                                    <div class="post-img">
                                        <a href="{{route('blog.details',['id'=>$blog->id])}}" class="img-link">
                                            <img src="{{asset($blog->image)}}" alt="post-xl_37" width="900"
                                                 height="600">
                                        </a>
                                    </div>
                                    <div class="post-content">
                                        <a href="life-style.html" class="life-style">{{$blog->category->name}}</a>
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
                            <!-- end inner col -->
                            @endforeach

                        </div>
                        <!-- end inner row -->

                        <nav class="rt-pagination-area gap-top-90">
                            <ul class="pagination rt-pagination justify-content-center">
                                <li class="page-item">{{ $blogs->onEachSide(5)->links() }}</li>
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
                                </div>
                            </div>
                        </div>
                        <!-- end slidebar wrap  -->

                        <div class="sidebar-wrap mb--40">

                            <h2 class="rt-section-heading style-2 mb--30">
                                <span class="rt-section-text">Top Categories </span>
                                <span class="rt-section-dot"></span>
                                <span class="rt-section-line"></span>
                            </h2>

                            <div class="top-categories-grid-style-1">
                                @foreach($categories as $category)
                                <div class="cat-item">
                                    <div class="rt-cart-item">
                                        <div class="item-img">
                                            <img src="{{asset($category->image)}}" alt="cat-slider" width="696"
                                                 height="491">
                                            <div class="item-content">
                                                <h4 class="title">
                                                    <a href="{{route('category',['id'=>$category->id])}}">{{$category->name}}</a>
                                                </h4>
                                                <p class="count">
                                                    <span class="anim-overflow">({{count($category->blog)}})</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end cat item -->
                                @endforeach
                            </div>
                            <!-- end top-categories-grid-style-1 -->

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

                        <div class="sidebar-wrap">
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
