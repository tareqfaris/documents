@extends('layouts.admin')
@section('content')
<h3>الطلبات</h1>
<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>QR</th>
            <th>الإسم</th>
            <th>نوع الطلب</th>
            <th>تأريخ التقديم</th>
            <th>حالة الطلب</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($documents as $item)
        <tr>
            <td scope="row">{{$item->id}}</td>
            <td><?=\DNS2D::getBarcodeHTML($item->id, 'QRCODE',3,3);?></td>
            <td>{{$item->name}}</td>
            <td></td>
            <td>{{$item->created_at->format('Y-m-d')}}</td>
        </tr>
        @endforeach

    </tbody>
</table>
{{$documents->links()}}
@endsection
