<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
@include('layouts.meta')
@yield('meta')

</head>
<body>
@include('layouts.navbar') 
        @yield('content')
        @include('layouts.footer')

</body>
</html>
