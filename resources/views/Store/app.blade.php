<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') - {{ config('app.name') }}</title>
    @include('Store.partials.styles')
</head>
<body>
<!-- Body main wrapper start -->
<div class="wrapper fixed__footer">
@include('Store.partials.header')
@yield('content')
@include('Store.partials.footer')
</div>
@include('Store.partials.scripts')
</body>
</html>