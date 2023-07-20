<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Banner;
use App\Models\BannerAndTitle;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Enrollment;
use App\Models\Gallery;
use App\Models\PaymentNumber;
use App\Models\Product;
use App\Models\Research;
use App\Models\Service;
use App\Models\Team;
use App\Models\Testimonial;
use App\Models\VideoGallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use Auth;

class WebsiteController extends Controller
{
    public function tech_web_home()
    {

        return view('frontend.home.home',[
            'services'=>Service::where('status',1)->where('service_home',1)->take(6)->get(),
            'products'=>Product::where('status',1)->where('add_home',1)->paginate(8),
            'galleries'=>Gallery::where('status',1)->where('add_home',1)->take(6)->get(),
            'banners'=>Banner::get(),
            'banner'=>BannerAndTitle::where('page','gallery')->latest()->first(),
            'service_title'=>BannerAndTitle::where('page','service')->latest()->first(),
            'about'=>DB::table('abouts')->latest()->first(),
            'titles'=>BannerAndTitle::get(),
            'categories'=>Category::where('status',1)->get(),
        ]);
    }
    public function tech_web_services_details($id)
    {
        return view('frontend.services.service_details',[
            'service'=>Service::find($id),
        ]);
    }
    public function tech_web_products_details($id)
    {
        return view('frontend.products.products_details',[
            'product'=>Product::find($id),
        ]);
    }

    public function tech_web_all_services()
    {

        return view('frontend.services.all_services',[
            'services'=>Service::where('status',1)->paginate(8),
            'banner'=>BannerAndTitle::where('page','courses')->latest()->first(),
            'service_title'=>BannerAndTitle::where('page','service')->latest()->first(),

        ]);
    }
    public function tech_web_all_products()
    {

        return view('frontend.products.all_products',[
            'products'=>Product::where('status',1)->paginate(8),
            'titles'=>BannerAndTitle::get(),

        ]);
    }

    public function tech_web_products_category($id)
    {
//        return Product::where('status',1)->where('category_id',$id)->paginate(9);
        return view('frontend.products.product_by_category',[
            'products'=>Product::where('status',1)->where('category_id',$id)->paginate(8),
            'titles'=>BannerAndTitle::get(),
            'category_id'=>$id,
        ]);

    }

    public function tech_web_products_search(Request $request)
    {

        $search = $request['search']??"";
        if (isset($request->category_id)){
            return view('frontend.products.product_by_category',[
                'products'=>Product::where('status',1)->where('name','LIKE',"%$search%")->where('category_id',$request->category_id)->paginate(9),
                'titles'=>BannerAndTitle::get(),
                'category_id'=>$request->category_id,
                'search'=>$search,
            ]);


        }
        else{
            return view('frontend.products.all_products',[
                'products'=>Product::where('status',1)->where('name','LIKE',"%$search%")->paginate(9),
                'titles'=>BannerAndTitle::get(),
                'search'=>$search,

            ]);

        }


    }
//
    public function tech_web_about_page()
    {
        return view('frontend.about.about_page',[
            'about'=>DB::table('abouts')->latest()->first(),
            'banner'=>BannerAndTitle::where('page','instructor')->latest()->first(),

        ]);
    }
    public function tech_web_gallery_page()
    {
        return view('frontend.gallery.gallery_page',[
            'galleries'=>Gallery::where('status',1)->get(),
            'banner'=>BannerAndTitle::where('page','gallery')->latest()->first(),
        ]);
    }
    public function tech_web_video_gallery_page()
    {
        return view('frontend.gallery.video_gallery_page',[
            'galleries'=>VideoGallery::where('status',1)->get(),
            'banner'=>BannerAndTitle::where('page','gallery')->latest()->first(),
        ]);
    }


//
    public function tech_web_contacts()
    {
        return view('frontend.contact.contact',[
            'banner'=>BannerAndTitle::where('page','contacts')->latest()->first(),
        ]);

    }




}
