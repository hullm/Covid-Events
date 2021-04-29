<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
        <link href="css/main.css" rel="stylesheet">
    </head>
    <body class="antialiased">
        @yield('content')
    </body>
</html>
