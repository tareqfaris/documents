<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Cairo:400,700&amp;subset=arabic" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/droidarabickufi.css')}}">
    <title>index</title>

</head>

<body class="text-right py-5" style="direction: rtl">

    <div class="container">
        <div class="d-print-none text-center">
            مرحبا {{auth()->user()->name}}
            <button href="{{ route('logout') }}" class="btn btn-danger btn-sm" onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                تسجيل الخروج
            </button>
            <form method="POST" id="logout-form" action="{{ route('logout') }}">
                @csrf
            </form>
        </div>
        @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
        @endif
        <div class="d-flex">
            <a class="btn {{ Request::is('admin') ? 'btn-info' : 'btn-outline-info' }} m-1" href="{{url('admin')}}">لوحة
                البيانات</a>
            <a class="btn {{ Request::is('admin/documents') ? 'btn-info' : 'btn-outline-info' }} m-1"
                href="{{route('admin.documents')}}">الطلبات</a>
            <a class="btn {{ Request::is('admin/departments') ? 'btn-info' : 'btn-outline-info' }} m-1"
                href="{{route('admin.departments')}}">الاقسام</a>
            <a class="btn  m-1 {{ Request::is('admin/users') ? 'btn-info' : 'btn-outline-info' }}"
                href="{{route('admin.users')}}">الاعضاء</a>
        </div>
        <hr>
        @if(count($errors) > 0)
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    @foreach ($errors->all() as $error)
                    <div>{{ $error }}</div>
                    @endforeach
                </div>
            </div>
        </div>





        <script>
            $(".alert").alert();

        </script>
        @endif
        @yield('content')
    </div>




    <script src="{{asset('js/index.js')}}"></script>
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>

</body>

</html>
