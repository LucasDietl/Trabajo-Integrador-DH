<?php require_once("../../html/soporte.php");?>
@extends('layout')
        <!DOCTYPE html>
<html>
<head>
    @section('title')
        <title>The Blondie - Shoes</title>
    @endsection
</head>

<body class="bgcolorhome">

<!-- NOTE: Navbar start -->
@section('navbar')
    <?php require_once("../../html/navbar.php"); ?>
@endsection
<!-- NOTE: Navbar end -->

<!-- NOTE: introduccion start -->
@section('content')
    <div class="container altominimo slideimages" >
        <div class="row margen">
            <div class="col-xs-12 col-sm-4 col-md-4">

                <form class="form-horizontal"role="form" action="signin.php" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">

                        <h2 class="form-signin-heading">Sign in</h2>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                        <label for="email" class="sr-only">Email address</label>

                        <input type="email" id="email" id="email"name="email" class="form-control signup-form-input" placeholder="Correo Electronico" required autofocus>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" class="sr-only">Password</label>

                        <input type="password" id="password" name="password" class="form-control signup-form-input" placeholder="Contraseña" required>


                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                        <button class="btn btn-lg btn-primary btn-block btnbuscar" type="submit">Sign in</button>

                    </div>
                </form>

            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Login</div>

                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">Password</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Login
                                    </button>

                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        Forgot Your Password?
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
<!-- NOTE: introduccion end -->

<!-- NOTE: Footer start -->
@section('footer')
    <?php require_once("../../html/footer.php"); ?>
@endsection
<!-- NOTE: Footer end -->


</body>
</html>
