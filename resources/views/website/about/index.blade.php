@extends('website.master')
@section('title','About Page')
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
                        About Us
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- End inner page Banner -->

    <!-- start who-we-are-style-1 -->
    @foreach($websiteInfos as $websiteInfo)
    <section class="who-we-are-style-1 motion-effects-wrap">
        <div class="container">
            <div class="row gutter-30 align-items-center">
                <div class="col-xl-7 col-lg-10 mx-auto">
                    <div class="about-img-gallery-style-1">
                        <p>{!! $websiteInfo->about_us !!}</p>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    @endforeach
    <!-- end who-we-are-style-1 -->

    <!-- start team-seciton-style-1 -->
    <section class="team-seciton-style-1 section-padding-2 motion-effects-wrap">
        <div class="shape-circle">
            <img class="motion-effects5" src="{{asset('/')}}website/media/elements/element_20.png" alt="element_20" width="528"
                 height="528">
        </div>
        <div class="container">

            <div class="row">
                <div class="col-xl-5 col-lg-6 mx-auto text-center">
                    <div class="rt-section-heading-style-2">
                        <h2 class="heading-tilte">
                            Meet Our Team
                        </h2>
                        <p>
                            Nec nascetur mus vicideolor rhoncus augue quisque parturientet
                            imperdet sit nisi tellus veni faucibus orcimperdietenatis.
                        </p>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->

            <div class="row gutter-20">

                <div class="col-xl-3 col-md-6 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="800ms">
                    <div class="team-box-style-1">
                        <div class="team-img">
                            <a href="#">
                                <img src="{{asset('/')}}website/media/team/team_1.jpg" alt="team_1" width="551" height="610">
                            </a>
                        </div>
                        <div class="team-content">
                            <h3 class="name"><a href="#">James Stone</a></h3>
                            <span class="designation">Creative Director</span>
                            <ul class="team-social-1 footer-social">
                                <li class="social-item">
                                    <a href="https://www.facebook.com/" class="social-link fb" target="_blank">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li class="social-item">
                                    <a href="https://twitter.com/" class="social-link tw" target="_blank">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li class="social-item"><a href="https://www.linkedin.com/" class="social-link ln"
                                                           target="_blank"><i class="fab fa-linkedin-in"></i></a></li>

                                <li class="social-item">
                                    <a href="https://www.pinterest.com/" class="social-link pn" target="_blank">
                                        <i class="fab fa-pinterest-p"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- end col -->

                <div class="col-xl-3 col-md-6 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="800ms">
                    <div class="team-box-style-1">
                        <div class="team-img">
                            <a href="#">
                                <img src="{{asset('/')}}website/media/team/team_2.jpg" alt="team_1" width="551" height="610">
                            </a>
                        </div>
                        <div class="team-content">
                            <h3 class="name"><a href="#">James Stone</a></h3>
                            <span class="designation">Creative Director</span>
                            <ul class="team-social-1 footer-social">
                                <li class="social-item">
                                    <a href="https://www.facebook.com/" class="social-link fb" target="_blank">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li class="social-item">
                                    <a href="https://twitter.com/" class="social-link tw" target="_blank">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li class="social-item"><a href="https://www.linkedin.com/" class="social-link ln"
                                                           target="_blank"><i class="fab fa-linkedin-in"></i></a></li>

                                <li class="social-item">
                                    <a href="https://www.pinterest.com/" class="social-link pn" target="_blank">
                                        <i class="fab fa-pinterest-p"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- end col -->

                <div class="col-xl-3 col-md-6 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="800ms">
                    <div class="team-box-style-1">
                        <div class="team-img">
                            <a href="#">
                                <img src="{{asset('/')}}website/media/team/team_3.jpg" alt="team_1" width="551" height="610">
                            </a>
                        </div>
                        <div class="team-content">
                            <h3 class="name"><a href="#">James Stone</a></h3>
                            <span class="designation">Creative Director</span>
                            <ul class="team-social-1 footer-social">
                                <li class="social-item">
                                    <a href="https://www.facebook.com/" class="social-link fb" target="_blank">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li class="social-item">
                                    <a href="https://twitter.com/" class="social-link tw" target="_blank">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li class="social-item"><a href="https://www.linkedin.com/" class="social-link ln"
                                                           target="_blank"><i class="fab fa-linkedin-in"></i></a></li>

                                <li class="social-item">
                                    <a href="https://www.pinterest.com/" class="social-link pn" target="_blank">
                                        <i class="fab fa-pinterest-p"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- end col -->

                <div class="col-xl-3 col-md-6 wow fadeInUp" data-wow-delay="800ms" data-wow-duration="800ms">
                    <div class="team-box-style-1">
                        <div class="team-img">
                            <a href="#">
                                <img src="{{asset('/')}}website/media/team/team_4.jpg" alt="team_1" width="551" height="610">
                            </a>
                        </div>
                        <div class="team-content">
                            <h3 class="name"><a href="#">James Stone</a></h3>
                            <span class="designation">Creative Director</span>
                            <ul class="team-social-1 footer-social">
                                <li class="social-item">
                                    <a href="https://www.facebook.com/" class="social-link fb" target="_blank">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li class="social-item">
                                    <a href="https://twitter.com/" class="social-link tw" target="_blank">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li class="social-item"><a href="https://www.linkedin.com/" class="social-link ln"
                                                           target="_blank"><i class="fab fa-linkedin-in"></i></a></li>

                                <li class="social-item">
                                    <a href="https://www.pinterest.com/" class="social-link pn" target="_blank">
                                        <i class="fab fa-pinterest-p"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- end col -->

            </div>
            <!-- end row -->

        </div>
        <!-- end container -->
    </section>
    <!-- end team-seciton-style-1 -->

@endsection
