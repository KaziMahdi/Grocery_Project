<?php
/*
* ProBot Version: 3.0
* Laravel Version: 10x
* Description: This source file "app/Http/_SupplierController.php" was generated by ProBot AI.
* Date: 5/5/2023 7:48:55 PM
* Contact: towhid1@outlook.com
*/
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Supplier;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
class SupplierController extends Controller{
	public function index(){
		$suppliers = Supplier::paginate(5);
		return view("pages.erp.supplier.index",["suppliers"=>$suppliers]);
	}
	public function create(){
		return view("pages.erp.supplier.create",[]);
	}
	public function store(Request $request){
		//Supplier::create($request->all());
		$supplier = new Supplier;
		$supplier->name=$request->txtname;
		$supplier->mobile=$request->txtmobile;
		$supplier->email=$request->txtemail;
date_default_timezone_set("Asia/Dhaka");
		$supplier->created_at=date('Y-m-d H:i:s');
date_default_timezone_set("Asia/Dhaka");
		$supplier->updated_at=date('Y-m-d H:i:s');

		$supplier->save();

		return back()->with('success', 'Created Successfully.');
	}
	public function show($id){
		$supplier = Supplier::find($id);
		return view("pages.erp.supplier.show",["supplier"=>$supplier]);
	}
	public function edit(Supplier $supplier){
		return view("pages.erp.supplier.edit",["supplier"=>$supplier,]);
	}
	public function update(Request $request,Supplier $supplier){
		//Supplier::update($request->all());
		$supplier = Supplier::find($supplier->id);
		$supplier->name=$request->txtname;
		$supplier->mobile=$request->txtmobile;
		$supplier->email=$request->txtemail;
date_default_timezone_set("Asia/Dhaka");
		$supplier->created_at=date('Y-m-d H:i:s');
date_default_timezone_set("Asia/Dhaka");
		$supplier->updated_at=date('Y-m-d H:i:s');

		$supplier->save();

		return redirect()->route("suppliers.index")->with('success','Updated Successfully.');
	}
	public function destroy(Supplier $supplier){
		$supplier->delete();
		return redirect()->route("suppliers.index")->with('success', 'Deleted Successfully.');
	}

	public function get_suppliar_json(){
		$id=$_GET["id"];
		$request=Supplier::find($id);
		return json_encode($request);
	}
}
?>
