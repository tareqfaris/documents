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

    <ul class="nav justify-content-center d-print-none">
        <li class="nav-item">
            <a class="nav-link active" href="{{route('myDocuments')}}">طلباتي</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{url('/')}}">إنشاء طلب</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{url('/user/profile')}}">الملف الشخصي</a>
        </li>
    </ul>
    <div class="container">
        @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            <h4 class="alert-heading"></h4>
            <p>{{ Session::get('success') }}</p>
            <p class="mb-0"></p>
        </div>
        @endif

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




    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

</body>

</html>
