<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductCategory;
class ProductController extends Controller
{
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
        if($request["img"]){
            $name = time(). '.' .explode('/', explode(':', substr($request["img"], 0, strpos($request["img"], ';')))[1])[1];
            \Image::make($request["img"])->save(public_path('img/product/').$name);
            $newProduct->img = $name;

        }
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

            if($request["img"] != $existingProduct->img){
                $name = time(). '.' .explode('/', explode(':', substr($request["img"], 0, strpos($request["img"], ';')))[1])[1];
                \Image::make($request["img"])->save(public_path('img/product/').$name);
                $existingProduct->img = $name;
    
            }
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
