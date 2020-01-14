<?php

namespace App\Http\Controllers;

use App\Internal;
use Illuminate\Http\Request;

class FirstPageController extends Controller
{
    public function show(){
        return view('Firstpage');
    }

    public function search($token){
        $Internal = Internal::where('token','=',$token)->firstOrFail();
        return view('sucika',compact('Internal'));
    }
}
