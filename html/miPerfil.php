<?php require_once("soporte.php");



if (!$auth->estaLogueado()) {
  header("Location:signin.php");exit;
}

$usuario = $auth->obtenerUsuarioLogueado($db);



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
      <link href="https://fonts.googleapis.com/css?family=Sedgwick+Ave|Sunshiney|Yesteryear|Raleway" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>The Blondie - Shoes</title>
  </head>

  <body>
<!-- NOTE: Navbar start -->
<?php require_once("navbar.php"); ?>
<!-- NOTE: Navbar end -->

    <section class="container slideimages altominimo">
        <h2> Bienvenido <?=$usuario->getUserName()?></h2>
    </section>
    <!-- NOTE: Footer start -->
    <?php require_once("footer.php"); ?>
    <!-- NOTE: Footer end -->
  </body>
</html>
