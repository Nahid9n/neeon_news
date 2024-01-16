@extends('user.layouts.app')

@section('title')
    User Dashboard
@endsection

@section('body')

    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">Dashboard</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->

    <!-- ROW-4 -->
    <div class="row">
        <div class="col-12 col-sm-12">
            <div class="card bg-azure-light product-sales-main">
                <div class="card-header border-bottom">
                    <h3 class="card-title mb-0">Your All Blogs</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example3" class="table table-bordered text-nowrap border-bottom">
                            <thead class="table-head">
                            <tr>
                                <th class="bg-transparent border-bottom-0">Blog Image</th>
                                <th class="bg-transparent border-bottom-0">Name</th>
                                <th class="bg-transparent border-bottom-0">Author</th>
                                <th class="bg-transparent border-bottom-0">Category</th>
                                <th class="bg-transparent border-bottom-0">Status</th>
                                <th class="bg-transparent border-bottom-0 no-btn">Action</th>
                            </tr>
                            </thead>
                            <tbody class="table-body">
                            @foreach($blogs as $blog)
                                <tr>
                                    <td class="text-danger fs-14 fw-semibold"><img width="100" src="{{asset($blog->image)}}" alt=""></td>
                                    <td class="text-muted fs-14 fw-semibold"><a href="#" class="text-dark" data-bs-target="#Vertically" data-bs-toggle="modal" >{{$blog->name}}</a></td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <span class="data-image avatar avatar-md rounded-circle" style="background-image: url({{asset('/')}}assets/images/users/11.jpg)"></span>
                                            <div class="user-details ms-2">
                                                <h6 class="mb-0">{{$blog->author}}</h6>
                                                <span class="text-muted fs-12">{{$blog->email}}</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-muted fs-13"><a href="" class="text-dark">{{$blog->category->name}}</a></td>
                                    <td>
                                        {{$blog->status == 1 ? 'published':'pending'}}
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-stretch">
                                            <a href="{{route('userBlog.edit',$blog->id)}}" class="border bg-success br-5 px-2 mx-1 py-1 d-flex align-items-center justify-content-center"><i class="fa fa-regular text-dark fa-edit"></i></a>
                                            <form action="{{route('userBlog.destroy', $blog->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" onclick="return confirm('are you sure to delete ?')" class="btn btn-danger me-1"><i class="fa-regular fa-trash-alt"></i></button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div><!-- COL END -->
    </div>
    <!-- ROW-4 END -->
@endsection

