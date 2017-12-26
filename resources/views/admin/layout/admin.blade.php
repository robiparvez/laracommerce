<!DOCTYPE html>
<html>
    <head>
        <title>Admin Panel</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

         <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <link rel="stylesheet" href="{{asset('dist/css/admin.css')}}">

    </head>

    <body>

    @include('admin.layout.includes.header')

        <!--Page Content-->
        <div class="page-content">
            @if(Session::has('message'))
                <div class="alert alert-info">
                    <p>{{ Session::get('message') }}</p>
                </div>
            @endif

            <div class="row">

                @include('admin.layout.includes.sidenav')

                <!--Display area after sidenav-->
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

        </div>

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    @include('admin.layout.includes.scripts')

    </body>
</html>