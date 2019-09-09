<?php

require_once 'conexion.php';

/*
$sql = "CREATE TABLE usuarios (
    id INT UNSIGNED AUTO_INCREMENT,
    nombre VARCHAR(100),
    usuario VARCHAR(50),
    contrasena VARCHAR(80),

    PRIMARY KEY(id)
)";
*/

$sql = 'INSERT INTO usuarios
    (nombre, usuario, contrasena)
    VALUES
    ("Criss", "ben10", "123456"),
    ("Frias", "freezer", "123321")
';

$sql = 'UPDATE usuarios
        SET usuario="ChristopherNASAhacking2019RD"
        WHERE id = 1
        ';

$sql = "DELETE FROM usuarios WHERE id = 2";

$sql = 'UPDATE usuarios
        SET nombre="Christopher Nunez"
        WHERE id = 1
        ';

$conexion->exec($sql);