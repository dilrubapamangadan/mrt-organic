<?php

namespace App\Http\Controllers;
use DB;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\ProductCategory;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoryData = Category::getCategory();
        return $categoryData;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
        ]);
        $newCategory = new Category;
        $newCategory->name = $request["name"];
        $newCategory->description = $request["description"];
        $newCategory->status = 1;
        $newCategory->store_id = $request["store_id"];
        $newCategory->sub_header = $request["sub_header"];
        $newCategory->short_description = $request["short_description"];
        if($request["img"]){
            $name = time(). '.' .explode('/', explode(':', substr($request["img"], 0, strpos($request["img"], ';')))[1])[1];
            \Image::make($request["img"])->save('/img/category/'.$name);
            $newCategory->img = $name;

        }
        $newCategory->save();

        return $newCategory;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categoryData = Category::find( $id );
        return $categoryData;
    }

    public function storeCategories($slug)
    {
        $categoryData = DB::table('categories')
        ->Join('stores', 'stores.id', '=', 'categories.store_id')
        ->where('stores.slug',$slug)
        ->select('categories.name as name','categories.slug as slug')
        ->get();
       
        return $categoryData;
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $existingCategory = Category::findOrFail( $id );
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
        ]);
        if( $existingCategory ){
            $existingCategory->name = $request['name'];
            $existingCategory->description = $request['description'];
            $existingCategory->status = 1;
            $existingCategory->store_id = $request['store_id'];
            $existingCategory->sub_header = $request['sub_header'];
            $existingCategory->short_description = $request['short_description'];

            if($request["img"] != $existingCategory->img){
                $name = time(). '.' .explode('/', explode(':', substr($request["img"], 0, strpos($request["img"], ';')))[1])[1];
                \Image::make($request["img"])->save('/img/category/'.$name);
                $existingCategory->img = $name;
    
            }
            $existingCategory->save();

            return 'Success';
        }

        return 'Item not found';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $productCategory = ProductCategory::where('category_id', $id)->count();
        if(!$productCategory){
            $existingCategory = Category::find( $id );
            if( $existingCategory ){
                $existingCategory->delete();
                $result['status'] = true;
                $result['message'] = 'Category successfully deleted.';
            }else{
                $result['status'] = true;
                $result['message'] = 'Category not found.';
            }
        }else{
            $result['status'] = false;
            $result['message'] = 'Remove products in this category first.';
        }

        return $result;
    }
}
