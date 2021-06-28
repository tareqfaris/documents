@extends('layouts.blank')
@section('content')
<div class="row">
    <div class="col-md-12 col-lg-10 co-sm-12 m-auto">
      <div class="col-12">
        <h1 class="my-5 text-center ">عزيزي الطالب يجب عليك ملئ الاستماره لتقديم الطلب</h1>
      </div>
      <div class="containerr">
        <form action="{{route('form')}}" method="post">
            @csrf
          <label for="fname" class="font-weight-bold">الاسم </label>
          <input type="text"  id="fname" name="name" placeholder="الاسم ..">

          <div class="form-group">
            <label for="">رقم الهاتف</label>
            <input type="text"
              class="form-control" name="phone" id="" aria-describedby="helpId" placeholder="رقم الهاتف">
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
            <label for="">تأريخ الميلاد</label>
            <input type="date"
              class="form-control" name="dob" id="" aria-describedby="helpId" placeholder="">
          </div>

          <div class="form-group">
            <label for="">اسم المدرسة</label>
            <input type="text"
              class="form-control" name="school_name" id="" aria-describedby="helpId" placeholder="">
          </div>

          <div class="form-group">
            <label for="">سنة التخرج</label>
            <input type="text"
              class="form-control" name="school_year" id="" aria-describedby="helpId" placeholder="">
          </div>

          <div class="form-group">
            <label for="">نوع الدراسة</label>
            <input type="text"
              class="form-control" name="school_type" id="" aria-describedby="helpId" placeholder="">
          </div>
  
          <input type="submit" class="font-weight-bold" value="ارسال الطلب">
        </form>
      </div>
    </div>
  </div>
@endsection