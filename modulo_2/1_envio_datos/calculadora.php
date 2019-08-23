<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body>
    <div class="container">
        <h1 class="display-4">Calculadora</h1>
        <div class="row">
            <!-- Formulario -->
            <div class="col-md-5">
                <form method="post">
                    <div class="form-group">
                        <label for="numero1">Numero 1</label>
                        <input type="text" name="numero1" value="" class="form-control">
                    </div>
                
                    <div class="form-group">
                        <label for="numero2">Numero 2</label>
                        <input type="text" name="numero2" value="" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">Operación</label>
                        <br>
                        <input type="radio" name="opcion" value="1"> Suma
                        <input type="radio" name="opcion" value="2"> Resta
                        <input type="radio" name="opcion" value="3"> Multiplicación
                        <input type="radio" name="opcion" value="4"> División
                    </div>

                    <div class="form-group">
                        <button type="submit" name="calcular" class="btn btn-info">Calcular</button>
                    </div>
                </form>
            </div>

            <!-- Resultado -->
            <div class="col-md-6">
                <?php 

                echo "<pre>";
                print_r($_POST);
                echo "</pre>";
           
                if (isset($_POST['calcular'])) {
                    // Variables
                    $numero1 = $_POST['numero1'];
                    $numero2 = $_POST['numero2'];
                    $opcion = $_POST['opcion'];

                    // Proceso
                    if ($opcion == 1) {
                        $suma = $numero1 + $numero2;
                        echo "<div>Resultado de la suma. $numero1 + $numero2 = $suma</div>";
                    }
                }

                ?>
            </div>
        </div>
    </div>
</body>
</html>