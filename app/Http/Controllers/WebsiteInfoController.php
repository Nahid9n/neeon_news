<?php

namespace App\Http\Controllers;

use App\Models\WebsiteInfo;
use Illuminate\Http\Request;

class WebsiteInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.website-info.index',[
            'websiteInfos'=>WebsiteInfo::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
//    public function create()
//    {
//        return view('admin.website-info.add');
//    }

    /**
     * Store a newly created resource in storage.
     */
//    public function store(Request $request)
//    {
//        WebsiteInfo::newInfo($request);
//        return redirect('websiteInfos');
//    }

    /**
     * Display the specified resource.
     */
    public function show(WebsiteInfo $websiteInfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(WebsiteInfo $websiteInfo)
    {
        return view('admin.website-info.edit',[
            'websiteInfo'=>WebsiteInfo::find($websiteInfo->id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, WebsiteInfo $websiteInfo)
    {
        WebsiteInfo::updateInfo($request,$websiteInfo->id);
        return redirect('websiteInfos')->with('message','update info successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(WebsiteInfo $websiteInfo)
    {
        //
    }
}
