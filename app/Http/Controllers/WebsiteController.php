<?php

namespace App\Http\Controllers;


use App\Models\Blog;
use App\Models\Category;
use App\Models\Comment;
use App\Models\SponsoredBlog;
use App\Models\User;
use App\Models\UserAuth;
use App\Models\WebsiteInfo;
use Illuminate\Http\Request;
use function Nette\Utils\first;
use Session;
use Auth;
use View;

class WebsiteController extends Controller
{
    public function index(){
        return view('website.home.index',[
            'blogs'=>Blog::where('status',1)->take(1)->latest()->get(),
            'blogAll'=>Blog::where('status',1)->latest()->get(),
            'blog1'=>Blog::where('status',1)->skip(1)->take(1)->latest()->get(),
            'blog3'=>Blog::where('status',1)->skip(2)->take(3)->latest()->get(),
            'blogTops'=>Blog::where('status',1)->skip(6)->take(4)->latest()->get(),
            'blogPopular'=>Blog::where('status',1)->skip(9)->take(4)->latest()->get(),
            'blog4'=>Blog::where('status',1)->latest()->take(2)->get(),
            'blog5'=>Blog::where('status',1)->latest()->take(4)->get(),
            'blog8'=>Blog::where('status',1)->latest()->take(8)->get(),
            'sponsoredBlogs'=>SponsoredBlog::where('status',1)->latest()->take(4)->get(),
            'categories'=>Category::where('status', 1)->get(),
            'categoriesHot'=>Category::withCount('blog')->latest('blog_count')->take(5)->with('blog')->get(),
            'categories4'=>Category::where('status', 1)->take(4)->latest()->get(),
            'categories1'=>Category::where('status', 1)->take(1)->get(),
        ]);
    }
    public function category($id){
        return view('website.category.index',[
            'blogs'=>Blog::where('status',1)->where('category_id',$id)->latest()->get(),
            'sponsoredBlogs'=>SponsoredBlog::where('status',1)->where('category_id',$id)->latest()->paginate(9),
            'categories'=>Category::where('status', 1)->get(),
            'blogPopulars'=>Blog::where('status',1)->skip(9)->take(4)->latest()->get(),

        ]);
    }
    public function blog(){
        return view('website.blog.index',[
            'blogs'=>Blog::where('status',1)->latest()->paginate(9),
            'categories'=>Category::where('status',1)->latest()->get(),
            'websiteInfos'=>WebsiteInfo::where('status',1)->get(),
        ]);
    }
    public function blogDetails($id){
        $this->blog = Blog::find($id);
        return view('website.blog.details',[
            'blog'=>$this->blog,
            'sponsoredBlog'=>SponsoredBlog::find($id),
            'categories'=>Category::where('status', 1)->get(),
            'blog8'=>Blog::where('status',1)->latest()->take(8)->get(),
            'relatedBlogs'=>Blog::where('category_id',$this->blog->category_id)->latest()->take(4)->get(),
            'comments'=>Comment::where('status',0)->where('blog_id',$id)->latest()->get(),
            'userProfiles'=>UserAuth::where('id','user_id')->get(),
            'websiteInfos'=>WebsiteInfo::where('status',1)->get(),
        ]);
    }

    public function sponsoredBlog(){
        return view('website.sponsored.index',[
            'sponsoredBlogs'=>SponsoredBlog::where('status',1)->latest()->paginate(9),
            'categories'=>Category::where('status',1)->latest()->get(),
            'websiteInfos'=>WebsiteInfo::where('status',1)->get(),
        ]);
    }
    public function sponsoredDetails($id){
        $this->sponsoredBlog = SponsoredBlog::find($id);
        return view('website.sponsored.details',[
            'sponsoredBlog'=>$this->sponsoredBlog,
            'categories'=>Category::where('status', 1)->get(),
            'blog8'=>Blog::where('status',1)->latest()->take(8)->get(),
            'relatedBlogs'=>SponsoredBlog::where('category_id',$this->sponsoredBlog->category_id)->get(),
            'comments'=>Comment::where('status',0)->where('sponsored_blog_id',$id)->latest()->get(),
            'userProfiles'=>UserAuth::where('id','user_id')->get(),
            'websiteInfos'=>WebsiteInfo::where('status',1)->get(),
        ]);
    }
    public function about(){
        return view('website.about.index',[
            'websiteInfos'=>WebsiteInfo::all(),
        ]);
    }
    public function contact(){
        return view('website.contact.index',[
                'websiteInfos'=>WebsiteInfo::where('status',1)->get(),
            ]);
    }
//    public function show($id)
//    {
//        $blog = SponsoredBlog::find($id);
//        $blog->update([
//            'count' => $blog->count + 1
//        ]);
//        return View::make('blogs', compact('blog'));
//    }
}
