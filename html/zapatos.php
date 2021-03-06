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
        logout();
    }};
?>
<body class="bgcolorhome">

<!-- NOTE: Navbar start -->
<?php require_once("navbar.php"); ?>
<!-- NOTE: Navbar end -->



<!-- NOTE: Imagen de presentacion Start -->
<div class="container">
    <header class="encabezado slideimages">
        <img class="bordecopado logoredondo" src="images/theblondie.jpg" alt="logo">
    </header>
</div>
<!-- NOTE: Imagen de presentacion end -->

<!-- NOTE: contenido de los productos destacados start -->
<div class="container">
    <div class="row muestra">
        <div class="col-xs-12 col-sm-4 col-md-2 growup">
            <div class="panel panel-danger">
                <div class="panel-heading">Tempodara</div>
                <div class="panel-body"><img src="images/zapatostemporada.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
                <div class="panel-footer">2x1 en la compra de cualquier par de zapatos</div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-2 growup ">
            <div class="panel panel-danger">
                <div class="panel-heading">Promo!!</div>
                <div class="panel-body"><img src="images/zapatonegro.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
                <div class="panel-footer">2x1 en la compra de cualquier par de zapatos</div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-2 growup ">
            <div class="panel panel-danger">
                <div class="panel-heading">Promo!!</div>
                <div class="panel-body"><img src="images/piernasyzapatos.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
                <div class="panel-footer">2x1 en la compra de cualquier par de zapatos</div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-2 growup ">
            <div class="panel panel-danger">
                <div class="panel-heading">Promo!!</div>
                <div class="panel-body"><img src="images/pink.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
                <div class="panel-footer">2x1 en la compra de cualquier par de zapatos</div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-2 growup ">
            <div class="panel panel-danger">
                <div class="panel-heading">Promo!!</div>
                <div class="panel-body"><img src="images/blackwhite.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
                <div class="panel-footer">2x1 en la compra de cualquier par de zapatos</div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-2 growup ">
            <div class="panel panel-danger">
                <div class="panel-heading">Promo!!</div>
                <div class="panel-body"><img src="images/zapatosvarios.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
                <div class="panel-footer">2x1 en la compra de cualquier par de zapatos</div>
            </div>
        </div>
    </div>
</div><br>

<div class="container">
    <div class="row muestra">
        <div class="col-xs-12 col-sm-4 col-md-2 growup  ">
            <div class="panel panel-danger">
                <div class="panel-heading">Promo!!</div>
                <div class="panel-body"><img src="images/piernasyzapatos.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
                <div class="panel-footer">2x1 en la compra de cualquier par de zapatos</div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-2 growup ">
            <div class="panel panel-danger">
                <div class="panel-heading">Promo!!</div>
                <div class="panel-body"><img src="images/skate.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
                <div class="panel-footer">2x1 en la compra de cualquier par de zapatos</div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-2 growup ">
            <div class="panel panel-danger">
                <div class="panel-heading">Promo!!</div>
                <div class="panel-body"><img src="images/pink.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
                <div class="panel-footer">2x1 en la compra de cualquier par de zapatos</div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-2 growup ">
            <div class="panel panel-danger">
                <div class="panel-heading">Promo!!</div>
                <div class="panel-body"><img src="images/zapatostemporada.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
                <div class="panel-footer">2x1 en la compra de cualquier par de zapatos</div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-2 growup ">
            <div class="panel panel-danger">
                <div class="panel-heading">Promo!!</div>
                <div class="panel-body"><img src="images/skate.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
                <div class="panel-footer">2x1 en la compra de cualquier par de zapatos</div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-2 growup ">
            <div class="panel panel-danger">
                <div class="panel-heading">Promo!!</div>
                <div class="panel-body"><img src="images/zapatonegro.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
                <div class="panel-footer">2x1 en la compra de cualquier par de zapatos</div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row muestra">
        <div class="col-xs-12 col-sm-4 col-md-2 growup">
            <div class="panel panel-danger">
                <div class="panel-heading">Tempodara</div>
                <div class="panel-body"><img src="images/zapatostemporada.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
                <div class="panel-footer">2x1 en la compra de cualquier par de zapatos</div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-2 growup ">
            <div class="panel panel-danger">
                <div class="panel-heading">Promo!!</div>
                <div class="panel-body"><img src="images/zapatonegro.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
                <div class="panel-footer">2x1 en la compra de cualquier par de zapatos</div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-2 growup ">
            <div class="panel panel-danger">
                <div class="panel-heading">Promo!!</div>
                <div class="panel-body"><img src="images/piernasyzapatos.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
                <div class="panel-footer">2x1 en la compra de cualquier par de zapatos</div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-2 growup ">
            <div class="panel panel-danger">
                <div class="panel-heading">Promo!!</div>
                <div class="panel-body"><img src="images/pink.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
                <div class="panel-footer">2x1 en la compra de cualquier par de zapatos</div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-2 growup ">
            <div class="panel panel-danger">
                <div class="panel-heading">Promo!!</div>
                <div class="panel-body"><img src="images/blackwhite.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
                <div class="panel-footer">2x1 en la compra de cualquier par de zapatos</div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-2 growup ">
            <div class="panel panel-danger">
                <div class="panel-heading">Promo!!</div>
                <div class="panel-body"><img src="images/zapatosvarios.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
                <div class="panel-footer">2x1 en la compra de cualquier par de zapatos</div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row muestra">
        <div class="col-xs-12 col-sm-4 col-md-2 growup  ">
            <div class="panel panel-danger">
                <div class="panel-heading">Promo!!</div>
                <div class="panel-body"><img src="images/piernasyzapatos.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
                <div class="panel-footer">2x1 en la compra de cualquier par de zapatos</div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-2 growup ">
            <div class="panel panel-danger">
                <div class="panel-heading">Promo!!</div>
                <div class="panel-body"><img src="images/skate.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
                <div class="panel-footer">2x1 en la compra de cualquier par de zapatos</div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-2 growup ">
            <div class="panel panel-danger">
                <div class="panel-heading">Promo!!</div>
                <div class="panel-body"><img src="images/pink.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
                <div class="panel-footer">2x1 en la compra de cualquier par de zapatos</div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-2 growup ">
            <div class="panel panel-danger">
                <div class="panel-heading">Promo!!</div>
                <div class="panel-body"><img src="images/zapatostemporada.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
                <div class="panel-footer">2x1 en la compra de cualquier par de zapatos</div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-2 growup ">
            <div class="panel panel-danger">
                <div class="panel-heading">Promo!!</div>
                <div class="panel-body"><img src="images/skate.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
                <div class="panel-footer">2x1 en la compra de cualquier par de zapatos</div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-2 growup ">
            <div class="panel panel-danger">
                <div class="panel-heading">Promo!!</div>
                <div class="panel-body"><img src="images/zapatonegro.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
                <div class="panel-footer">2x1 en la compra de cualquier par de zapatos</div>
            </div>
        </div>
    </div>
</div><br><br>
<!-- NOTE: contenido de os productos destacados end -->
<!-- NOTE: Boton de subir solo para mobile Start -->

<!-- NOTE: Boton de subir solo para mobile Start -->
<!-- NOTE: Footer start -->
<?php require_once("footer.php"); ?>
<!-- NOTE: Footer end -->


</body>
</html>
