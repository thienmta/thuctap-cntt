<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('public/css/bootstrap.min.css') }}" rel="stylesheet">
    <script src="{{ asset('public/js/bootstrap.min.js') }}"></script>

    <script src="https://use.fontawesome.com/874dbadbd7.js"></script>
    <style>
        .btn-delete-custom {
            background: none;
            border: none;
            outline: none;
            color: red;
            float: right;
        }
    </style>
</head>
<body>
<div class="container">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">

                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @guest

                    <li><a href="{{url('/login')}}"><i class="fa fa-sign-in" aria-hidden="true"></i>Login</a></li>
                    <li><a href="{{url('/register')}}"><i class="fa fa-user-plus" aria-hidden="true"></i>
                            Register</a></li>
                    @else
                        <li><a class="nav-link" href=""><i class="fa fa-tags" aria-hidden="true"></i>Tags</a></li>
                        <li><a class="nav-link" href=""><i class="fa fa-building" aria-hidden="true"></i>Staff</a></li>
                        <li><a class="nav-link" href=""><i class="fa fa-building" aria-hidden="true"></i>Companies</a></li>
                        <li><a class="nav-link" href=""><i class="fa fa-briefcase" aria-hidden="true"></i>Projects</a></li>
                        <li><a class="nav-link" href=""><i class="fa fa-tasks" aria-hidden="true"></i>Tasks</a></li>
                        <li><a class="nav-link" href=""><i class="fa fa-outdent" aria-hidden="true"></i>Project Gantt</a></li>
                        <li><a class="nav-link" href=""><i class="fa fa-bar-chart" aria-hidden="true"></i>Human Resource Chart</a></li>
                        
                        <li class="dropdown">
                            <a class="dropdown-toggle" type="button" data-toggle="dropdown">
                                <span class="text-danger"></span>
                                <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu">
                                <li>
                                    <a href=""
                                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                                        <i class="fa fa-power-off"
                                           aria-hidden="true"></i> Logout
                                    </a>

                                    <form id="logout-form"
                                          action=""
                                          method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endguest
                </ul>
            </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
    </nav>

    <div class="container">
        <div class="row">
            @yield('content')

        </div>
    </div>
</div>
@yield('jqueryScript')
</body>
</html>
<script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>