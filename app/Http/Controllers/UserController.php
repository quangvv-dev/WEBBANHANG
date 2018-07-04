<?php

namespace App\Http\Controllers;
use App\Models\role;
use App\Models\user;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
     public function directLogin()
    {
      return View('login');
    }
    public function Login(Request $request)
    {  
        $allRequest = $request->all();
        
        $login  =   user::where('username',$request->input('username'))->where('pass',$request->input('pass'))->first();
        if(isset($login)){
            /*$request->session()->put('username',$request->input('username'));*/
        return redirect('/');
         
        }
        else {
            echo("sai cmnr");
        }
    }

}
