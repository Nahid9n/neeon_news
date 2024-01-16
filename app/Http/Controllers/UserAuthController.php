<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\UserAuth;
use Illuminate\Http\Request;
use Session;
use URL;

class UserAuthController extends Controller
{
    private $user,$account;

    public function index(){
        return view('website.login.index');
    }
    public function login(Request $request){
        $this->user = UserAuth::where('email',$request->email)->first();
        if($this->user){
            if(password_verify($request->password, $this->user->password)){
                Session::put('user_id',$this->user->id);
                Session::put('user_name',$this->user->name);
                Session::put('user_email',$this->user->email);
                return redirect('/');
            }
            else
            {
                return back()->with('message','sorry....invalid password.');
            }
        }
        else{
            return back()->with('message','sorry....invalid email.');
        }
    }
    public function indexRegister(){
        return view('website.register.index');
    }
    public function register(Request $request){

        $this->user = UserAuth::registerUser($request);
        Session::put('user_id',$this->user->id);
        Session::put('user_name',$this->user->name);
        Session::put('user_email',$this->user->email);
        return redirect('/');
    }
    public function logout(){
        Session::destroy('user_id');
        Session::destroy('user_name');
        Session::destroy('user_email');
        return redirect('/');
    }
    public function edit($id){
    $this->userProfile = UserAuth::find($id);
    return view('user.profile.index',[
        'userProfile'=>$this->userProfile,
    ]);
    }
    public function updateProfile(Request $request,$id){
        UserAuth::updateUser($request,$id);
        return redirect('/user-profile')->with('message','update profile success');
    }
    public function updateAccount(Request $request,$id){
        $this->account = UserAuth::find($id);

        $this->validate($request,[
            'name'=>'required',
        ],[
            'name.required'=>'name field is required',
        ]);
        $this->account->name = $request->name;
        $this->account->save();
        Session::put('user_name',$this->account->name);
        return redirect('/user-profile/account-setting')->with('account','update Account Info success');
    }
    public function updateAccountPassword(Request $request,$id){


        $this->account = UserAuth::find($id)->first();

        $this->validate($request,[
            'old_password'=>'required',
            'password'=>'required',
            'confirm_password'=>'required',
        ],[
            'old_password.required'=>'old_password field is required',
            'password.required'=>'password field is required',
            'confirm_password.required'=>'confirm_password field is required',
        ]);
        if($this->account){
            if(password_verify($request->old_password , $this->account->password)){
                $this->account->password = bcrypt($request->password);
                $this->account->confirm_password = bcrypt($this->account->password);
            }
            else
            {
                return back()->with('message','sorry....old password does not matched.');
            }
        }

        $this->account->save();
        return redirect('/user-profile/account-setting')->with('success','update Password success');
    }


}
