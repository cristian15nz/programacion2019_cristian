<?php

$dias = ["Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado", "Domingo"];
$frutas = ['Manzana', 'Pera', 'Uva'];

$meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];
$colores = ['Naranja', 'Azul', 'Blanco'];

echo "Este mes es " . $meses[7];

echo "Mis colores favoritos son: $colores[0], $colores[1], $colores[2] ";

echo "<br>Los meses del año son: <br>";
echo $meses[0] . "<br>";
echo $meses[1] . "<br>";
echo $meses[2] . "<br>";
echo $meses[3] . "<br>";
echo $meses[4] . "<br>";
echo $meses[5] . "<br>";
echo $meses[6] . "<br>";
echo $meses[7] . "<br>";
echo $meses[8] . "<br>";
echo $meses[9] . "<br>";
echo $meses[10] . "<br>";
echo $meses[11] . "<br>";

echo "<hr>";
echo "<br>Los meses del año son: <br>";
for ($valor = 0; $valor <= 11; $valor++) {
    echo $meses[$valor] . "<br>";
}

// Los arrays pueden almanenar diferentes tipos de datos
$datos = ['Cristian', 23, true];

echo $datos[0] . "<br>";
echo $datos[1] . "<br>";
echo $datos[2] . "<br>";