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
        <div class="global-menu-container bar">
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
        <div id="navi-app">
          <div class="nav_button_container">
            <div class="nav_button_fl">
              <button type="button" id="nav-button" class="nav_button" v-on:click="nabibutton=!nabibutton" v-bind:class='{is_active:nabibutton}'>
                <span class="__nav_br"></span>
                <span class="__nav_br"></span>
                <span class="__nav_br"></span>
              </button>
            </div>
          </div>
          <div id="navi-weapper" v-bind:class="{nav_open:nabibutton}">
            <div class="navi_container" v-for="navi_anker in naviAnker">
              <div :class="navi_anker.class">
                <a :href="navi_anker.href" v-text="navi_anker.tag" class="fsrXL fwB"></a>
              </div>
              {{--
              <div class="home">
                <a href="">ホーム</a>
              </div>
              <div class="personal">
                <a href="">個人情報</a>
              </div>
              --}}
            </div>
          </div>
        </div>
        <div class="container">
          @yield('content')
        </div>
        {{--
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <script src="https://unpkg.com/vue-router"></script>--}}
    @yield('pageJs')
    </body>
</html>
