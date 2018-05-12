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

                    @if (isset($name))
                        <li><a class="nav-link" href="{{url('products/show')}}"><i class="fa fa-calendar" aria-hidden="true"></i> Product</a></li>
                        <li><a class="nav-link" href="{{url('categorys/show')}}"><i class="fa fa-crosshairs" aria-hidden="true"></i> Category</a></li>
                        <li><a class="nav-link" href="{{url('stores/show')}}"><i class="fa fa-fort-awesome" aria-hidden="true"></i> Store</a></li>
                        <li><a class="nav-link" href="{{url('importproducts/show')}}"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i> ImportProduct</a></li>
                        <li><a class="nav-link" href="{{url('sales/show')}}"><i class="fa fa-area-chart" aria-hidden="true"></i> Sale</a></li>
                        <li><a class="nav-link" href="{{url('users/show')}}"><i class="glyphicon glyphicon-user" aria-hidden="true"></i> User</a></li>
                        
                        <li class="nav-link">
                            <a class="nav-link" href="{{url('/logoutadmin')}}"><i class="glyphicon glyphicon-log-out" aria-hidden="true"></i> Logout</a>
                            <b>Xin chao: {{$name}}</b>
                        </li>
                    @else

                    <li><a href="{{url('/loginadmin')}}"><i class="fa fa-sign-in" aria-hidden="true"></i>Login</a></li>
                    <li><a href="{{url('/registeradmin')}}"><i class="fa fa-user-plus" aria-hidden="true"></i>
                            Register</a></li>
                    @endif
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