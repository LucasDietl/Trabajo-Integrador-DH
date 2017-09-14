<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="icon" type="image/png" href="images/favicon.png">
    <meta name="viewport"content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Sedgwick+Ave|Sunshiney" rel="stylesheet">

    <title>The Blondie - Shoes</title>
  </head>

  <body>

     <!-- NOTE: Navbar start -->
     <?php require_once("navbar.php"); ?>
     <!-- NOTE: Navbar end -->

<!--     <div class="container">-->



          <div class="container">
               <div class="row">
                    <div class="col-xs-12 col-sm-8 col-md-8">
                         <img src="images\zapatosvarios.jpg" alt="" height="100%" width="100%">
                    </div>



                    <div class="col-xs-12 col-sm-4 col-md-4">
                         <h1>Registrese</h1>
                         <form class="signup-form form-horizontal" action="signup.php" method="post">

                              <label for="usuario-nombre">Nombre:</label><br>
                              <input class="form-control" type="text" name="usuario-nombre" value="" placeholder="Nombre" autofocus><br>

                              <label for="usuario-apellido">Apellido:</label><br>
                              <input class="form-control" type="text" name="usuario-apellido" value="" placeholder="Apellido"><br>

                              <label for="usuario-fec-nac">Fecha de nacimiento</label><br>
                              <input class="form-control" type="date" name="usuario-fec-nac" value=""><br>

                              <label for="usuario-email">E-mail:</label><br>
                              <input class="form-control" type="email" name="usuario-email" value="" placeholder="e-mail"><br>

                              <label for="usuario-email-confirm">Confirmar E-mail:</label><br>
                              <input class="form-control" type="email" name="usuario-email-confirm" value="" placeholder="Confirmar e-mail"><br>

                              <label for="usuario-pass">Password:</label><br>
                              <input class="form-control" type="password" name="usuario-pass" value="" placeholder="Password"><br>

                              <label for="usuario-pass-confirm">Confirmar Password:</label><br>
                              <input class="form-control" type="password" name="usuario-pass-confirm" value="" placeholder="Confirmar password"><br>

                              <input class="signup-form-boton" type="submit" name="" value="Enviar">
                              <input type="reset" name="" value="Borrar">



                         </form>
                    </div>
               </div>
          </div>

<!--</div>-->

     <!-- NOTE: Footer start -->
     <?php require_once("footer.php"); ?>
     <!-- NOTE: Footer end -->

  </body>
</html>
