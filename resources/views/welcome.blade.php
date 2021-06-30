@extends('layouts.blank')
@section('content')
<div class="container">
    <h4 class="text-center">إختر نوع الطلب</h4>
    <div class="row">
        <div class="col-6">
            <a class="btn btn-dark w-100 m-1" href="{{route('document')}}">طلب وثيقة</a>
        </div>
        <div class="col-6">
            <a class="btn btn-dark w-100 m-1" href="{{route('endorsement')}}">طلب تخفيض إجور دراسية</a>
        </div>
        <div class="col-6">
            <a class="btn btn-dark w-100 m-1" href="{{route('endorsement')}}">طلب تاييد تخرج</a>
        </div>
        <div class="col-6">
            <a class="btn btn-dark w-100 m-1" href="{{route('other')}}">طلبات إخرى</a>
        </div>
    </div>
</div>
@endsection
