<!doctype html>
<html class="no-js" lang="en" dir="ltr">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="x-ua-compatible" content="ie=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <title>
            @yield('title', 'Ecommerce Home')
        </title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
        <link rel="stylesheet" href="{{ asset('dist/css/foundation.min.css') }}"/>
        <link rel="stylesheet" href="{{ asset('dist/css/app.css') }}"/>
        <link rel="stylesheet" href="{{ asset('dist/css/admin.css') }}"/>
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}"/>
        <link href="http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" rel="stylesheet">

    </head>
    <body>
        @include('partials._nav')

        @yield('content')

        @include('partials._footer')

        <script src="dist/js/vendor/jquery.js"></script>
        <script src="dist/js/app.js"></script>
    </body>
</html>
