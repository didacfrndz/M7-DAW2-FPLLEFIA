<?php
    function sacarPar () {
        $base = 0; 
        for ($i = 50 ; $i <= 500 ; $i++ ) {
            $base = $i % 2;
            if($base == 0){
                //aqui tengo que crear un Div para mostrarlo con un div to bonico
                echo "<div> $i</div> ";   
            }
        }
    }
?>
<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio1</title>
        <style>
            body{
                background-image: url(https://cdn.pixabay.com/photo/2022/02/20/09/15/hexagon-background-7024022_960_720.jpg);
                background-position: center;
                background-repeat: no-repeat;
                background-size: 100%;
                background-position: center;
            }
            div{
                border: 1px solid black;
                display: inline-block ;
                padding: 10px;
                width: 25px;
                color: orange;
                background-color: lightgreen;
            }
            h1{
                background-color: lightgray;
                
            }
        </style>
    </head>
    <body>
        <h1><em> 1: Numeros pares del 50 al 500</em></h1>
        <?php echo sacarPar(); ?>
        <p><a href="index.php">Volver</a></p>
    </body>
    </html>