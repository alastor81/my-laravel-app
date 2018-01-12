<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @yield('header')
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
    <script src="{{asset('js/jquery.min.js')}}"></script>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'my school !') }}</title>

    <!-- Styles -->
    <link href="{{ elixir('css/app.css') }}" rel="stylesheet">


    <style>

        /* make sidebar nav vertical */
        @media (min-width: 768px) {
            .affix-content .container {
                width: 700px;
            }

            html, body {
                background-color: #f8f8f8;
                height: 100%;
                overflow: auto;
            }

            .affix-content .container .page-header {
                margin-top: 0;
            }

            .affix-sidebar {
                padding-right: 0;
                font-size: small;
                padding-left: 0;
            }

            .affix-row, .affix-container, .affix-content {
                height: 100%;
                overflow: scroll;
                margin-left: 0;
                margin-right: 0;
            }

            .affix-content {
                background-color: white;
            }

            .sidebar-nav .navbar .navbar-collapse {
                padding: 0;
                max-height: none;
            }

            .sidebar-nav .navbar {
                border-radius: 0;
                margin-bottom: 0;
                border: 0;
            }

            .sidebar-nav .navbar ul {
                float: none;
                display: block;
            }

            .sidebar-nav .navbar li {
                float: none;
                display: block;
            }

            .sidebar-nav .navbar li a {
                padding-top: 12px;
                padding-bottom: 12px;
            }
        }

        @media (min-width: 769px) {
            .affix-content .container {
                width: 600px;
            }

            .affix-content .container .page-header {
                margin-top: 0;
            }
        }

        @media (min-width: 992px) {
            .affix-content .container {
                width: 900px;
            }

            .affix-content .container .page-header {
                margin-top: 0;
            }
        }

        @media (min-width: 1220px) {
            .affix-row {
                overflow: hidden;
            }

            .affix-content {
                overflow: auto;
            }

            .affix-content .container {
                width: 1000px;
            }

            .affix-content .container .page-header {
                margin-top: 0;
            }

            .affix-content {
                padding-right: 30px;
                padding-left: 30px;
            }

            .affix-title {
                border-bottom: 1px solid #ecf0f1;
                padding-bottom: 10px;
            }

            .navbar-nav {
                margin: 0;
            }

            .navbar-collapse {
                padding: 0;
            }

            .sidebar-nav .navbar li a:hover {
                background-color: #428bca;
                color: white;
            }

            .sidebar-nav .navbar li a > .caret {
                margin-top: 8px;
            }
        }


    </style>


</head>
<body>
<div id="app">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('my school !', 'my school !') }}
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    &nbsp;
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right visible-xm-block">
                    <!-- Authentication Links -->
                    @guest
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-expanded="false" aria-haspopup="true">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu">
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
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
    <?php use \myapp\User;?>
    @if(Auth::check())


        <div class="row affix-row">
            <div class="col-sm-3 col-md-2 affix-sidebar">
                <div class="sidebar-nav">
                    <div class="navbar navbar-default" role="navigation">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse"
                                    data-target=".sidebar-navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <span class="visible-xs navbar-brand">Sidebar menu</span>
                        </div>
                        <div class="navbar-collapse collapse sidebar-navbar-collapse">
                            <ul class="nav navbar-nav" id="sidenav01">
                                <li class="active">
                                    <a href="#" data-toggle="collapse" data-target="#toggleDemo0"
                                       data-parent="#sidenav01"
                                       class="collapsed">
                                        <h4>
                                            Control Panel
                                            <br>
                                            <small>global options <span class="caret"></span></small>
                                        </h4>
                                    </a>
                                    <div class="collapse" id="toggleDemo0" style="height: 0px;">
                                        <ul class="nav nav-list">
                                            {{--<li><a href="{{ url('/students') }}">show average's of all students</a></li>--}}
                                            {{--<li><a href="{{ route('profiles') }}">show profile of all students</a></li>--}}
                                            {{--<li><a href="{{ route('home') }}">add student</a></li>--}}
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a href="#" data-toggle="collapse" data-target="#toggleDemo"
                                       data-parent="#sidenav01"
                                       class="collapsed">
                                        <span class="glyphicon glyphicon-cloud"></span> Submenu 1 <span
                                                class="caret pull-right"></span>
                                    </a>
                                    <div class="collapse" id="toggleDemo" style="height: 0px;">
                                        <ul class="nav nav-list">
                                            <li><a href="#">Submenu1.1</a></li>
                                            <li><a href="#">Submenu1.2</a></li>
                                            <li><a href="#">Submenu1.3</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a href="#" data-toggle="collapse" data-target="#toggleDemo2"
                                       data-parent="#sidenav01"
                                       class="collapsed">
                                        <span class="glyphicon glyphicon-inbox"></span> lessons managing <span
                                                class="caret pull-right"></span>
                                    </a>
                                    <div class="collapse" id="toggleDemo2" style="height: 0px;">
                                        <ul class="nav nav-list">
                                            <li><a href="{{ route('add_lesson_form') }}">add a lesson</a></li>
                                            <li><a href="#">Submenu2.2</a></li>
                                            <li><a href="#">Submenu2.3</a></li>
                                        </ul>
                                    </div>
                                </li><?php $c = new User;
                                $c = $c->find(\Illuminate\Support\Facades\Auth::id())->students;?>
                                <li><a href="{{ route('create_class') }}"><span class="glyphicon glyphicon-lock"></span> add a class</a></li>
                                <li><a href="{{ route('home') }}"><span class="glyphicon glyphicon-user"></span>
                                        students
                                        <span
                                                class="badge pull-right">{{ count($c) }}</span></a></li>
                                <li><a href="{{ route('profiles') }}"><span class="glyphicon glyphicon-cog"></span> show
                                        profile of all students </a></li>
                            </ul>
                        </div><!--/.nav-collapse -->
                    </div>
                </div>
            </div>
            <div class="col-sm-9 col-md-10 affix-content">
                <div class="container">
                    @endif
                    @yield('content')

                </div>
            </div>
        </div>


</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
