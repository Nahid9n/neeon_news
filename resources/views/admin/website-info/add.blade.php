{{--@extends('admin.layouts.app')--}}
{{--@section('title','Website Info Module')--}}
{{--@section('body')--}}
{{--    <!-- PAGE-HEADER -->--}}
{{--    <div class="page-header">--}}
{{--        <div>--}}
{{--            <h1 class="page-title">Website Info Module</h1>--}}
{{--        </div>--}}
{{--        <div class="ms-auto pageheader-btn">--}}
{{--            <ol class="breadcrumb">--}}
{{--                <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>--}}
{{--                <li class="breadcrumb-item active" aria-current="page">Add Website Infos</li>--}}
{{--            </ol>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <!-- PAGE-HEADER END -->--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-lg-10 shadow">--}}
{{--            <div class="card shadow">--}}
{{--                <div class="card-header justify-content-center border-bottom">--}}
{{--                    <h2 class="fw-bold">Add Website Infos Form</h2>--}}
{{--                    <hr>--}}
{{--                </div>--}}
{{--                <div class="card-body">--}}
{{--                    <p class="text-primary fw-bold fs-5">{{session('message')}}</p>--}}
{{--                    <form action="{{route('websiteInfos.store')}}" method="POST" enctype="multipart/form-data" class="form-horizontal">--}}
{{--                        @csrf--}}
{{--                        <div class="row mb-4">--}}
{{--                            <label for="email" class="col-md-3 form-label">Email Address</label>--}}
{{--                            <div class="col-md-9">--}}
{{--                                <input class="form-control" value="{{old('email')}}" id="email" name="email" placeholder="Email Address" type="text">--}}
{{--                                <span class="text-danger">{{$errors->has('name')?$errors->first('name'):''}}</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="row mb-4">--}}
{{--                            <label for="email_other" class="col-md-3 form-label">Other Email Address <span class="text-muted">(optional)</span></label>--}}
{{--                            <div class="col-md-9">--}}
{{--                                <input class="form-control" value="{{old('email_other')}}" id="email_other" name="email_other" placeholder="Other Email Address" type="text">--}}
{{--                                <span class="text-danger">{{$errors->has('email_other')?$errors->first('email_other'):''}}</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="row mb-4">--}}
{{--                            <label for="email" class="col-md-3 form-label">Address</label>--}}
{{--                            <div class="col-md-9">--}}
{{--                                <input class="form-control" value="" id="address" name="address" placeholder="Address" type="text" >--}}
{{--                                <span class="text-danger">{{$errors->has('name')?$errors->first('name'):''}}</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="row mb-4">--}}
{{--                            <label for="mobile_number" class="col-md-3 form-label">Mobile Number</label>--}}
{{--                            <div class="col-md-9">--}}
{{--                                <input class="form-control" value="" id="mobile_number" name="mobile_number" placeholder="Mobile Number" type="text" >--}}
{{--                                <span class="text-danger">{{$errors->has('name')?$errors->first('name'):''}}</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="row mb-4">--}}
{{--                            <label for="mobile_optional" class="col-md-3 form-label">Other Mobile Number <span class="text-muted">(optional)</span></label>--}}
{{--                            <div class="col-md-9">--}}
{{--                                <input class="form-control" value="" id="mobile_optional" name="mobile_optional" placeholder="Other Mobile Number" type="text" >--}}
{{--                                <span class="text-danger">{{$errors->has('mobile_number')?$errors->first('mobile_number'):''}}</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="row mb-4">--}}
{{--                            <label for="facebook" class="col-md-3 form-label">Facebook <span class="text-muted">(optional)</span></label>--}}
{{--                            <div class="col-md-9">--}}
{{--                                <input class="form-control" value="" id="facebook" name="facebook" placeholder="facebook " type="text" >--}}
{{--                                <span class="text-danger">{{$errors->has('mobile_number')?$errors->first('mobile_number'):''}}</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="row mb-4">--}}
{{--                            <label for="twitter" class="col-md-3 form-label">Twitter <span class="text-muted">(optional)</span></label>--}}
{{--                            <div class="col-md-9">--}}
{{--                                <input class="form-control" value="" id="twitter" name="twitter" placeholder="twitter " type="text" >--}}
{{--                                <span class="text-danger">{{$errors->has('twitter')?$errors->first('twitter'):''}}</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="row mb-4">--}}
{{--                            <label for="instagram" class="col-md-3 form-label">Instagram <span class="text-muted">(optional)</span></label>--}}
{{--                            <div class="col-md-9">--}}
{{--                                <input class="form-control" value="" id="instagram" name="instagram" placeholder="instagram " type="text" >--}}
{{--                                <span class="text-danger">{{$errors->has('instagram')?$errors->first('instagram'):''}}</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="row mb-4">--}}
{{--                            <label for="linkedIn" class="col-md-3 form-label">linkedIn <span class="text-muted">(optional)</span></label>--}}
{{--                            <div class="col-md-9">--}}
{{--                                <input class="form-control" value="" id="linkedIn" name="linkedIn" placeholder="linkedIn " type="text" >--}}
{{--                                <span class="text-danger">{{$errors->has('linkedIn')?$errors->first('linkedIn'):''}}</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="row mb-4">--}}
{{--                            <label for="google_plus" class="col-md-3 form-label">Google plus+ <span class="text-muted">(optional)</span></label>--}}
{{--                            <div class="col-md-9">--}}
{{--                                <input class="form-control" value="" id="google_plus" name="google_plus" placeholder="google_plus " type="text" >--}}
{{--                                <span class="text-danger">{{$errors->has('google_plus')?$errors->first('google_plus'):''}}</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="row mb-4">--}}
{{--                            <label for="youtube" class="col-md-3 form-label">Youtube <span class="text-muted">(optional)</span></label>--}}
{{--                            <div class="col-md-9">--}}
{{--                                <input class="form-control" value="" id="youtube" name="youtube" placeholder="youtube " type="text" >--}}
{{--                                <span class="text-danger">{{$errors->has('youtube')?$errors->first('youtube'):''}}</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="row mb-4">--}}
{{--                            <div class="form-group ps-0 d-lg-flex col-md-12">--}}
{{--                                <label class="col-md-3 form-label">website Logo</label>--}}
{{--                                <div class="col-md-9">--}}
{{--                                    <input class="dropify" type="file" name="logo" accept=" image/jpeg, image/png, text/html, application/zip, text/css, text/js"/>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="row mb-4">--}}
{{--                            <div class="form-group ps-0 d-lg-flex col-md-12">--}}
{{--                                <label class="col-md-3 form-label">website Banner</label>--}}
{{--                                <div class="col-md-9">--}}
{{--                                    <input class="dropify" type="file" name="banner" accept=" image/jpeg, image/png, text/html, application/zip, text/css, text/js"/>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="row mb-4">--}}
{{--                            <label for="short_about_us" class="col-md-3 form-label">Short About Us</label>--}}
{{--                            <div class="col-md-9">--}}
{{--                                <textarea class="form-control" id="short_about_us" name="short_about_us" placeholder="short about us" type="text" cols="30" rows="5"></textarea>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="row mb-4">--}}
{{--                            <label for="about_us" class="col-md-3 form-label">About Us</label>--}}
{{--                            <div class="col-md-9">--}}
{{--                                <textarea class="summernote" id="about_us" name="about_us" placeholder="about_us" type="text" cols="30" rows="5"></textarea>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="row mb-4">--}}
{{--                            <label for="radio" class="col-md-3 form-label">status</label>--}}
{{--                            <div class="col-md-9">--}}
{{--                                <input class="" id="published" name="status" checked type="radio" value="1"><label for="published">published</label>--}}
{{--                                <input class="mx-2" id="Unpublished" name="status" type="radio" value="0"><label for="Unpublished">unpublished</label>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="row mb-4">--}}
{{--                            <label for="radio" class="col-md-3 form-label"></label>--}}
{{--                            <div class="col-md-9">--}}
{{--                                <button class="btn btn-primary" type="submit">Create New websiteInfos</button>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--@endsection--}}
