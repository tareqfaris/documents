@extends('layouts.admin')
@section('content')
   <div class="bordered card p-4">
       <div class="d-flex justify-content-between">
           <div>
            <?=@\DNS2D::getBarcodeHTML($document->id, 'QRCODE',4,4);?>
           </div>
           <div class="text-center">
               <p>جمهورية العراق / وزارة التعليم العالي والبحث العلمي</p>
               <p>جامعة كربلاء - كلية العلوم</p>
           </div>
           <div>
               <p>التاريخ :  {{@$document->created_at->format('Y-m-d')}}</p>
               <p>العدد : {{@$document->id}}</p>
           </div>
       </div>
       <hr>
       <h3 class="text-center"> م/ طلب وثيقة</h3>
       <div class="text-right">
             <h6>مقدم الطلب <b>{{$document->name}}</b></h5>
            <table class="table table-striped table-inverse">
                <thead class="thead-inverse">
                    <tr>
                        <th>رقم الهاتف</th>
                        <th>المحافظة</th>
                        <th>سنة التخرج</th>
                        <th>نوع الدراسة</th>
                        <th>القسم</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="row">{{$document->phone}}</td>
                            <td>{{$document->city}}</td>
                            <td>{{$document->school_year}}</td>
                            <td>{{$document->school_type}}</td>
                            <td>{{@$document->department->name}}</td>
                        </tr>
                    </tbody>
            </table>
            <p>{{$document->content}}</p>
            <div class="mt-5 m-5">
                <h6>توقع العميد</h6>
            </div>
       </div>
   </div>
   <div class="card bordered m-2 p-2 shadow">
    مرفقات 
    <table class="table table-hover table-bordered text-center">
        <thead>
            <tr>
                <th>#</th>
                <th>الملف</th>
                <th>تأريخ الاضافة</th>
                <th>تحميل</th>
                <th>إجراءات</th>
            </tr>
        </thead>
        <tbody>
         @foreach ($document->attachments as $item)
         <tr>
             <td scope="row">{{$item->id}}</td>
             <td style="direction:ltr">{{$item->filename}}</td>
             <td>{{$item->created_at->format('Y-m-d')}}</td>
             <td><a class="btn btn-primary btn-sm" href="{{route('download',$item->id)}}">تحميل </a></td>
             <td>
                 <form action="{{route('admin.attachment.delete',$item->id)}}" id="del-{{$item->id}}" method="post">
                     @csrf
                     @method('delete')
                   </form>
                   <button class="btn btn-danger btn-sm m-1" type="submit" form="del-{{$item->id}}">حذف</button>
             </td>
         </tr>
       @endforeach
        

        </tbody>
    </table>

</div>
   <div class="bordered card m-2 p-2 d-print-none">
       <form action="{{route('admin.action',$document->id)}}" method="POST" enctype="multipart/form-data">
       @csrf 
       <div class="form-group">
         <label for="">حالة الطلب</label>
         <select class="form-control" name="status" id="">
           <option value="0"  @if ($document->status==0) selected @endif>قيد المراجعة</option>
           <option value="1" @if ($document->status==1) selected @endif>موافقة</option>
           <option value="2" @if ($document->status==2) selected @endif>رفض</option>
         </select>
       </div>

       <div class="form-group">
         <label for="">ارفاق ملف</label>
         <input type="file" class="form-control-file" name="file" id="" placeholder="" aria-describedby="fileHelpId">
         <small id="fileHelpId" class="form-text text-muted">يجب ان يكون الملف بصيغة pdf</small>
       </div>
       <button type="submit" class="btn btn-primary">حفظ</button>
    </form>
   </div>
@endsection