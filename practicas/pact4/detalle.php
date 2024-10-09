<?php
 if(isset($_GET['nombre']) && isset($_GET['imagen']) && isset($_GET['horario']) 
 && isset($_GET['sinopsis']) && isset($_GET['reparto']) && isset($_GET['director'])
 && isset($_GET['genero']) && isset($_GET['calificacion']) && isset($_GET['trailer']) && isset($_GET['duracion'])){
     //pillardatos
     $nombrePeli = $_GET['nombre'];
     $imagenLink = $_GET['imagen'];
     $horarioPeli = $_GET['horario'];
     $sinopsisPeli = $_GET['sinopsis'];
     $repartoPeli = $_GET['reparto'];
     $directorPeli = $_GET['director'];
     $generoPeli = $_GET['genero'];
     $calificacionPeli = $_GET['calificacion'];
     $trailerPeli = $_GET['trailer'];
     $duracionPeli = $_GET['duracion'];};
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .grande{
            border: 1px solid black;
        }
        .principal{
            
            display: flex;
        }
        .izquierda{
            margin: 10px;
        }
        .derecha{
            width: 100%;
        }
        .trailer{
            border: 1px solid black;
            margin: 10px;
            padding:10px ;
            justify-content: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            border-radius: 45;
            
        }
        .horario{
            margin: 10px;
            padding: 10px;
            border: 1px solid black;
            width: 100%;
            justify-content: space-around;
            display: flex;
            flex-direction: row;
            align-items: start;
        }
        .titulo{
            margin: 10px;
            padding: 10px;
        }
        .imagen{
            width: 400px;
            height: 600px;
        }
    </style>
</head>
<body>
        <?php
            echo '
            <a href="peliculas.php"><button>Inicio</button></a>
            <div class="grande">
        <h1 class="titulo"> ' . $_GET['nombre'] .' </h1>
        <div class="principal">
            <div class="izquierda">
                <img class="imagen" src="'.$_GET['imagen'].'" alt="img">
                <p class="trailer"> ▶️ Trailer</p>
            </div>
            <div class="derecha">
                <p>'. $_GET['sinopsis'].'</p>
                <p><strong>Duracion</strong> '. $_GET['duracion'] . '</p>
                <p><strong>Director</strong> '. $_GET['director'].'</p>
                <p><strong>Reparto</strong> '. $_GET['reparto'].'</p>
                <p><strong>Calificacion</strong> '. $_GET['calificacion'].'</p>
                <p><strong>Genero</strong> '. $_GET['genero'].'</p>
                <div>
                    <p class="horario"><strong>Horario</strong>'. $_GET['horario'] .'</p>
                </div>
            </div>
        </div>
    </div>
            ';


            
        ?>
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <?php foreach ( $_GET['imagen'] as $index => $imagen): ?>
                <div class="carousel-item <?= $index === 0 ? 'active' : '' ?>">
                    <img class="d-block w-100" src="<?= $imagen ?>" alt="Imagen extra <?= $index + 1 ?>">
                </div>
            <?php endforeach; ?>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
        </a>
    </div>
</div>
    
</body>
</html>