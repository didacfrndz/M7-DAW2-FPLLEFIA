<?php
    $informacion = "";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        h1{
            color:  #0047AB;
        }
        .header-bg {
            background-color: #0047AB;
        }
    </style>
</head>
<body>
<!--Hacer header -->
    <div class="container">
        <h1>Patrones de Creacion</h1>
        <form method="GET">
            <select name="select"  class="form-select" aria-label="Default select example">
                <option value="factory">Factory</option>
                <option value="prototype">Prototype</option>
                <option value="singleton">Singleton</option>
            </select>
            <input type="submit" value="Enviar">
        </form>
    </div>
    <div>
        <?php
            if($_SERVER['REQUEST_METHOD']=="GET"){
                $valorSeleccion = $_GET['select'];
                if($valorSeleccion == 'factory'){
                    include "patrons/creacion/factory.php";
                }else if($valorSeleccion == 'prototype'){
                    include "patrons/creacion/prototype.php";
                }else if($valorSeleccion == 'singleton'){
                    include "patrons/creacion/singleton.php";
                }
            }
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>