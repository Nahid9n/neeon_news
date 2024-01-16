<?php

namespace App\Http\Controllers;

use App\Models\InstagramPost;
use Illuminate\Http\Request;

class InstagramPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.instagram-post.index',[
            'instagramPosts'=>InstagramPost::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.instagram-post.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'link'=>'required'
        ],[
            'link.required'=>'post link is required',
        ]);

        InstagramPost::addPost($request);
        return back()->with('message','add Post Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(InstagramPost $instagramPost)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(InstagramPost $instagramPost)
    {
        return view('admin.instagram-post.edit',[
            'InstagramPost'=>InstagramPost::find($instagramPost->id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, InstagramPost $instagramPost)
    {
        InstagramPost::updatePost($request,$instagramPost->id);
        return redirect('instagramPost')->with('message',('Update'.' '.$instagramPost->name.' '.'Post Successfully'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(InstagramPost $instagramPost)
    {
        InstagramPost:: deletePost($instagramPost->id);
        return back()->with('message',('Delete'.' '.$instagramPost->name.' '.'Post Successfully'));
    }
}
