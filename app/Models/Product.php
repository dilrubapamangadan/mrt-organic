<?php

namespace App\Models;
use DB;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
class Product extends Model
{
    use Sluggable;
    public static function getProduct(){
        $value=DB::table('products')
            ->join('product_categories', 'products.id', '=', 'product_categories.product_id')
            ->leftjoin('categories', 'product_categories.category_id', '=', 'categories.id')
            ->leftjoin('stores', 'stores.id', '=', 'categories.store_id')
            ->select('products.id as id','products.name as name','products.slug as slug','products.description','products.img as img','products.banner as banner','products.status as status','categories.name as category','stores.name as store','stores.id as store_id','categories.id as category_id')
            ->orderBy('products.created_at', 'desc')->get();
        return $value;
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
}
