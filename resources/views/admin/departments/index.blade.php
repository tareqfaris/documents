@extends('layouts.admin')
@section('content')
<h3>الاقسام</h1>
    <!-- Button trigger modal -->
    <a href="{{route('admin.departments.create')}}" class="btn btn-primary btn-sm m-2" >
      إضافة قسم
    </a>
<table class="table table-bordered table-hover text-center">
    <thead>
        <tr>
            <th>#</th>
            <th>القسم</th>
            <th>الطلبات</th>
            <th>إجراءات</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($departments as $item)
        <tr>
            <td scope="row">{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>
                {{$item->deocuments->count()}}
            </td>
            <td class="d-flex justify-content-center">
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
{{$departments->links()}}
@endsection
