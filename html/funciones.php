<?php
session_start();

if (!estaLogueado() && isset($_COOKIE["usuarioLogueado"])) {
  loguear($_COOKIE["usuarioLogueado"]);
}

function validarLogin() {
  $arrayDeErrores= [];
  if($_POST["usuario-email"] == "") {
    $arrayDeErrores["usuario-email"] = "Che, te equivocaste en el email";
  }
  else if (filter_var($_POST["usuario-email"], FILTER_VALIDATE_EMAIL) == false) {
    $arrayDeErrores["usuario-email"] = "Che, el formato del mail es cualquiera";
  }
  else if (traerPorEmail($_POST["usuario-email"]) == NULL) {
    $arrayDeErrores["usuario-email"] = "El usuario no ha sido encontrado";
  }
  else {
    if (strlen($_POST["usuario-pass"]) < 8) {
      $arrayDeErrores["usuario-pass"] = "Necesito que tu contraseña tenga al menos 8 caracteres";
    }
    else {
      $usuario = traerPorEmail($_POST["usuario-email"]);

      if (password_verify($_POST["usuario-pass"],$usuario["usuario-pass"]) == false) {
        $arrayDeErrores[] = "La contraseña no coincide";
      }
    }
  }
  return $arrayDeErrores;
}

function validarInformacion() {
  $sumaDeErrores=[];

  if($_POST) {

    if($_POST["usuario-nombre"]==""){
      $sumaDeErrores["usuario-nombre"]= "No te olvides de poner el nombre" ;
    }
    if($_POST["usuario-apellido"]==""){
      $sumaDeErrores["usuario-apellido"]= "No te olvides de poner el apellido" ;
    }
    //if($_POST["username"]==""){
    //  $sumaDeErrores["username"]= "No te olvides de poner el Username" ;
    //}
    if($_POST["usuario-email"]==""){
      $sumaDeErrores["usuario-email"]= "No te olvides de poner el email";

    }elseif((filter_var($_POST["usuario-email"], FILTER_VALIDATE_EMAIL) == false)) {
      $sumaDeErrores["usuario-email"]= "El mail debe conterner este formato ejemplo@algo.com";

    }elseif($_POST["usuario-email"]!=$_POST["usuario-email-confirm"]){
      $sumaDeErrores["usuario-email"]= "Ambos email deben coincicir";
    }
    if (strlen($_POST["usuario-pass"]) < 8) {
      $sumaDeErrores["usuario-pass"] = "Necesito que tu contraseña tenga al menos 8 caracteres";
    }
    else if (preg_match('/[A-Z]/', $_POST["usuario-pass"]) == false) {
      $sumaDeErrores["usuario-pass"] = "Necesito que tu contraseña tenga al menos 1 mayuscula";
    }elseif ($_POST["usuario-pass"]!=$_POST["usuario-pass-confirm"]){
      $sumaDeErrores["usuario-pass-confirm"] = "Ambas conraseñas no coinciden";
    }
    //if(isset($_POST["genero"])==null){
      //$sumaDeErrores["genero"]= "No te de seleccionar tu genero" ;
    //}
    /*if(($_POST["fnac_dia"] == "") || ($_POST["fnac_mes"] == "") || ($_POST["fnac_anio"]=="")){
      $sumaDeErrores["fnac_dia"]= "Seleciona dia mes y año de nacimiento por favor" ;
    }elseif (date('Y')-($_POST["fnac_anio"])<18) {
      $sumaDeErrores["fnac_anio"]= "Debe ser mayor de 18 para registrarse" ;
    }*/


     return $sumaDeErrores;
  }

}
function validarLogin($datos){
    return [
      "usuario-nombre" => $datos["usuario-nombre"],
      "usuario-apellido" => $datos["usuario-apellido"],
      //"username" => $datos["username"],
      "usuario-email" => $datos["usuario-email"],
      "usuario-pass" => password_hash($datos["usuario-pass"], PASSWORD_DEFAULT),
      //"genero" => $datos["genero"],
      //"fnac" => $datos["fnac_dia"] . "-" . $datos["fnac_mes"] . "-" . $datos["fnac_anio"],
      //"categorias" => $datos["categorias"],
      //"descripcion" => $datos["descripcion"]
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

    if ($usuario["usuario-email"] == $email) {
      return $usuario;
    }

    $linea = fgets($recurso);
  }
  fclose($recurso);

  return null;
}
function loguear($email) {
  $_SESSION["usuarioLogueado"] = $email;
}

function logout() {
  session_destroy();
  setcookie("usuarioLogueado", "", -1);
}

function estaLogueado() {
  if (isset($_SESSION["usuarioLogueado"])) {
    return true;
  }
  else {
    return false;
  }
}

function getUsuarioLogueado() {
  if (estaLogueado()) {
    return traerPorEmail($_SESSION["usuarioLogueado"]);
  }
  else {
    return NULL;
  }
}

function recordar($email) {
  setcookie("usuarioLogueado", $email, time()+3600);
}
?>
