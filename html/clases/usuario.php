<?php

class Usuario {
  private $nombre;
  private $email;
  private $password;
  private $edad;
  private $pais;
  private $id;

  public function __construct($nombre, $email, $password, $edad, $pais, $id = null) {
    if ($id == null) {
      // Viene por POST
      $this->password = password_hash($password, PASSWORD_DEFAULT);
    } else {
      // Viene de la base
      $this->password = $password;
    }

    $this->nombre = $nombre;
    $this->email = $email;
    $this->edad = $edad;
    $this->pais = $pais;
    $this->id = $id;
  }

  public function getNombre() {
    return $this->nombre;
  }

  public function setNombre($nombre) {
    $this->nombre = $nombre;
  }

  public function getEmail() {
    return $this->email;
  }

  public function setEmail($email) {
    $this->email = $email;
  }

  public function getPassword() {
    return $this->password;
  }

  public function setPassword($password) {
    $this->password = $password;
  }

  public function getPais() {
    return $this->pais;
  }

  public function setPais($pais) {
    $this->pais = $pais;
  }

  public function getEdad() {
    return $this->edad;
  }

  public function setEdad($edad) {
    $this->edad = $edad;
  }

  public function getId() {
    return $this->id;
  }

  public function setId($id) {
    $this->id = $id;
  }

  public function toArray() {
    return [
      "id" => $this->id,
      "email" => $this->email,
      "password" => $this->password,
      "pais" => $this->pais,
      "edad" => $this->edad,
      "nombre" => $this->nombre
    ];
  }













}

?>
