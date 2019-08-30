<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Subir archivo</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body>
    <div class="container-fluid">
        <h1>Subir archivos</h1>
        <div class="row">
            <div class="col-md-4">        
                <form method="post" enctype="multipart/form-data">
                    <input type="file" name="archivo" id="archivo">
                    <button type="submit" name="subir" class="btn btn-outline-info">Subir archivo</button>
                </form>
                <?php 
                    if (isset($mensaje) && !empty($mensaje)) {
                        echo "<div class='alert alert-success'>$mensaje</div>";
                    }

                    if (isset($error) && !empty($error)) {
                        echo "<div class='alert alert-danger'>$error</div>";
                    }
                ?>
            </div>
        </div>
    </div>
    
    
</body>
</html>