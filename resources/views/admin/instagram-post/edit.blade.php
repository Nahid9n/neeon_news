@extends('admin.layouts.app')
@section('title','Instagram Post Module')
@section('body')
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">Instagram Post Module</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Instagram Post</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->
    <div class="row justify-content-center">
        <div class="col-lg-10 shadow">
            <div class="card shadow">
                <div class="card-header justify-content-center border-bottom">
                    <h2 class="fw-bold">Edit Instagram Post Form</h2>
                    <hr>
                </div>
                <div class="card-body">
                    <p class="text-primary fw-bold fs-5">{{session('message')}}</p>
                    <form action="{{route('instagramPost.update',$InstagramPost->id)}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                        @csrf
                        @method('PUT')
                        <div class="row mb-4">
                            <label for="name" class="col-md-3 form-label">Post name</label>
                            <div class="col-md-9">
                                <input class="form-control" value="{{$InstagramPost->name}}" id="name" name="name" placeholder="InstagramPost name" type="text">
                                <span class="text-danger">{{$errors->has('name')?$errors->first('name'):''}}</span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="email" class="col-md-3 form-label">Email</label>
                            <div class="col-md-9">
                                <input class="form-control" value="{{$InstagramPost->email}}" id="email" name="email" placeholder="InstagramPost email" type="text" readonly>
                                <span class="text-danger">{{$errors->has('email')?$errors->first('email'):''}}</span>
                            </div>
                        </div>
                        <div class="row mb-4" >
                            <label for="link" class="col-md-3 form-label">Post Link</label>
                            <div class="col-md-9">
                                <input class="form-control" value="{{$InstagramPost->link}}" id="link" name="link" placeholder="InstagramPost link" type="text">
                                <span class="text-danger">{{$errors->has('link')?$errors->first('link'):''}}</span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="imgInp" class="col-md-3 form-label">InstagramPost Image</label>
                            <div class="col-md-9">
                                <input type="file" id="imgInp" class="dropify" name="image" data-height="200"/>
                                <img width="120" class="my-1" src="{{asset($InstagramPost->image)}}" id="inputImage" alt="">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="radio" class="col-md-3 form-label">status</label>
                            <div class="col-md-9">
                                <input class="" id="published" name="status" {{$InstagramPost->status == 1 ? 'checked':''}}  type="radio" value="1"><label for="published">published</label>
                                <input class="mx-2" id="Unpublished" name="status" {{$InstagramPost->status == 0 ? 'checked':''}} type="radio" value="0"><label for="Unpublished">unpublished</label>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="radio" class="col-md-3 form-label"></label>
                            <div class="col-md-9">
                                <button class="btn btn-primary" type="submit">Update Instagram Post</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
