@extends('layouts.admin')
@section('content')
    <div class="row">
        <form class="col-12 p-3" method="post" action="{{route('admin.departments.update',$department->id)}}">
            @csrf
            @method('put')
            <div class="form-group">
              <label for="">اسم القسم</label>
              <input type="text"
                class="form-control" name="name" id="" aria-describedby="helpId" placeholder="" value="{{$department->name}}">
            </div>
            <button type="submit" class="btn btn-primary">حفظ</button>
            <a href="{{route('admin.departments')}}" class="btn btn-secondary">إلغاء</a>
        </form>
    </div>
@endsection