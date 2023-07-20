<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Order;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $result = DB::table('orders')
    ->whereDate('order_date', DB::raw('CURDATE()'))
    ->count();

    $customer=DB::table('customers')
    ->whereDate('created_at',DB::raw('CURDATE()'))
    ->count();

    $total = DB::table('orders')
    ->whereDate('order_date', DB::raw('CURDATE()'))
    ->sum('order_total');

    $purchase=DB::table('purchases')
    ->whereDate('purchase_date',DB::raw('CURDATE()'))
    ->sum('purchase_total');

    

    $orderdetails = DB::table('orders')
    ->join('customers','orders.customer_id','=','customers.id')
    ->whereDate('order_date', DB::raw('CURDATE()'))
    ->select('orders.*','customers.name as cname')
    ->get();

    $purchasedetails = DB::table('purchase_details')
    
    ->join('purchases','purchase_details.purchase_id','=','purchases.id')
    ->join('products','purchase_details.product_id','=','products.id')
    ->join('uoms','purchase_details.uom_id','=','uoms.id')
    ->whereDate('purchase_details.created_at', DB::raw('CURDATE()'))
    ->select('purchase_details.*','purchases.paid_amount','products.name as pname','uoms.name as uname')
    ->get();





    
        return view("pages.erp.dashboard.index",["result"=>$result,"customer"=>$customer,"total"=>$total,"purchase"=>$purchase,"orderdetails"=>$orderdetails,"purchasedetails"=>$purchasedetails]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
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
        //
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
