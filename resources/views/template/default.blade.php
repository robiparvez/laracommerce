<!doctype html>
<html class="no-js" lang="en" dir="ltr">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="x-ua-compatible" content="ie=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <title>
            @yield('title', 'Ecommerce Home')
        </title>

        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
        <link href="http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" rel="stylesheet">


        <link rel="stylesheet" href="{{ asset('dist/css/foundation.min.css') }}"/>
        <link rel="stylesheet" href="{{ asset('dist/css/app.css') }}"/>
        <link rel="stylesheet" href="{{ asset('dist/css/admin.css') }}"/>

        <link rel="stylesheet" href="{{ asset('dist/css/stripe.css') }}"/>

    </head>
    <body>
        @include('template.partials._nav')

        @yield('content')

        @include('template.partials._footer')

        <script src="dist/js/vendor/jquery.js"></script>
        <script src="dist/js/app.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

        <script src="https://js.stripe.com/v3/" type="text/javascript"></script>

    </body>
</html>
