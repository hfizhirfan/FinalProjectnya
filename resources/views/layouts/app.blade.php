<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rumah Rasa Nusantara</title>
    <link rel="icon" href="{{ Vite::asset('resources/images/logo.png') }}">
    @vite('resources/sass/menu/app.scss')
</head>
<body>
    @include('layouts.nav')
    @yield('content')
   
    @vite('resources/js/app.js')
    @include('layouts.footer')
</body>
</html>
