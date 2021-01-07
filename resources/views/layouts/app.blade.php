<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>@yield('title')</title>

        {{-- fonts --}}
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

        {{-- favicon --}}
        <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/gif" sizes="16x16">

        {{-- StyleSheet --}}
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>

    <body>
        @include('partials.header')
        @yield('content')
        @include('partials.footer')
    </body>
</html>
