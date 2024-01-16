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
                                    <li><a href="#accountSettings" class="active show" data-bs-toggle="tab">Account Settings</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-content">
                <div class="tab-pane active show" id="accountSettings">
                    <div class="card">
                        <div class="card-body">
                            <p class="text-center text-success fw-bold">{{session('success')}}</p>
                            <p class="text-center text-success fw-bold">{{session('account')}}</p>
                            @foreach($userProfiles as $userProfile)
                            <form class="form-horizontal" method="POST" action="{{route('user-profile.account-setting.update',['id'=>$userProfile->id])}}">
                                @csrf
                                <div class="mb-4 main-content-label">Account</div>
                                <div class="form-group">
                                    <div class="row row-sm">
                                        <div class="col-md-3">
                                            <label for="name" class="form-label">User Name</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" id="name" name="name" placeholder="User Name" value="{{$userProfile->name}}">
                                            <span class="text-danger">{{$errors->has('name')?$errors->first('name'):''}}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row row-sm">
                                        <div class="col-md-3">
                                            <label for="eMail" class="form-label">Email</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" id="eMail" name="email" placeholder="Email" value="{{Session::get('user_email')}}" readonly>
                                            <span class="text-danger">{{$errors->has('email')?$errors->first('email'):''}}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row row-sm">
                                        <div class="col-md-3">
                                            <button class="btn btn-info my-1 form-label">update account</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            @endforeach

                            @foreach($userProfiles as $userProfile)
                            <form class="form-horizontal" data-select2-id="11" method="POST" action="{{route('user-profile.account-setting.password.update',['id'=>$userProfile->id])}}">
                                @csrf
                                <div class="form-group">
                                    <div class="row row-sm">
                                        <div class="col-md-3">
                                            <label for="old_password" class="form-label">old password</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" id="old_password" name="old_password" placeholder="old password" value="">
                                            <span class="text-danger">{{$errors->has('old_password')?$errors->first('old_password'):''}}</span>
                                            <p class="text-danger">{{session('message')}}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row row-sm">
                                        <div class="col-md-3">
                                            <label for="password" class="form-label">New password</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" id="password" name="password" placeholder="new password" value="">
                                            <span class="text-danger">{{$errors->has('password')?$errors->first('password'):''}}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row row-sm">
                                        <div class="col-md-3">
                                            <label for="confirm_password" class="form-label">Confirm password</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" id="confirm_password" name="confirm_password" placeholder="confirm password" value="">
                                            <span class="text-danger">{{$errors->has('confirm_password')?$errors->first('confirm_password'):''}}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row row-sm">
                                        <div class="col-md-3">
                                            <button class="btn btn-info my-1">update password</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group float-end">
                                    <div class="row row-sm">
                                        <div class="col-md-12">
                                            <a class="btn btn-outline-danger my-1" href="#">Deactivate Account</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                                @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- COL-END -->
    </div>
    <!-- ROW-1 CLOSED -->
@endsection
