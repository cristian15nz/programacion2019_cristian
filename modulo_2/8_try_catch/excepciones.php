<?php

try {
    $edad = 5;

    if ($edad < 18) {
        echo "No puedes acceder";
    }

    echo "Wajajajajaja, como quiera puedes pasar";

    if ($edad < 18) {
        throw new Exception("No puedes acceder");
    }

    echo "Bienvenido";
} 
catch (Exception $ex) {
    // echo "<pre>";
    // print_r($ex);
    // echo "</pre>";

    $error = $ex->getMessage();

    echo "<p>$error</p>";
}