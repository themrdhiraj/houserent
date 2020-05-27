<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <!-- Icons  -->
        <script src="{{asset('icon/icon.js')}}"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    </head>
    <body>
        <div id="app">
            @include('inc.nav')
            <main class="py-4">
                <div class="container">
                    @include('inc.messages')
                </div>
                @yield('content')
                
            </main>
        </div>
        <footer class="footer mt-auto py-3" style="text-align: center">
            <div class="container-footer">
                <span class="text-muted">©TheMrDhiraj {{date('Y')}} | House Rent Management</span>
            </div>
        </footer>
    </body>
</html>