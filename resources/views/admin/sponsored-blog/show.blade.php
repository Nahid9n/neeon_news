@extends('admin.layouts.app')
@section('title','sponsoredBlog Details')

@section('body')
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">sponsoredBlog Module</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">sponsoredBlog Details</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->
    <section class="py-5 mt-5">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-12 form-group">
                    <div class="card p-5">
                        <div class="border-bottom py-5">
                            <div class="row">
                                <div class="col-6">
                                    <h3 class="fw-bold text-end">Sponsored Blog Details Table</h3>
                                </div>
                                <div class="col-5 text-end me-1">
                                    <a href="{{route('sponsoredBlog.create')}}" class="btn text-dark px-5 btn-success">Add Sponsored Blog</a>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-5 text-center">
                                <img class="img-fluid" src="{{asset($sponsoredBlog->image)}}" alt="">
                            </div>
                            <div class="col-md-7">
                                <h3 class="text-success">Blog Name : {{$sponsoredBlog->name}}</h3>
                                <p>{{$sponsoredBlog->short_description}}</p>
                                <div class="d-flex">
                                    <abbr title="edit course"><a href="{{route('sponsoredBlog.edit',$sponsoredBlog->id)}}" class="btn btn-primary mb-1 mx-1"><i class="fa-regular fa-edit"></i></a></abbr>
                                    <form action="{{ route('sponsoredBlog.destroy', $sponsoredBlog->id) }}" method="post">
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
                                    <th class="col-3">sponsoredBlog Id</th>
                                    <td>{{$sponsoredBlog->id}}</td>
                                </tr>
                                <tr>
                                    <th>sponsoredBlog Name</th>
                                    <td>{{$sponsoredBlog->name}}</td>
                                </tr>
                                <tr>
                                    <th>sponsoredBlog Long Description</th>
                                    <td>{!! $sponsoredBlog->long_description !!}</td>
                                </tr>
                                <tr>
                                    <th>Publication Status</th>
                                    <td>{{$sponsoredBlog->status == 1 ? 'published':''}}</td>
                                </tr>
                                <tr>
                                    <th>Action</th>
                                    <td class="text-center d-lg-flex">
                                        <abbr title="edit sponsoredBlog">
                                            <a href="{{route('sponsoredBlog.edit',$sponsoredBlog->id)}}" class="btn btn-primary mb-1 mx-1"><i class="fa-regular fa-edit"></i></a>
                                        </abbr>
                                        <form action="{{ route('sponsoredBlog.destroy', $sponsoredBlog->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <abbr title="delete sponsoredBlog">
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


