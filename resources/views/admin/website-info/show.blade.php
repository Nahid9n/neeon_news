@extends('admin.layouts.app')
@section('title','blog Details')

@section('body')
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">blog Module</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">blog Details</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->
    <section class="py-5 mt-5">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-12 form-group">
                    <div class="card p-5">
                        <h1 class="text-center text-primary fw-bold pb-5"> blog Details Table</h1>
                        <hr>
                        <div class="row">
                            <div class="col-md-5 text-center">
                                <img width="" class="img-fluid" height="" src="{{asset($blog->image)}}" alt="">
                            </div>
                            <div class="col-md-7">
                                <h3 class="text-success">blog Name : {{$blog->name}}</h3>
                                <p>{{$blog->short_description}}</p>
                                <div class="d-flex">
                                    <abbr title="edit course"><a href="{{route('blog.edit',$blog->id)}}" class="btn btn-primary mb-1 mx-1"><i class="fa-regular fa-edit"></i></a></abbr>
                                    <form action="{{ route('blog.destroy', $blog->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <abbr title="delete course"><button type="submit" onclick="return confirm('are you sure to delete ?')" class="btn btn-danger"><i class="fa-regular fa-trash-alt"></i></button></abbr>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-body">
                                <tr>
                                    <th>blog Id</th>
                                    <td>{{$blog->id}}</td>
                                </tr>
                                <tr>
                                    <th>blog Name</th>
                                    <td>{{$blog->name}}</td>
                                </tr>
                                <tr>
                                    <th>blog Long Description</th>
                                    <td>{!! $blog->long_description !!}</td>
                                </tr>
                                <tr>
                                    <th>Publication Status</th>
                                    <td>{{$blog->status == 1 ? 'published':''}}</td>
                                </tr>
                                <tr>
                                    <th>Action</th>
                                    <td class="text-center d-lg-flex">
                                        <abbr title="edit blog">
                                            <a href="{{route('blog.edit',$blog->id)}}" class="btn btn-primary mb-1 mx-1"><i class="fa-regular fa-edit"></i></a>
                                        </abbr>
                                        <form action="{{ route('blog.destroy', $blog->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <abbr title="delete blog">
                                                <button type="submit" onclick="return confirm('are you sure to delete ?')" class="btn btn-danger"><i class="fa-regular fa-trash-alt"></i></button>
                                            </abbr>
                                        </form>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection


