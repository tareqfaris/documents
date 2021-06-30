@extends('layouts.admin')
@section('content')
<h3>الطلبات</h1>
<table class="table table-bordered table-hover text-center">
    <thead>
        <tr>
            <th>#</th>
            <th>QR</th>
            <th>الإسم</th>
            <th>نوع الطلب</th>
            <th>تأريخ التقديم</th>
            <th>حالة الطلب</th>
            <th>إجراءات</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($documents as $item)
        <tr>
            <td scope="row">{{$item->id}}</td>
            <td><?=\DNS2D::getBarcodeHTML($item->id, 'QRCODE',2,2);?></td>
            <td>{{$item->name}}</td>
            <td>
                @if ($item->type==0)
                    <span class="badge badge-dark">طلب وثيقة</span>
                @endif
            </td>
            <td>{{$item->created_at->format('Y-m-d')}}</td>
            <td>
                <span>قيد المراجعة</span>
            </td>
            <td class="d-flex justify-content-center">
                <a href="{{route('document.show',$item->id)}}" class="btn btn-warning btn-sm m-1">عرض الطلب</a>
                <a href="{{route('admin.departments.edit',$item->id)}}" class="btn btn-info btn-sm m-1">تعديل</a>
                <form action="{{route('admin.departments.delete',$item->id)}}" id="del-{{$item->id}}" method="post">
                  @csrf
                  @method('delete')
                </form>
                <button class="btn btn-danger btn-sm m-1" type="submit" form="del-{{$item->id}}">حذف</button>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>
{{$documents->links()}}
@endsection
