<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InstagramPost extends Model
{
    use HasFactory;
    private static $instagram,$image,$imageName,$directory,$imageUrl;
    private static function getImage($request){
        self::$image = $request->file('image');
        self::$imageName = self::$image->getClientOriginalName();
        self::$directory = 'uploads/Instagram_post/';
        self::$image->move(self::$directory,self::$imageName);
        self::$imageUrl = (self::$directory.self::$imageName);
        return self::$imageUrl;
    }
    public static function addPost($request){
        self::$instagram = new InstagramPost();
        self::$instagram->name = $request->name;
        self::$instagram->email = $request->email;
        self::$instagram->link = $request->link;
        self::$instagram->image = $request->file('image') ? self::getImage($request):'';
        self::$instagram->status = $request->status;
        self::$instagram->save();
    }
    public static function updatePost($request,$id){
        self::$instagram = InstagramPost::find($id);
        self::$imageUrl = $request->file('image') ? self::getImage($request):'';
        if ($request->file('image')){
            if (file_exists(self::$instagram->image)){
                unlink(self::$instagram->image);
            }
            self::$instagram->image = self::$imageUrl;
        }
        self::$instagram->name = $request->name;
        self::$instagram->email = $request->email;
        self::$instagram->link = $request->link;
        self::$instagram->status = $request->status;
        self::$instagram->save();
    }
    public static function deletePost($id){
        self::$instagram = InstagramPost::find($id);
        if (file_exists(self::$instagram->image)){
            unlink(self::$instagram->image);
        }
        self::$instagram->delete();
    }

}
