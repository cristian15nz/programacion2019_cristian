<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Subir archivo</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body>
    <h1>Subir archivos</h1>
    <form method="post" enctype="multipart/form-data">
        <input type="file" name="archivo">
        <button type="submit" name="subir">Subir archivo</button>
    </form>
    <?php 
        if (isset($mensaje)) {
            echo "<div class='alert alert-success'>$mensaje</div>";
        }

        if (isset($error)) {
            echo "<div class='alert alert-danger'>$error</div>";
        }
    ?>
</body>
</html>