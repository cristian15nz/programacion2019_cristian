<?php

$mensaje = "";

if (isset($_POST['verificar'])) {
    $edad = $_POST['edad'];

    if ($edad >= 18) {
        $mensaje = "<p>Bienvenido</p>";
    } else {
        echo "<p>No puedes ver este sitio</p>";
        die;
    }
}

require_once 'edad.html.php';