@extends('website.master')
@section('title','User Login Page')
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
                        Login
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- End inner page Banner -->
    <section class="py-3">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card bg-dark p-5 card-body">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <img class="img-fluid" src="{{asset('/')}}website/media/gallery/post-lg_54.jpg" alt="">
                            </div>
                            <div class="col-md-6">
                                <p class="text-center fs-3 text-info fw bold">Login Form</p>
                                <p class="text-center py-1">{{session('message')}}</p>
                                <form action="{{route('user.login')}}" method="POST">
                                    @csrf
                                    <div class="form-group mb-3">
                                        <label class="col-md-3 mb-2" for="email">Email</label>
                                        <input class="col-md-5 form-control" type="email" name="email" id="email">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="col-md-3 mb-2" for="password">Password</label>
                                        <input class="col-md-5 form-control" type="password" name="password" id="password">
                                    </div>
                                    <div class="form-group mb-3">
                                        <input type="checkbox" name="password" id="password">
                                        <label class="" for="password">Remember Me</label>

                                    </div>
                                    <div class="form-group mb-3">
                                        <div class="row">
                                            <input class="col-md-5 btn btn-primary" type="submit" value="Login">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="text-center pt-2">
                            <a class="text-center" href="{{route('home')}}">
                                <span class="">Back To Home</span>
                            </a>
                            <p><span>Do not have account.</span><a class="" href="{{route('user.register')}}"> create an Account ? </a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
