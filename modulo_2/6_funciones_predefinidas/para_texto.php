<?php

// #1 strlen();
$nombre = "Cristian Nunez";
$longitud = strlen($nombre);

echo "<p>Longitud del nombre <b>$nombre</b> es {$longitud}</p>";

// #2 explode();
$nombre_completo = "Cristian Silverio Nunez Mata";
$array_nombre = explode(" ", $nombre_completo);

echo "<pre>";
print_r($array_nombre);
echo "</pre>";

$frutas = "Manzana,Pera,Limon,Uva,Kiwi";
$listadoFrutas = explode(",", $frutas);

echo "<pre>";
print_r($listadoFrutas);
echo "</pre>";

// #3. split();
$pais = "Republica Dominicana";
$texto = str_split($pais, 2);

echo "<pre>";
print_r($texto);
echo "</pre>";

// #4. strtoupper();
$ciudad = "Santiago de los Caballeros";

echo strtoupper($ciudad);

// #5. strtolower();
echo "<br>";
echo strtolower($ciudad);

// strrev
$texto = "Hola mundo";
echo "<br>" . strrev($texto);

$palindromo = "AnitaLavaLaTina";
echo "<br>" . strrev($palindromo);

// similar_text
$hijo1 = "Luis Fernando";
$hijo2 = "Luis Suarez";

$similar = similar_text($hijo1, $hijo2);

echo "<p>Similitud entre textos: $similar</p>";

// ltrim 
$nombre = "       Cristian";

echo "<pre>" . $nombre . "</pre>";
echo "<pre>" . ltrim($nombre) . "</pre>";

// rtrim
$nombre = "Cristian        ";

echo "<pre>" . $nombre . "</pre>";
echo "<pre>" . rtrim($nombre) . "</pre>";

// trim
$nombre = "         Cristian        ";

echo "<pre>" . $nombre . "</pre>";
echo "<pre>" . trim($nombre) . "</pre>";

// lcfirst
$foo = 'hello world!';
$foo = ucfirst($foo);             // Hello world!

$bar = 'HELLO WORLD!';
$bar = ucfirst($bar);             // HELLO WORLD!
$bar = ucfirst(strtolower($bar)); // Hello world!

// ucfirst 
// ucwords 
// wordwrap
