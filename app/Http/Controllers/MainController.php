<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Document;
use App\Models\Attachment;
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
        $request->session()->flash('success', 'تم ارسال طلبك بنجاح يرجى انتظار الرد من الادارة رقم الطلب (#'.$document->id.')');
        return redirect()->back()->with('success', 'تم ارسال طلبك بنجاح يرجى انتظار الرد من الادارة رقم الطلب (#'.$document->id.')');
        
    }

    
   public function downloadAttachment(Attachment $attachment){
    $file_path=public_path('uploads/'.$attachment->filename);
    if (\File::exists($file_path)) {
       return  response()->download($file_path);
    }else{
       abort(404);
    }
     
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
