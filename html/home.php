
<?php require_once("soporte.php");?>
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
  <?php
  if($_POST){
  if($_POST["button"]){
    $auth->logout();
  }};
   ?>
<body class="bgcolorhome">

     <!-- NOTE: Navbar start -->
     <?php require_once("navbar.php"); ?>
     <!-- NOTE: Navbar end -->

     <!-- NOTE: introduccion start -->
     <div class="slideimages" style="display: flex;">
       <div class="slideshow" style="">
         <img src="images/dorada.jpg" class="izquierda"style="" alt="">
         <img src="images/blackwhite.jpg" class="derecha" alt="">
         <img src="images/comingsoon.jpg" class="medio" alt="">
         <img src="images/skate.jpg" class="izquierda" alt="">
         <img src="images/piernasyzapatos.jpg" class="derecha" alt="">
         <img src="images/cactuswide.jpg" class="medio" alt="">
       </div>
     </div>
     <!-- NOTE: introduccion end -->

     <!-- NOTE: Footer start -->
     <?php require_once("footer.php"); ?>
     <!-- NOTE: Footer end -->


</body>
</html>
