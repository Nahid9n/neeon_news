<?php

namespace App\Providers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\InstagramPost;
use App\Models\User;
use App\Models\UserProfile;
use App\Models\WebsiteInfo;
use Illuminate\Support\ServiceProvider;
use View;
use Session;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer(['website.master'],function ($view){$view->with('categories',Category::where('status', 1)->get());});
        View::composer(['website.master'],function ($view){$view->with('blog3',Blog::where('status',1)->latest()->take(3)->get());});
        View::composer(['website.master'],function ($view){$view->with('instagram12',InstagramPost::where('status',1)->latest()->take(12)->get());});
        View::composer(['website.master'],function ($view){$view->with('instagram6',InstagramPost::where('status',1)->latest()->take(6)->get());});
        View::composer(['user.layouts.app'],function ($view){$view->with('userProfiles',UserProfile::where('email',Session::get('user_email'))->get());});
        View::composer('*',function ($view){$view->with('websiteInfos',WebsiteInfo::where('status',1)->get());});
    }
}
