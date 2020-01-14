<?php

namespace App\Http\Controllers;

use App\Http\Requests\SucikaRequest;
use Illuminate\Http\Request;
use App\Internal;
use Illuminate\Support\Str;


class InternalController extends Controller
{
    public function showAll(){
        $Internals = Internal::all();
        return view('adminpanel',compact('Internals'));
    }

    public function show($token){
        $Internal = Internal::where('token','=',$token)->firstOrFail();
        return view('sucika',compact('Internal'));
    }

    public function showEdit($id){
        $Internal = Internal::findOrFail($id);
        return view('sucika-edit',compact('Internal'));
    }

    public function edit($id, SucikaRequest $request){
        $Internal = Internal::findOrFail($id);
        $Internal->update([
            'name' => $request->name,
            'motivation' => $request->motivation,
            'role' => $request->role
        ]);
            return redirect()->route('Internal.showAll')->with('status','Sucika added');
    }

    public function store(SucikaRequest $request){
        $Internal = Internal::create([
            'name' => $request->name,
            'motivation' => $request->motivation,
            'role' => $request->role,
            'token' => Str::random(5)
        ]);

        return redirect()->route('Internal.showAll')->with('status','Sucika added');
    }

    public function delete($id){
        $Internal = Internal::findOrFail($id);
        $Internal->delete();
        return redirect()->route('Internal.showAll')->with('status','Sucika deleted');
    }

}
