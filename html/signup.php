<?php

require_once("funciones.php");
/*$meses = [
    1 => "Enero", 2 => "Febrero", 3 => "Marzo", 4 => "Abril", 5 => "Mayo", 6 => "Junio",
    7 => "Julio", 8 => "Agosto", 9 => "Septiembre", 10 => "Octubre", 11 => "Noviembre", 12 => "Diciembre"
];*/

$nombre = $_POST["usuario-nombre"] ?? null; // nombre
$apellido = isset($_POST["usuario-apellido"]) ? $_POST["usuario-apellido"] : null; //apellido
//$username = isset($_POST["username"]) ? $_POST["username"] : null; //username
$email = isset($_POST["usuario-email"]) ? $_POST["usuario-email"] : null; //email
$email_confirm = isset($_POST["usuario-email-confirm"]) ? $_POST["usuario-email-confirm"] : null; //email_confirm
$contrasena = isset($_POST["usuario-pass"]) ? $_POST["usuario-pass"] : null; //contrasena
$contrasena_confirm = isset($_POST["usuario-pass-confirm"]) ? $_POST["usuario-pass-confirm"] : null; //contrasena_confirm
//$genero = isset($_POST["genero"]) ? $_POST["genero"] : null; // genero
//$dia = $_POST["fnac_dia"] ?? null;  // fnac_dia
//$messel = $_POST["fnac_mes"] ?? null; // fnac_mes
//$anio = $_POST["fnac_anio"] ?? null;// fnac_anio
$arrayDeErrores = [];


if($_POST)
{

    $arrayDeErrores = validarInformacion();

    if(count($arrayDeErrores) == 0) {

      $usuarioOk =validarLogin($_POST);
      guardarUsuario($usuarioOk);



      header("Location:resultado.php");exit;
    }
}

?>


<?php

        var_dump($_POST);
        var_dump($_FILES);

          if(isset($arrayDeErrores)!= ""){
            foreach ($arrayDeErrores as $error) { ?>
              <ul>
                <li style="color:blue;"><?php  echo "$error";?></li>
              </ul>
          <?php  }
           }?>

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




     <div class="">
               <div class="container container-signupform">

                         <!-- separador-->
                         <div class="col-md-1">
                         </div>

                         <!--Formulario-->
                         <div class="col-xs-12 col-sm-4 col-md-5">

                              <form class="signup-form" action="signup.php" method="post">

                                   <h1 class="form-signin-heading">Registrese</h1>

                                   <p>Completá el formulario de abajo para recibir información sobre productos y nuevos lanzamientos.</br>
                                   También podremos enviarte ofertas personalizadas.</p>

                                   <label for="usuario-nombre">Nombre:</label>
                                   <input class="form-control" type="text" name="usuario-nombre" value="" placeholder="Nombre" required autofocus>

                                   <label for="usuario-apellido">Apellido:</label>
                                   <input class="form-control" type="text" name="usuario-apellido" value="" placeholder="Apellido">

                                   <!--<label for="usuario-sexo">Sexo</label>
                                   <input class="" type="radio" name="usuario-sexo" value="M">Masculíno
                                   <input class="" type="radio" name="usuario-sexo" value="F">Feminíno-->

                                   <label for="usuario-fec-nac">Fecha de nacimiento</label>
                                   <input class="form-control" type="date" name="usuario-fec-nac" value="">

                                   <label for="usuario-email">E-mail:</label>
                                   <input class="form-control" type="email" name="usuario-email" value="" placeholder="e-mail">

                                   <label for="usuario-email-confirm">Confirmar E-mail:</label>
                                   <input class="form-control" type="email" name="usuario-email-confirm" value="" placeholder="Confirmar e-mail">

                                   <label for="usuario-pass">Password:</label>
                                   <input class="form-control" type="password" name="usuario-pass" value="" placeholder="Password">

                                   <label for="usuario-pass-confirm">Confirmar Password:</label>
                                   <input class="form-control" type="password" name="usuario-pass-confirm" value="" placeholder="Confirmar password">

                                   <input class="btnbuscar signup-form-boton" type="submit" name="" value="Confirmar">
                                   <input class="btnbuscar signup-form-boton" type="reset" name="" value="Borrar">

                              </form>
                         </div>

               </div>

</div>

     <!-- NOTE: Footer start -->
     <?php require_once("footer.php"); ?>
     <!-- NOTE: Footer end -->

  </body>
</html>
