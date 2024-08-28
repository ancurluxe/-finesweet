<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Finsweet</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.css"
        integrity="sha512-OQDNdI5rpnZ0BRhhJc+btbbtnxaj+LdQFeh0V9/igiEPDiWE2fG+ZsXl0JEH+bjXKPJ3zcXqNyP4/F/NegVdZg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<header>@include('frontend.layout.header')</header>

<body>
    <main>
        @yield('content')
    </main>
</body>
<script src="{{ asset('js/script.js') }}"></script>
<footer>
    @include('frontend.layout.footer')
</footer>

</html>
