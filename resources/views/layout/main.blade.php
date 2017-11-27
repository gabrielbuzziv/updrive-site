<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}</title>

    <link rel="stylesheet" href="{{ url('css/app.css') }}">
</head>

<body id="@yield('page_id')">
    <div id="app">
        @include('partials.nav')
        @yield('content')
        @include('partials.footer')
    </div>

    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
</body>

</html>