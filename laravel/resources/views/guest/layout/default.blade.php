<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title> @yield('title') </title>

    @include('guest.include.css')
    @stack('css')
</head>

<body>
    @include('guest.include.preloader')
    
    @include('guest.include.navigation')

    @yield('content')      

    @include('guest.include.footer') 

    @include('guest.include.script')
    @stack('script')
</body>

</html>