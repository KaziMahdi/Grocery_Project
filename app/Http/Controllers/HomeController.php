<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
  
   

   function index(){   
       
    $sess_id=session('sess_id');
    if(!isset($sess_id))return redirect('/');  
    
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
}
