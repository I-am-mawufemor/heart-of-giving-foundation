<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Heart-of-Giving-Foundation') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    {{-- font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/fontawesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    {{-- Ck text editor --}}
    {{-- <script src="https://cdn.ckeditor.com/ckeditor5/38.0.1/classic/ckeditor.js"></script> --}}
    <script src="https://cdn.ckeditor.com/ckeditor5/38.0.1/super-build/ckeditor.js"></script>
    {{-- include bootstrap --}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    {{-- custom css --}}
    <link rel="stylesheet" href="{{ asset('asset/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/admin-app.css') }}">
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />

</head>

<body>
    <style>
        #form-container {
            width: 80%;
            margin: 5% auto;
        }

        #form-container .arrow-left {
            position: relative;
            padding-bottom: 10px;
        }



        #form-container label {
            font-weight: bold;
            font-size: 20px;
            padding: 10px;
        }

        #container-ckeditor {
            /* width: 80%; */
            /* margin: 5px auto; */
        }

        .ck-editor__editable[role="textbox"] {
            /* editing area */
            min-height: 200px;
        }

        .ck-content .image {
            /* block images */
            max-width: 80%;
            margin: 20px auto;
        }
    </style>

    {{-- navbar --}}
    <input type="checkbox" id="check" />

    <!--header area start-->
    <header>
        <label for="check">
            <i class="fas fa-bars" id="sidebar_btn"></i>
        </label>


        <div class="right_area">
            <a href="/" target="_blank" class="logout_btn">visit website <i class="fa fa-external-link"></i></a>
        </div>
    </header>
    <!--header area end-->
    <!--mobile navigation bar start-->
    <div class="mobile_nav">
        <div class="nav_bar">
            <img src="{{ asset('asset/image/logo.jpeg') }}" class="mobile_profile_image" alt="" />
            <i class="fa fa-bars nav_btn"></i>
        </div>
        <div class="mobile_nav_items">
            <a href="#"><i class="fa fa-home"></i><span>Home</span></a>
            <a href="#"><i class="far fa-calendar-check"></i><span>Events & Projects</span></a>
            <a href="#"><i class="fa fa-calendar"></i><span>Upcoming Events</span></a>
            <a href="#"><i class="fa fa-images"></i><span>Gallery</span></a>
            <a href="#"><i class="fa fa-info-circle"></i><span>About</span></a>
            <a href="#"><i class="fa fa-envelope"></i><span>Contact</span></a>
            <a href="#"><i class="fa fa-sign-out"></i><span>Logout</span></a>
        </div>
    </div>
    <!--mobile navigation bar end-->
    <!--sidebar start-->
    <div class="sidebar">
        <div class="profile_info">
            <img src="{{ asset('asset/image/logo.jpeg') }}" class="profile_image"
                alt="{{ config('app.name', 'Heart-of-Giving-Foundation') }}" />
            <h4>{{ config('app.name', 'Heart-of-Giving-Foundation') }}</h4>
        </div>
        <a href="/dashboard"><i class="fa fa-home"></i><span>Home</span></a>
        <a href="/events"><i class="far fa-calendar-check"></i><span>Events & Projects</span></a>
        <a href=""><i class="fa fa-calendar"></i><span>Upcoming Events</span></a>
        <a href="/galleries"><i class="fa fa-images"></i><span>Gallery</span></a>
        <a href="/homeEvent"><i class="far fa-calendar-check"></i><span>Home Events</span></a>
        <a href="/aboutUs"><i class="fa fa-info-circle"></i><span>About</span></a>
        <a href="/contacts"><i class="fa fa-envelope"></i><span>Contact</span></a>
        <a class="fa fa-sign-out" href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();"><span>Logout</span>
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>

    </div>
    <!--sidebar end-->
    <div class="content">

        <div>
            @yield('admin-content')
        </div>


        <div>
            @yield('script')
        </div>
        <script src="{{ asset('asset/js/ckeditor.js') }}"></script>
        <script src="{{ asset('asset/js/ckeditor-2.js') }}"></script>
        <script src="{{ asset('asset/js/admin-app.js') }}"></script>

    </div>
</body>

</html>
