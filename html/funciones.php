<?php
function validarDatos() {
  $sumaDeErrores=[];
  $nombreDelArchivo = $_FILES["avatar"]["name"];
  $extension = pathinfo($nombreDelArchivo,PATHINFO_EXTENSION);
  if($_POST) {

    if($_FILES["avatar"]["error"] != UPLOAD_ERR_OK) {
      $sumaDeErrores["avatar"] = "Hubo un error al subir el archivo";
    }
    else if ($extension != "jpg" && $extension != "jpeg" && $extension != "gif" && $extension !=  "png") {
      $sumaDeErrores["avatar"] = "Necesitamos que el avatar sea una foto";
    }



    if($_POST["nombre"]==""){
      $sumaDeErrores["nombre"]= "No te olvides de poner el nombre" ;
    }
    if($_POST["apellido"]==""){
      $sumaDeErrores["apellido"]= "No te olvides de poner el apellido" ;
    }
    if($_POST["username"]==""){
      $sumaDeErrores["username"]= "No te olvides de poner el Username" ;
    }
    if($_POST["email"]==""){
      $sumaDeErrores["email"]= "No te olvides de poner el email";

    }elseif((filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) == false)) {
      $sumaDeErrores["email"]= "El mail debe conterner este formato ejemplo@algo.com";

    }elseif($_POST["email"]!=$_POST["email_confirm"]){
      $sumaDeErrores["email"]= "Ambos email deben coincicir";
    }
    if (strlen($_POST["contrasena"]) < 8) {
      $sumaDeErrores["contrasena"] = "Necesito que tu contraseña tenga al menos 8 caracteres";
    }
    else if (preg_match('/[A-Z]/', $_POST["contrasena"]) == false) {
      $sumaDeErrores["contrasena"] = "Necesito que tu contraseña tenga al menos 1 mayuscula";
    }elseif ($_POST["contrasena"]!=$_POST["contrasena_confirm"]){
      $sumaDeErrores["contrasena_confirm"] = "Ambas conraseñas no coinciden";
    }
    if(isset($_POST["genero"])==null){
      $sumaDeErrores["genero"]= "No te de seleccionar tu genero" ;
    }
    if(($_POST["fnac_dia"] == "") || ($_POST["fnac_mes"] == "") || ($_POST["fnac_anio"]=="")){
      $sumaDeErrores["fnac_dia"]= "Seleciona dia mes y año de nacimiento por favor" ;
    }elseif (date('Y')-($_POST["fnac_anio"])<18) {
      $sumaDeErrores["fnac_anio"]= "Debe ser mayor de 18 para registrarse" ;
    }


     return $sumaDeErrores;
  }

}
function validarLogin($datos){
    return [
      "nombre" => $datos["nombre"],
      "apellido" => $datos["apellido"],
      "username" => $datos["username"],
      "email" => $datos["email"],
      "contrasenia" => password_hash($datos["contrasena"], PASSWORD_DEFAULT),
      "genero" => $datos["genero"],
      "fnac" => $datos["fnac_dia"] . "-" . $datos["fnac_mes"] . "-" . $datos["fnac_anio"],
      "categorias" => $datos["categorias"],
      "descripcion" => $datos["descripcion"]
    ];
  }
function guardarUsuario($usuario) {
  $json = json_encode($usuario);
  file_put_contents("usuarios.json", $json . PHP_EOL, FILE_APPEND);
}
function traerTodos() {
  $usuarios = [];

  $recurso = fopen("usuarios.json", "r");
  $linea = fgets($recurso);
  while ($linea != false) {
    $usuarios[] = json_decode($linea, true);
    $linea = fgets($recurso);
  }
  fclose($recurso);

  return $usuarios;
}

function traerPorEmail($email) {
  $recurso = fopen("usuarios.json", "r");
  $linea = fgets($recurso);
  while ($linea != false) {
    $usuario = json_decode($linea, true);

    if ($usuario["email"] == $email) {
      return $usuario;
    }

    $linea = fgets($recurso);
  }
  fclose($recurso);

  return null;
}

?>
