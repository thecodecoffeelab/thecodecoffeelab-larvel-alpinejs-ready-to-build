<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"  >
<head>
<link rel="icon" href="{{ url('./img/favicon.ico') }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Food manufacturing in The Gambia">
    <link rel="icon" type="image/x-icon" href="https://s3.images-iherb.com/static/i/favicon-iherb/favicon.ico" >
    <title>SAU Holding - The Gambia</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <!-- To make YouTube channel work -->
    <script src="https://apis.google.com/js/platform.js"></script>
</head>
<body class="text-gray-800 dark:text-gray-200 ">
<div class="min-h-screen bg-gray-100 dark:bg-gray-900 pt-24">
    <x-layout.navbar></x-layout.navbar>
    {{ $slot }}
    <x-layout.footer></x-layout.footer>
</div>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
