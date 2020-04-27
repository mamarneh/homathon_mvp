<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <title>حاكيني</title>
    <link rel="stylesheet" href="/public/css/bootstrap.css">
    <link rel="stylesheet" href="/public/css/style.css">
    <link rel="stylesheet" href="/public/css/font-awesome.min.css">

    <script src="/public/js/jquery-3.4.1.slim.min.js"></script>
    <script src="/public/js/popper.min.js"></script>
    <script src="/public/js/bootstrap.min.js"></script>

    <script src="/public/js/main.js"></script>
    <link href="/public/css/aos.css" rel="stylesheet">
    <script src="/public/js/aos.js"></script>
    <!-- ManyChat -->
<script src="//widget.manychat.com/125169.js" async="async"></script>
</head>
<body>
    @yield('content')
</body>
</html>
