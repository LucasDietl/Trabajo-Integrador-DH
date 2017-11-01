<?php

require_once("DB.php");

class Validator {
  public function validarLogin(DB $db) {
      $arrayDeErrores= [];

      if($_POST["email"] == "") {
          $arrayDeErrores["email"] = "Por favor ingrese su email";
      }
      else if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) == false) {
          $arrayDeErrores["email"] = "El formato del email no es valido";
      }
      else if ($db->traerPorEmail($_POST["email"])== null) {
          $arrayDeErrores["email"] = "El usuario no ha sido encontrado";
      }
      else if (strlen($_POST["contrasena"]) < 8) {
              $arrayDeErrores["contrasena"] = "Su contraseña debe ser de por lo menos 8 caracteres";
          }
          else {

              $usuario = $db->traerPorEmail($_POST["email"]);

              if (password_verify($_POST["contrasena"],$usuario->getPassword()) == false) {
                  $arrayDeErrores["password"] = "La contraseña no coincide"; // PUEDE SER QUE TENGAMOS MESCLA DE INGLES Y CASTELLANO
              }
          }
      return $arrayDeErrores;
      }


		/*$arrayDeErrores = [];


		if ($_POST["email"] == "") {
			$arrayDeErrores["email"] = "Che, el mail no esta";
		}
		else if(filter_var($_POST["email"],  FILTER_VALIDATE_EMAIL) == false) {
			$arrayDeErrores["email"] = "Che, el FORMATO del mail esta mal";
		}
		else if ($db->traerPorEmail($_POST["email"]) == null) {
			$arrayDeErrores["email"] = "El mail no esta en la base";
		}
		else {
			//El mail existe!!
			$usuario = $db->traerPorEmail($_POST["email"]);

			if (password_verify($_POST["password"], $usuario->getPassword()) == false) {
				$arrayDeErrores["password"] = "La contraseña no verifica";
			}
		}

		return $arrayDeErrores;
	}*/

  public function validarInformacion(DB $db) {

      $usuario = $db->traerPorEmail($_POST["email"]);

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
      else if ($usuario != NULL) {
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



  	/*$arrayDeErrores = [];   ESTO ES LO QUE CREO DARIO

		$nombreArchivo = $_FILES["avatar"]["name"];

		$extension = pathinfo($nombreArchivo, PATHINFO_EXTENSION);

		if ($_FILES["avatar"]["error"] != UPLOAD_ERR_OK) {
			$arrayDeErrores["avatar"] = "Ey, no se subio bien la foto";
		}
		else if ($extension != "jpg" && $extension != "jpeg" && $extension != "gif" && $extension != "png") {
			$arrayDeErrores["avatar"] = "La foto no tiene un formato valido";
		}

		if ($_POST["nombre"] == "") {
			$arrayDeErrores["nombre"] = "Che, el nombre esta mal";
		}

		if ($_POST["email"] == "") {
			$arrayDeErrores["email"] = "Che, el mail no esta";
		}
		else if(filter_var($_POST["email"],  FILTER_VALIDATE_EMAIL) == false) {
			$arrayDeErrores["email"] = "Che, el FORMATO del mail esta mal";
		}
		else if ($db->traerPorEmail($_POST["email"]) != null) {
			$arrayDeErrores["email"] = "El mail esta repetido";
		}

		if (is_numeric($_POST["edad"]) == false) {
			$arrayDeErrores["edad"] = "Che, pusiste cualquier cosa en la edad";
		}

		if (strlen($_POST["password"]) < 6) {
			$arrayDeErrores["password"] = "Che, pone al menos 6 caracters de pass";
		}
		else if ($_POST["password"] != $_POST["cpassword"]) {
			$arrayDeErrores["password"] = "Las contraseñas no verifican";
		}

		if (isset($_POST["terminos"]) == false) {
			$arrayDeErrores["terminos"] = "Ey! Acepta los terminos";
		}

		return $arrayDeErrores;
	}*/
}

?>
