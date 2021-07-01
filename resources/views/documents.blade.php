@extends('layouts.blank')
@section('content')
    <div class="">
        <a href="{{url('/')}}" class="btn btn-info btn-sm">إنشاء طلب جديد</a>
        <table class="table table-bordered table-hover">
            <thead>
                <tr class="text-center">
                    <th>#</th>
                    <th>عنوان الطلب</th>
                    <th>تأريخ التقديم</th>
                    <th>حالة الطلب</th>
                    <th>إجراءات</th>
                </tr>
            </thead>
            <tbody>
                @foreach (auth()->user()->documents as $document)
                  <tr class="text-center">
                    <td scope="row">{{$document->id}}</td>
                    <td>{{$document->title}}</td>
                    <td>{{$document->created_at->format('Y-m-d')}}</td>
                    <td class="text-center">
                          @if ($document->status==0)
                              <span class="badge badge-warning">قيد المراجعة</span>
                          @endif
                          @if ($document->status==1)
                              <span class="badge badge-success">موافقة</span>
                          @endif
                          @if ($document->status==2)
                              <span class="badge badge-danger">رفض</span>
                          @endif
                    </td>
                    <td class="text-center" >
                        <a href="{{route('document.show',$document->id)}}" class="btn btn-warning btn-sm">عرض الطلب</a>
                    </td>
                </tr>  
                @endforeach
            </tbody>
        </table>
    </div>
@endsection