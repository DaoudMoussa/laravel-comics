<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>@yield('title', 'DC Comics')</title>

        {{-- fonts --}}
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

        {{-- favicon --}}
        <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/gif" sizes="16x16">

        {{-- Fontawesome --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />

        {{-- StyleSheet --}}
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>

    <body>
        @include('partials.header')
        <main>
            @yield('jumbo')
            @yield('content')
        </main>
        @include('partials.footer')

        <script src="{{ asset('js/app.js') }}" charset="utf-8"></script>
    </body>
</html>
