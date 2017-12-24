<!DOCTYPE html>
<html>
    <head>
        <title>Admin Panel</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" media="screen" href="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('dist/css/admin.css')}}">
    </head>

    <body>

    @include('admin.layout.includes.header')

        <div class="page-content">
            @if(Session::has('message'))
                <div class="alert alert-info">
                    <p>{{ Session::get('message') }}</p>
                </div>
            @endif

            <div class="row">

                @include('admin.layout.includes.sidenav')

                <div class="col-md-10 display-area">
                    <div class="row text-center">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="content-box-large">

                                @yield('content')

                            </div>
                        </div>
                    </div>
                </div><!--/Display area after sidenav-->
            </div>

        </div><!--/Page Content-->

        <script src="https://code.jquery.com/jquery.js"></script>
        <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

    @include('admin.layout.includes.scripts')

    </body>
</html>