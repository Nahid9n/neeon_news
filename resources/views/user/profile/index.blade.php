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
                                            328
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
                                    <li><a href="#profileMain" class="active show" data-bs-toggle="tab">Profile</a></li>
                                    <li><a href="#editProfile" data-bs-toggle="tab">Edit Profile</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-content">
                @foreach($userProfiles as $userProfile)
                <div class="tab-pane active show" id="profileMain">
                    <div class="card">
                        <div class="card-body p-0">
                            <div class="p-5">
                                <h3 class="card-title">Biodata</h3>
                                <p class="text-dark-light">{{$userProfile->biographicalInfo}}</p>
                            </div>
                            <div class="border-top"></div>
                            <div class="table-responsive p-5">
                                <h3 class="card-title">Personal Info</h3>
                                <table class="table row table-borderless">
                                    <tbody class="col-lg-12 col-xl-6 p-0">
                                    <tr>
                                        <td><strong>UserName :{{$userProfile->name}}</strong> </td>
                                    </tr>
                                    <tr>
                                        <td><strong>Full Name : {{$userProfile->firstname . ' '.$userProfile->lastname. ' ' .$userProfile->nickname}}</strong> </td>
                                    </tr>
                                    <tr>
                                        <td><strong>Website :{{$userProfile->website}}</strong> </td>
                                    </tr>
                                    <tr>
                                        <td><strong>Email :{{$userProfile->email}}</strong> </td>
                                    </tr>
                                    <tr>
                                        <td><strong>Phone : {{$userProfile->phoneNumber}} </strong>  </td>
                                    </tr>
                                    <tr>
                                        <td><strong>Designation : {{$userProfile->designation}} </strong>  </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="border-top"></div>
                            <div class="p-5">
                                <h3 class="card-title">Statistics</h3>
                                <div class="profile-cover__info ms-4 ms-auto p-0">
                                    <ul class="nav p-0 border-bottom-0 mb-0">
                                        <li class="border p-2 br-5 bg-light-lightest wpx-100 hpx-70 text-center my-1">
                                            <p class="border-0 mb-0 pb-0 fs-21 fw-bold">({{count($blogs)}})</p>
                                            <p class="fw-bold">Blogs</p>
                                        </li>
                                        <li class="border p-2 br-5 bg-light-lightest wpx-100 hpx-70 text-center mx-2 my-1">
                                            <span class="border-0 mb-0 pb-0 fs-21">245</span>
                                            Followers
                                        </li>
                                        <li class="border p-2 br-5 bg-light-lightest wpx-100 hpx-70 text-center my-1">
                                            <span class="border-0 mb-0 pb-0 fs-21">128</span>
                                            Following
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="border-top"></div>
                            <div class="p-5">
                                <h3 class="card-title">Contact</h3>
                                <div class="d-sm-flex">
                                    <div>
                                        <div class="main-profile-contact-list">
                                            <div class="media mx-2">
                                                <div class="media-icon bg-primary-transparent text-primary"> <i class="fe fe-phone fs-21"></i> </div>
                                                <div class="media-body ms-1">
                                                    <span class="text-muted">Mobile</span>
                                                    <p class="mb-0"> {{$userProfile->phoneNumber}} </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="main-profile-contact-list">
                                            <div class="media mx-2">
                                                <div class="media-icon bg-success-transparent text-success"> <i class="fe fe-slack fs-21"></i> </div>
                                                <div class="media-body ms-2">
                                                    <span class="text-muted">Slack</span>
                                                    <p class="mb-0">{{$userProfile->website}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="main-profile-contact-list">
                                            <div class="media mx-2">
                                                <div class="media-icon bg-info-transparent text-info"> <i class="fe fe-map-pin fs-21"></i> </div>
                                                <div class="media-body ms-2">
                                                    <span class="text-muted">Current Address</span>
                                                    <p class="mb-0">{{$userProfile->address}} </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="border-top"></div>
                            <div class="p-5">
                                <h3 class="card-title">Social</h3>
                                <div class="d-md-flex">
                                    <div>
                                        <div class="main-profile-contact-list">
                                            <div class="media mx-2">
                                                <div class="media-icon bg-primary-transparent text-primary"> <i class="fe fe-facebook fs-21"></i> </div>
                                                <div class="media-body ms-1">
                                                    <a href="">
                                                        <span class="text-muted">Facebook</span>
                                                        <p class="mb-0"> <a href="javascript:void(0)" class="text-default">{{$userProfile->facebook}}</a> </p>
                                                    </a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="main-profile-contact-list">
                                            <div class="media mx-2">
                                                <div class="media-icon bg-primary-transparent text-primary"> <i class="fe fe-github fs-21"></i> </div>
                                                <div class="media-body ms-1">
                                                    <a href="">
                                                        <span class="text-muted">Github</span>
                                                        <p class="mb-0"> <a href="javascript:void(0)" class="text-default">{{$userProfile->github}}</a> </p>
                                                    </a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="main-profile-contact-list">
                                            <div class="media mx-2">
                                                <div class="media-icon bg-success-transparent text-success"> <i class="fe fe-twitter fs-21"></i> </div>
                                                <div class="media-body ms-2">
                                                    <span class="text-muted">Twitter</span>
                                                    <p class="mb-0"> <a href="javascript:void(0)" class="text-default">{{$userProfile->twitter}}</a> </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="main-profile-contact-list">
                                            <div class="media mx-2">
                                                <div class="media-icon bg-info-transparent text-info"> <i class="fe fe-linkedin fs-21"></i> </div>
                                                <div class="media-body ms-2">
                                                    <span class="text-muted">Linkedin</span>
                                                    <p class="mb-0"> <a href="javascript:void(0)" class="text-default">{{$userProfile->linkedin}}</a> </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="tab-pane" id="editProfile">
                    <div class="card">
                        @foreach($userProfiles as $userProfile)
                        <form action="{{route('user-profile.update',['id'=> $userProfile->id])}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body border-0">
                                <div class="row mb-4">
                                    <p class="mb-4 text-17">Personal Info</p>
                                    <div class="col-md-12 col-lg-12 col-xl-6">
                                        <div class="text-center">
                                            <img width="250" class="rounded-circle" src="{{asset($userProfile->image)}}" alt="">
                                        </div>
                                        <div class="form-group">
                                            <label for="username" class="form-label">User Name</label>
                                            <input type="text" class="form-control" name="username" id="username" value="{{Session::get('user_name')}}" readonly>

                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-12 col-xl-6">
                                        <div class="form-group">
                                            <label for="image" class="form-label">User Image</label>
                                            <input class="dropify" type="file" name="image" accept=" image/jpeg, image/png, text/html, application/zip, text/css, text/js"/>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-12 col-xl-6">
                                        <div class="form-group">
                                            <label for="firstname" class="form-label">First Name</label>
                                            <input type="text" class="form-control" name="firstname" id="firstname" contenteditable="true" placeholder="First Name" value="{{$userProfile->firstname}}" >
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-12 col-xl-6">
                                        <div class="form-group">
                                            <label for="lastname" class="form-label">last Name</label>
                                            <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Last Name" value="{{$userProfile->lastname}}" >
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-12 col-xl-6">
                                        <div class="form-group">
                                            <label for="nickname" class="form-label">Nick Name</label>
                                            <input type="text" name="nickname" class="form-control" id="nickname" placeholder="Nick Name" value="{{$userProfile->nickname}}" >
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-12 col-xl-6">
                                        <div class="form-group">
                                            <label for="designation" class="form-label">Designation</label>
                                            <input type="text" class="form-control" name="designation" id="designation" placeholder="Designation" value="{{$userProfile->designation}}" >
                                        </div>
                                    </div>
                                </div>
                                <p class="mb-4 text-17">Contact Info</p>
                                <div class="form-group">
                                    <div class="row row-sm">
                                        <div class="col-md-3">
                                            <label for="email" class="form-label">Email</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="email" id="email" placeholder="Email" value="{{Session::get('user_email')}}" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row row-sm">
                                        <div class="col-md-3">
                                            <label for="website" class="form-label">Website</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" id="website" name="website" placeholder="Website" value="{{$userProfile->website}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row row-sm">
                                        <div class="col-md-3">
                                            <label for="phoneNumber" class="form-label">Phone</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="phoneNumber" id="phoneNumber" placeholder="phone number" value="{{$userProfile->phoneNumber}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row row-sm">
                                        <div class="col-md-3">
                                            <label for="address" class="form-label">Address</label>
                                        </div>
                                        <div class="col-md-9">
                                            <textarea class="form-control" id="address" name="address" rows="2" placeholder="Address">{{$userProfile->address}}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <p class="mb-4 text-17">Social Info</p>
                                <div class="form-group ">
                                    <div class="row row-sm">
                                        <div class="col-md-3">
                                            <label for="twitter" class="form-label">Twitter</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="twitter" id="twitter" placeholder="twitter" value="{{$userProfile->twitter}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row row-sm">
                                        <div class="col-md-3">
                                            <label for="facebook" class="form-label">Facebook</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="facebook" id="facebook" placeholder="facebook" value="{{$userProfile->facebook}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row row-sm">
                                        <div class="col-md-3">
                                            <label for="googlePlus" class="form-label">Google+</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="googlePlus" id="googlePlus" placeholder="google" value="{{$userProfile->googlePlus}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row row-sm">
                                        <div class="col-md-3">
                                            <label for="linkedin" class="form-label">Linkedin</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="linkedin" id="linkedin" placeholder="linkedin" value="{{$userProfile->linkedin}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row row-sm">
                                        <div class="col-md-3">
                                            <label for="github" class="form-label">Github</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="github" id="github" placeholder="github" value="{{$userProfile->github}}" >
                                        </div>
                                    </div>
                                </div>
                                <p class="mb-4 text-17">About Yourself</p>
                                <div class="form-group ">
                                    <div class="row row-sm">
                                        <div class="col-md-3">
                                            <label for="biographicalInfo" class="form-label">Biographical Info</label>
                                        </div>
                                        <div class="col-md-9">
                                            <textarea class="form-control" name="biographicalInfo" id="biographicalInfo" rows="4" placeholder="" >{{$userProfile->biographicalInfo}}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-success">Save Profile Info</button>
                            </div>
                        </form>
                        @endforeach
                    </div>
                </div>
            </div>
        </div><!-- COL-END -->
    </div>
    <!-- ROW-1 CLOSED -->
@endsection
