<!DOCTYPE html>
<html lang="en">

<head>
    @include('website.includes.meta')
    @include('website.includes.style')
</head>

<body>

<!-- Start wrapper -->
<div id="wrapper" class="wrapper">

    <!-- start perloader -->
    <div class="pre-loader" id="preloader">
        <div class="loader"></div>
    </div>
    <!-- end perloader -->

    <!-- Start main-content -->
    <div id="main_content" class="footer-fixed">

       @include('website.includes.header')

        @include('website.includes.sidebar')

        <!-- Start Main -->
        <main>

         @yield('body')

        </main>
        <!-- End Main -->

        @include('website.includes.footer')

    </div>
    <!-- End main-content -->

    <!-- Start  offcanvas menu -->
    @foreach($websiteInfos as $websiteInfo)
    <div class="offcanvas-menu-wrap" id="offcanvas-wrap" data-position="left">

        <div class="offcanvas-content">

            <div class="offcanvas-header">
                <div class="offcanvas-logo">
                    <div class="site-branding">
                        <a class="dark-logo" href="{{route('home')}}">
                            <img width="162" height="52" src="{{asset($websiteInfo->logo)}}" alt="neeon">
                        </a>
                        <a class="light-logo" href="{{route('home')}}">
                            <img width="162" height="52" src="{{asset($websiteInfo->logo)}}" alt="neeon">
                        </a>
                    </div>
                </div>
                <div class="close-btn offcanvas-close">
                    <a href="javascript:void(0)">
                        <i class="fas fa-times"></i>
                    </a>
                </div>
            </div>

            <div class="offcanvas-widget">
                <h3 class="offcanvas-widget-title">About Us</h3>
                <p>
                    {!! $websiteInfo->short_about_us !!}
                </p>
            </div>


            <div class="offcanvas-widget">
                <h3 class="offcanvas-widget-title">Instagram</h3>
                <div class="insta-gallery">
                    @foreach($instagram6 as $instagram)
                    <div class="galleryitem">
                        <a href="{{$instagram->link}}">
                            <img src="{{asset($instagram->image)}}" width="100" height="90" alt="gallery1">
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>

            <div class="offcanvas-widget footer-widget">
                <h3 class="offcanvas-widget-title">Contact Info</h3>
                <ul class="contact-info-list widget-list">
                    <li class="widget-list-item">
                        <i class="fas fa-map-marker-alt list-icon"></i>
                        {{$websiteInfo->address}}
                    </li>
                    <li class="widget-list-item">
                        <i class="fas fa-phone-alt list-icon"></i>
                        <a href="tel:123333000999" class="widget-list-link">
                            {{$websiteInfo->mobile_number}}
                        </a>
                    </li>
                    <li class="widget-list-item">
                        <i class="fas fa-envelope list-icon"></i>
                        <a href="mailto:info@example.com" class="widget-list-link">
                            {{$websiteInfo->email}}
                        </a>
                    </li>
                </ul>
                <ul class="footer-social style-2 gutter-15">
                    <li class="social-item">
                        <a href="{{$websiteInfo->facebook}}" class="social-link fb" target="_blank">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li class="social-item">
                        <a href="{{$websiteInfo->twitter}}" class="social-link tw" target="_blank">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li class="social-item">
                        <a href="{{$websiteInfo->instagram}}" class="social-link vm" target="_blank">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                    <li class="social-item">
                        <a href="{{$websiteInfo->linkedIn}}" class="social-link pn" target="_blank">
                            <i class="fab fa-linkedin"></i>
                        </a>
                    </li>
                    <li class="social-item">
                        <a href="{{$websiteInfo->youtube}}" class="social-link wh" target="_blank">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    @endforeach
    <!-- End  offcanvas menu -->


    <!-- Start Search  -->
    <div id="template-search" class="template-search">
        <button type="button" class="close">×</button>
        <form class="search-form">
            <input type="search" value="" placeholder="Search" />
            <button type="submit" class="search-btn btn-ghost style-1">
                <i class="flaticon-search"></i>
            </button>
        </form>
    </div>
    <!-- End Search -->

    <!-- theme-switch-box -->
    <div class="theme-switch-box-wrap">
        <div class="theme-switch-box">
            <span class="theme-switch-box__theme-status"><i class="fas fa-cog"></i></span>
            <label class="theme-switch-box__label" for="themeSwitchCheckbox">
                <input class="theme-switch-box__input" type="checkbox" name="themeSwitchCheckbox"
                       id="themeSwitchCheckbox">
                <span class="theme-switch-box__main"></span>
            </label>
            <span class="theme-switch-box__theme-status"><i class="fas fa-moon"></i></span>
        </div>
    </div>
    <!-- end theme-switch-box -->

    <!-- start back to top -->
    <a href="javascript:void(0)" id="back-to-top">
        <i class="fas fa-angle-double-up"></i>
    </a>
    <!-- End back to top -->

</div>
<!-- End wrapper -->
    @include('website.includes.script')

</body>


</html>
