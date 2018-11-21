<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use App\FileBucket;
use App\FileStore;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products_list = Product::all();
        // return $products_list;
        $view_data = array("products_list" => $products_list);

        return view("products.index")->with($view_data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view("products.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $path = $request->file('image')->store("public/images");
        
        $path="images/".pathinfo($path)['basename'];

        $input = $request->only([
            "product_name", "small_desc",
            "price", "detailed_desc",
        ]);


        $newProduct = new Product();

        $newProduct->fill($input);

        $newBucket=new FileBucket();
        
        $newFile=new FileStore([
            "file_path" => $path,
        ]);

        $newBucket->save();

        $newProduct->file_bucket_id=$newBucket->id;

        $newProduct->save();

        $newProduct->file_bucket()->save($newBucket);

        $newBucket->files()->save($newFile);

        return redirect()->action("ProductController@show", ["id" => $newProduct->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ProductData = Product::with("file_bucket.files")->find($id);
        return view("products.show")->with(["ProductData" => $ProductData]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ProductData = Product::find($id);

        return view("products.edit")->with(["ProductData" => $ProductData]);
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
        $input = $request->only([
            "product_name", "small_desc",
            "price", "detailed_desc",
        ]);

        $ProductData = Product::find($id);

        $ProductData->fill($input);
        $ProductData->save();

        return redirect()->action("ProductController@show", ["id" => $id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
