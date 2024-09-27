<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indice</title>
    <style>
        body{
            display: flex;
            justify-content: center;
            align-items: center;
            align-content: center;
            
        }
        .global{
             background-color: lightcoral;           
        }
        .chiki{
            background-color: lightblue;
            border: 1px solid black;
            margin: 10px;
            
        }
    </style>
</head>
<body>
    <div class="global">
        <div class="chiki">
            <h1>Bienvenido a la Primera practica</h1>
        </div>
        <br>
        <div class="chiki">
            <a href="ejercicio1.php">
            <?php
            echo "<p>Ejercicio 1: Numeros pares entre 50 y 500 </p>";
            ?>
            </a>
            <a href="ejercicio2.php">
            <?php
            echo "<p>Ejercicio 2: Tablas de multiplicar </p>";
            ?>
            </a>                
            <a href="ejercicio3.php">
            <?php            
            echo "<p>Ejercicio 3: Numero aleatorio; par o inpar </p>";
            ?>
            </a>
        </div>
    </div>
</body>
</html>