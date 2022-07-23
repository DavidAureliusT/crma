<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('layout.partials.head')
</head>
<body>
    @include('layout.partials.nav')

    @include('layout.partials.header')

    @yield('content')

    @include('layout.partials.footer')
    
    @include('layout.partials.footer-scripts')
</body>
</html>