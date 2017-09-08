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
<!-- NOTE: introcuccion start -->
<div class="" style="display: flex;">
  <div class="" style=" padding: 0px!important;background-size: cover;">
    <img src="images/dorada.jpg" style="float: left; width: 50%;" alt="">
    <img src="images/blackwhite.jpg" style="float: right; width: 50%;" alt="">
    <img src="images/comingsoon.jpg" style="float: none; width: 100%;" alt="">
    <img src="images/skate.jpg" style="float: left; width: 50%;" alt="">
    <img src="images/piernasyzapatos.jpg" style="float: right; width: 50%;" alt="">
    <img src="images/cactuswide.jpg" style="float: none; width: 100%;" alt="">
  </div>
</div>
<!-- NOTE: introcuccion end -->
<!-- NOTE: Imagen de presentacion Start -->
<div class="container">
  <header class="encabezado">
    <img class="bordecopado" src="images/theblondie.jpg" alt="logo">
  </header>
</div>
<!-- NOTE: Imagen de presentacion end -->

<!-- NOTE: contenido de los productos destacados start -->
<div class="container">
<div class="row muestra">
  <div class="col-sm-4">
    <div class="panel panel-danger">
      <div class="panel-heading">Tempodara</div>
      <div class="panel-body"><img src="images/zapatostemporada.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
      <div class="panel-footer">2x1 en la compra de cualquier zapato</div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="panel panel-danger">
      <div class="panel-heading">Promo!!</div>
      <div class="panel-body"><img src="images/zapatonegro.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
      <div class="panel-footer">2x1 en la compra de cualquier zapato</div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="panel panel-danger">
      <div class="panel-heading">Promo!!</div>
      <div class="panel-body"><img src="images/zapatosvarios.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
      <div class="panel-footer">2x1 en la compra de cualquier zapato</div>
    </div>
  </div>
</div>
</div><br>

<div class="container">
<div class="row muestra">
  <div class="col-sm-4">
    <div class="panel panel-danger">
      <div class="panel-heading">Promo!!</div>
      <div class="panel-body"><img src="images/piernasyzapatos.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
      <div class="panel-footer">2x1 en la compra de cualquier zapato</div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="panel panel-danger">
      <div class="panel-heading">Promo!!</div>
      <div class="panel-body"><img src="images/skate.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
      <div class="panel-footer">2x1 en la compra de cualquier zapato</div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="panel panel-danger">
      <div class="panel-heading">Promo!!</div>
      <div class="panel-body"><img src="images/pink.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
      <div class="panel-footer">2x1 en la compra de cualquier zapato</div>
    </div>
  </div>
</div>
</div><br><br>
<!-- NOTE: contenido de os productos destacados end -->

<!-- NOTE: Footer start -->
<footer>
  <div class="container">
    <div class="row">
      <div class="col-sm-4">
        <h5>Get started</h5>
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">Home</a></li>
          <li><a href="#">Home</a></li>
        </ul>
      </div>
      <div class="col-sm-4">
        <h5>Get started</h5>
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">Home</a></li>
          <li><a href="#">Home</a></li>
        </ul>
      </div>
      <div class="col-sm-4">
        <h5>Get started</h5>
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">Home</a></li>
          <li><a href="#">Home</a></li>
        </ul>
      </div>
    </div>
    <div class="row">
      <iframe class="col-sm-12"id="map-container" frameborder="0" style="border:0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31286.51358666379!2d-58.55486426055731!3d-34.487932968802525!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb0566329b7d5%3A0xbf5c5047b087981b!2sSan+Isidro+Partido%2C+Buenos+Aires+Province!5e0!3m2!1sen!2sar!4v1504468145306">
      </iframe>
    </div>
    <div class="social-networks">
      <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
      <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
      <a href="#" class="google"><i class="fa fa-google-plus"></i></a>
    </div>
  </div>
  <div class="copyright">
    <div class="container">
      <div class="col-md-6">
        <p>© 2017 - Todos los derechos reservados</p>
      </div>
    </div>
  </div>



</footer>


<!-- NOTE: Footer end -->
</body>
</html>
