<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin.home.index',[
            'blogs'=>Blog::where('status',0)->get(),
        ]);
    }
}
