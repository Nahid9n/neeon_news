<!-- start rt-mobile-header -->
<div class="rt-mobile-header mobile-sticky-on">

    <div id="mobile-sticky-placeholder"></div>
    <!-- end mobile-sticky-placeholder -->

    <div class="mobile-top-bar" id="mobile-top-bar">
        <ul class="mobile-top-list">
            <li>
                     <span class="rt-meta text-dark">
                        <i class="far fa-calendar-alt icon"></i>
                        <span class=" currentDate"></span>
                     </span>
            </li>
            <li>
                @foreach($websiteInfos as $websiteInfo)
                     <span class="rt-meta text-dark">
                        <i class="fas fa-map-marker-alt icon"></i>
                        {{$websiteInfo->address}}
                     </span>
                @endforeach
            </li>
        </ul>
    </div>
    <!-- end mobile-top-bar -->

    <div class="mobile-menu-bar-wrap" id="mobile-menu-bar-wrap">
        <div class="mobile-menu-bar">
            <div class="logo">
                <a href="{{route('home')}}">
                    <img src="{{asset('/')}}website/media/logo/logo-dark.svg" alt="neeon" width="162" height="52">
                </a>
            </div>
            <span class="sidebarBtn">
                     <span class="bar"></span>
                     <span class="bar"></span>
                     <span class="bar"></span>
                     <span class="bar"></span>
                  </span>
        </div>
        <div class="rt-slide-nav">
            <div class="offscreen-navigation">
                <nav class="menu-main-primary-container">
                    <ul class="menu">
                        <li><a class="animation" href="{{route('home')}}">Home</a></li>
                        <li class="list menu-item-has-children">
                            <a class="animation" href="javascript:void(0)">Categories</a>
                            <ul class="main-menu__dropdown sub-menu">
                                @foreach($categories as $category)
                                <li><a href="{{route('category',['id'=>$category->id])}}">{{$category->name}}</a></li>
                                @endforeach
                            </ul>
                        </li>

                        <li><a class="animation" href="{{route('blogs')}}">Blogs</a></li>
                        <li><a class="animation" href="{{route('about')}}">About Us</a></li>
                        <li><a class="animation" href="{{route('contact')}}">Contact Us</a></li>
                        @if(Session::get('user_id'))
                            <li class="list menu-item-has-children">
                                <a class="animation" href="">{{Session::get('user_name')}}</a>
                                <ul class="main-menu__dropdown sub-menu">
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
            </div>
        </div>
    </div>



</div>
<!-- end rt-mobile-header -->
