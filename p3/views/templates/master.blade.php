<!doctype html>
<html lang='en'>
<head>

    <title>@yield('title', $app->config('app.name'))</title>

    <meta charset='utf-8'>

    <link rel='shortcut icon' href='/favicon.ico'>
    <script src="https://kit.fontawesome.com/9779d43f9a.js" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bungee+Shade&family=Comfortaa:wght@300;700&family=Indie+Flower&family=Source+Sans+Pro:wght@200&display=swap" rel="stylesheet">


    <link href='/css/app.css' rel='stylesheet'>

    @yield('head')

</head>
<body>

    <header>
        <h1>{{ $app->config('app.name') }}</h1>
        <div>
            <i class="fas fa-hand-rock"></i>
            <i class="fas fa-hand-paper"></i>
            <i class="fas fa-hand-scissors"></i>
            Play against the computer! (DGMD E-2 by Alyson Lynch)</div>
    </header>

    <main>
        @yield('content')
    </main>

    @yield('body')

</body>
</html>
