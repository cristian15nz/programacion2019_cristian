<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Red Social</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body>
    <div class="container">
        <h1>Usuarios conectados</h1>
        <ul class="list-group">
            <?php
            // Obtener los usuarios conectados de la base de datos
            $usuariosConectados = [
                "Cristian",
                "Ronny",
                "Went",
                "Chris",
                "Cristian",
                "Ronny",
                "Went",
                "Chris",
                "Norbin"
            ];

            // Imprimir cada usuario
            foreach($usuariosConectados as $usuario) {                
                echo "<li class='list-group-item'>{$usuario}</li>";
            }

            ?>
        </ul>

        <p>Cantidad de usuarios conectados: 
            <?php echo count($usuariosConectados); ?>
        </p>
    </div>
</body>
</html>