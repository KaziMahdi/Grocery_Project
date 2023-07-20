<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Uom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product=DB::table("products as p")
        ->join("uoms as u","p.uom_id","=","u.id")
        ->join("categories as c","p.category_id","=","c.id")
        ->select("p.*","u.name as uname","c.name as cname")
        ->paginate(5);
        return view("pages.erp.product.index",["products"=>$product]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $uoms=Uom::all();
        $categoryes=Category::all();
        return view("pages.erp.product.create",["uoms"=>$uoms,"categoryes"=>$categoryes]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product=new Product();
        $product->name=$request->txtname;
        $product->purchase_price=$request->txtprice;
        $product->salling_price=$request->txtsellingprice;
        $product->uom_id=$request->txtuom;
        $product->category_id=$request->txtCategory;

        if(isset($request->txtphoto)){
			$product->photo=$request->txtphoto;
		}
        $product->save();

        if(isset($request->txtphoto)){
			$imageName=$product->id.'.'.$request->txtphoto->extension();
			$product->photo=$imageName;
			$product->update();
			$request->txtphoto->move(public_path('img'),$imageName);
		}

        return redirect()->route('products.create')->with("success");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        
        return view("pages.erp.product.show",["product"=>$product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $uoms=Uom::all();
        $categoryes=Category::all();
        return view("pages.erp.product.edit",["product"=>$product,"uoms"=>$uoms,"categoryes"=>$categoryes]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $product=Product::find($product->id);

        $product->name=$request->txtname;
        $product->purchase_price=$request->txtprice;
        $product->salling_price=$request->txtsellingprice;
        $product->uom_id=$request->txtuom;
        $product->category_id=$request->txtCategory;
        if(isset($request->txtphoto)){
			$product->photo=$request->txtphoto;
		}

        $product->save();

        if(isset($request->txtphoto)){
			$imageName=$product->id.'.'.$request->txtphoto->extension();
			$product->photo=$imageName;
			$product->update();
			$request->txtphoto->move(public_path('img'),$imageName);
		}


        return redirect()->route('products.index')->with("success");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route("products.index")->with("success");
    }

    public function get_product_json(){

        $id=$_GET["id"];
        $request=Product::find($id);
        return json_encode($request);

    }
}
