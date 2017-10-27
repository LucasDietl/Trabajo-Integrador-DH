<?php

require_once("DB.php");

class DBMySQL extends DB {
  private $conn;

  public function __construct() {
    $dsn = "mysql:host=localhost;port=3306;dbname=reglog";
    $user = "root";
    $pass = "123456";

    $this->conn = new PDO($dsn, $user,$pass);
  }

  public function traerTodosLosUsuarios() {
    $sql = "Select * from usuarios";
    $query = $this->conn->prepare($sql);

    $query->execute();

    $arrayDeArrays = $query->fetchAll(PDO::FETCH_ASSOC);

    $arrayDeObjs = [];

    foreach ($arrayDeArrays as $array) {
      $arrayDeObjs[] = new Usuario($array["nombre"], $array["email"],$array["password"], $array["edad"], $array["pais"], $array["id"]);
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
      return new Usuario($array["nombre"], $array["email"],$array["password"], $array["edad"], $array["pais"], $array["id"]);
    }


  }
  public function guardarUsuario(Usuario $usuario) {
    $sql = "INSERT into usuarios values(default, :nombre, :email, :password, :edad, :pais)";

    $query = $this->conn->prepare($sql);
    $query->bindValue(":nombre",$usuario->getNombre());
    $query->bindValue(":email",$usuario->getEmail());
    $query->bindValue(":password",$usuario->getPassword());
    $query->bindValue(":edad",$usuario->getEdad());
    $query->bindValue(":pais",$usuario->getPais());

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
      $arrayDeObjs[] = new Usuario($array["nombre"], $array["email"],$array["password"], $array["edad"], $array["pais"], $array["id"]);
    }

    return $arrayDeObjs;


  }
}

?>
