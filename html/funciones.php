<?php
session_start();
// coneccion a la base de datos start ---------------------------------------------------
 try {
     $db = new PDO('mysql:host=localhost;charset=utf8mb4',
         'root',
         '',[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
 }
 catch( PDOException $Exception ) {
     echo $Exception->getMessage();
 }
$query = $db->query('CREATE DATABASE IF NOT EXISTS usuarios_db;');
$db = null;
try {
    $db = new PDO('mysql:host=localhost;dbname=usuarios_db;charset=utf8mb4',
        'root',
        '',[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
}
catch( PDOException $Exception ) {
    echo $Exception->getMessage();
}
$crear =  "CREATE TABLE IF NOT EXISTS `datos` (
nombre MEDIUMTEXT NOT NULL,
  apellido MEDIUMTEXT NOT NULL,
  username MEDIUMTEXT NOT NULL,
  email VARCHAR(45) NOT NULL,
  contraseña VARCHAR(45) NOT NULL,
  genero VARCHAR(45) NOT NULL,
  fecha_nacimiento DATE NOT NULL,
  categorias VARCHAR(45) NULL DEFAULT 'Sin categorias',
  descripcion VARCHAR(45) NULL DEFAULT 'Sin comentarios',
  PRIMARY KEY (`email`))";
$db->exec($crear);

$import_json = file_get_contents("usuarios.json");
$data = json_decode($import_json,true);

$subir=implode("','",$data);
var_dump($subir);

    $sql = "INSERT INTO TABLE usuarios_db . datos ('nombre','apellido','username','contraseña','fecha_nacimiento','categorias','descripcion') VALUES ('$subir');";
    $db->exec($sql);

//$results =$query->fetchAll(PDO::FETCH_ASSOC);


// coneccion a la base de datos end -------------------------------------------------------


if (!estaLogueado() && isset($_COOKIE["usuarioLogueado"])) {
  loguear($_COOKIE["usuarioLogueado"]);
}

function validarLogin() {
  $arrayDeErrores= [];
  if($_POST["email"] == "") {
    $arrayDeErrores["email"] = "Por favor ingrese su email";
  }
  else if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) == false) {
    $arrayDeErrores["email"] = "El formato del email no es valido";
  }
  else if (traerPorEmail($_POST["email"]) == NULL) {
    $arrayDeErrores["email"] = "El usuario no ha sido encontrado";
  }
  else {
    if (strlen($_POST["contrasena"]) < 8) {
      $arrayDeErrores["contrasena"] = "Su contraseña debe ser de por lo menos 8 caracteres";
    }
    else {
      $usuario = traerPorEmail($_POST["email"]);

      if (password_verify($_POST["contrasena"],$usuario["contrasenia"]) == false) {
        $arrayDeErrores[] = "La contraseña no coincide";
      }
    }
  }
  return $arrayDeErrores;
}

function validarInformacion() {
  $arrayDeErrores = [];

  $nombreDelArchivo = $_FILES["avatar"]["name"];
  $extension = pathinfo($nombreDelArchivo,PATHINFO_EXTENSION);

  if($_FILES["avatar"]["error"] != UPLOAD_ERR_OK) {
    $arrayDeErrores["avatar"] = "Hubo un error al subir el archivo";
  }
  else if ($extension != "jpg" && $extension != "jpeg" && $extension != "gif" && $extension !=  "png") {
    $arrayDeErrores["avatar"] = "Los formato de foto aceptados son (.jpg/.jpeg, .gif y .png)";
  }


  if($_POST["nombre"] == "") {
    $arrayDeErrores["nombre"] = "Por favor inrese su nombre";
  }

  if($_POST["email"] == "") {
    $arrayDeErrores["email"] = "Por favor inrese su email";
  }
  else if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) == false) {
    $arrayDeErrores["email"] = "El formato del email no es valido";
  }
  else if (traerPorEmail($_POST["email"]) != NULL) {
    $arrayDeErrores["email"] = "Ya existe un usuario registrado con el email ingresado";
  }
  if($_POST["username"] == "") {
    $arrayDeErrores["username"] = "Por favor inrese su nombre de usuario";
  }
  if (strlen($_POST["contrasena"]) < 8) {
    $arrayDeErrores["contrasena"] = "Necesito que tu contraseña tenga al menos 8 caracteres";
  }
  else if (preg_match('/[A-Z]/', $_POST["contrasena"]) == false) {
    $arrayDeErrores["contrasena"] = "Necesito que tu contraseña tenga al menos 1 mayuscula";
  }
  else if ($_POST["contrasena"] != $_POST["contrasena_confirm"])
  {
    $arrayDeErrores["contrasena"] = "Las dos contraseñas no coinciden";
  }


  return $arrayDeErrores;
}

function armarUsuario($datos)  {
  return [
    "nombre" => $datos["nombre"],
    "apellido" => $datos["apellido"],
    "username" => $datos["username"],
    "email" => $datos["email"],
    "contrasenia" => password_hash($datos["contrasena"], PASSWORD_DEFAULT),
    "genero" => $datos["genero"],
    "f_nac" => $datos["fnac_dia"] . "-" . $datos["fnac_mes"] . "-" . $datos["fnac_anio"]
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
