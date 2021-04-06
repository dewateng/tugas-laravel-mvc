<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(){
        return view('register');
    }
    
    public function welcome(Request $request){
        //dd($request["nama1"]);
        return "ok";
    }

    public function welcomepost(Request $request){
        //return view('welcome1');
        //dd($request->all());
        $nama1=$request["nama1"];
        $nama2=$request["nama2"];
        return view('welcome1',['nama'=>strtoupper($nama1 .' '. $nama2)]);
    }
}
