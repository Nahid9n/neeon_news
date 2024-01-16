@extends('user.layouts.app')

@section('title','Profile Page')
@section('body')
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">Profile</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                <li class="breadcrumb-item active" aria-current="page">Profile</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->

    <!-- ROW-1 OPEN -->
    <div class="row" id="user-profile">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-lg-12 col-md-12 col-xl-6">
                            <div class="d-flex flex-wrap align-items-center">
                                <div class="profile-img-main rounded">
                                    @foreach($userProfiles as $userProfile)
                                        <img src="{{asset($userProfile->image)}}" alt="img" class="m-0 p-1 rounded hrem-6">
                                    @endforeach
                                </div>
                                <div class="ms-4">
                                    <h4></h4>
                                    <p class="text-muted mb-2">{{Session::get('user_name')}}</p>
                                    <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-rss"></i> Follow</a>
                                    <a href="mail-inbox.html" class="btn btn-secondary btn-sm"><i class="fa fa-envelope"></i> E-mail</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-xl-6">
                            <div class="d-md-flex flex-wrap justify-content-lg-end">
                                <div class="media m-3">
                                    <div class="media-icon bg-primary me-3 mt-1">
                                        <i class="fe fe-file-plus fs-20 text-white"></i>
                                    </div>
                                    <div class="media-body">
                                        <span class="text-muted">Posts</span>
                                        <div class="fw-semibold fs-25">
                                            342
                                        </div>
                                    </div>
                                </div>
                                <div class="media m-3">
                                    <div class="media-icon bg-info me-3 mt-1">
                                        <i class="fe fe-users  fs-20 text-white"></i>
                                    </div>
                                    <div class="media-body">
                                        <span class="text-muted">Followers</span>
                                        <div class="fw-semibold fs-25">
                                            937k
                                        </div>
                                    </div>
                                </div>
                                <div class="media m-3">
                                    <div class="media-icon bg-warning me-3 mt-1">
                                        <i class="fe fe-wifi fs-20 text-white"></i>
                                    </div>
                                    <div class="media-body">
                                        <span class="text-muted">Following</span>
                                        <div class="fw-semibold fs-25">
                                            2,876
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="border-top">
                    <div class="wideget-user-tab">
                        <div class="tab-menu-heading">
                            <div class="tabs-menu1">
                                <ul class="nav">
                                    <li><a href="#timeline" class="active show" data-bs-toggle="tab">Timeline</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-content">
                <div class="tab-pane active show" id="timeline">
                    <div class="row row-sm">
                        <div class="col-12">
                            @foreach($blogs as $blog)
                                <div class="card border">
                                    <div class="card-header border-bottom d-block p-4">
                                        <div class="media overflow-visible">
                                            @foreach($userProfiles as $userProfile)
                                            <div class="media-user me-2">

                                                <div class="main-img-user">

                                                        <img alt="" class="rounded-circle avatar-md" src="{{asset($userProfile->image)}}">

                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="mb-0 ms-2">{{$userProfile->name}}</h6><span class="text-primary ms-2">{{$blog->created_at}}</span>
                                            </div>
                                            @endforeach
                                            <div class="ms-auto">
                                                <div class="dropdown show main-contact-star">
                                                    <a class="new option-dots2" data-bs-toggle="dropdown" href=""><i  class="fe fe-more-vertical  tx-18"></i></a>
                                                    <div class="dropdown-menu shadow">
                                                        <a class="dropdown-item" href="#">Edit Post</a>
                                                        <a class="dropdown-item" href="#">Delete Post</a>
                                                        <a class="dropdown-item" href="#">Personal Settings</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">

                                        <h5 class="fw-bold"><a href="">{{$blog->name}}</a></h5>

                                        <p>{{$blog->short_description}}</p>
                                        <div class="row row-sm">
                                            <div class="col">
                                                <a href=""><img alt="img" class="h-200 mb-2 mt-2 me-4 br-5" src="{{asset($blog->image)}}"></a>
                                            </div>
                                        </div>
                                        {{--                                    <div class="media mt-4 profile-footer align-items-center">--}}
                                        {{--                                        <div class="avatar-list avatar-list-stacked me-4">--}}
                                        {{--                                            <span class="avatar avatar-md rounded-circle bradius cover-image" data-bs-image-src= "{{asset('')}}admin/assets/images/users/8.jpg"></span>--}}
                                        {{--                                            <span class="avatar avatar-md rounded-circle bradius cover-image" data-bs-image-src= "{{asset('')}}admin/assets/images/users/7.jpg"></span>--}}
                                        {{--                                            <span class="avatar avatar-md rounded-circle bradius cover-image" data-bs-image-src= "{{asset('')}}admin/assets/images/users/9.jpg"></span>--}}
                                        {{--                                            <span class="avatar avatar-md rounded-circle bradius cover-image" data-bs-image-src= "{{asset('')}}admin/assets/images/users/14.jpg"></span>--}}
                                        {{--                                            <span class="avatar avatar-md rounded-circle bradius cover-image" data-bs-image-src= "{{asset('')}}admin/assets/images/users/11.jpg"></span>--}}
                                        {{--                                            <span class="avatar avatar-md rounded-circle bradius bg-primary">+8</span>--}}
                                        {{--                                        </div>--}}
                                        {{--                                        <div class="media-body">--}}
                                        {{--                                            <h6 class="mb-0 text-bold text-dark-light">28 people like your photo</h6>--}}
                                        {{--                                        </div>--}}
                                        {{--                                    </div>--}}
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- COL-END -->
    </div>
    <!-- ROW-1 CLOSED -->
@endsection
