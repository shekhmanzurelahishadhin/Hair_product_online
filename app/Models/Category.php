<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    public static $data,$image,$imageName,$directory,$imageUrl;

    public static function save_category($request)
    {
        self::$data = new Category();
        self::$data->name = $request->name??null;
        self::$data->image = self::saveMainImage($request);
        self::$data->save();
    }
    public static function update_category($request)
    {
        self::$data = Category::find($request->id);
        self::$data->name = $request->name??null;
        self::$data->status = $request->status??null;
        if($request->file('image')){
            if(self::$data->image){
                if(file_exists(self::$data->image)){
                    unlink(self::$data->image);
                    self::$data->image = self::saveMainImage($request);
                }
            }
            else{
                self::$data->image = self::saveMainImage($request);
            }
        }

        self::$data->save();
    }

    private static function saveMainImage($request){
        self::$image = $request->file('image');
        self::$imageName = 'category-'.rand().'.'. self::$image->Extension();
        self::$directory = 'category/';
        self::$imageUrl = self::$directory.self::$imageName;
        self::$image->move(self::$directory,self::$imageName);
        return self::$imageUrl;
    }
}
