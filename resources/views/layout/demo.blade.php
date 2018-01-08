<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }} | {{ $title }}</title>

    <link rel="stylesheet" href="{{ url('css/app.css') }}">
</head>

<body id="@yield('page_id')">
    <div id="app">
        <div class="header">
            <div class="container">
                <div class="logo">
                    <h1>
                        <a href="{{ action('HomeController@index') }}">
                            <img src="/images/logo.png" alt="">
                        </a>
                    </h1>
                </div>
            </div>
        </div>

        @yield('content')
    </div>

    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    {!! NoCaptcha::renderJs() !!}
</body>

</html>