<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title', 'Animal DB')</title>

        <link rel="stylesheet" media="screen"
              href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

        @yield('header')
    </head>
    <body>
        <div class="container">
            @yield('content')
        </div>
        @yield('footer')
    </body>
</html>
