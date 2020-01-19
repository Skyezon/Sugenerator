<?php

namespace App\Http\Controllers;

use App\Http\Requests\SucikaRequest;
use Illuminate\Http\Request;
use App\Internal;
use Illuminate\Support\Str;


class InternalController extends Controller
{
    public function showAll(){
        $Internals = Internal::paginate(4);
        return view('adminpanel',compact('Internals'));
    }

    public function print()
    {
        $Internals = Internal::all();
        return view('print',compact('Internals'));
    }

    public function chooseForm($id = NULL){
        $isNull = is_null(Internal::find($id));
        if($isNull){
           return $this->addForm();
        }else{
           return $this->editForm($id);
        }
    }

    public function editForm($id){
        $route = 'Internal.edit';
        $Internal = Internal::findOrFail($id);
        $keyValue = ['id' => $Internal->id];
        return view('sucikaEdit',compact('Internal','route','keyValue'));
    }

    public function edit($id, SucikaRequest $request){
        $Internal = Internal::findOrFail($id);
        $Internal->update([
            'name' => $request->name,
            'motivation' => $request->motivation,
            'role' => $request->role
        ]);
            return redirect()->route('Internal.showAll')->with('status','Sucika Updated');
    }

    public function addForm(){
        $route = 'Internal.add';
        $keyValue = '';
        return view('sucikaAdd',compact('route','keyValue'));
    }

    public function add(SucikaRequest $request){
        Internal::create([
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

    //testview

    public function testing($id){
        return view('testing',compact('id'));
    }

}
