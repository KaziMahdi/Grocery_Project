<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers=Customer::all();
       return response()->json($customers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("pages.erp.customer.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name=$request->input("txtname");
        $mobile=$request->input("txtmobile");
        $email=$request->input("txtemail");
        $address=$request->input("txtaddress");

        DB::insert("insert into lrv_customers(name,mobile,email,address)values('$name','$mobile','$email','$address')");
        return redirect()->route("customers.create")->with("success");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $customer=Customer::find($id);
        return view("pages.erp.customer.show",["customer"=>$customer]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customers=Customer::find($id);
        return view("pages.erp.customer.edit",["customer"=>$customers]);
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
        $name=$request->txtname;
        $mobile=$request->txtmobile;
        $email=$request->txtemail;
        $address=$request->txtaddress;

        DB::table("customers")
        ->where('id',$id)
        ->update(['name'=>$name,'mobile'=>$mobile,'email'=>$email,'address'=>$address]);

        return redirect()->route("customers.index")->with("success");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::delete('delete from lrv_customers where id = :id', ['id' => $id]);
        return redirect()->route("customers.index")->with('success','Deleted Successfully.');
    }

    public function get_customer_json(){

        $id=$_GET["id"];
        $request=Customer::find($id);
        
        return json_encode($request);
    }
}
