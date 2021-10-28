<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>
        @if(View::hasSection('title'))
            @yield('title')
        @else
            NEM ADTÁL MEG SEMMIT
        @endif
    </title>

</head>
<body>
<main>
    @yield('content')
</main>
</body>
</html>
