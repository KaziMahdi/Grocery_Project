<?php

use App\Http\Controllers\API\TransectionController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\StockAdjustmentController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\TransactionTypeController;
use App\Http\Controllers\UomController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WarehouseController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;

use App\Models\StockAdjustment;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name("login");

Route::resource('/customers',CustomerController::class);
Route::get("getcustomer",[CustomerController::class,'get_customer_json']);
Route::resource('/employees',EmployeeController::class);
Route::resource('/uoms',UomController::class);
Route::resource('/products',ProductController::class);
Route::get("getproducts",[ProductController::class,'get_product_json']);
Route::resource('/users',UserController::class);
Route::get('/getusers',[UserController::class,'get_user']);
Route::resource('/orders',OrderController::class);
Route::resource('/stocks',StockController::class);
Route::resource('/purchases',PurchaseController::class);
Route::resource('/suppliars',SupplierController::class);
Route::get("getsuppliars",[SupplierController::class,'get_suppliar_json']);

Route::resource('/dashboard',DashboardController::class);

Route::resource('/transections',TransactionTypeController::class);

Route::resource('/stockadjustment',StockAdjustmentController::class);

Route::resource('/warehouses',WarehouseController::class);

Route::get('report',[StockController::class,'report'])->name('report');


Route::post("auth",[AuthController::class,'auth'])->name('auth');
Route::get("home",[HomeController::class,'index'])->name('home');
Route::get("logout",[AuthController::class,'logout'])->name('logout');
