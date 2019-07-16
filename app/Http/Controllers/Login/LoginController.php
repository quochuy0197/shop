<?php

namespace App\Http\Controllers\Login;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class LoginController extends Controller
{
    public function getLogin(){
        return view('backend.login.login');
    }   

    public function postLogin(Request $request){
        $arr = [
            'email' => $request -> email,
             'password' => $request -> password
        ];
        if($request -> remember = 'Remember Me'){
            $remember = true;
        }
        else{
            $remember = false;
        }
        if(Auth::attempt($arr,$remember)){
            return redirect()->intended('home/home');
        }
        else{
            return back()->withInput()->with('error','Tài khảon hoặc mật khẩu không đúng');
        }
    }
}
