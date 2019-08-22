<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Buscar</title>
    <link rel="stylesheet" href="/bootstrap.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <form method="get" class="col-md-6">
                <div class="form-group">
                    <input type="search" name="texto" class="form-control" placeholder="Digita aqui lo que deseas buscar">
                    <button type="submit" name="buscar" class="btn btn-primary">Buscar</button>
                </div>
            </form>
        </div>

        <div class="row">
            <div class="col-md-8">
                <?php 
                
                if (isset($_GET['buscar'])) {
                    $texto = $_GET['texto'];

                    echo "<div class='alert alert-info'>Resultados que coinciden con la palabra <b>$texto</b></div>";
                }

                ?>
            </div>
        </div>
    </div>
</body>
</html>