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

     <div class="container">
          <!--<header class="">
               <h1>Registrese</h1>
          </header>-->
          <div class="container-signup">
               <div class="container-signup-img">
                    <img src="images\zapatosvarios.jpg" alt="" width="70%">
               </div>

               <div class="container-signup-form">
                    <form class="form-signup" action="singup.php" method="post">

                         <label for="usuario-nombre">Nombre:</label><br>
                         <input type="text" name="usuario-nombre" value="" placeholder="Nombre" autofocus><br>

                         <label for="usuario-apellido">Apellido:</label><br>
                         <input type="text" name="usuario-apellido" value="" placeholder="Apellido"><br>

                         <label for="usuario-email">E-mail:</label><br>
                         <input type="email" name="usuario-email" value="" placeholder="e-mail"><br>

                         <input type="submit" name="" value="Enviar">
                         <input type="reset" name="" value="Borrar">



                    </form>
               </div>

          </div>

     </div>

     <!-- NOTE: Footer start -->
     <?php require_once("footer.php"); ?>
     <!-- NOTE: Footer end -->

  </body>
</html>
