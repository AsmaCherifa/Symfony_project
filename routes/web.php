<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\livreController;
use App\Http\Controllers\userController;
use App\Http\Controllers\productController;
use App\Http\Controllers\deviceController;
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

Route::get('/logout', function () {
    Session::forget('user');
    return view('login');
});

Route::resource("livre",livreController::class);
Route::get ("/list",[deviceController::class,'index']);
Route::get ("/detailDevice/{id}",[deviceController::class,'detailDevice']);


Route::view('register','register');
Route::view('login','login');
Route::post ("/login",[userController::class,'login']);
Route::post ("/register",[userController::class,'register']);



Route::get ("/",[productController::class,'index']);
Route::get ("detail/{id}",[productController::class,'detail']);
Route::resource("/",productController::class);
Route::get("/addToCart",[productController::class,'addToCart']);
Route::get("/cartList",[productController::class,'cartList']);
Route::get("removeFromCart/{id}",[productController::class,'removeFromCart']);
Route::get("/order",[productController::class,'order']);
Route::get("/myOrders",[productController::class,'myOrders']);
Route::post("/orderPlace",[productController::class,'orderPlace']);