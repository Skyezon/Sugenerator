<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" href="{{asset('css/main.css')}}">

    <title>@yield('title'){{$title ?? ''}}</title>
</head>

<body>
    @yield('loading')

    <div class="container-fluid">
        @section('content')

        @show
    </div>
    <script src="{{asset('js/app.js')}}"></script>
</body>

</html>
