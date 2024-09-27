<?php
 function aleatorio (){ 
    $random = rand(0, 100);
    if($random % 2 == 0){
        echo "El numero $random es Par";
    }else{
        echo "El numero $random es Inpar";
    }  
 }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio3</title>
    <style>
        body{
            display: flex;
            justify-content: center;
            align-items: center;
            background-image: url(https://i.pinimg.com/736x/43/3b/ef/433bef37fa2e69d79d9fa7bd7f9e2d16.jpg);
                background-repeat: no-repeat;
                background-size: cover;
                background-position: center;
        
            
        }
        h1{
            color: black;
            background-color: lightgray;
        }
        div .resu{
            display: inline-block;            
            text-align: center;
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <div>
        <div class="resu">
            <h1>Ejercicio 3: Nombre aleatorio; par o impar</h1>
            <?php aleatorio();?>
        </div>
        <p><a href="index.php">Volver</a></p>
    </div>
    
</body>
</html>