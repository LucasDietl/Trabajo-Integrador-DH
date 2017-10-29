<?php require_once("soporte.php");

traerTodos();
$email = $_GET["usuario-email"];

$usuario = traerPorEmail($email);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registro completo</title>
  </head>
  <body>
    <?php
    var_dump($_POST);?>
    <h1>Bienvenidos al perfil de <?=$usuario["usuario-nombre"]?></h1>
  </body>
</html>
