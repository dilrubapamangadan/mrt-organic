<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Traits\UploadTrait;
class ProductController extends Controller
{
    use UploadTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productData = Product::getProduct();
        return $productData;
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
            'category_id' => 'required',
            'description' => 'required',
        ]);
        $newProduct = new Product;
        $newProduct->name = $request["name"];
        $newProduct->description = $request["description"];
        // $newProduct->status = $request["status"]?1:0;
        $newProduct->sub_header = $request["sub_header"];
        $newProduct->short_description = $request["short_description"];
        $filePath = '';        // Check if a profile image has been uploaded
        if ($request['img']  != $newProduct->img) {
            // Make a image name based on user name and current timestamp
            $name = 'product_'.time(). '.' .explode('/', explode(':', substr($request["img"], 0, strpos($request["img"], ';')))[1])[1];
            // Define folder path
            $folder = 'img/product/';
            // Make a file path where image will be stored [ folder path + file name + file extension]
            $filePath = $name;
            // Upload image
            $filePathVarient = $filePath;
            $this->uploadImage($request->img, $folder, $filePathVarient,617,521);
            // $filePathVarient = 'large_'.$filePath;
            // $this->uploadOne($request->product, $folder, $filePathVarient,600,300);   
        }
        $newProduct->img = $filePath;
        $bannerPath = '';        // Check if a profile image has been uploaded
        if ($request['banner']  != $newProduct->banner) {
            // Make a image name based on user name and current timestamp
            $name = 'banner_'.time(). '.' .explode('/', explode(':', substr($request["banner"], 0, strpos($request["banner"], ';')))[1])[1];
            // Define folder path
            $folder = 'img/product/';
            // Make a file path where image will be stored [ folder path + file name + file extension]
            $bannerPath = $name;
            // Upload image
            $filePathVarient = $bannerPath;
            $this->uploadImage($request->banner, $folder, $filePathVarient,663,646);
            // $filePathVarient = 'large_'.$filePath;
            // $this->uploadOne($request->product, $folder, $filePathVarient,600,300);   
        }
        $newProduct->banner = $bannerPath;
        $newProduct->save();

        $id = DB::getPdo()->lastInsertId();
        $newProductCategory = new ProductCategory;
        $newProductCategory->product_id     = $id;
        $newProductCategory->category_id    = $request["category_id"];
        $newProductCategory->save();

        return $newProductCategory;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $productData = DB::table('products')
        ->leftJoin('product_categories', 'products.id', '=', 'product_categories.product_id')
        ->leftJoin('categories', 'categories.id', '=', 'product_categories.category_id')
        ->where('products.id',$id)
        ->select('products.id as id','products.name as name','products.description as description','products.status as status','products.img as img','products.banner as banner','product_categories.category_id as category_id','categories.store_id as store_id')
        ->get();
       
        return $productData;
    }

    public function categoryProduct($slug)
    {
        $productData = DB::table('products')
        ->leftJoin('product_categories', 'products.id', '=', 'product_categories.product_id')
        ->leftJoin('categories', 'categories.id', '=', 'product_categories.category_id')
        ->where('categories.slug','LIKE','%'.$slug.'%')
        ->select('products.id as id','products.name as name','products.slug as slug','products.description as description','categories.short_description as short_description','products.status as status','products.img as img','products.banner as banner','product_categories.category_id as category_id','categories.store_id as store_id')
        ->get();
       
        return $productData;
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
        $existingProduct = Product::findOrFail( $id );
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
        ]);
        if( $existingProduct ){
            $existingProduct->name = $request['name'];
            $existingProduct->description = $request['description'];
            // $existingProduct->status = $request['status'] ? 1 : 0;
            $existingProduct->sub_header = $request["sub_header"];
            $existingProduct->short_description = $request["short_description"];
            $filePath = '';
            if ($request['img'] != $existingProduct->img) {
              
               // Make a image name based on user name and current timestamp
                $name = time(). '.' .explode('/', explode(':', substr($request["img"], 0, strpos($request["img"], ';')))[1])[1];

                // Define folder path
                $folder = 'img/product/';
                // Make a file path where image will be stored [ folder path + file name + file extension]
                $filePath = $name;
                // Upload image
                
                $filePathVarient = 'actual_'.$filePath;
                $this->uploadImage($request['img'], $folder, $filePathVarient,617,521);
                // $filePathVarient = 'large_'.$filePath;
                // $this->uploadOne($request->product, $folder, $filePathVarient,600,300);
               
            }
            $existingProduct->img = $filePath;
            $bannerPath = '';        // Check if a profile image has been uploaded
            if ($request['banner']  != $existingProduct->banner) {
                // Make a image name based on user name and current timestamp
                $name = 'banner_'.time(). '.' .explode('/', explode(':', substr($request["banner"], 0, strpos($request["banner"], ';')))[1])[1];
                // Define folder path
                $folder = 'img/product/';
                // Make a file path where image will be stored [ folder path + file name + file extension]
                $bannerPath = $name;
                // Upload image
                $filePathVarient = $bannerPath;
                $this->uploadImage($request->banner, $folder, $filePathVarient,663,646);
                // $filePathVarient = 'large_'.$filePath;
                // $this->uploadOne($request->product, $folder, $filePathVarient,600,300);   
            }
            $existingProduct->banner = $bannerPath;
            $existingProduct->save();

            ProductCategory::where('product_id', $request['id'])
            ->update(['category_id' => $request['category_id']]);
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
        $existingProduct = Product::find( $id );
        if($existingProduct->img){
            unlink(public_path('img/product/'.$existingProduct->img));
        }
        if($existingProduct->banner){
            unlink(public_path('img/product/'.$existingProduct->banner));
        }
        if( $existingProduct ){
            $existingProduct->delete();
            $existingProductCategory = ProductCategory::where('product_id', $id);
            $existingProductCategory->delete();
            return 'Item successfully deleted.';
        }

        return 'Item not found.';
    }
}
