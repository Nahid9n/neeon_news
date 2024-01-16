<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use function Illuminate\Validation\message;

class UserAuth extends Model
{
    use HasFactory;
    private static $user,$image,$imageName,$directory,$imageUrl;
    public static function registerUser($request){
        self::$user = new UserAuth();
        self::$user->name = $request->name;
        self::$user->email = $request->email;
        self::$user->password = bcrypt($request->password);
        self::$user->confirm_password = bcrypt(self::$user->password);
        self::$user->save();
        return self::$user;
    }
    public static function updateUserAccount($request,$id){
        self::$user = UserAuth::find($id);
        self::$user->name = $request->name;
        self::$user->email = $request->email;
        if (self::$user->password = $request->password){
            self::$user->password = bcrypt($request->password);
            self::$user->confirm_password = bcrypt(self::$user->password);
        }
        self::$user->save();
        return self::$user;
    }

    private static function getImage($request){
        self::$image = $request->file('image');
        self::$imageName = self::$image->getClientOriginalName();
        self::$directory = 'uploads/user_profiles/';
        self::$image->move(self::$directory,self::$imageName);
        self::$imageUrl = (self::$directory.self::$imageName);
        return self::$imageUrl;
    }
    public static function updateUser($request,$id){
        self::$user = UserAuth::find($id);
        self::$imageUrl = $request->file('image') ? self::getImage($request):'';
        if ($request->file('image')){
            if (file_exists(self::$user->image)){
                unlink(self::$user->image);
            }
            self::$user->image = self::$imageUrl;
        }
        self::$user->firstname = $request->firstname;
        self::$user->lastname = $request->lastname;
        self::$user->nickname = $request->nickname;
        self::$user->designation = $request->designation;
        self::$user->website = $request->website;
        self::$user->phoneNumber = $request->phoneNumber;
        self::$user->address = $request->address;
        self::$user->twitter = $request->twitter;
        self::$user->facebook = $request->facebook;
        self::$user->googlePlus = $request->googlePlus;
        self::$user->linkedin = $request->linkedin;
        self::$user->github = $request->github;
        self::$user->biographicalInfo = $request->biographicalInfo;
        self::$user->save();
        return self::$user;
    }

    public function blog(){
        return $this->belongsToMany(Blog::class);
    }
    public function comment(){
        return $this->hasMany(Comment::class);
    }
}
