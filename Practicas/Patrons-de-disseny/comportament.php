<?php

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
<?php
        include "componentes/header.php";
    ?>
    <div class="container">
        <h1>Patrones Estructurales</h1>
        <div>
            <form action="" class="d-flex m-1">
                <div class="card m-2" style="width: 8rem;">
                        <div class="card-body">
                            <a href="patrons/comportamiento/iterator.php" class="btn btn-primary card-title">Iterator</a>
                        </div>
                </div>
                <div class="card m-2" style="width: 8rem;">
                        <div class="card-body">
                            <a href="patrons/comportamiento/observer.php" class="btn btn-primary card-title">Observer</a>
                        </div>
                </div>
                <div class="card m-2" style="width: 8rem;">
                        <div class="card-body">
                            <a href="patrons/comportamiento/strategy.php" class="btn btn-primary card-title">Stragety</a>
                        </div>
                </div>
            </form>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>