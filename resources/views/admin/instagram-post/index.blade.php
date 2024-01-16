@extends('admin.layouts.app')
@section('title','Manage Instagram Post')
@section('body')
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">Instagram Post Module</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Instagram Post</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->
    <!-- Row -->
    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card">
                <div class="border-bottom py-5">
                    <div class="row">
                        <div class="col-6">
                            <h3 class="fw-bold text-end">Instagram Post Table</h3>
                        </div>
                        <div class="col-5 text-end me-1">
                            <a href="{{route('instagramPost.create')}}" class="btn text-dark px-5 btn-success">Add Instagram Post</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <p class="text-primary text-center fw-bold fs-6">{{session('message')}}</p>
                    <div class="table-responsive">
                        <table id="example3" class="table table-bordered text-nowrap border-bottom">
                            <thead>
                            <tr class="text-center">
                                <th class="border-bottom-0">SL No</th>
                                <th class="border-bottom-0">Name</th>
                                <th class="border-bottom-0">Email</th>
                                <th class="border-bottom-0">Link</th>
                                <th class="border-bottom-0">Image</th>
                                <th class="border-bottom-0">Status</th>
                                <th class="border-bottom-0">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($instagramPosts as $instagramPost)
                                <tr class="text-center">
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$instagramPost->name}}</td>
                                    <td>{{$instagramPost->email}}</td>
                                    <td>{{$instagramPost->link}}</td>
                                    <td><img width="200" src="{{asset($instagramPost->image)}}" alt=""></td>
                                    <td>{{$instagramPost->status == 1 ?'published':'unpublished'}}</td>
                                    <td class="text-center">
                                        <a href="{{route('instagramPost.edit',$instagramPost->id)}}" class="btn btn-primary mb-1"><i class="fa-regular fa-edit"></i></a>
                                        <form action="{{route('instagramPost.destroy',$instagramPost->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" onclick="return confirm('are you sure to delete ?')" class="btn btn-danger"><i class="fa-regular fa-trash-alt"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Row -->

@endsection
