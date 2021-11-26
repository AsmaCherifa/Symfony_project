<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\products;
use App\Models\cart;
use App\Models\order;
use Session;

class productController extends Controller
{
    function index(){
        $data = products::all();
        return view('products.products',['products'=>$data]);
    }

   
    
    function detail($id){
        $data = products::find($id);
        return view('products/details',['product'=>$data]);
    }
    function addToCart (Request $rq){
        if ($rq->session()->has('user')){
            $cart = new cart;
            $cart->user_id = $rq->session()->get('user')['id'];//get id user from session
            $cart->product_id = $rq->product_id;//get id product from form 'name=idpro'
            $cart->save();
            return redirect ('/');
        } else {
            return redirect ('login');
        }
        }
     static function cartItem (){
        $userId = Session::get('user')['id'];//id=1 for asma
        return cart::where('user_id',$userId)->count();//where 2 are equals 
    }

    function cartList (){
    $userId =Session::get('user')['id'];
    $products=DB::table('carts')
    ->join('products','carts.product_id','=','products.id')
    ->where('carts.user_id',$userId)
    ->select('products.*','carts.id as id')
    ->get();
    return view('products/cartList',['products'=>$products]);
    }
    function cartList2 (){
     $userId =Session::get('user')['id'];
    $devices=DB::table('carts')
    ->join('devices','carts.product_id','=','devices.id')
    ->where('carts.user_id',$userId)
    ->select('devices.*','carts.id as id')
    ->get();
    return view('products/cartList',['devices'=>$devices]);
    }
    
    function removeFromCart ($id){
       cart::destroy($id);
       return redirect ('/cartList');
    }
    function order (){
        $userId =Session::get('user')['id'];
        $total=DB::table('carts')
        ->join('products','carts.product_id','=','products.id')
        ->where('carts.user_id',$userId)
        ->sum('products.price');
        return view('products/orderNow',['total'=>$total]);
 
     }
     function orderPlace (Request $req){
        $userId =Session::get('user')['id'];
        $allCart=cart::where('user_id',$userId)
        ->get();
        foreach($allCart as $cart)
        $order =new order();
        $order->product_id=$cart['product_id'];
        $order->user_id=$cart['user_id'];
        $order->adresse=$req->adresse;
        $order->city=$req->city;
        $order->zip=$req->zip;
        $order->pay=$req->pay;
        $order->save();
        return view('products/myOrders');
     }

     function myOrders (){
        $userId =Session::get('user')['id'];
        $orders=DB::table('orders')
        ->join('products','orders.product_id','=','products.id')
        ->where('orders.user_id',$userId)
        ->get();
        return view('products/myOrders',['orders'=>$orders]);
     }

   
}
