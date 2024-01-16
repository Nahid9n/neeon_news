<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    use HasFactory;
    private static $profile;

    public static function addProfile($request){

        self::$profile = new UserProfile();
        self::$profile->username = $request->username;
        self::$profile->firstname = $request->firstname;
        self::$profile->lastname = $request->lastname;
        self::$profile->nickname = $request->nickname;
        self::$profile->designation = $request->designation;
        self::$profile->email = $request->email;
        self::$profile->website = $request->website;
        self::$profile->phoneNumber = $request->phoneNumber;
        self::$profile->address = $request->address;
        self::$profile->twitter = $request->twitter;
        self::$profile->facebook = $request->facebook;
        self::$profile->googlePlus = $request->googlePlus;
        self::$profile->linkedin = $request->linkedin;
        self::$profile->github = $request->github;
        self::$profile->biographicalInfo = $request->biographicalInfo;
        self::$profile->status = $request->status;
        self::$profile->save();
    }
    public static function updateProfile($request,$id){
        self::$profile = UserProfile::find($id);
        self::$profile->username = $request->username;
        self::$profile->firstname = $request->firstname;
        self::$profile->lastname = $request->lastname;
        self::$profile->nickname = $request->nickname;
        self::$profile->designation = $request->designation;
        self::$profile->email = $request->email;
        self::$profile->website = $request->website;
        self::$profile->phoneNumber = $request->phoneNumber;
        self::$profile->address = $request->address;
        self::$profile->twitter = $request->twitter;
        self::$profile->facebook = $request->facebook;
        self::$profile->googlePlus = $request->googlePlus;
        self::$profile->linkedin = $request->linkedin;
        self::$profile->github = $request->github;
        self::$profile->biographicalInfo = $request->biographicalInfo;
        self::$profile->status = $request->status;
        self::$profile->save();
    }
    public function blogs(){
        return $this->hasMany(Blog::class);
    }
    public function user(){
        return $this->belongsTo(UserAuth::class);
    }

//    public static function deleteProfile($id){
//        self::$profile = UserProfile::find($id);
//        self::$profile->delete();
//    }
}
