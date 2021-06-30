<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Document;
class MainController extends Controller
{
    public function document(){
        return view('forms.document');
    }

    public function endorsement(){
        return view('forms.endorsement');
    }

    public function store(Request $request){
        $request->validate([
            'name'=>'required'
        ]);
        $data=$request->all();
        $data['user_id']=auth()->user()->id;
        $document=Document::create($data);
        return redirect()->back();
    }

    public function documents(){
          return view('documents');
    }

    public function other(){
        return view('forms.other');
    }

    public function show (Document $document){
        return view('document',compact('document'));
    }
}
