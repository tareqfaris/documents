<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Document;
class DocumentsController extends Controller{
   
    public function store(Request $request){
        $request->validate([
            'name'=>'required'
        ]);
        $document=Document::create($request->all());
        return redirect()->back();
    }
}
