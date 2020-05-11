<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
{{--    <script src="{{ asset('js/app.js') }}" defer></script>--}}
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{asset('js/jquery-ui.js')}}"></script>
    <script src="{{ asset('js/image-uploader.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
{{--    <link rel="stylesheet" href="{{ asset("css/bootstrap.min.css") }}">--}}
    <link rel="stylesheet" href="{{ asset("css/all.css") }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{asset("css/jquery-ui.css")}}">
    <link rel="stylesheet" href="{{asset('css/image-uploader.min.css')}}">
    <style>

    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm " style="position: fixed; top: 0; width: 100%; z-index: 20;">
            <div class="container-fluid">
{{--                <a class="navbar-brand" href="{{ url('/') }}">--}}
{{--                    {{ config('app.name', 'Laravel') }}--}}
{{--                </a>--}}
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
{{--                    <ul class="navbar-nav mx-auto">--}}
{{--                    </ul>--}}

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav w-100">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <div class=" d-flex justify-content-center align-items-center" style="width: 15%;">
                                <i class="fas fa-search fa-fw" style="position: absolute; left: 3%;"></i>
                                <input type="text" class=" form-control"   placeholder=" Search Everything" style="padding-left: 30px; width: 100%; height: 40px; border-radius: 40px;">
                            </div >
                            <ul class="h-100 text-center my-auto pr-5" style="width: 70%;">
                                <a href="" class="btn text-secondary " style="width: 100px;">
                                    <i class="fas fa-home fa-fw fa-2x"></i>
                                </a>
                                <a href="" class="btn text-secondary " style="width: 100px;">
                                    <i class="fas fa-flag fa-fw fa-2x"></i>
                                </a>
                                <a href="" class="btn text-secondary " style="width: 100px;">
                                    <i class="fas fa-photo-video fa-fw fa-2x"></i>
                                </a>
                                <a href="" class="btn text-secondary mr-3" style="width: 100px;">
                                    <i class="fas fa-user-friends fa-fw fa-2x"></i>
                                </a>
                            </ul>
                            <li class="nav-item dropdown d-flex" style="width: 15%;">
                                <img src="{{asset('/img/user.png')}}" style="width: 45px; height: 45px; opacity: 0.9;"  class="rounded-circle border border-secondary" alt="">&nbsp;&nbsp;
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="">
            @yield('content')
        </main>
    </div>
@yield('script')
</body>
</html>
