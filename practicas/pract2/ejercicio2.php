<?php
function multiplicar1 (){
    $base = 1 ;
    $resultado= 0 ;
    for ($i = 1 ; $i <= 10 ; $i++ ) {
        $resultado = $base * $i ;
        echo "<div class ='tabla'>$base * $i = $resultado </div>";
        
    }
}
function multiplicar2 (){
    $base = 2 ;
    $resultado= 0 ;
    for ($i = 1 ; $i <= 10 ; $i++ ) {
        $resultado = $base * $i ;
        echo "<div class ='tabla'> $base * $i = $resultado</div>";
        
    }
}
function multiplicar3 (){
    $base = 3 ;
    $resultado= 0 ;
    for ($i = 1 ; $i <= 10 ; $i++ ) {
        $resultado = $base * $i ;
        echo "<div class ='tabla'> $base * $i = $resultado</div>";
        
    }
}
function multiplicar4 (){
    $base = 4 ;
    $resultado= 0 ;
    for ($i = 1 ; $i <= 10 ; $i++ ) {
        $resultado = $base * $i ;
        echo "<div class ='tabla'> $base * $i = $resultado</div>";
        
    }
}
function multiplicar5 (){
    $base = 5 ;
    $resultado= 0 ;
    for ($i = 1 ; $i <= 10 ; $i++ ) {
        $resultado = $base * $i ;
        echo "<div class ='tabla'> $base * $i = $resultado</div>";
        
    }
}
function multiplicar6 (){
    $base = 6 ;
    $resultado= 0 ;
    for ($i = 1 ; $i <= 10 ; $i++ ) {
        $resultado = $base * $i ;
        echo "<div class ='tabla'> $base * $i = $resultado</div>";
        
    }
}
function multiplicar7 (){
    $base = 7 ;
    $resultado= 0 ;
    for ($i = 1 ; $i <= 10 ; $i++ ) {
        $resultado = $base * $i ;
        echo "<div class ='tabla'> $base * $i = $resultado</div>";
        
    }
}
function multiplicar8 (){
    $base = 8 ;
    $resultado= 0 ;
    for ($i = 1 ; $i <= 10 ; $i++ ) {
        $resultado = $base * $i ;
        echo "<div class ='tabla'> $base * $i = $resultado</div>";
        
    }
}
function multiplicar9 (){
    $base = 9 ;
    $resultado= 0 ;
    for ($i = 1 ; $i <= 10 ; $i++ ) {
        $resultado = $base * $i ;
        echo "<div class ='tabla'> $base * $i = $resultado</div>";
        
    }
}
function multiplicar10 (){
    $base = 10 ;
    $resultado= 0 ;
    for ($i = 1 ; $i <= 10 ; $i++ ) {
        $resultado = $base * $i ;
        echo "<div class ='tabla'> $base * $i = $resultado</div>";
        
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio2</title>
    <style>
        body{
            background-image: url(https://www.nintendo.com/eu/media/images/10_share_images/portals_3/2x1_SuperMarioHub_image1600w.jpg);
            background-position: center;
                background-repeat: no-repeat;
                background-size: 100%;
                background-position: center;
        }
        .tabla{
                border: 1px solid white;
                padding: 10px;
                display: flex;
                flex-wrap: wrap ;
                width: auto;
                background-color: black;
                color: white;
            }
        .multi{
                border: 1px solid black;
                width: 150px;
                padding: 10px;
                margin: 10px;
                background-color: lightgray;
            
        }
        .padre{
            display: flex;
            width: auto;
            height: auto;
            
        }
        p{
            color: brown;
            font-family: fantasy;
        }
        h1{
            color: white;
            background-color: grey;
            font-style: italic;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }    
    </style>
</head>
<body>
    <h1>Ejercicio 2: Tablas de Multiplicar</h1>
    <div class="padre">
        <div class="multi">
            <p>Tabla del 1</p>
            <?php multiplicar1(); ?>
        </div>
        <div class="multi">
            <p>Tabla del 2</p>
            <?php multiplicar2(); ?>
        </div>
        <div class="multi">
            <p>Tabla del 3</p>
            <?php multiplicar3(); ?>
        </div>
        <div class="multi">
            <p>Tabla del 4</p>
            <?php multiplicar4(); ?>
        </div>
        <div class="multi">
            <p>Tabla del 5</p>
            <?php multiplicar5(); ?>
        </div>
        <div class="multi">
            <p>Tabla del 6</p>
            <?php multiplicar6(); ?>
        </div>
        <div class="multi">
            <p>Tabla del 7</p>
            <?php multiplicar7(); ?>
        </div>
        <div class="multi">
            <p>Tabla del 8</p>
            <?php multiplicar8(); ?>
        </div>
        <div class="multi">
            <p>Tabla del 9</p>
            <?php multiplicar9(); ?>
        </div>
        <div class="multi">
            <p>Tabla del 10</p>
            <?php multiplicar10(); ?>
        </div>
</div>
<p><a href="index.php">Volver</a></p>
</body>
</html>