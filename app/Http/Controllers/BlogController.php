<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.blog.index',[
            'blogs'=>Blog::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.blog.add',[
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
        Blog::addBlog($request);
        return back()->with('message','add new blog successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        return view('admin.blog.show',[
            'blog'=>$blog,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        return view('admin.blog.edit',[
            'blog'=>Blog::find($blog->id),
            'categories'=>Category::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        Blog::updateBlog($request,$blog->id);
        return redirect('blog')->with('message',('Update'.' '.$blog->name.' '.'blog successfully'));
    }
    public function updateStatus($id){
        $this->message = Blog::updateBlogStatus($id);
        return back()->with('message',$this->message);
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        Blog::deleteBlog($blog->id);
        return back()->with('message',('Delete'.' '.$blog->name.' '.'blog successfully'));
    }

}
