<!doctype html>
<html>
<head>
    <title>@yield('title', 'Weibo App') - Laravel 新手入门教程</title>
</head>
<body>
@include('layouts._header')
@include('shared._message')
@yield('content')
@include('layouts._footer')
</body>
</html>
