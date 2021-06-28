<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Cairo:400,700&amp;subset=arabic" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/droidarabickufi.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>index</title>

</head>

<body class="text-right py-5" style="direction: rtl">

    <div class="container">
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
