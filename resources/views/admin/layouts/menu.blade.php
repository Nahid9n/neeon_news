<div class="sticky">
    <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
    <div class="app-sidebar">
        <div class="side-header">
            <a class="header-brand1" href="{{route('dashboard')}}">
                @foreach($websiteInfos as $websiteInfo)
                <img src="{{asset($websiteInfo->logo)}}" class="header-brand-img desktop-logo" alt="logo">
                <img src="{{asset($websiteInfo->logo)}}" class="header-brand-img toggle-logo" alt="logo">
                <img src="{{asset($websiteInfo->logo)}}" class="header-brand-img light-logo" alt="logo">
                <img src="{{asset($websiteInfo->logo)}}" class="header-brand-img light-logo1" alt="logo">
                @endforeach
            </a><!-- LOGO -->
        </div>
        <div class="main-sidemenu">
            <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg"
                                                                  fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
                </svg>
            </div>
            <ul class="side-menu">
                <li>
                    <h3>Menu</h3>
                </li>
                <li class="slide">
                    <a class="side-menu__item has-link" data-bs-toggle="slide" href="{{route('dashboard')}}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M19.9794922,7.9521484l-6-5.2666016c-1.1339111-0.9902344-2.8250732-0.9902344-3.9589844,0l-6,5.2666016C3.3717041,8.5219116,2.9998169,9.3435669,3,10.2069702V19c0.0018311,1.6561279,1.3438721,2.9981689,3,3h2.5h7c0.0001831,0,0.0003662,0,0.0006104,0H18c1.6561279-0.0018311,2.9981689-1.3438721,3-3v-8.7930298C21.0001831,9.3435669,20.6282959,8.5219116,19.9794922,7.9521484z M15,21H9v-6c0.0014038-1.1040039,0.8959961-1.9985962,2-2h2c1.1040039,0.0014038,1.9985962,0.8959961,2,2V21z M20,19c-0.0014038,1.1040039-0.8959961,1.9985962-2,2h-2v-6c-0.0018311-1.6561279-1.3438721-2.9981689-3-3h-2c-1.6561279,0.0018311-2.9981689,1.3438721-3,3v6H6c-1.1040039-0.0014038-1.9985962-0.8959961-2-2v-8.7930298C3.9997559,9.6313477,4.2478027,9.0836182,4.6806641,8.7041016l6-5.2666016C11.0455933,3.1174927,11.5146484,2.9414673,12,2.9423828c0.4853516-0.0009155,0.9544067,0.1751099,1.3193359,0.4951172l6,5.2665405C19.7521973,9.0835571,20.0002441,9.6313477,20,10.2069702V19z"/></svg>
                        <span class="side-menu__label">Dashboard</span>
                    </a>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="#">
                        <i class="fa-solid side-menu__icon fa-c"></i>
                        <span class="side-menu__label">Category Module</span><i class="angle fa fa-angle-right"></i></a>
                    <ul class="slide-menu">
                        <li><a href="{{route('category.create')}}" class="slide-item">Add Category</a></li>
                        <li><a href="{{route('category.index')}}" class="slide-item">Manage Category</a></li>
                    </ul>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="#">
                        <i class="fa-solid side-menu__icon fa-person-chalkboard"></i>
                        <span class="side-menu__label">Blog Module</span><i class="angle fa fa-angle-right"></i></a>
                    <ul class="slide-menu">
                        <li><a href="{{route('blog.create')}}" class="slide-item">Add Blog</a></li>
                        <li><a href="{{route('blog.index')}}" class="slide-item">Manage Blog</a></li>
                    </ul>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="#">
                        <i class="fa-solid side-menu__icon fa-person-chalkboard"></i>
                        <span class="side-menu__label">Sponsored Blog Module</span><i class="angle fa fa-angle-right"></i></a>
                    <ul class="slide-menu">
                        <li><a href="{{route('sponsoredBlog.create')}}" class="slide-item">Add Sponsored Blog</a></li>
                        <li><a href="{{route('sponsoredBlog.index')}}" class="slide-item">Manage Sponsored Blog</a></li>
                    </ul>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="#">
                        <i class="fa-solid side-menu__icon fa-person-chalkboard"></i>
                        <span class="side-menu__label">Website Module</span><i class="angle fa fa-angle-right"></i></a>
                    <ul class="slide-menu">
{{--                        <li><a href="{{route('websiteInfos.create')}}" class="slide-item">Add Website Info</a></li>--}}
                        <li><a href="{{route('websiteInfos.index')}}" class="slide-item">Manage Website Info</a></li>
                    </ul>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="#">
                        <i class="fa-solid side-menu__icon fa-person-chalkboard"></i>
                        <span class="side-menu__label">Instagram Module</span><i class="angle fa fa-angle-right"></i></a>
                    <ul class="slide-menu">
                        <li><a href="{{route('instagramPost.create')}}" class="slide-item">Add Instagram Post</a></li>
                        <li><a href="{{route('instagramPost.index')}}" class="slide-item">Manage Instagram Post</a></li>
                    </ul>
                </li>
{{--                <li class="slide">--}}
{{--                    <a class="side-menu__item" data-bs-toggle="slide" href="#">--}}
{{--                        <i class="fa-solid side-menu__icon fa-book"></i>--}}
{{--                        <span class="side-menu__label">Contact Module</span><i class="angle fa fa-angle-right"></i></a>--}}
{{--                    <ul class="slide-menu">--}}
{{--                        <li><a href="{{route('contacts.create')}}" class="slide-item">Add Contact</a></li>--}}
{{--                        <li><a href="{{route('contacts.index')}}" class="slide-item"> Manage Course</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
            </ul>
            <div class="slide-right" id="slide-right">
                <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
                </svg>
            </div>
        </div>
    </div>
</div>
