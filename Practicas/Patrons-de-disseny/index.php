<?php
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .header-bg {
            background-color: #0047AB;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!--Hacer header -->
    <div class="container mt-5">
    <div class="row">
        <!-- Card 1 -->
        <div class="col-md-4">
            <div class="card card-border mb-4">
                <img src="assets/adaptable.png" class="card-img-top" alt="Imagen 1">
                <div class="card-body">
                    <h5 class="card-title">Patrones Estructurales</h5>
                    <p class="card-text">Texto descriptivo para la primera card. Aquí puedes poner una breve descripción.</p>
                    <a href="estructurals.php" class="btn btn-primary">Ver más</a>
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="col-md-4">
            <div class="card card-border mb-4">
                <img src="assets/decreacion.png" class="card-img-top" alt="Imagen 2">
                <div class="card-body">
                    <h5 class="card-title">Patrones de Creacion</h5>
                    <p class="card-text">Texto descriptivo para la segunda card. Aquí puedes poner más detalles interesantes.</p>
                    <a href="creacion.php" class="btn btn-primary">Ver más</a>
                </div>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="col-md-4">
            <div class="card card-border mb-4">
                <img src="assets/decomportamineto.png" class="card-img-top" alt="Imagen 3">
                <div class="card-body">
                    <h5 class="card-title">Patrones de Comportamineto</h5>
                    <p class="card-text">Texto descriptivo para la tercera card. Aquí puedes poner información relevante o interesante.</p>
                    <a href="comportament.php" class="btn btn-primary">Ver más</a>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

</body>
</html>