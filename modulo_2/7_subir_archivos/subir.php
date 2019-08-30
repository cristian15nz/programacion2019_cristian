<?php

$error = "";
$mensaje = "";

if (isset($_POST['subir'])) {
    // echo "<pre>";
    // print_r($_FILES);
    // echo "</pre>";

    if (isset($_FILES['archivo']) && ($_FILES['archivo']['error']) == 0 ) {
        $nombre = $_FILES['archivo']['name'];
        $nombre_tmp = $_FILES['archivo']['tmp_name'];
        $tamano = $_FILES['archivo']['size'];

        echo "Tamano: " . $tamano;

        $tamano_maximo = 2048; // 2KB

        if ($tamano > $tamano_maximo) {
            $error = "El archivo no puede ser mayor a 2KB";
        } else {
            if (is_uploaded_file($nombre_tmp)) {
                $mensaje = "Hemos recibido el archivo";
    
                $directorio = 'archivos_recibidos';
    
                if(file_exists($directorio)) {
                    // Mover el archivo a nuestra carpeta
                    $movido = move_uploaded_file($nombre_tmp, $directorio."/".$nombre);
    
                    if ($movido) {
                        $mensaje = "El archivo se subio correctamente";
                    } else {
                        $error = "No se pudo subir correctamente";
                    }
                }else {
                    $error = "El directorio no existe";
                }
    
            } else {
                $error = "No se pudo recibir el archivo";
            }
        }
        
    }
    else {
        $error = "No se ha enviado un archivo";
    }
}

// Incluir la vista
require_once 'archivo.html.php';