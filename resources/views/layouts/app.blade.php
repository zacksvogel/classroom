<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Mr. Vogels Website') }}</title>

    <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="{{ URL::to('/') }}/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="{{ URL::to('/') }}/fonts/webfontkit-20160529-165819/fonts.css">
        <link rel="stylesheet" type="text/css" href="{{ URL::to('/') }}/css/cssshakeslow.min.css">
        <link rel="stylesheet" type="text/css" href="{{ URL::to('/') }}/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="{{ URL::to('/') }}/css/newStyles.css">
</head>
<body>

    

        @yield('content')


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

</body>
</html>
