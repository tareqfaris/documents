<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Document;
class MainController extends Controller
{
    public function form(){
        return view('register');
    }

    public function store(Request $request){
        $request->validate([
            'name'=>'required'
        ]);
        $data=$request->all();
        //$data['user_id']=auth()->user()->id;
        $document=Document::create($data);
        return redirect()->back();
    }
}
