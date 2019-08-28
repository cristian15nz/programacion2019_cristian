<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $nombreSitio; ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <?php echo "<h1>{$mensaje}</h1>"; ?>
                <h1><?= $mensaje ?></h1>
                <p class="alert alert-dark"><?= "Sitio web creado por <strong> {$creadoPor}</strong>  en {$anioCreacion}" ?></p>
            </div>
        </div>
    </div>
</body>
</html>