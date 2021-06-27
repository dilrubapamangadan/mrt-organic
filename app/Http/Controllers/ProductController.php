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
            'description' => 'required',
        ]);
        $newProduct = new Product;
        $newProduct->name = $request["name"];
        $newProduct->description = $request["description"];
        $newProduct->status = $request["status"]?1:0;

        $filePath = '';        // Check if a profile image has been uploaded
        if ($request['img']) {
                
            // Make a image name based on user name and current timestamp
            $name = time(). '.' .explode('/', explode(':', substr($request["img"], 0, strpos($request["img"], ';')))[1])[1];

            // Define folder path
            $folder = 'img/product/';
            // Make a file path where image will be stored [ folder path + file name + file extension]
            $filePath = $name;
            // Upload image
            
            $filePathVarient = 'actual_'.$filePath;
            $this->uploadImage($request->img, $folder, $filePathVarient);
            // $filePathVarient = 'large_'.$filePath;
            // $this->uploadOne($request->product, $folder, $filePathVarient,600,300);
            // $filePathVarient = 'medium_'.$filePath;
            // $this->uploadOne($request->product, $folder, $filePathVarient, 380, 190);
            // $filePathVarient = 'small_'.$filePath;
            // $this->uploadOne($request->product, $folder, $filePathVarient, 280, 140);
            
        }
        $newProduct->img = $filePath;
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
        ->select('products.id as id','products.name as name','products.description as description','products.status as status','products.img as img','product_categories.category_id as category_id','categories.store_id as store_id')
        ->get();
       
        return $productData;
    }

    public function categoryProduct($slug)
    {
        $productData = DB::table('products')
        ->leftJoin('product_categories', 'products.id', '=', 'product_categories.product_id')
        ->leftJoin('categories', 'categories.id', '=', 'product_categories.category_id')
        ->where('categories.slug',$slug)
        ->select('products.id as id','products.name as name','products.description as description','products.status as status','products.img as img','product_categories.category_id as category_id','categories.store_id as store_id')
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
            $existingProduct->status = $request['status'] ? 1 : 0;
            $filePath = '';
            if ($request['img']) {
              
               // Make a image name based on user name and current timestamp
                $name = time(). '.' .explode('/', explode(':', substr($request["img"], 0, strpos($request["img"], ';')))[1])[1];

                // Define folder path
                $folder = 'img/product/';
                // Make a file path where image will be stored [ folder path + file name + file extension]
                $filePath = $name;
                // Upload image
                
                $filePathVarient = 'actual_'.$filePath;
                $this->uploadImage($request['img'], $folder, $filePathVarient);
                // $filePathVarient = 'large_'.$filePath;
                // $this->uploadOne($request->product, $folder, $filePathVarient,600,300);
                // $filePathVarient = 'medium_'.$filePath;
                // $this->uploadOne($request->product, $folder, $filePathVarient, 380, 190);
                // $filePathVarient = 'small_'.$filePath;
                // $this->uploadOne($request->product, $folder, $filePathVarient, 280, 140);
                
            }
            $existingProduct->img = $filePath;
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

        if( $existingProduct ){
            $existingProduct->delete();
            $existingProductCategory = ProductCategory::where('product_id', $id);
            $existingProductCategory->delete();
            return 'Item successfully deleted.';
        }

        return 'Item not found.';
    }
}
