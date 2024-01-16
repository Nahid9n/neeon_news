<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SponsoredBlog extends Model
{
    use HasFactory;
    private static $sponsoredBlog,$image,$imageName,$directory,$imageUrl;
    private static function getImage($request){
        self::$image = $request->file('image');
        self::$imageName = self::$image->getClientOriginalName();
        self::$directory = 'uploads/Sponsored_Blog_images/';
        self::$image->move(self::$directory,self::$imageName);
        self::$imageUrl = (self::$directory.self::$imageName);
        return self::$imageUrl;
    }
    public static function addBlog($request){
        self::$sponsoredBlog = new SponsoredBlog();
        self::$sponsoredBlog->category_id = $request->category_id;
        self::$sponsoredBlog->name = $request->name;
        self::$sponsoredBlog->author = $request->author;
        self::$sponsoredBlog->image = $request->file('image') ? self::getImage($request):'';
        self::$sponsoredBlog->short_description = $request->short_description;
        self::$sponsoredBlog->long_description = $request->long_description;
        self::$sponsoredBlog->status = $request->status;
        self::$sponsoredBlog->save();
    }
    public static function updateBlog($request,$id){
        self::$sponsoredBlog = SponsoredBlog::find($id);
        self::$imageUrl = $request->file('image') ? self::getImage($request):'';
        if ($request->file('image')){
            if (file_exists(self::$sponsoredBlog->image)){
                unlink(self::$sponsoredBlog->image);
            }
            self::$sponsoredBlog->image = self::$imageUrl;
        }
        self::$sponsoredBlog->category_id = $request->category_id;
        self::$sponsoredBlog->name = $request->name;
        self::$sponsoredBlog->author = $request->author;
        self::$sponsoredBlog->short_description = $request->short_description;
        self::$sponsoredBlog->long_description = $request->long_description;
        self::$sponsoredBlog->status = $request->status;
        self::$sponsoredBlog->save();
    }
    public static function deleteBlog($id){
        self::$sponsoredBlog = SponsoredBlog::find($id);
        if (file_exists(self::$sponsoredBlog->image)){
            unlink(self::$sponsoredBlog->image);
        }
        self::$sponsoredBlog->delete();
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
