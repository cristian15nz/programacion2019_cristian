<?php

$cantantes = [
    "Majo y Dan", 
    "Forgiven", 
    "Hillsong United", 
    "Conexion Cielo", 
    "Casting Crowns"
];

echo "<ol>";
echo "<li>{$cantantes[0]}</li>";
echo "<li>{$cantantes[1]}</li>";
echo "<li>{$cantantes[2]}</li>";
echo "<li>{$cantantes[3]}</li>";
echo "<li>{$cantantes[4]}</li>";
echo "</ol>";

// Usando el ciclo for
echo "<ol>";
for ($secuencia=0; $secuencia<5; $secuencia++) {
    echo "<li>{$cantantes[$secuencia]}</li>";
}
echo "</ol>";

// Listado de estudiantes de INFOTEP
$estudiantesInfotep = [
    "Wilben", 
    "Wentchelle",
    "Ford",
    "Frias",
    "Johanna",
    "Norbin",
    "Christopher",
    "Carolyn",
    "Ronny",
    "Suarez"
];

echo "<h1>Listado de estudiantes en INFOTEP</h1>";
echo "<ol>";
echo "<li>{$estudiantesInfotep[0]}</li>";
echo "<li>{$estudiantesInfotep[1]}</li>";
echo "<li>{$estudiantesInfotep[2]}</li>";
echo "<li>{$estudiantesInfotep[3]}</li>";
echo "<li>{$estudiantesInfotep[4]}</li>";
echo "<li>{$estudiantesInfotep[5]}</li>";
echo "<li>{$estudiantesInfotep[6]}</li>";
echo "<li>{$estudiantesInfotep[7]}</li>";
echo "<li>{$estudiantesInfotep[8]}</li>";
echo "<li>{$estudiantesInfotep[9]}</li>";
echo "</ol>";

// Usando el ciclo for
echo "<h1>Listado de estudiantes en INFOTEP</h1>";
echo "<ol>";
for ($numero = 0; $numero < 10; $numero++) {
    echo "<li>{$estudiantesInfotep[$numero]}</li>";
}
echo "</ol>";

// Usando el ciclo foreach
echo "<h1>Listado de estudiantes en INFOTEP</h1>";
echo "<ol>";
foreach ($estudiantesInfotep as $numero => $estudiante) {
    echo "<li>{$estudiante}</li>";
}
echo "</ol>";

// Dias de la semana
$dias = [
    "Lunes",
    "Martes",
    "Miercoles",
    "Jueves",
    "Viernes",
    "Sabado",
    "Domingo"
];

for($i=0; $i<7; $i++) {
    echo "<p>$dias[$i]</p>";
}
echo "<hr>";

foreach($dias as $clave => $dia) {
    echo "<p>$dia esta en la posicion $clave</p>";
}

foreach($cantantes as $cantante) {
    echo "<p>$cantante</p>";
}

foreach($cantantes as $clave => $cantante) {
    echo "<p>$clave . $cantante</p>";
}

$ciudades = ["Santiago", "Montecristi", "Moca"];

foreach($ciudades as $ciudad) {
    echo "<p>$ciudad</p>";
}