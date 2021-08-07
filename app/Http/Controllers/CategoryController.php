<?php

namespace App\Http\Controllers;
use DB;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\ProductCategory;
use App\Traits\UploadTrait;
class CategoryController extends Controller
{
    use UploadTrait;
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
            'store_id' => 'required',
            'description' => 'required',
        ]);
        $newCategory = new Category;
        $newCategory->name = $request["name"];
        $newCategory->description = $request["description"];
        $newCategory->status = 1;
        $newCategory->store_id = $request["store_id"];
        $newCategory->sub_header = $request["sub_header"];
        $newCategory->short_description = $request["short_description"];
        $newCategory->tag = $request["tag"];
        $filePath = '';        // Check if a profile image has been uploaded
        if ($request['img']) {
            // Make a image name based on user name and current timestamp
            $name = 'category_'.time(). '.' .explode('/', explode(':', substr($request["img"], 0, strpos($request["img"], ';')))[1])[1];
            // Define folder path
            $folder = 'img/category/';
            // Make a file path where image will be stored [ folder path + file name + file extension]
            $filePath = $name;
            // Upload image
            $filePathVarient = $filePath;
            $this->uploadImage($request->img, $folder, $filePathVarient,617,521);
            // $filePathVarient = 'large_'.$filePath;
            // $this->uploadOne($request->product, $folder, $filePathVarient,600,300);   
        $newCategory->img = $filePath;
        }
        $bannerPath = '';        // Check if a profile image has been uploaded
        if ($request['banner']) {
            // Make a image name based on user name and current timestamp
            $name = 'banner_'.time(). '.' .explode('/', explode(':', substr($request["banner"], 0, strpos($request["banner"], ';')))[1])[1];
            // Define folder path
            $folder = 'img/category/';
            // Make a file path where image will be stored [ folder path + file name + file extension]
            $bannerPath = $name;
            // Upload image
            $filePathVarient = $bannerPath;
            $this->uploadImage($request->banner, $folder, $filePathVarient,663,646);
            // $filePathVarient = 'large_'.$filePath;
            // $this->uploadOne($request->product, $folder, $filePathVarient,600,300);   
        $newCategory->banner = $bannerPath;
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
        ->select('categories.name as name','categories.img as img','categories.tag as tag','categories.banner as banner','categories.sub_header as sub_header','categories.description as description','categories.short_description as short_description','categories.slug as slug','categories.id as id')
        ->get();
       
        return $categoryData;
    }

    public function categoryDetails($slug)
    {
        $categoryData = DB::table('categories')
        ->Join('stores', 'stores.id', '=', 'categories.store_id')
        ->where('categories.slug',$slug)
        ->select('categories.name as name','categories.img as img','categories.tag as tag','categories.banner as banner','categories.sub_header as sub_header','categories.description as description','categories.short_description as short_description','categories.slug as slug','categories.id as id','stores.name as store')
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
            $existingCategory->tag = $request['tag'];

            $filePath = '';        // Check if a profile image has been uploaded
            if ($request['img'] != $existingCategory->img) {
                if($existingCategory->img){
                    unlink(public_path('img/category/'.$existingCategory->img));
                }
                
                // Make a image name based on user name and current timestamp
                $name = 'category_'.time(). '.' .explode('/', explode(':', substr($request["img"], 0, strpos($request["img"], ';')))[1])[1];
                // Define folder path
                $folder = 'img/category/';
                // Make a file path where image will be stored [ folder path + file name + file extension]
                $filePath = $name;
                // Upload image
                $filePathVarient = $filePath;
                $this->uploadImage($request->img, $folder, $filePathVarient,617,521);
                // $filePathVarient = 'large_'.$filePath;
                // $this->uploadOne($request->product, $folder, $filePathVarient,600,300);
            $existingCategory->img = $filePath;
            }
            $bannerPath = '';        // Check if a profile image has been uploaded
            if ($request['banner'] != $existingCategory->banner) {
                if($existingCategory->banner){
                    unlink(public_path('img/category/'.$existingCategory->banner));
                }
                // Make a image name based on user name and current timestamp
                $name = 'banner_'.time(). '.' .explode('/', explode(':', substr($request["banner"], 0, strpos($request["banner"], ';')))[1])[1];
                // Define folder path
                $folder = 'img/category/';
                // Make a file path where image will be stored [ folder path + file name + file extension]
                $bannerPath = $name;
                // Upload image
                $filePathVarient = $bannerPath;
                $this->uploadImage($request->banner, $folder, $filePathVarient,663,646);
                // $filePathVarient = 'large_'.$filePath;
                // $this->uploadOne($request->product, $folder, $filePathVarient,600,300);   
            $existingCategory->banner = $bannerPath;
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
            if($existingCategory->img){
                unlink(public_path('img/category/'.$existingCategory->img));
            }
            if($existingCategory->banner){
                unlink(public_path('img/category/'.$existingCategory->banner));
            }
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
