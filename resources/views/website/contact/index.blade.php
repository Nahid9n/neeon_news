@extends('website.master')
@section('title','Contact Page')
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
                        Contact Us
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- End inner page Banner -->
    @foreach($websiteInfos as $websiteInfo)
    <!-- start contact-section-layout-1 -->
    <div class="contact-section-layout-1 section-padding-2">
        <div class="container">
            <div class="row gutter-30 justify-content-between align-items-center">
                <div class="col-xl-6 col-lg-6 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="800ms">
                    <div class="contact-wrap-area-1">

                        <div class="rt-section-heading-style-2">
                            <span class="sub-title">How may we help you</span>
                            <h2 class="heading-tilte">
                                Office Information
                            </h2>
                            <p>
                                Mhen an unknown printer took a galley of type and scrambled it to make a type
                                specimen book. It has survived not only five centuries, but also the leap into
                                remaining essentially unchanged.
                            </p>
                        </div>

                        <div class="contact-list-area-1 ">
                            <ul class="contact-list-style-1 clearfix">
                                <li class="list-item media">
                                    <div class="list-icon">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <div class="list-content">
                                        <span>{{$websiteInfo->address}}</span>
                                    </div>
                                </li>
                                <br>
                                <li class="list-item media">
                                    <div class="list-icon">

                                        <i class="far fa-envelope"></i>
                                    </div>
                                    <div class="list-content">
                                       <span>
                                          <a href="mailto:infonouka@gmail.com">{{$websiteInfo->email}}</a>
                                       </span>
                                    </div>
                                </li>
                                <li class="list-item media">
                                    <div class="list-icon">
                                        <i class="fas fa-phone-alt"></i>
                                    </div>
                                    <div class="list-content">
                                        <span><a href="tel:+1238895600">{{$websiteInfo->mobile_number}}</a></span>
                                        <span><a href="tel:+1238895600">{{$websiteInfo->mobile_optional}}</a></span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- end col -->

                <div class="col-xl-5 col-lg-6 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="800ms">
                    <form action="#" class="contact-form-style-1 rt-contact-form">
                        <h4 class="form-title">Leave a Message</h4>
                        <div class="form-group">
                            <input type="text" class="form-control rt-form-control" placeholder="Name *" name="name"
                                   id="name" data-error="Name field is required" required>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control rt-form-control" placeholder="E-mail *"
                                   name="email" id="email" data-error="Email field is required" required>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="tel" class="form-control rt-form-control" placeholder="Phone *" name="phone"
                                   id="phone" data-error="Phone number is required" required>
                            <div class="help-block with-errors"></div>
                        </div>

                        <div class="form-group">
                              <textarea name="message" id="message" class="form-control rt-form-control rt-textarea"
                                        placeholder="Message *" data-error="Message field is required" required></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                        <button type="submit" class="submit-btn">Submit Now</button>
                        <div class="form-response"></div>
                    </form>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end contact-section-layout-1 -->

    <!-- start  Map Section -->
    <div class="map-section-style-1">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="map-wrapper map-style-1">
                        <iframe class="map" src="{{$websiteInfo->map}}" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End  Map Section -->
    @endforeach
@endsection
