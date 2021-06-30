@extends('layouts.blank')
@section('content')
<div class="row">
    <div class="col-md-12 col-lg-10 co-sm-12 m-auto">
      <div class="col-12">
        <h1 class="my-5 text-center ">عزيزي الطالب يجب عليك ملئ الاستماره لتقديم الطلب</h1>
      </div>
      <div class="container bg-light bordered p-4">
        <form action="{{route('form')}}" method="post">
            @csrf
            <div class="form-group">
              <label for="">عنوان الطلب</label>
              <input type="text"
                class="form-control" name="type" id="" aria-describedby="helpId" placeholder="">
            </div>
           <div class="form-group">
             <label for="">الاسم</label>
             <input type="text"
               class="form-control" name="name" id="" aria-describedby="helpId" placeholder="">
           </div>

          <div class="form-group">
            <label for="">رقم الهاتف</label>
            <input type="text"
              class="form-control" name="phone" id="" aria-describedby="helpId" placeholder="رقم الهاتف">
          </div>

          <div class="form-group">
            <label for="">القسم / الكلية</label>
            <select class="form-control" name="department_id" id="">
                @foreach (\App\Models\Department::get() as $item)
                     <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
            </select>
          </div>

          <div class="form-group">
            <label for="">المدينة</label>
            <input type="text"
              class="form-control" name="city" id="" aria-describedby="helpId" placeholder="المدينة او المحافظة">
          </div>

          <div class="form-group">
            <label for="">العنوان</label>
            <input type="text"
              class="form-control" name="address" id="" aria-describedby="helpId" placeholder="">
          </div>

          <div class="form-group">
            <label for="">تفاصيل الطلب</label>
            <textarea class="form-control" name="content" id="" rows="5"></textarea>
          </div>
  
          <input type="submit" class="font-weight-bold btn btn-success" value="ارسال الطلب">
        </form>
      </div>
    </div>
  </div>
@endsection