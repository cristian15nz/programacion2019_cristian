<?php

// Listado de carros
$carros = array("Lambo", "Toyota", "Ford");
$carros = ["Lambo", "Toyota", "Ford"];

echo $carros[1];

// Numero
$numeros = [
    "edad" => 14,
    "anio" => 5,
];

echo $numeros["edad"];

// Estudiantes
$estudiantes = [
    "nombre" => "Cristian",
    "edad" => 23,
    "estaCasado" => false,
    "tieneCelular" => true,
];

echo "<p>{$estudiantes['nombre']} tiene {$estudiantes['edad']}</p>";

// Mezclado
$mezcla = [
    'nombre' => "Cristian",
    "edad" => 23,
    5 => 15,
    6 => 30,
    1 => 5
];

echo $mezcla["nombre"];
echo $mezcla[5];
echo $mezcla["edad"];

echo "<pre>";
print_r($mezcla);
echo "</pre>";

print_r($carros);

$hermanas = ['Cristy', 'Crisleidy'];

$hermanas = [
    "primera" => 'Cristy',
    "segunda" => 'Crisleidy',
];

// echo $hermanas;
print_r($hermanas);

echo $hermanas['primera'];
