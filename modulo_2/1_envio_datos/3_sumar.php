<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sumar</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-12 col-sm-3">
            <form method="post">
                <div class="form-group">
                    <input type="number" name="num1" class="form-control">
                    <input type="number" name="num2" class="form-control">
                    <button type="submit" name="sumar" class="btn btn-dark">Sumar</button>
                </div>
            </form>

            <?php 
            
            if (isset($_POST['sumar'])) {
                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];

                $suma = $num1 + $num2;

                echo "<div class='alert alert-success'>La suma de $num1 y $num2 es: $suma</div>";
            }
            
            ?>
        </div>
    </div>
</div>
    
</body>
</html>