<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\userModel;
use Illuminate\Support\Facades\Hash;
use App\Models\user;
class userController extends Controller
{
    function login (Request $req){
        $user = user::where(['email'=>$req->email])->first();
      
        if(!$user || Hash::check($req->password,$user->password))
        {
        return "Email and Password do not match !!!";
       } else{
           //return "hello " . $user->name;
           $req->session()->put('user',$user);
           return redirect ('/');
       }
   }
   function register (Request $rq){
  
        $user = new user;
        $user->name = $rq->name;
        $user->email = $rq->email;
        $user->password = $rq->password;
        $user->save();
        return redirect ('/');
  
    
   }
}
