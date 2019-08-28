<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post" action="">
        <input type="text" name="edad">
        <button type="submit" name="verificar">Verificar</button>
    </form>

    <div>
        <?php echo $mensaje; ?>
    </div>
</body>
</html>