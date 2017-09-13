<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/estilos_signin.css">
    <meta name="viewport"content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Sedgwick+Ave|Sunshiney" rel="stylesheet">

    <title>Sign In</title>
  </head>
  <body class="signinbody">
    <!-- NOTE: Navbar start -->
    <?php require_once("navbar.php"); ?>
    <!-- NOTE: Navbar end -->



<div class="container" >
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-4">

      <form class="form-horizontal">
      <div class="form-group">

        <h2 class="form-signin-heading">Sign in</h2>

        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>

        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>

        <div class="checkbox">
          <label class="recordarme">
            <input type="checkbox" value="remember-me">Recordarme</label>
        </div>

        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        </form>

      </div>
    </div>
  </div>
</div>

    </div> <!-- /container -->
    <!-- NOTE: Footer start -->
    <?php require_once("footer.php"); ?>
    <!-- NOTE: Footer end -->
  </body>
</html>
