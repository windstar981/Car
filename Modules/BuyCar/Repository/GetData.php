<?php

    namespace Modules\BuyCar\Repository;

    use Illuminate\Support\Facades\DB;



class GetData{
    public static function getAttr($arg){
       return DB::table('attributes')
           ->where('key',$arg)
           ->select('value')
           ->get()[0]->value;
    }

    public static function getProduct($arg)
    {
        $pr = DB::table('products')->find($arg);

        $pr_info =["base"=>$pr,
            "model_name"=>self::getModel($pr->model_id)[0]->name,
            "brand_name"=>self::getBrand(self::getModel($pr->model_id)[0]->brand_id)[0]->name,
            "cate_name" =>self::getCategory($pr->cate_id)[0]->name,
            "tags" =>self::getProductTag($pr->id),
            "images" =>self::getProductImages($pr->id),
            "color"=>self::getAttr(json_decode($pr->attribute)->color),
            "transmission"=>self::getAttr(json_decode($pr->attribute)->transmission),
            "body_type" =>self::getAttr(json_decode($pr->attribute)->body_type),
            "models"=>DB::table('models')->where('brand_id','=',$pr->model_id)->get(),
        ];
        return $pr_info;

    }
    public static function getFilter()
    {
        $brands = DB::table('brands')->select('id','name')->get();
        $colors = DB::table('attributes')->where('type','=','color')
            ->select('key','value')
            ->get();
        $body_type = DB::table('attributes')->where('type','=','body_type')
            ->select('key','value')
            ->get();
        $transmission = DB::table('attributes')->where('type','=','transmission')
            ->select('key','value')
            ->get();
        return ['brands'=>$brands, 'colors'=>$colors, 'body_type'=>$body_type, 'transmission'=>$transmission];
    }
    public static function getModel($arg)
    {
        return DB::table('models')
            ->where('id','=',$arg)
            ->select('name','brand_id')
            ->get();
    }
    public static function getBrand($arg)
    {
        return DB::table('brands')
            ->where('id','=',$arg)
            ->select('name')
            ->get();
    }

    public static function getLocation($arg)
    {

    }
    public static function getCategory($arg)
    {
        return DB::table('categories')
            ->where('id','=',$arg)
            ->select('name')
            ->get();
    }

    public static function getProductTag($arg)
    {
        return DB::table('product_tags')
            ->where('product_id','=', $arg)
            ->select('name')
            ->get();
    }

    public static function getProductImages($arg)
    {
        return DB::table('product_images')
            ->where('product_id','=',$arg)
            ->select('url')
            ->get();
    }

    public static function getProductContent($arg)
    {
        return DB::table('product_contents')
            ->where('product_id','=',$arg)
            ->select('content')
            ->get();
    }

}
?>
