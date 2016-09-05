<!DOCTYPE html>
<html lang="en">
    <head>
        <title>@yield('titulo')</title>

        <!-- CSS And JavaScript -->
        <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('estilos.css')}}">
        <script src='{{asset('js/jquery.js')}}'></script>
    </head>

    <body>
        <div class="container">
            
            @yield('content')
        </div>
    </body>
</html>

