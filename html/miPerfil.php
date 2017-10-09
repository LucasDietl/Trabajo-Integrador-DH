<?php
require_once("funciones.php");


if (!estaLogueado()) {
  header("Location:register.php");exit;
}

$usuario = getUsuarioLogueado();



?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- NOTE: incluye el icono en la pestaña del navegador (Favicon)-->
    <link rel="icon" type="image/png" href="images/favicon.png">

    <meta name="viewport"content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Sedgwick+Ave|Sunshiney" rel="stylesheet">

    <title>The Blondie - Shoes</title>
  </head>

  <body>
<!-- NOTE: Navbar start -->
<?php require_once("navbar.php"); ?>
<!-- NOTE: Navbar end -->

    <section class="container slideimages">
        <h2> Bienvenido <?=$usuario["username"]?></h2>
    </section>
    <!-- NOTE: Footer start -->
    <?php require_once("footer.php"); ?>
    <!-- NOTE: Footer end -->
  </body>
</html>
