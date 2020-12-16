<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @stack('prepend-style')
    @include('includes.style')
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=EB+Garamond&display=swap" rel="stylesheet">
    @stack('addon-style') 
</head>
<body>
    <!--Navbar-->
    @include('includes.navbar')
    @yield('content')
    <!--Header-->
    @stack('prepend-script')
    @include('includes.script')
    @stack('addon-script')
</body>
</html>