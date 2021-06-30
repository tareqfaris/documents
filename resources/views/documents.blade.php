@extends('layouts.blank')
@section('content')
    <div class="">
        <a href="{{url('/')}}" class="btn btn-info btn-sm">إنشاء طلب جديد</a>
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>عنوان الطلب</th>
                    <th>نوع الطلب</th>
                    <th>تأريخ التقديم</th>
                    <th>حالة الطلب</th>
                    <th>إجراءات</th>
                </tr>
            </thead>
            <tbody>
                @foreach (auth()->user()->documents as $document)
                  <tr>
                    <td scope="row">{{$document->id}}</td>
                    <td>{{$document->name}}</td>
                    <td>{{$document->type}}</td>
                    <td>{{$document->created_at->format('Y-m-d')}}</td>
                    <td>

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