<?php

namespace App\Http\Controllers;

use App\Internal;
use Illuminate\Http\Request;

class FirstPageController extends Controller
{
    public function show(){
        return view('Firstpage');
    }

    public function search(Request $request){
        $token =$request->token;
        $Internal = Internal::where('token','=',$token)->firstOrFail();
        $title = $Internal->name;
        return view('sucika',compact('Internal','title'));
    }

    public function scan($token){
        $Internal = Internal::where('token','=',$token)->firstOrFail();
        $title = $Internal->name;
        return view('sucika',compact('Internal','title'));

    }
}
