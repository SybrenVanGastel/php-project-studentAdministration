<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css"/>--}}
{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>--}}
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <title>@yield('title', 'Student Administration')</title>
    {{--    @include('shared.icons')--}}
</head>
<body>
{{--  Navigation  --}}
@include('shared.navigation')
<main class="container">
    @yield('main', 'Page under construction ...')
    @include('shared.footer')
</main>
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.bundle.js"></script>--}}
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
