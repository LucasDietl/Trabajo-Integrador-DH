<?php

require_once("funciones.php");
if (estaLogueado()) {
  header("Location:miPerfil.php");exit;
}
$meses = [
    1 => "Enero", 2 => "Febrero", 3 => "Marzo", 4 => "Abril", 5 => "Mayo", 6 => "Junio",
    7 => "Julio", 8 => "Agosto", 9 => "Septiembre", 10 => "Octubre", 11 => "Noviembre", 12 => "Diciembre"
];

$categorias = [
    ['id' => 1, 'nombre' => 'Historia'],
    ['id' => 2, 'nombre' => 'Geografía'],
    ['id' => 3, 'nombre' => 'Deportes'],
    ['id' => 4, 'nombre' => 'Arte'],
    ['id' => 5, 'nombre' => 'Ciencia'],
    ['id' => 6, 'nombre' => 'Espectaculos'],
];


$nombre = $_POST['nombre'] ?? null;
$apellido = $_POST['apellido'] ?? null;
$username = $_POST['username'] ?? null;
$email = $_POST['email'] ?? null;
$emailConfirm = $_POST['email_confirm'] ?? null;
$genero = $_POST['genero'] ?? null;
$dia = $_POST['fnac_dia'] ?? null;
$mes = $_POST['fnac_mes'] ?? null;
$anio = $_POST['fnac_anio'] ?? null;



$arrayDeErrores = [];
if($_POST)
{

    $arrayDeErrores = validarInformacion();

    if(count($arrayDeErrores) == 0) {

      $usuario = armarUsuario($_POST);
      guardarUsuario($usuario);

      $archivo = $_FILES["avatar"]["tmp_name"];
      $nombreDelArchivo = $_FILES["avatar"]["name"];
      $extension = pathinfo($nombreDelArchivo,PATHINFO_EXTENSION);

      $nombre = dirname(__FILE__) . "/img/" . $_POST["username"] . ".$extension";

      move_uploaded_file($archivo, $nombre);

      header("Location:home.php");exit;
    }
}

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
    <link href="https://fonts.googleapis.com/css?family=Sedgwick+Ave|Sunshiney|Yesteryear" rel="stylesheet">

    <title>The Blondie - Shoes</title>
  </head>

  <body>

     <!-- NOTE: Navbar start -->
     <?php require_once("navbar.php"); ?>
     <!-- NOTE: Navbar end -->




     <div class="slideimages">
               <div class="container container-signupform">

                         <!-- separador-->
                         <div class="col-md-1">
                         </div>

                         <!--Formulario-->
                         <div class="col-xs-12 col-sm-4 col-md-5">
                           <div class="row">
                               <?php if (count($arrayDeErrores) > 0) : ?>
                                 <ul style="color:red;">
                                     <?php foreach($arrayDeErrores as $error) : ?>
                                       <li>
                                         <?=$error?>
                                       </li>
                                     <?php endforeach; ?>
                                 </ul>
                               <?php endif;?>
                               <form  class="signup-form"role="form" action="signup.php" method="post" enctype="multipart/form-data">
                                 <h1 class="form-signin-heading">Registrese</h1>

                                 <p>Completá el formulario de abajo para recibir información sobre productos y nuevos lanzamientos.</br>
                                 También podremos enviarte ofertas personalizadas.</p>
                                   <div class="row">
                                       <div class="form-group col-sm-6">
                                           <label for="nombre">Nombre</label>
                                           <input type="text" class="form-control signup-form-input" id="nombre" name="nombre" value="<?php echo $nombre; ?>" placeholder="Ingrese Nombre">
                                       </div>
                                       <div class="form-group col-sm-6">
                                           <label for="apellido">Apellido</label>
                                           <input type="text" class="form-control signup-form-input" id="apellido" name="apellido" value="<?php echo $apellido; ?>" placeholder="Ingrese Apellido">
                                       </div>
                                   </div>
                                   <div class="row">
                                       <div class="form-group col-sm-6">
                                           <label for="username">Nombre de Usuario</label>
                                           <input type="text" class="form-control signup-form-input" id="username" name="username" value="<?php echo $username; ?>" placeholder="Ingrese Nombre de Usuario">
                                       </div>
                                   </div>
                                   <div class="row">
                                       <div class="form-group col-sm-6">
                                           <label for="email">Email</label>
                                           <input type="text" class="form-control signup-form-input" id="email" name="email" value="<?php echo $email; ?>" placeholder="Ingrese Email">
                                       </div>
                                       <div class="form-group col-sm-6">
                                           <label for="email-confirm">Confirmar Email</label>
                                           <input type="text" class="form-control signup-form-input" id="email-confirm" name="email_confirm" value="<?php echo $emailConfirm; ?>" placeholder="Ingrese Confirmación Email">
                                       </div>
                                   </div>
                                   <div class="row">
                                       <div class="form-group col-sm-6">
                                           <label for="contrasena">Contraseña</label>
                                           <input type="password" class="form-control signup-form-input" id="contrasena" name="contrasena" placeholder="Ingrese Contraseña">
                                       </div>
                                       <div class="form-group col-sm-6">
                                           <label for="contrasena-confirm">Confirmar Contraseña</label>
                                           <input type="password" class="form-control signup-form-input" id="contrasena-confirm" name="contrasena_confirm" placeholder="Ingrese Confirmación Contraseña">
                                       </div>
                                   </div>
                                   <div class="form-group">
                                       <label>Imagen de Perfil</label>
                                       <div>
                                           <input class="" value=" " type="file" name="avatar"/>
                                       </div>
                                   </div>
                                   <div class="form-group">
                                       <label>Sexo</label>
                                       <div>
                                           <label class="radio-inline">
                                               <input type="radio" name="genero" id="genero_masculino" value="0"
                                                   <?php echo ($genero === "0") ? 'checked="checked"' : ''; ?>> Masculino
                                           </label>
                                           <label class="radio-inline">
                                               <input type="radio" name="genero" id="genero_femenino" value="1"
                                                   <?php echo ($genero == "1") ? 'checked="checked"' : ''; ?>> Femenino
                                           </label>
                                           <label class="radio-inline">
                                               <input type="radio" name="genero" id="genero_otros" value="2"
                                                   <?php echo ($genero == "2") ? 'checked="checked"' : ''; ?>> Otro
                                           </label>
                                       </div>
                                   </div>
                                   <div class="form-group">
                                       <label> Fecha de Nacimiento</label>
                                       <div class="row">
                                           <div class="col-sm-4">
                                               <select class="form-control signup-form-input" name="fnac_dia">
                                                   <option class="bgcoloroption" value="">Día</option>
                                                   <?php for ($i = 1; $i <= 31; $i++) { ?>
                                                       <option class="bgcoloroption"
                                                           value="<?php echo $i; ?>"
                                                           <?php echo ($i == $dia) ? 'selected="selected"' : ''; ?>
                                                       ><?php echo $i; ?></option>
                                                   <?php } ?>

                                                   <?php /* for($i = 1; $i <= 31; $i++) {
                                                               echo '<option value="' . $i . '">' . $i . '</option>';
                                                           } */ ?>
                                               </select>
                                           </div>
                                           <div class="col-sm-4">
                                               <select class="form-control signup-form-input" name="fnac_mes">
                                                   <option class="bgcoloroption" value="">Mes</option>
                                                   <?php foreach ($meses as $numero => $nombre) { ?>
                                                       <option class="bgcoloroption"
                                                           value="<?php echo $numero; ?>"
                                                           <?php echo ($numero == $mes) ? 'selected="selected"' : ''; ?>
                                                       ><?php echo $nombre; ?></option>
                                                   <?php } ?>
                                               </select>
                                           </div>
                                           <div class="col-sm-4">
                                               <select class="form-control signup-form-input" name="fnac_anio">
                                                   <option class="bgcoloroption" value="">Año</option>
                                                   <?php for ($i = date('Y'); $i >= (date('Y') - 100); $i--) { ?>
                                                       <option class="bgcoloroption"
                                                           value="<?php echo $i; ?>"
                                                           <?php echo ($i == $anio) ? 'selected="selected"' : ''; ?>
                                                       ><?php echo $i; ?></option>
                                                   <?php } ?>
                                               </select>
                                           </div>
                                       </div>
                                   </div>


                                   <div class="checkbox">
                                       <label>
                                           <input type="checkbox" id="chk-terminos" name="terminos"> Acepto los términos y condiciones
                                       </label>
                                   </div>
                                   <input class="btnbuscar signup-form-boton" type="submit" name="" value="Confirmar"> <?php // NOTE: Registrarme ?>
                                   <input class="btnbuscar signup-form-boton" type="reset" name="" value="Borrar">
                               </form>
                           </div>
<?php   /*
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

                              </form> */?>
                         </div>

               </div>

</div>

     <!-- NOTE: Footer start -->
     <?php require_once("footer.php"); ?>
     <!-- NOTE: Footer end -->

  </body>
</html>
