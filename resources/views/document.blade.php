@extends('layouts.blank')
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
               <p>التاريخ :  {{$document->created_at->format('Y-m-d')}}</p>
               <p>العدد : {{$document->id}}</p>
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
               </tr>
           </thead>
           <tbody>
            @foreach ($document->attachments as $item)
            <tr>
                <td scope="row">{{$item->id}}</td>
                <td style="direction:ltr">{{$item->filename}}</td>
                <td>{{$item->created_at->format('Y-m-d')}}</td>
                <td><a class="btn btn-primary btn-sm" href="{{route('download',$item->id)}}">تحميل </a></td>
            </tr>
          @endforeach
           
 
           </tbody>
       </table>
 
   </div>
@endsection