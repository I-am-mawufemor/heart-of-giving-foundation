<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Heart-of-Giving') }}</title>

    {{-- bootstrap link --}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    {{-- font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/fontawesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    {{-- custom css --}}
    <link rel="stylesheet" href="{{ asset('asset/css/app.css') }}">
</head>
<style>

</style>

<body>
    {{-- navbar --}}
    <div>
        @include('inc.navbar')
    </div>

    <div>
        @yield('content')
    </div>

    <div>
        @include('inc.footer')
    </div>
    <div>
        @yield('script')
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('asset/js/app.js') }}"></script>
    <script src="{{ asset('asset/js/gallery-app.js') }}"></script>
    <script src="{{ asset('asset/js/script.js') }}"></script>
</body>

</html>
