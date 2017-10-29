<?php

require_once("DB.php");

class DBMySQL extends DB {
  private $conn;

  public function __construct() {
    $dsn = "mysql:host=localhost;port=3306;dbname=theblondie_db";
    $user = "root";
    $pass = "";

    $this->conn = new PDO($dsn, $user,$pass);
  }

  public function traerTodosLosUsuarios() {
    $sql = "Select * from usuarios";
    $query = $this->conn->prepare($sql);

    $query->execute();

    $arrayDeArrays = $query->fetchAll(PDO::FETCH_ASSOC);

    $arrayDeObjs = [];

    foreach ($arrayDeArrays as $array) {
      $arrayDeObjs[] = new Usuario($array["nombre"],$array["apellido"],$array["username"], $array["email"],$array["password"], $array["genero"], $array["dia"],$array["mes"],$array["anio"], $array["id"]);
    }

    return $arrayDeObjs;
  }
  public function traerPorEmail($email) {
    $sql = "Select * from usuarios where email = :email";
    $query = $this->conn->prepare($sql);

    $query->bindValue(":email", $email);

    $query->execute();

    $array = $query->fetch(PDO::FETCH_ASSOC);

    if (!$array) {
      return NULL;
    }
    else {
      return new Usuario($array["nombre"],$array["apellido"],$array["username"], $array["email"],$array["password"], $array["genero"], $array["dia"],$array["mes"],$array["anio"], $array["id"]);
    }


  }
  public function guardarUsuario(Usuario $usuario) {
    $sql = "INSERT into theblondie_db . usuarios values(default,:nombre,:apellido,:username,:email,:password,:genero,:dia, :mes, :anio )";

    $query = $this->conn->prepare($sql);
    $query->bindValue(":nombre",$usuario->getNombre());
    $query->bindValue(":apellido",$usuario->getApellido());
    $query->bindValue(":username",$usuario->getUserName());
    $query->bindValue(":email",$usuario->getEmail());
    $query->bindValue(":password",$usuario->getPassword());
    $query->bindValue(":genero",$usuario->getGenero());
    $query->bindValue(":dia",$usuario->getDia());
    $query->bindValue(":mes",$usuario->getMes());
    $query->bindValue(":anio",$usuario->getAnio());

    $query->execute();

  }

  public function buscarUsuarios($buscar) {
    $sql = "Select * from usuarios where email like :buscar or nombre like :buscar";
    $query = $this->conn->prepare($sql);

    $query->bindValue(":buscar", "%" . $buscar . "%");

    $query->execute();

    $arrayDeArrays = $query->fetchAll(PDO::FETCH_ASSOC);

    $arrayDeObjs = [];

    foreach ($arrayDeArrays as $array) {
      $arrayDeObjs[] = new Usuario($array["nombre"],$array["apellido"],$array["username"], $array["email"],$array["password"], $array["genero"], $array["dia"],$array["mes"],$array["anio"], $array["id"]);
    }

    return $arrayDeObjs;


  }
}

?>
