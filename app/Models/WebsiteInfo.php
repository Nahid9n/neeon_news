<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebsiteInfo extends Model
{
    use HasFactory;
    private static $websiteInfo,$logo,$banner,$logName,$bannerName,$directory,$logoUrl,$bannerUrl;

    private static function getLogo($request){
        self::$logo = $request->file('logo');
        self::$logName = self::$logo->getClientOriginalName();
        self::$directory = 'uploads/website_image/';
        self::$logo->move(self::$directory,self::$logName);
        self::$logoUrl = (self::$directory.self::$logName);
        return self::$logoUrl;
    }
    private static function getBanner($request){
        self::$banner = $request->file('banner');
        self::$bannerName = self::$banner->getClientOriginalName();
        self::$directory = 'uploads/website_image/';
        self::$banner->move(self::$directory,self::$bannerName);
        self::$bannerUrl = (self::$directory.self::$bannerName);
        return self::$bannerUrl;
    }
    public static function newInfo($request){
        self::$websiteInfo = new WebsiteInfo();
        self::$websiteInfo->email           = $request->email;
        self::$websiteInfo->email_other     = $request->email_other;
        self::$websiteInfo->address         = $request->address;
        self::$websiteInfo->map             = $request->map;
        self::$websiteInfo->mobile_number   = $request->mobile_number;
        self::$websiteInfo->mobile_optional = $request->mobile_optional;
        self::$websiteInfo->facebook        = $request->facebook;
        self::$websiteInfo->twitter         = $request->twitter;
        self::$websiteInfo->instagram       = $request->instagram;
        self::$websiteInfo->linkedIn        = $request->linkedIn;
        self::$websiteInfo->google_plus     = $request->google_plus;
        self::$websiteInfo->youtube         = $request->youtube;
        self::$websiteInfo->logo            = $request->file('logo') ? self::getLogo($request):'';
        self::$websiteInfo->banner          = $request->file('banner') ? self::getBanner($request):'';
        self::$websiteInfo->about_us        = $request->about_us;
        self::$websiteInfo->short_about_us  = $request->short_about_us;
        self::$websiteInfo->status          = $request->status;
        self::$websiteInfo->save();
    }
    public static function updateInfo($request,$id){
        self::$websiteInfo = WebsiteInfo::find($id);
        self::$logoUrl = $request->file('logo') ? self::getLogo($request):'';
        if ($request->file('logo')){
            if (file_exists(self::$websiteInfo->logo)){
                unlink(self::$websiteInfo->logo);
            }
            self::$websiteInfo->logo = self::$logoUrl;
        }
        self::$bannerUrl = $request->file('banner') ? self::getBanner($request):'';
        if ($request->file('banner')){
            if (file_exists(self::$websiteInfo->banner)){
                unlink(self::$websiteInfo->banner);
            }
            self::$websiteInfo->banner = self::$bannerUrl;
        }
        self::$websiteInfo->email           = $request->email;
        self::$websiteInfo->email_other     = $request->email_other;
        self::$websiteInfo->address         = $request->address;
        self::$websiteInfo->map             = $request->map;
        self::$websiteInfo->mobile_number   = $request->mobile_number;
        self::$websiteInfo->mobile_optional = $request->mobile_optional;
        self::$websiteInfo->facebook        = $request->facebook;
        self::$websiteInfo->twitter         = $request->twitter;
        self::$websiteInfo->instagram       = $request->instagram;
        self::$websiteInfo->linkedIn        = $request->linkedIn;
        self::$websiteInfo->google_plus     = $request->google_plus;
        self::$websiteInfo->youtube         = $request->youtube;
        self::$websiteInfo->about_us        = $request->about_us;
        self::$websiteInfo->short_about_us  = $request->short_about_us;
        self::$websiteInfo->status          = $request->status;
        self::$websiteInfo->save();
    }

}
