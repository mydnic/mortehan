<!DOCTYPE html>
<html lang="en" xmlns:og="http://ogp.me/ns#">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="/manifest.json">

    <link rel="icon" href="/img/icon.png" type="image/png"/>

    <meta name="description" content="@yield('meta-description', 'Tout Mortehan dans ta poche mon gars !')">
    <meta name="author" content="Mortehan Team">
    <meta property="og:title" content="@yield('meta-title') | Mortehan App"/>
    <meta property="og:url" content="{{ url()->full() }}"/>
    <meta property="og:site_name" content="Mortehan App"/>
    <meta property="og:type" content="website"/>
    <meta property="og:description" content="@yield('meta-description', 'Tout Mortehan dans ta poche mon gars !')">
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:creator" content="@mydnic" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('meta-title') | Mortehan App</title>

    <!-- Styles -->
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Mortehan = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
    <div id="app">
        <noscript>Sorry, your browser does not support JavaScript!</noscript>
        <router-view></router-view>
        <notification></notification>
    </div>

    <!-- Scripts -->
    <script src="{{ mix('/js/app.js') }}"></script>
</body>
</html>