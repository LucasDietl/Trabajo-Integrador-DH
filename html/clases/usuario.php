<?php

class Usuario {
  private $nombre;
  private $apellido;
  private $username;
  private $email;
  private $emailConfirm;
  private $password;
  private $genero;
  private $dia;
  private $mes;
  private $anio;
  private $id;

  public function __construct($nombre,$apellido,$username, $email,$emailConfirm, $password,$genero, $dia, $mes,$anio, $id = null) {
    if ($id == null) {
      // Viene por POST
      $this->password = password_hash($password, PASSWORD_DEFAULT);
    } else {
      // Viene de la base
      $this->password = $password;
    }

    $this->nombre = $nombre;
    $this->apellido = $apellido;
    $this->username = $username;
    $this->emailConfirm = $emailConfirm;
    $this->genero = $genero;
    $this->dia = $dia;
    $this->email = $email;
    $this->mes = $mes;
    $this->anio = $anio;
    $this->id = $id;
  }

  public function getNombre() {
    return $this->nombre;
  }

  public function setNombre($nombre) {
    $this->nombre = $nombre;
  }

  public function getApellido() {
      return $this->apellido;
  }

  public function setApellido($apellido) {
      $this->apellido = $apellido;
  }

  public function getUserName() {
      return $this->username;
  }

  public function setUserName($username) {
      $this->username = $username;
  }



  public function getEmailConfirm() {
      return $this->emailConfirm;
  }

  public function setEmailConfirm($emailConfirm) {
      $this->emailConfirm = $emailConfirm;
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

  public function getGenero() {
    return $this->genero;
  }

  public function setGenero($genero) {
    $this->genero = $genero;
  }

  public function getDia() {
    return $this->dia;
  }

  public function setDia($dia) {
    $this->dia = $dia;
  }
  public function getMes() {
      return $this->mes;
  }

  public function setMes($mes) {
      $this->mes = $mes;
  }
  public function getAnio() {
      return $this->anio;
  }

  public function setAnio($anio) {
      $this->anio = $anio;
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
      "nombre" => $this->nombre,
      "apellido" => $this->apellido,
      "username" => $this->username,
      "email" => $this->email,
      "emailConfirm" => $this->emailConfirm,
      "password" => $this->password,
      "genero" => $this->genero,
      "dia" => $this->dia,
      "mes" => $this->mes,
      "anio" => $this->anio
    ];
  }













}

?>
