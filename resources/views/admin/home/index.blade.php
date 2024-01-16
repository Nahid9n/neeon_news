@extends('admin.layouts.app')

@section('title')
    Admin Dashboard
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

{{--    Row-1 START --}}
    <div class="row">
        <div class="col-12 col-sm-12">
            <div class="card bg-success product-sales-main">
                <div class="card-header border-bottom">
                    <h3 class="card-title mb-0">Pending Blogs</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="data-table" class="table text-nowrap mb-0 table-bordered">
                            <thead class="table-head">
                            <tr>
                                <th class="bg-transparent border-bottom-0 wp-15">Sl No</th>
                                <th class="bg-transparent border-bottom-0">Author</th>
                                <th class="bg-transparent border-bottom-0">Name</th>
                                <th class="bg-transparent border-bottom-0">Category</th>
                                <th class="bg-transparent border-bottom-0">Blog Images</th>
                                <th class="bg-transparent border-bottom-0">Status</th>
                                <th class="bg-transparent border-bottom-0 no-btn">Action</th>
                            </tr>
                            </thead>
                            <tbody class="table-body">
                            @foreach($blogs as $blog)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <span class="data-image avatar avatar-md rounded-circle" style="background-image: url({{asset('/')}}assets/images/users/11.jpg)"></span>
                                        <div class="user-details ms-2">
                                            <h6 class="mb-0">{{$blog->author}}</h6>
                                            <span class="text-muted fs-12">{{$blog->email}}</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-muted fs-14 fw-semibold"><a href="#" class="text-dark" data-bs-target="#Vertically" data-bs-toggle="modal" >{{$blog->name}}</a></td>
                                <td class="text-muted fs-13"><a href="" class="text-dark">{{$blog->category->name}}</a></td>
                                <td class="text-danger fs-14 fw-semibold"><img width="100" src="{{asset($blog->image)}}" alt=""></td>
                                <td>
                                    {{$blog->status == 1 ? 'published':'pending'}}
                                    <a href="{{route('blog.updateStatus',['id'=>$blog->id])}}" class="{{$blog->status == 1 ? 'btn btn-success':'btn btn-warning'}} mb-1 mx-1"><i class="fa-regular {{$blog->status == 1 ? 'fa-arrow-alt-circle-up':'fa-arrow-alt-circle-down'}}"></i></a>
                                </td>
                                <td>
                                    <div class="d-flex align-items-stretch">
                                        <form action="{{route('blog.destroy', $blog->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" onclick="return confirm('are you sure to delete ?')" class="btn btn-danger me-1"><i class="fa-regular fa-trash-alt"></i></button>
                                        </form>
                                        <a href="#" class="border br-5 px-2 py-1 d-flex align-items-center justify-content-center" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
                                        <div class="dropdown-menu dropdown-menu-start">
                                            <a class="dropdown-item" href="{{route('blog.edit',$blog->id)}}"><i class="fe fe-edit-2 me-2"></i> Edit</a>
{{--                                            <a class="dropdown-item" href="#"><i class="fe fe-info me-2"></i> Info</a>--}}
                                        </div>
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
    <!-- ROW-1 END -->

{{--    Row-2 START --}}
    <div class="row">
        <div class="col-12 col-sm-12">
            <div class="card bg-success product-sales-main">
                <div class="card-header border-bottom">
                    <h3 class="card-title mb-0">All Comments</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="data-table" class="table text-nowrap mb-0 table-bordered">
                            <thead class="table-head">
                            <tr>
                                <th class="bg-transparent border-bottom-0 wp-15">Sl No</th>
                                <th class="bg-transparent border-bottom-0">Author</th>
                                <th class="bg-transparent border-bottom-0">Name</th>
                                <th class="bg-transparent border-bottom-0">Category</th>
                                <th class="bg-transparent border-bottom-0">Blog Images</th>
                                <th class="bg-transparent border-bottom-0">Status</th>
                                <th class="bg-transparent border-bottom-0 no-btn">Action</th>
                            </tr>
                            </thead>
                            <tbody class="table-body">
                            @foreach($blogs as $blog)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <span class="data-image avatar avatar-md rounded-circle" style="background-image: url({{asset('/')}}assets/images/users/11.jpg)"></span>
                                        <div class="user-details ms-2">
                                            <h6 class="mb-0">{{$blog->author}}</h6>
                                            <span class="text-muted fs-12">{{$blog->email}}</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-muted fs-14 fw-semibold"><a href="#" class="text-dark" data-bs-target="#Vertically" data-bs-toggle="modal" >{{$blog->name}}</a></td>
                                <td class="text-muted fs-13"><a href="" class="text-dark">{{$blog->category->name}}</a></td>
                                <td class="text-danger fs-14 fw-semibold"><img width="100" src="{{asset($blog->image)}}" alt=""></td>
                                <td>
                                    {{$blog->status == 1 ? 'published':'pending'}}
                                    <a href="{{route('blog.updateStatus',['id'=>$blog->id])}}" class="{{$blog->status == 1 ? 'btn btn-success':'btn btn-warning'}} mb-1 mx-1"><i class="fa-regular {{$blog->status == 1 ? 'fa-arrow-alt-circle-up':'fa-arrow-alt-circle-down'}}"></i></a>
                                </td>
                                <td>
                                    <div class="d-flex align-items-stretch">
                                        <form action="{{route('blog.destroy', $blog->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" onclick="return confirm('are you sure to delete ?')" class="btn btn-danger me-1"><i class="fa-regular fa-trash-alt"></i></button>
                                        </form>
                                        <a href="#" class="border br-5 px-2 py-1 d-flex align-items-center justify-content-center" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
                                        <div class="dropdown-menu dropdown-menu-start">
                                            <a class="dropdown-item" href="{{route('blog.edit',$blog->id)}}"><i class="fe fe-edit-2 me-2"></i> Edit</a>
{{--                                            <a class="dropdown-item" href="#"><i class="fe fe-info me-2"></i> Info</a>--}}
                                        </div>
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
    <!-- ROW-2 END -->
@endsection

