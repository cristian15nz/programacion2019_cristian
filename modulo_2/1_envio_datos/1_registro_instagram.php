<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/bootstrap.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-5">

            <form method="post">
                <div class="form-group">
                    <input type="text" class="form-control" name="nombre" placeholder="Digita tu nombre">
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" name="edad" placeholder="Digita tu edad">
                </div>

                <div class="form-group">
                    <input type="email" class="form-control" name="correo" placeholder="Digita tu correo">
                </div>
                
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Digita tu contraseña">
                </div>

                <div class="form-group">
                    <button type="submit" name="registrar" class="btn btn-primary">Enviar</button>
                </div>
            </form>

            <?php

            if ( isset($_POST['registrar']) ) {
                // echo "Presionaste el boton";

                // Almacenar los datos en variables
                $nombre = $_POST['nombre'];
                $correo = $_POST['correo'];
                $edad = $_POST['edad'];

                echo "<div class='alert alert-success'>
                        <p class='lead'>Gracias por registrarte $nombre</p>
                        <p>Se ha enviado un código de confirmación
                           al correo <b>$correo</b>
                        </p>
                      </div>";
            }

            ?>

            </div>
        </div>
    </div>
</body>
</html>