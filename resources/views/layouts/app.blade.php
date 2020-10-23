<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/bootstrap.js') }}" ></script>
    <title>{{ config('app.name', 'Projet Laravel') }}</title>
</head>
<body>
@include('inc.navbar')
<div class="container">
    @yield('content')
</div>
</body>
</html>
