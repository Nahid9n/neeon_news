<!-- Start Footer -->
<footer class="footer">

    <div class="footer-top footer-style-1">
        <div class="container">
            <div class="row gutter-30">

                <div class="col-xl-3 col-md-6 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="800ms">
                    @foreach($websiteInfos as $websiteInfo)
                    <div class="footer-widget">

                        <div class="logo footer-logo">
                            <a class="logo bg-light" href="{{route('home')}}">

                                <img width="162" height="52" src="{{asset($websiteInfo->logo)}}" alt="neeon">

                            </a>
                        </div>
                        <p class="text">
                            {{$websiteInfo->short_about_us}}
                        </p>

                        <ul class="footer-social gutter-15">
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
                                <a href="{{$websiteInfo->instagram}}" class="social-link pn" target="_blank">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                            <li class="social-item">
                                <a href="{{$websiteInfo->linkedIn}}" class="social-link wh" target="_blank">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                            </li>
                            <li class="social-item">
                                <a href="{{$websiteInfo->google_plus}}" class="social-link wh" target="_blank">
                                    <i class="fab fa-google-plus"></i>
                                </a>
                            </li>
                            <li class="social-item">
                                <a href="{{$websiteInfo->youtube}}" class="social-link wh" target="_blank">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    @endforeach
                </div>
                <!-- end col -->

                <div class="col-xl-3 col-md-6 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="800ms">
                    <div class="footer-widget">
                        <h3 class="footer-widget-title">Recent Posts</h3>

                        <!--  start footer-post-list -->
                        <div class="footer-post-list">
                            @foreach($blog3 as $blog)
                            <div class="item mb--30">
                                <div class="rt-post post-sm white-style">
                                    <div class="">
                                        <a href="{{route('blog.details',['id'=>$blog->id])}}">
                                            <img src="{{asset($blog->image)}}" alt="post" width="200" height="150">
                                        </a>
                                    </div>
                                    <div class="ms-3 post-content">
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
                        <!--  end footer-post-list -->

                    </div>
                </div>
                <!-- end col -->

                <div class="col-xl-3 col-md-6 wow fadeInUp d-flex justify-content-xl-center justify-content-start"
                     data-wow-delay="400ms" data-wow-duration="800ms">
                    <div class="footer-widget">
                        <h3 class="footer-widget-title">Categories</h3>
                        <ul class="widget-list cat-list">
                            @foreach($categories as $category)
                            <li class="widget-list-item">
                                <a href="{{route('category',['id'=>$category->id])}}" class="widget-list-link">
                                    {{$category->name}}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <!-- end col -->

                <div class="col-xl-3 col-md-6 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="800ms">
                    <div class="footer-widget">
                        <h3 class="footer-widget-title">Instagram</h3>
                        <div class="insta-gallery">
                            @foreach($instagram12 as $instagram)
                            <div class="galleryitem">
                                <a href="{{$instagram->link}}">
                                    <img src="{{asset($instagram->image)}}" width="100" height="90" alt="gallery1">
                                </a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <!-- end col -->

            </div>
        </div>
    </div>
    <!-- End footer top -->

    <div class="footer-bottom">
        <div class="container">
            <div class="footer-bottom-area d-flex align-items-center justify-content-center">
                <p class="copyright-text mb-0 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="800ms">
                    <span class="currentYear"></span> © neeon all right reserved by
                    <a href="" rel="nofollow">Tanvir Hasan Nahid</a>
                </p>
            </div>
        </div>
    </div>
    <!-- End footer bottom -->

</footer>
<!-- End  Footer -->
