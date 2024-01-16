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
                <li class="breadcrumb-item active" aria-current="page">Instagram</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->
    <div class="row justify-content-center">
        <div class="col-lg-10 shadow">
            <div class="card shadow">
                <div class="card-header justify-content-center border-bottom">
                    <h2 class="fw-bold">Add Instagram Post Form</h2>
                    <hr>
                </div>
                <div class="card-body">
                    <p class="text-primary fw-bold fs-5">{{session('message')}}</p>
                    <form action="{{route('instagramPost.store')}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                        @csrf
                        <div class="row mb-4">
                            <label for="name" class="col-md-3 form-label">Instagram name</label>
                            <div class="col-md-9">
                                <input class="form-control" value="{{old('name')}}" id="name" name="name" placeholder="Post Title" type="text">
                                <span class="text-danger">{{$errors->has('name')?$errors->first('name'):''}}</span>
                            </div>
                        </div>
                        <div class="row mb-4" hidden>
                            <label for="email" class="col-md-3 form-label">Email</label>
                            <div class="col-md-9">
                                <input class="form-control" value="{{Auth::user()->email}}" id="email" name="email" placeholder="Instagram email" type="email">
                                <span class="text-danger">{{$errors->has('email')?$errors->first('email'):''}}</span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="link" class="col-md-3 form-label">Instagram post Link</label>
                            <div class="col-md-9">
                                <input class="form-control" value="{{old('link')}}" id="link" name="link" placeholder="Instagram post link" type="text">
                                <span class="text-danger">{{$errors->has('link')?$errors->first('link'):''}}</span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="imgInp" class="col-md-3 form-label">Instagram Image</label>
                            <div class="col-md-9">
                                <input type="file" name="image" class="dropify" data-height="200"/>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="radio" class="col-md-3 form-label">status</label>
                            <div class="col-md-9">
                                <input class="" id="published" name="status" checked type="radio" value="1"><label for="published">published</label>
                                <input class="mx-2" id="Unpublished" name="status" type="radio" value="0"><label for="Unpublished">unpublished</label>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="radio" class="col-md-3 form-label"></label>
                            <div class="col-md-9">
                                <button class="btn btn-primary" type="submit">Add New Instagram Post</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
