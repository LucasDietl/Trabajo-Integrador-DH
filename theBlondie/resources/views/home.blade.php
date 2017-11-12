<?php require_once("../../html/soporte.php");?>
<?php
if($_POST){
    if($_POST["button"]){
        $auth->logout();
        header("location:home.php");exit;
    }};
?>
        <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link href="../../../html/css/bootstrap.min.css" rel="stylesheet">
    <!-- NOTE: incluye el icono en la pestaña del navegador (Favicon)-->
    <link rel="icon" type="image/png" href="../../../html/images/favicon.png">
    <meta name="viewport"content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Sedgwick+Ave|Sunshiney|Yesteryear|Raleway" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../../../html/css/style.css">


    <title>The Blondie - Shoes</title>
</head>

<body class="bgcolorhome">

<!-- NOTE: Navbar start -->
<?php require_once("../../html/navbar.php"); ?>
<!-- NOTE: Navbar end -->

<!-- NOTE: introduccion start -->
<div class="slideimages" style="display: flex;">
    <div class="slideshow" style="">
        <img src="../../../html/images/dorada.jpg" class="izquierda"style="" alt="">
        <img src="../../../html/images/blackwhite.jpg" class="derecha" alt="">
        <img src="../../../html/images/comingsoon.jpg" class="medio" alt="">
        <img src="../../../html/images/skate.jpg" class="izquierda" alt="">
        <img src="../../../html/images/piernasyzapatos.jpg" class="derecha" alt="">
        <img src="../../../html/images/cactuswide.jpg" class="medio" alt="">
    </div>
</div>
<!-- NOTE: introduccion end -->

<!-- NOTE: Footer start -->
<?php require_once("../../html/footer.php"); ?>
<!-- NOTE: Footer end -->


</body>
</html>
