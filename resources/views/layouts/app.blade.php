<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}";>

        <title>Laravel App</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600"rel="stylesheet"type="text/css">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

      
    </head>
<body>
    <div id="app">
       

        <main class="py-4">
            @include('inc.navbar')
            <div class="container">
            @yield('content')
            </div>
        </main>
    </div>
</body>
</html>
