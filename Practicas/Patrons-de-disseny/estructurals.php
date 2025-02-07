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
        <h1>Patrones Estructurales</h1>
        <div>
        <form method="GET">
                <select name="select"  class="form-select" aria-label="Default select example">
                    <option value="adapter">Adapter</option>
                    <option value="bridge">Bridge</option>
                    <option value="decorator">Decorator</option>
                </select>
                <input type="submit" value="Enviar">
            </form>
        </div>
        <div>
            <?php
                if($_SERVER["REQUEST_METHOD"] == "GET"){
                    $valorSeleccion = $_GET['select'];
                    if($valorSeleccion == 'adapter'){
                        include "patrons/estructurales/adapter.php";
                    }else if($valorSeleccion == "bridge"){
                        include "patrons/estructurales/bridge.php";   
                    }else if($valorSeleccion == "decorator"){
                        include "patrons/estructurales/decorator.php";
                    }
                }
            ?>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>