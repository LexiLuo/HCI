<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Redirect;
use App\User;
use App\Http\Requests;


class loginController extends Controller
{
    public function loginGet(){
        return view('login/login');
    }

    public function loginPost(Request $request){
        $this->validate($request,User::rules());
        $name=$request->get('name');
        $password=$request->get('password');
        if(Auth::attempt(['name'=>$name,'password'=>$password],$request->get('remember'))){
            return Redirect::route('sport_home');
        }else{
            return Redirect::to('/login')
                ->withInput()
                ->withErrors('学号或者密码不正确,请重试！');
        }
    }

    public function logout(){
        if(Auth::check()){
            Auth::logout();
        }
        return Redirect::route('login');
    }
}
