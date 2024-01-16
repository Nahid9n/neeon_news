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
                                    <img src="{{asset('')}}assets/images/faces/6.jpg" alt="img" class="m-0 p-1 rounded hrem-6">
                                </div>
                                <div class="ms-4">
                                    <h4></h4>
                                    <p class="text-muted mb-2">Member Since: November 2020</p>
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
                                    <li><a href="#editProfile" data-bs-toggle="tab">Edit Profile</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-content">
                <div class="tab-pane active" id="editProfile">
                    <div class="card">
                        <div class="card-body border-0">
                            <form class="form-horizontal" method="POST" action="{{route('userProfile.store')}}">
                                @csrf
                                <div class="row mb-4">
                                    <p class="mb-4 text-17">Personal Info</p>
                                    <div class="col-md-12 col-lg-12 col-xl-6">
                                        <div class="form-group">
                                            <label for="username" class="form-label">User Name</label>
                                            <input type="text" class="form-control" name="username" id="username" value="{{Session::get('user_name')}}" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-12 col-xl-6">
                                        <div class="form-group">
                                            <label for="firstname" class="form-label">First Name</label>
                                            <input type="text" class="form-control" name="firstname" id="firstname" placeholder="First Name" >
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-12 col-xl-6">
                                        <div class="form-group">
                                            <label for="lastname" class="form-label">last Name</label>
                                            <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Last Name">
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-12 col-xl-6">
                                        <div class="form-group">
                                            <label for="nickname" class="form-label">Nick Name</label>
                                            <input type="text" name="nickname" class="form-control" id="nickname" placeholder="Nick Name">
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-12 col-xl-6">
                                        <div class="form-group">
                                            <label for="designation" class="form-label">Designation</label>
                                            <input type="text" class="form-control" name="designation" id="designation" placeholder="Designation">
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
                                            <input type="text" class="form-control" name="email" id="email" placeholder="Email">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row row-sm">
                                        <div class="col-md-3">
                                            <label for="website" class="form-label">Website</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" id="website" name="website" placeholder="Website" >
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row row-sm">
                                        <div class="col-md-3">
                                            <label for="phoneNumber" class="form-label">Phone</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="phoneNumber" id="phoneNumber" placeholder="phone number">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row row-sm">
                                        <div class="col-md-3">
                                            <label for="address" class="form-label">Address</label>
                                        </div>
                                        <div class="col-md-9">
                                            <textarea class="form-control" id="address" name="address" rows="2" placeholder="Address">San Francisco, CA</textarea>
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
                                            <input type="text" class="form-control" name="twitter" id="twitter" placeholder="twitter">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row row-sm">
                                        <div class="col-md-3">
                                            <label for="facebook" class="form-label">Facebook</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="facebook" id="facebook" placeholder="facebook">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row row-sm">
                                        <div class="col-md-3">
                                            <label for="googlePlus" class="form-label">Google+</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="googlePlus" id="googlePlus" placeholder="google">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row row-sm">
                                        <div class="col-md-3">
                                            <label for="linkedin" class="form-label">Linkedin</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="linkedin" id="linkedin" placeholder="linkedin">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row row-sm">
                                        <div class="col-md-3">
                                            <label for="github" class="form-label">Github</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="github" id="github" placeholder="github">
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
                                            <textarea class="form-control summernote" name="biographicalInfo" id="biographicalInfo" rows="4" placeholder=""></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-4" hidden>
                                    <label for="radio" class="col-md-3 form-label">status</label>
                                    <div class="col-md-9">
                                        <input class="" id="published" name="status"  type="radio" value="1"><label for="published">published</label>
                                        <input class="mx-2" id="Unpublished" name="status" checked type="radio" value="0"><label for="Unpublished">unpublished</label>
                                    </div>
                                </div>
                                <button class="btn btn-success" type="submit">Save Profile</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- COL-END -->
    </div>
    <!-- ROW-1 CLOSED -->
@endsection
