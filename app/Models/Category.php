<?php

namespace App\Models;

use DB;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
class Category extends Model
{
    // protected $fillable = [
    //     'name', 'description',
    // ];
    use Sluggable;

    public static function getCategory(){
        $value=DB::table('categories')
            ->leftJoin('stores', 'stores.id', '=', 'categories.store_id')
            ->select('categories.id as id','categories.name as name','categories.description','categories.img as img','stores.name as store','categories.store_id as store_id','categories.status as status')
            ->orderBy('categories.created_at', 'desc')->get();
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
