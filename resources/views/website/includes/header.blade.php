<!-- Header -->
<header class="rt-header sticky-on">

    <!-- sticky-placeholder -->
    <div id="sticky-placeholder"></div>

    <!-- start  topbar -->
    <div class="topbar topbar-style-1" id="topbar-wrap">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-7">
                    <div class="rt-trending rt-trending-style-1">
                        <p class="trending-title">
                            <i class="fas fa-bolt icon"></i>
                            Trending
                        </p>
                        <div class="rt-treding-slider1 swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="item">
                                        <p class="trending-slide-title">
                                            newsan unknown printer took a galley of
                                            type andscrambled.
                                        </p>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="item">
                                        <p class="trending-slide-title">
                                            newsan unknown printer took a galley of
                                            type andscrambled.
                                        </p>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="item">
                                        <p class="trending-slide-title">
                                            newsan unknown printer took a galley of
                                            type andscrambled.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end col -->

                <div class="col-lg-5">
                    <div class="rt-topbar-right">
                        <div class="meta-wrap">
                              <span class="rt-meta">
                                 <i class="far fa-calendar-alt icon"></i>
                                 <span class="currentDate">
                                    DECEMBER 9, 2022
                                 </span>
                              </span>
                        </div>
                        @foreach($websiteInfos as $websiteInfo)
                        <div class="social-wrap d-none d-xl-block">
                            <ul class="rt-top-social">
                                <li class="follow">Follow Us:</li>
                                <li>
                                    <a href="{{$websiteInfo->facebook}}" target="_blank">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{$websiteInfo->twitter}}" target="_blank">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{$websiteInfo->linkedIn}}" target="_blank">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </li>
                                <li><a href="{{$websiteInfo->instagram}}" target="_blank">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{$websiteInfo->youtube}}" target="_blank">
                                        <i class="fab fa-youtube"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        @endforeach
                    </div>
                </div>
                <!-- end col -->

            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end topbar -->

    <!-- Header Main -->
    <div class="header-main header-main-style-1 navbar-wrap" id="navbar-wrap">
        <div class="container">
            <div class="row">
                <div class="d-flex align-items-center justify-content-between">

                    <!-- start logo here -->
                    <div class="site-branding">
                        @foreach($websiteInfos as $websiteInfo)
                        <a class="dark-logo" href="{{route('home')}}">
                            <img width="162" height="52" src="{{asset($websiteInfo->logo)}}" alt="neeon">
                        </a>
                        <a class="light-logo" href="{{route('home')}}">
                            <img width="162" height="52" src="{{asset($websiteInfo->logo)}}" alt="neeon">
                        </a>
                        @endforeach
                    </div>
                    <!-- end logo here -->

                    <!-- start main menu -->
                    <div class="main-menu">
                        <nav class="main-menu__nav">
                            <ul>
                                <li class=""><a class="animation" href="{{route('home')}}">Home</a></li>
                                <li class="main-menu__nav_sub list">
                                    <a class="animation" href="">Categories</a>
                                    <ul class="main-menu__dropdown">
{{--                                        <li class="main-menu__nav_sub">--}}
{{--                                            <a href="javascript:void(0)">--}}
{{--                                                Post Layout--}}
{{--                                            </a>--}}
{{--                                            <ul>--}}
{{--                                                <li><a href="single-post1.html">Single Post 01</a></li>--}}
{{--                                                <li><a href="single-post2.html">Single Post 02</a></li>--}}
{{--                                                <li><a href="single-post3.html">Single Post 03</a></li>--}}
{{--                                            </ul>--}}
{{--                                        </li>--}}
                                        @foreach($categories as $category)
                                        <li><a href="{{route('category',['id'=>$category->id])}}">{{$category->name}}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li><a class="animation" href="{{route('blogs')}}">Blogs</a></li>
                                <li><a class="animation" href="{{route('sponsored-blogs')}}">Sponsored Blogs</a></li>
                                <li>
                                    <a class="animation" href="{{route('about')}}">About Us</a>
                                </li>
                                <li>
                                    <a class="animation" href="{{route('contact')}}">Contact Us</a>
                                </li>

                            </ul>
                        </nav>
                    </div>
                    <!-- end main menu -->

                    <!-- start header actions -->
                    <ul class="header-action-items">
                        <nav class="main-menu__nav me-4">
                            <ul>
                                @if(Session::get('user_id'))
                                    <li class="main-menu__nav_sub list">
                                        <a class="animation" href="">
                                            {{Session::get('user_name')}}
                                        </a>
                                        <ul class="main-menu__dropdown">
                                            <li><a href="{{route('user-dashboard')}}">Dashboard</a></li>
                                            <li><a href="{{route('user-profile')}}">Profile</a></li>
                                            <li>
                                                <a href="" onclick="confirm('are you sure to logout');event.preventDefault(); document.getElementById('logout').submit();">Logout </a>
                                                <form action="{{route('logout')}}" id="logout" method="POST">
                                                    @csrf
                                                </form>
                                            </li>
                                        </ul>
                                    </li>
                                @else
                                    <li>
                                        <a class="animation" href="{{route('user.login')}}">Login</a>
                                    </li>
                                    <li>
                                        <a class="animation" href="{{route('user.register')}}">Register</a>
                                    </li>
                                @endif
                            </ul>
                        </nav>
                        <li class="item humburger offcanvas-menu-btn menu-status-open">
                            <span></span>
                        </li>
                    </ul>
                    <!-- end header actions -->

                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- End Header Main -->

</header>
<!-- end header -->
