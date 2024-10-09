
<?php
if(isset($_GET['nombre']) && isset($_GET['edad']) && isset($_GET['foto'])
&& isset($_GET['profesion']) && isset($_GET['correo']) && isset($_GET['telefono'])){

    $nombre = isset($_GET['nombre']);
    $edad = isset($_GET['edad']);
    $foto = isset($_GET['foto']);
    $profesion = isset($_GET['profesion']);
    $correo = isset($_GET['correo']);
    $telefono = isset($_GET['telefono']);
};


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            display: flex;

        }
        .grande{
            display: flex;
            flex-direction: column;
            border: 1px solid black;
            
        }
        
    </style>
</head>
<body>
    <?php
    echo '
        <div class="grande">
            <img src="'.$_GET['foto'].'" alt="">
            <h1 class="nombre">'.$_GET['nombre'].'</h1>
            <sub>'.$_GET['edad'].'</sub>
            <h2>'.$_GET['profesion'].'</h2>
            <p>'.$_GET['correo'].'</p>
            <p>'.$_GET['telefono'].'</p>
        </div>';
    ?>
    
</body>
</html>