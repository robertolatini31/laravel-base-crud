<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('page_title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>
       <header class="text-center py-3">
        <nav class="nav justify-content-center align-items-center">
            <img height="80" src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3d/DC_Comics_logo.svg/2048px-DC_Comics_logo.svg.png" alt="">
            <a class="nav-link fs-4" href="{{route('comics.index')}}">Comics</a>
            <a class="nav-link fs-4" href="{{route('comics.create')}}">Add Comic</a>
        </nav>
       </header>
       <main>
        @yield('content')
       </main>
       <footer class="text-center p-3">
        <h4 class="text-center p-3 text-primary">Made by Roberto&copy;</h4>
       </footer>
       <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>
