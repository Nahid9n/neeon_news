<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Blog;
use App\Models\UserAuth;
use App\Models\UserProfile;
use Illuminate\Http\Request;
use Session;

class UserController extends Controller
{
    public function dashboard(){
        return view('user.dashboard.index',[
            'blogs'=>Blog::where('email',Session::get('user_email'))->get(),
        ]);
    }
    public function profile(){
        return view('user.profile.index',[
            'userProfiles'=>UserAuth::where('email',Session::get('user_email'))->get(),
            'users'=>UserAuth::where('email', Session::get('user_email'))->get(),
            'blogs'=>Blog::where('email',Session::get('user_email'))->get(),
        ]);
    }
    public function editProfile(){
        return view('user.profile.edit-profile',[
            'userProfiles'=>UserAuth::where('email',Session::get('user_email'))->get(),
            'users'=>UserAuth::where('email', Session::get('user_email'))->get(),
            'blogs'=>Blog::where('email',Session::get('user_email'))->get(),
        ]);
    }
    public function timeline(){
        return view('user.profile.timeline',[
            'userProfiles'=>UserAuth::where('email',Session::get('user_email'))->get(),
            'users'=>UserAuth::where('email', Session::get('user_email'))->get(),
            'blogs'=>Blog::where('email',Session::get('user_email'))->get(),
        ]);
    }
    public function accountSetting(){
        return view('user.profile.account-setting',[
            'userProfiles'=>UserAuth::where('email',Session::get('user_email'))->get(),
            'users'=>UserAuth::where('email', Session::get('user_email'))->get(),
            'blogs'=>Blog::where('email',Session::get('user_email'))->get(),
        ]);
    }
}
