<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>JuSchl | @yield('title')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Audiowide&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('juschl.css') }}">


</head>
<body>
@yield('content')


<div class="links" style="visibility: hidden">
    <a href="">Profil</a>
    <a href="">Werdegang</a>
    <a href="">Projekte</a>
    <a href="">News</a>
    <a href="">Blog</a>
    <a href="">Privat</a>
    <a href="">Links</a>
</div>

<footer class="footer">
    <div class="links"><a href="/dsgvo"> DSGVO</a></div>
</footer>
</body>
</html>
