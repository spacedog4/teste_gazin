<!doctype html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Cadastro de Funcionários</title>
    <link rel="stylesheet" href="{{ asset('css/icons/css/animation.css') }}">
    <link rel="stylesheet" href="{{ asset('css/icons/css/fontello.css') }}">
    <link rel="stylesheet" href="{{ asset('css/icons/css/fontello-codes.css') }}">
    <link rel="stylesheet" href="{{ asset('css/icons/css/fontello-embedded.css') }}">
    <link rel="stylesheet" href="{{ asset('css/icons/css/fontello-ie7.css') }}">
    <link rel="stylesheet" href="{{ asset('css/icons/css/fontello-ie7-codes.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<h1 id="logo">Teste Gazin</h1>
<div id="content">
    @yield('content')
</div>
<script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>