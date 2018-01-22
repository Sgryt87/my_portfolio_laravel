<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <link rel="icon" type="image/png" href="{{  asset('favicon.ico') }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>

    <title>Light Bootstrap Dashboard by Creative Tim</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
    <meta name="viewport" content="width=device-width"/>


    <!-- Bootstrap core CSS     -->
    <link href="{{ asset('admin/css/bootstrap.min.css') }}" rel="stylesheet"/>

    <!-- Animation library for notifications   -->
    <link href="{{ asset('admin/css/animate.min.css') }}" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="{{ asset('admin/css/light-bootstrap-dashboard.css?v=1.4.0') }}" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{ asset('admin/css/demo.css') }}" rel="stylesheet"/>


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="{{ asset('admin/css/pe-icon-7-stroke.css') }}" rel="stylesheet"/>

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="{{ asset('admin/img/sidebar-5.jpg') }}">

        <!--

            Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
            Tip 2: you can also add an image using data-image tag

        -->

        <div class="sidebar-wrapper">
            <div class="logo">
                {{--logo goes here !!--}}
                {{--<a href="http://www.creative-tim.com" class="simple-text">--}}
                {{--Creative Tim--}}
                {{--</a>--}}
            </div>

            <ul class="nav">
                <li class="{{ Request::is('admin/projects') ? 'active' : '' }}">
                    <a href="{{url('admin/projects')}}">
                        <i class="pe-7s-graph"></i>
                        <p>Projects</p>
                    </a>
                </li>
                <li class="{{ Request::is('admin/profile') ? 'active' : '' }}">
                    <a href="{{url('admin/profile')}}">
                        <i class="pe-7s-user"></i>
                        <p>User Profile</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>


    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">My Portfolio</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="{{ url('admin/projects/search') }}">
                                <i class="fa fa-search"></i>
                                <p class="hidden-lg hidden-md">Search</p>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                          style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                        <li class="separator hidden-lg"></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        @include('admin.messages')
                        @yield ('content')
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="#">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Company
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Portfolio
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Blog
                            </a>
                        </li>
                    </ul>
                </nav>
                <p class="copyright pull-right">
                    &copy;
                    <script>document.write(new Date().getFullYear())</script>
                    <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
                </p>
            </div>
        </footer>

    </div>
</div>


</body>

<!--   Core JS Files   -->
<script src="{{ asset('admin/js/jquery.3.2.1.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('admin/js/bootstrap.min.js') }}" type="text/javascript"></script>

<!--  Charts Plugin -->
<script src="{{ asset('admin/js/chartist.min.js') }}"></script>

<!--  Notifications Plugin    -->
<script src="{{ asset('admin/js/bootstrap-notify.js') }}"></script>

<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
<script src="{{ asset('admin/js/light-bootstrap-dashboard.js?v=1.4.0') }}"></script>

<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
<script src="{{ asset('admin/js/demo.js') }}"></script>

<!-- Find script! -->
<script src="{{ asset('admin/js/search.js') }}"></script>

{{--<script type="text/javascript">--}}
{{--$(document).ready(function(){--}}

{{--demo.initChartist();--}}

{{--$.notify({--}}
{{--icon: 'pe-7s-gift',--}}
{{--message: "Welcome to <b>Light Bootstrap Dashboard</b> - a beautiful freebie for every web developer."--}}

{{--},{--}}
{{--type: 'info',--}}
{{--timer: 4000--}}
{{--});--}}

{{--});--}}
{{--</script>--}}

</html>
