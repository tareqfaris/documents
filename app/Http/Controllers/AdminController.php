<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Document;
use App\Models\Attachment;

class AdminController extends Controller
{
   public function documents(){
       $documents=Document::paginate(25);
        return view('admin.documents',compact('documents'));
   }

   public function action(Document $document){
        return view('admin.action',compact('document'));
   }

   public function actionSave(Request $request,Document $document){
       $document->update(['status'=>$request->status]);
       if ($request->hasFile('file')) {
          $file=$request->file('file');
          $filename=$document->id.'_'.time().'.'.$file->getClientOriginalExtension();
          $file->move(public_path('uploads'),$filename);
          Attachment::create([
             'document_id'=>$document->id,
             'filename'=>$filename
          ]);
       }
       $request->session()->flash('success', 'تم تحديث حالة الطلب بنجاح');
       return redirect()->back()->with('success', 'تم تحديث حالة الطلب بنجاح');
   }


   public function attachmentDestroy(Attachment $attachment){
      $attachment->delete();
      return redirect()->back();
   }
}
