<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/css/bootstrap.min.css') }}" rel="stylesheet" crossorigin="anonymous">
    <title>@yield('title')</title>
</head>
<body>
    @yield('content')

    <script src="{{ asset('css/css/bootstrap.min.css') }}"></script>
</body>
</html>