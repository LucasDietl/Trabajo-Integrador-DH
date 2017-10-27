<?php
require_once ("soporte.php");
require_once("funciones.php");
if (estaLogueado()) {
  header("Location:miPerfil.php");exit;
}

$title = 'LOGIN';

$arrayDeErrores = [];

if ($_POST) {
  $arrayDeErrores = validarLogin($db);

  if (count($arrayDeErrores) == 0) {
    loguear($_POST["email"]);
    if (isset($_POST["recordame"])) {
      recordar($_POST["email"]);
    }

    header("Location:miPerfil.php");exit;
  }

}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- NOTE: incluye el icono en la pestaña del navegador (Favicon)-->
    <link rel="icon" type="image/png" href="images/favicon.png">

    <meta name="viewport"content="width=device-width, initial-scale=1">
      <link href="https://fonts.googleapis.com/css?family=Sedgwick+Ave|Sunshiney|Yesteryear|Raleway" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Sign In</title>
  </head>
  <body class="signinbody">
    <!-- NOTE: Navbar start -->
    <?php require_once("navbar.php"); ?>
    <!-- NOTE: Navbar end -->

    <?php if (count($arrayDeErrores) > 0) : ?>
      <ul class="slideimages"style="color:red;">
          <?php foreach($arrayDeErrores as $error) : ?>
            <li>
              <?=$error?>
            </li>
          <?php endforeach; ?>
      </ul>
    <?php endif;?>

<div class="container altominimo slideimages" >
  <div class="row margen">
    <div class="col-xs-12 col-sm-4 col-md-4">

      <form class="form-horizontal"role="form" action="signin.php" method="post">
        <div class="form-group">

          <h2 class="form-signin-heading">Sign in</h2>

          <label for="email" class="sr-only">Email address</label>
          <input type="email" id="email" id="inputEmail"name="email" class="form-control signup-form-input" placeholder="Correo Electronico" required autofocus>

          <label for="contrasena" class="sr-only">Password</label>
          <input type="password" id="contrasena" id="inputPassword" name="contrasena" class="form-control signup-form-input" placeholder="Contraseña" required>

          <div class="checkbox">
          <label class="recordarme">
          <input type="checkbox" name="recordame" value="1">Recordarme</label>
          </div>
          <button class="btn btn-lg btn-primary btn-block btnbuscar" type="submit">Sign in</button>

        </div>
      </form>

    </div>
  </div>
</div>


    <!-- NOTE: Footer start -->
    <?php require_once("footer.php"); ?>
    <!-- NOTE: Footer end -->
  </body>
</html>
