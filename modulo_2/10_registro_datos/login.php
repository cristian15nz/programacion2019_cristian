<?php

session_start();

require_once 'conexion.php';

if (isset($_POST['login'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Buscar esos datos en la base de datos
  $sql = "SELECT id, name, username, password FROM users 
          WHERE username = '$username' ";

  $resultado = $conexion->query($sql)->fetch();

  if ($resultado) {
    // Comparar la contraseña encriptada
    if (! password_verify($password, $resultado->password)) {
      throw new Exception("La contraseña no coincide");
    }

    // Iniciar sesion
    $_SESSION['id_user'] = $resultado->id;
    $_SESSION['name_user'] = $resultado->name;

    header("Location: registro_cartas.php");
    exit;
    
  } else {
    echo "No existe";
  }

}

// Incluir la vista
require_once 'vistas/login.html.php';