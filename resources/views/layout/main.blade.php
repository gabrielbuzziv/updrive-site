<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>UP Drive</title>

    <link rel="stylesheet" href="{{ url('css/app.css') }}">
</head>

<body>
    @yield('content')

    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
</body>

</html>