<?php

$nombreSitio = "wentchelle volo kabrit";
$mensaje = "Li volol depi 30 jou ";
$creadoPor = "Wentchelle Antoine";
$anioCreacion = "2019";

if ($_SERVER['HTTP_HOST'] == '127.0.0.1') {
    require_once 'plantilla2.html.php';
} else {
    require_once 'plantilla1.html.php';
}
