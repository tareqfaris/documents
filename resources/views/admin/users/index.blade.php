@extends('layouts.admin')
@section('content')
<h3>المستخدمين</h1>
    <!-- Button trigger modal -->
    {{-- <a href="{{route('admin.users.create')}}" class="btn btn-primary btn-sm m-2" >
      إضافة مستخدم
    </a> --}}
<table class="table table-bordered table-hover text-center">
    <thead>
        <tr>
            <th>#</th>
            <th>اسم المستخدم</th>
            <th>البريد الالكتروني</th>
            <th>إجراءات</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $item)
        <tr>
            <td scope="row">{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->email}}</td>
            <td class="d-flex justify-content-center">
                {{-- <a href="{{route('admin.users.edit',$item->id)}}" class="btn btn-info btn-sm m-1">تعديل</a> --}}
                <form action="{{route('admin.users.delete',$item->id)}}" id="del-{{$item->id}}" method="post">
                  @csrf
                  @method('delete')
                </form>
                <button class="btn btn-danger btn-sm m-1" type="submit" form="del-{{$item->id}}">حذف</button>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>
{{$users->links()}}
@endsection
