<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Session;

class Comment extends Model
{
    use HasFactory;
    private static $comment,$message;
    public static function newComment($request){
        self::$comment = new Comment();
        self::$comment->user_id = Session::get('user_id');
        self::$comment->name = $request->name;
        self::$comment->blog_id = $request->blog_id;
        self::$comment->sponsored_blog_id = $request->sponsored_blog_id;
        self::$comment->email = $request->email;
        self::$comment->comment = $request->comment;
        self::$comment->date = date('d-M,Y H:i');
        self::$comment->save();
    }
    public static function deleteComment($id){
        self::$comment = Comment::find($id);
        self::$comment->delete();
    }
    public static function updatePublishedStatus($id)
    {
        self::$comment = Comment::find($id);
        if (self::$comment->status == 1)
        {
            self::$comment->status = 0;
            self::$message = "Review Info unpublished successfully.";
        }
        else
        {
            self::$comment->status = 1;
            self::$message = "Review Info published Successfully";
        }
        self::$comment->save();
        return self::$message;
    }
    public function user(){
        return $this->belongsTo(UserAuth::class);
    }
    public function blog(){
        return $this->belongsTo(Blog::class);
    }
}
