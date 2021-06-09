<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DC Comics</title>
    <!-- Icons -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <!--Css Styles-->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <!--Header-->
    @include('partials.header')

    <!--Main-->
    <main>
        @yield('content')
    </main>

    <!--Footer-->
    @include('partials.footer')

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
