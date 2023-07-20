<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public static $data,$image,$imageName,$directory,$imageUrl;

    public static function save_product($request)
    {
        self::$data = new Product();
        self::$data->name = $request->name??null;
        self::$data->price = $request->price??null;
        self::$data->category_id = $request->category_id??null;
        self::$data->product_details_small = $request->product_details_small??null;
        self::$data->product_details1 = $request->product_details1??null;
        self::$data->product_details2 = $request->product_details2??null;
        self::$data->product_details3 = $request->product_details3??null;
        self::$data->add_home = $request->add_home??null;
        self::$data->main_image = self::saveMainImage($request);
        self::$data->details_image1 = self::saveDetailsImage1($request);
        self::$data->details_image2 = self::saveDetailsImage2($request);
        self::$data->details_image3 = self::saveDetailsImage3($request);
        self::$data->save();
    }
    public static function update_product($request)
    {
        self::$data = Product::find($request->id);
        self::$data->name = $request->name??null;
        self::$data->price = $request->price??null;
        self::$data->category_id = $request->category_id??null;
        self::$data->product_details_small = $request->product_details_small??null;
        self::$data->product_details1 = $request->product_details1??null;
        self::$data->product_details2 = $request->product_details2??null;
        self::$data->product_details3 = $request->product_details3??null;
        self::$data->add_home = $request->add_home??null;
        self::$data->status = $request->status??null;
        if($request->file('main_image')){
            if(self::$data->main_image){
                if(file_exists(self::$data->main_image)){
                    unlink(self::$data->main_image);
                    self::$data->main_image = self::saveMainImage($request);
                }
            }
            else{
                self::$data->main_image = self::saveMainImage($request);
            }
        }
        if($request->file('details_image1')){
            if(self::$data->details_image1){
                if(file_exists(self::$data->details_image1)){
                    unlink(self::$data->details_image1);
                    self::$data->details_image1 = self::saveDetailsImage1($request);
                }
            }
            else{
                self::$data->details_image1 = self::saveDetailsImage1($request);
            }
        }
        if($request->file('details_image2')){
            if(self::$data->details_image2){
                if(file_exists(self::$data->details_image2)){
                    unlink(self::$data->details_image2);
                    self::$data->details_image2 = self::saveDetailsImage2($request);
                }
            }
            else{
                self::$data->details_image2 = self::saveDetailsImage2($request);
            }
        }
        if($request->file('details_image3')){
            if(self::$data->details_image3){
                if(file_exists(self::$data->details_image3)){
                    unlink(self::$data->details_image3);
                    self::$data->details_image3 = self::saveDetailsImage3($request);
                }
            }
            else{
                self::$data->details_image3 = self::saveDetailsImage3($request);
            }
        }

        self::$data->save();
    }

    private static function saveMainImage($request){
        self::$image = $request->file('main_image');
        self::$imageName = 'product_main_image-'.rand().'.'. self::$image->Extension();
        self::$directory = 'product/';
        self::$imageUrl = self::$directory.self::$imageName;
        self::$image->move(self::$directory,self::$imageName);
        return self::$imageUrl;
    }
    private static function saveBannerImage($request){
        self::$image = $request->file('banner_image');
        self::$imageName = 'product_banner_image-'.rand().'.'. self::$image->Extension();
        self::$directory = 'product/';
        self::$imageUrl = self::$directory.self::$imageName;
        self::$image->move(self::$directory,self::$imageName);
        return self::$imageUrl;
    }
    private static function saveDetailsImage1($request){
        self::$image = $request->file('details_image1');
        self::$imageName = 'product_details_image-'.rand().'.'. self::$image->Extension();
        self::$directory = 'product/';
        self::$imageUrl = self::$directory.self::$imageName;
        self::$image->move(self::$directory,self::$imageName);
        return self::$imageUrl;
    }
    private static function saveDetailsImage2($request){
        self::$image = $request->file('details_image2');
        self::$imageName = 'product_details_image-'.rand().'.'. self::$image->Extension();
        self::$directory = 'product/';
        self::$imageUrl = self::$directory.self::$imageName;
        self::$image->move(self::$directory,self::$imageName);
        return self::$imageUrl;
    }
    private static function saveDetailsImage3($request){
        self::$image = $request->file('details_image3');
        self::$imageName = 'product_details_image-'.rand().'.'. self::$image->Extension();
        self::$directory = 'product/';
        self::$imageUrl = self::$directory.self::$imageName;
        self::$image->move(self::$directory,self::$imageName);
        return self::$imageUrl;
    }

    public function category()
    {
        return $this->belongsTo(Category::class);

    }
}
