<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Document;

class AdminController extends Controller
{
   public function documents(){
       $documents=Document::paginate(25);
        return view('admin.documents',compact('documents'));
   }

   public function 
}
