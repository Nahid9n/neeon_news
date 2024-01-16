<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use App\Models\UserAuth;
use App\Models\UserProfile;
use Illuminate\Http\Request;
use Session;

class UserProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('user.profile.index',[
            'profiles'=>UserProfile::where('email',Session::get('user_email'))->get(),
            'users'=>UserAuth::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
//    public function create()
//    {
//        return view('user.profile.add');
//    }

    /**
     * Store a newly created resource in storage.
     */
//    public function store(Request $request)
//    {
//        UserProfile::addProfile($request);
//        return back()->with('message','success');
//    }

    /**
     * Display the specified resource.
     */
    public function show(UserProfile $userProfile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UserProfile $userProfile)
    {
        $this->userProfile = UserAuth::find($userProfile->id);
        return view('user.profile.edit',['userProfile'=>$this->userProfile]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, UserProfile $userProfile)
    {
        UserProfile::updateProfile($request,$userProfile->id);
        return redirect('userProfile')->with('message','update profile info successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserProfile $userProfile)
    {

    }
}
