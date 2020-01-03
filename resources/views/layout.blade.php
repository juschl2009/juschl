<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>JuSchl | @yield('title')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Audiowide&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:800&display=swap" rel="stylesheet">
    <!-- Styles -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{ asset('juschl.css') }}">
</head>
<body>

<div class="navbar sticky-top nav-links links " >
    <a href="/">HOME</a>
    <a href="#profil">Profil</a>
    <a href="#werdegang">Werdegang</a>
    <!-- <a href="">Projekte</a>
   - <a href="">News</a>
     <a href="">Blog</a>
    <a href="">Privat</a>-->
    <a href="#links">Links</a>
</div>
@yield('content')
<footer class="footer">
   <!-- <div class="links"><a href="/dsgvo"> DSGVO</a></div>-->
    <div class="links"><a href="/impressum"> IMPRESSUM</a></div>
</footer>
</body>
</html>
