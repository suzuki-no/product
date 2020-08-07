<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>@yield('title')</title>
        <!-- CSS And JavaScript -->
        @yield('pageCss')
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    </head>
    <body>
        <div class="global-menu-container">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
        <div class="container">
            @yield('content')
        </div>
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    @yield('pageJs')
    </body>
</html>
