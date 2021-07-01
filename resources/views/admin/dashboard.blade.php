@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row">
        <div class=" col-4 p-1">
            <div class="card text-white bg-dark text-center">
                <div class="card-body">
                    <h4 class="card-title">الطلبات</h4>
                    <p class="card-text text-warning h3">{{\App\Models\Document::count()}}</p>
                </div>
            </div>
        </div>
        <div class=" col-4 p-1">
            <div class="card text-white bg-dark text-center">
                <div class="card-body">
                    <h4 class="card-title">الاقسام</h4>
                    <p class="card-text text-warning h3">{{\App\Models\Department::count()}}</p>
                </div>
            </div>
        </div>
        <div class=" col-4 p-1">
            <div class="card text-white bg-dark text-center">
                <div class="card-body">
                    <h4 class="card-title">المرفقات</h4>
                    <p class="card-text text-warning h3">{{\App\Models\Attachment::count()}}</p>
                </div>
            </div>
        </div>
        <div class=" col-4 p-1">
            <div class="card text-white bg-dark text-center">
                <div class="card-body">
                    <h4 class="card-title">مستخدمين</h4>
                    <p class="card-text text-warning h3">{{\App\Models\User::where('level',0)->count()}}</p>
                </div>
            </div>
        </div>
        <div class=" col-4 p-1">
            <div class="card text-white bg-dark text-center">
                <div class="card-body">
                    <h4 class="card-title">اداريين</h4>
                    <p class="card-text text-warning h3">{{\App\Models\User::where('level',1)->count()}}</p>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
