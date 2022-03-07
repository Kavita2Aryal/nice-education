<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title> @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" href="{{asset('storage/images/company/fav_icons/'.$company->fav_icon)}}" type="image/x-icon" />
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap"
        rel="stylesheet"
    />
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
        crossorigin="anonymous"
    />
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css"
    />
    <!-- CSS only -->
    <link
        rel="stylesheet"
        type="text/css"
        media="screen"
        href="{{asset('frontend/css/index.css')}}"
    />

    <script
        src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous"
    ></script>
</head>
<body>

@include('website.layouts.header')
    @yield('content')
@include('website.layouts.footer')
@stack('scripts')
</body>
</html>
