<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Session;

class UserBlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('user.blog.index',[
            'blogs'=>Blog::where('email',Session::get('user_email'))->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.blog.add',[
            'categories' =>Category::where('status', 1)->get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Blog::addBlog($request);
        return back()->with('message','add blog successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('user.blog.show',[
            'blog'=>Blog::find($id),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('user.blog.edit',[
            'blog'=>Blog::find($id),
            'categories' =>Category::where('status', 1)->get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Blog::updateBlog($request,$id);
        return redirect('userBlog')->with('message','update blog successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Blog::deleteBlog($id);
    }
}
