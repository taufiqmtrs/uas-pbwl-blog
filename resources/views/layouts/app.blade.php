<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'tittle') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <style>
            html, body {
                background-color: lavender;
                color: #636b6f;
                font-family: 'Cambria', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
     </style>

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarDropDown" aria-controls="navbarDropDown" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item active">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                        

                            <li>
                                <a class="nav-link" href="{{ url('/category') }}">Kategori</a>
                            </li>

                            <li>
                                <a class="nav-link" href="{{ url('/post') }}">Post</a>
                            </li>

                            <li>
                                <a class="nav-link" href="{{ url('/photo') }}">Photo</a>
                            </li>

                            <li>
                                <a class="nav-link" href="{{ url('/album') }}">Album</a>
                            </li>
                    </div>


                        <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
                            <ul class="nav navbar-nav ml-auto">
                             <li class="nav-item active">
                                <a class="nav-link disable" href="#" role="button" aria-disabled="true">Hi
                                    {{ Auth::user()->name }} ! <span class="caret"></span>
                                </a>
                            </li>

                            <li>    
                                <a class="nav-link" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                </a>
                            </li>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                            
                            </ul>
                        @endguest
                   </div>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

</html>
