
<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SPRDH</title>

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <style>
            .btn-default{
                width:200px;
                height:200px;
            }
            /*body {
                background-image: url('/terrace.jpg');
            }*/
        </style>
    </head>
    <body>
        <header class="navbar navbar-expand navbar-dark flex-column flex-md-row bd-navbar">
            @include('inc.navbar')
        </header>
        @yield('content')
    </body>
</html>



<!--<div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-4">
                    <div class="clearfix" style="height:65px">&nbsp;</div>
                    <ul class="nav nav-stacked nav-sidebar">
                            <li class="">
                            <a href="/support">Support</a>
                                    </li>
                                <li class="active">
                            <a href="/development">Development</a>
                                    </li>
                                <li class="">
                            <a href="/equipment">Equipment</a>
                                    </li>
                                <li class="">
                            <a href="/ration">Ration</a>
                                    </li>
                                <li class="">
                            <a href="/consumer">Consumer network</a>
                                    </li>
                                <li class="">
                            <a href="/feedback">Feedback</a>
                                    </li>
                        </ul>
                    <div class="clearfix" style="height:15px">&nbsp;</div>
                <a class="btn btn-get-started" href="/solutions/contact-us"><em class="fa fa-phone iconspacing"></em>   Contact Us</a>
            </div>
            @yield('content')
        </div>
        </div>
    </div>-->