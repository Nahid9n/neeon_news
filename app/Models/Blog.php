<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    private static $blog,$image,$imageName,$directory,$imageUrl,$message;
    private static function getImage($request){
        self::$image = $request->file('image');
        self::$imageName = self::$image->getClientOriginalName();
        self::$directory = 'uploads/Blog_images/';
        self::$image->move(self::$directory,self::$imageName);
        self::$imageUrl = (self::$directory.self::$imageName);
        return self::$imageUrl;
    }
    public static function addBlog($request){
        self::$blog = new Blog();
        self::$blog->category_id = $request->category_id;
        self::$blog->name = $request->name;
        self::$blog->author = $request->author;
        self::$blog->email = $request->email;
        self::$blog->image = $request->file('image') ? self::getImage($request):'';
        self::$blog->short_description = $request->short_description;
        self::$blog->long_description = $request->long_description;
        self::$blog->status = $request->status;
        self::$blog->save();
    }
    public static function updateBlog($request,$id){
        self::$blog = Blog::find($id);
        self::$imageUrl = $request->file('image') ? self::getImage($request):'';
        if ($request->file('image')){
            if (file_exists(self::$blog->image)){
                unlink(self::$blog->image);
            }
            self::$blog->image = self::$imageUrl;
        }
        self::$blog->category_id = $request->category_id;
        self::$blog->name = $request->name;
        self::$blog->author = $request->author;
        self::$blog->email = $request->email;
        self::$blog->short_description = $request->short_description;
        self::$blog->long_description = $request->long_description;
        self::$blog->status = $request->status;
        self::$blog->save();
    }
    public static function updateBlogStatus($id)
    {
        self::$blog = Blog::find($id);
        if (self::$blog->status == 1)
        {
            self::$blog->status = 0;
            self::$message = "Review Info unpublished successfully.";
        }
        else
        {
            self::$blog->status = 1;
            self::$message = "Review Info published Successfully";
        }
        self::$blog->save();
        return self::$message;
    }
    public static function deleteBlog($id){
        self::$blog = Blog::find($id);
        if (file_exists(self::$blog->image)){
            unlink(self::$blog->image);
        }
        self::$blog->delete();
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function comments(){
        return $this->hasMany(Comment::class);
    }
    public function user(){
        return $this->belongsTo(UserAuth::class);
    }


}
