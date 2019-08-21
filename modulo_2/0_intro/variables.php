<?php

// Comentario en linea
/* Comentario
multi
linea
*/
# Comentario en linea


// VARIABLES
$nombre = "Cristian";
$edad = 23;
$estaCasado = false;

// Imprimir
echo $nombre;
echo $edad;
echo $estaCasado;

// Concatenacion
echo "Hola " . $nombre . "<br>";
// echo "Hola " + $nombre; // Esto da error
echo 10 + 10;

echo "<p>Hola $nombre, tienes $edad años<p>";
echo '<p>Hola $nombre, tienes $edad años<p>';

echo "<p>Hola {$nombre}, tienes {$edad} años<p>";
echo '<p>Hola {$nombre}, tienes {$edad} años<p>';

echo "<img src='fondo.jpg' />";
echo '<img src="fondo.jpg" />';

die;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>Hola a todos <?php echo $nombre ?></p>

    <script>
    alert("Hola a todos desde HTML");
    </script>

    <?php
    echo '<script>
    alert("Hola a todos desde PHP");
    </script>';
    ?>
</body>
</html>

<?php 

echo "Esta pagina fue hecha por " . $nombre;

?>