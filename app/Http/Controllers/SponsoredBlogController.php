<?php

namespace App\Http\Controllers;

use App\Models\SponsoredBlog;
use Illuminate\Http\Request;
use App\Models\Category;

class SponsoredBlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.sponsored-blog.index',[
            'sponsoredBlogs'=>SponsoredBlog::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.sponsored-blog.add',[
            'categories'=>Category::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'author'=>'required',
        ],[
            'name.required'=>'name field is required',
            'author.required'=>'author field is required',
        ]);
        SponsoredBlog::addBlog($request);
        return back()->with('message','add new blog successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(SponsoredBlog $sponsoredBlog)
    {
        return view('admin.sponsored-blog.show',[
            'sponsoredBlog'=>$sponsoredBlog,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SponsoredBlog $sponsoredBlog)
    {
        return view('admin.sponsored-blog.edit',[
            'sponsoredBlog'=>SponsoredBlog::find($sponsoredBlog->id),
            'categories'=>Category::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SponsoredBlog $sponsoredBlog)
    {
        SponsoredBlog::updateBlog($request,$sponsoredBlog->id);
        return redirect('sponsoredBlog')->with('message',('Update'.' '.$sponsoredBlog->name.' '.'sponsoredBlog successfully'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SponsoredBlog $sponsoredBlog)
    {
        SponsoredBlog::deleteBlog($sponsoredBlog->id);
        return back()->with('message',('Delete'.' '.$sponsoredBlog->name.' '.'sponsoredBlog successfully'));
    }
}
