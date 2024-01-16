@extends('admin.layouts.app')
@section('title','Website Info')

@section('body')
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">Website Info Module</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Website Info Details</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->
    <section class="py-5 mt-5">
        <div class="container-fluid">
            <div class="row justify-content-center">
                @foreach($websiteInfos as $websiteInfo)
                <div class="col-md-12 form-group">
                    <div class="card p-2">
                        <h1 class="text-center text-primary fw-bold pb-5"> Website Info Details Table</h1>
                        <hr>
                        <div class="card-body">
                            <table class="table table-bordered table-body">
                                <tr>
                                    <th class="col-3">Website Email</th>
                                    <td class="col-8">{{$websiteInfo->email}}</td>
                                </tr>
                                <tr>
                                    <th class="col-3">Website Other Email</th>
                                    <td>{{$websiteInfo->email_other}}</td>
                                </tr>
                                <tr>
                                    <th class="col-3">Website address</th>
                                    <td>{{$websiteInfo->address}}</td>
                                </tr>
                                <tr>
                                    <th class="col-3">Mobile Number</th>
                                    <td>{{$websiteInfo->mobile_number}}</td>
                                </tr>
                                <tr>
                                    <th class="col-3">Optional Mobile Number</th>
                                    <td>{{$websiteInfo->mobile_optional}}</td>
                                </tr>
                                <tr>
                                    <th class="col-3">Facebook</th>
                                    <td>{{$websiteInfo->facebook}}</td>
                                </tr>
                                <tr>
                                    <th class="col-3">Twitter</th>
                                    <td>{{$websiteInfo->twitter}}</td>
                                </tr>
                                <tr>
                                    <th class="col-3">Instagram</th>
                                    <td>{{$websiteInfo->instagram}}</td>
                                </tr>
                                <tr>
                                    <th class="col-3">LinkedIn</th>
                                    <td>{{$websiteInfo->linkedIn}}</td>
                                </tr>
                                <tr>
                                    <th class="col-3">Google+</th>
                                    <td>{{$websiteInfo->google_plus}}</td>
                                </tr>
                                <tr>
                                    <th class="col-3">Youtube</th>
                                    <td>{{$websiteInfo->youtube}}</td>
                                </tr>
                                <tr>
                                    <th class="col-3">Logo</th>
                                    <td><img width="200" src="{{asset($websiteInfo->logo)}}" alt=""></td>
                                </tr>
                                <tr>
                                    <th class="col-3">Banner</th>
                                    <td><img width="200" src="{{asset($websiteInfo->banner)}}" alt=""></td>
                                </tr>
{{--                                <tr>--}}
{{--                                    <th class="col-3">Map</th>--}}
{{--                                    <td>{{$websiteInfo->map}}</td>--}}
{{--                                </tr>--}}
                                <tr>
                                    <th class="col-3">About us Short</th>
                                    <td>{{$websiteInfo->short_about_us}}</td>
                                </tr>
                                <tr>
                                    <th class="col-3">About us</th>
                                    <td>{!! $websiteInfo->about_us !!}</td>
                                </tr>
                                <tr>
                                    <th class="col-3">Publication Status</th>
                                    <td>{{$websiteInfo->status == 1 ? 'published':''}}</td>
                                </tr>
                                <tr>
                                    <th class="col-3">Action</th>
                                    <td class="text-center d-lg-flex">
                                        <abbr title="edit Website">
                                            <a href="{{route('websiteInfos.edit',$websiteInfo->id)}}" class="btn btn-primary mb-1 mx-1"><i class="fa-regular fa-edit"></i></a>
                                        </abbr>
                                        <form action="{{ route('websiteInfos.destroy', $websiteInfo->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <abbr title="delete Website">
                                                <button type="submit" onclick="return confirm('are you sure to delete ?')" class="btn btn-danger"><i class="fa-regular fa-trash-alt"></i></button>
                                            </abbr>
                                        </form>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>

                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection


