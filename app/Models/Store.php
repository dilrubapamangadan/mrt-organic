<?php

namespace App\Models;
use DB;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    public static function getCategories($id){
        $value=DB::table('categories')
            ->leftJoin('stores', 'stores.id', '=', 'categories.store_id')
            ->select('categories.id as id','categories.name as name','categories.description')
            ->where(['stores.id' => $id, 'categories.status' => 1])
            ->orderBy('categories.created_at', 'desc')->get();
        return $value;
    }
}
