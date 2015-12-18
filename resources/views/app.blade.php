<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title', 'Animal DB')</title>

        <link rel="stylesheet" media="screen"
              href="https://bootswatch.com/paper/bootstrap.min.css">

        <link rel="stylesheet" media="screen"
              href="{{elixir('css/all.css')}}">

        @yield('header')
    </head>
    <body>
        <nav class="navbar navbar-inverse">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                            aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{url('/')}}">TSBE Animals DB</a>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li><a href="{{url('animal')}}">Animals <span class="badge">{{\App\Animal::count()}}</span></a></li>
                        <li><a href="{{url('holder')}}">Holders <span class="badge">{{\App\Holder::count()}}</span></a></li>
                        <li><a href="{{url('medication')}}">Medications <span class="badge">{{\App\Medication::count()}}</span></a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>
        <div class="container">
            @yield('content')
        </div>
        <script src="{{elixir('js/all.js')}}" type="text/javascript"></script>
        @yield('footer')

        @include('Alerts::alerts')

    </body>
</html>
