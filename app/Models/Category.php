<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    private static $image,$imageName,$directory,$imageUrl,$category;

    private static function getImage($request){
        self::$image = $request->file('image');
        self::$imageName = self::$image->getClientOriginalName();
        self::$directory = 'uploads/category/category_image/';
        self::$image->move(self::$directory,self::$imageName);
        self::$imageUrl = self::$directory.self::$imageName;
        return self::$imageUrl;
    }

    public static function addCategory($request){

        self::$imageUrl = $request->file('image') ? self::getImage($request):'';
        self::$category = new Category();
        self::$category->name = $request->name;
        self::$category->image = self::$imageUrl;
        self::$category->status = $request->status;
        self::$category->save();
    }
    public static function updateCategory($request,$id){
        self::$category = Category::find($id);

        if ($request->file('image')){
            if (file_exists(self::$category->image)){
                unlink(self::$category->image);
            }
            self::$category->image = self::getImage($request);
        }
        self::$category->name = $request->name;
        self::$category->status = $request->status;
        self::$category->save();
    }

    public static function deleteCategory($id){
        self::$category = Category::find($id);
        if (file_exists(self::$category->image)){
            unlink(self::$category->image);
        }
        self::$category->delete();
    }

    public function blog(){
        return $this->hasMany(Blog::class);
    }
}
