<?php
$frutas = [
    ["nombre"=>"Manzana","imagen"=>"https://comedelahuerta.com/wp-content/uploads/2019/09/MANZANA-GOLDEN-ECOLOGICO-COMEDELAHUERTA-1.jpg"],
    ["nombre"=>"Plátano","imagen"=>"https://esnaturalbarcelona.com/wp-content/uploads/2018/09/platanos-de-canarias.jpg"],
    ["nombre"=>"Naranja","imagen"=>"https://www.recetasamc.info/sites/default/files/styles/max_width_1000/public/migrate/ingredient-wiki/x1524656366-amc-wiki-id2706-image40.png,qitok=4fcdsqkp.pagespeed.ic.MWSxdX0PDn.jpg"],
    ["nombre"=>"Fresa","imagen"=>"https://frutasborja.es/wp-content/uploads/2015/12/fresa2.png"],
    ["nombre"=>"Kiwi","imagen"=>"https://www.frutas-hortalizas.com/img/fruites_verdures/presentacio/14.jpg"]
];
?>




<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Frutas favoritas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Selecciona tu fruta favorita</h1>

        <table class="table table-bordered mt-4">
            <thead class="thead-dark">
                <tr>
                    <th>Fruta</th>
                    <th>Estado</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
            <?php
                foreach($frutas as $fruta){
                    
                    if(isset($_GET['nom']) && $_GET['nom'] == $fruta['nombre']){
                        echo '
                        <tr class="table-success">
                            <td>'. $fruta['nombre'].'</td>
                            <td class="seleccion">✔️ seleccionada</td>
                            <td><a class="btn btn-primary" href="?nom='. $fruta['nombre'] .'&img='. $fruta['imagen'] .'">Seleccionar</a></td>
                        </tr>';
                    }else{
                        echo '
                        <tr class="table-danger">
                            <td>'. $fruta['nombre'].'</td>
                            <td class="seleccion">✖ No seleccionada</td>
                            <td><a class="btn btn-primary" href="?nom='. $fruta['nombre'] .'&img='. $fruta['imagen'] .'">Seleccionar</a></td>
                        </tr>';
                    }
                }   
            ?>
                
            </tbody>
        </table>

        <!-- Mostrar tarjeta de la fruta seleccionada (actualmente estatica, siempre hay una manzana) -->
        <div class="card mt-4 w-25 shadow-lg">
            <?php
              
              if(isset($_GET['nom']) && isset($_GET['img']) ){
                  $nomfruta = $_GET['nom'];
                  $imgfruta = $_GET['img'];
              
                  echo'
                      <img src="'. $imgfruta .'" class="card-img-top img-fluid" alt="'. $nomfruta .'">
                      <div class="card-body bg-warning">
                          <h5 class="card-title">'. $nomfruta .'</h5>
                          <p class="card-text">¡Esta es tu fruta favorita!</p>
                      </div>
                  ';
              }
              ?>
            

        </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>


<!-- aqui tienes el emoji de SELECCIONADA ✔️ para copiarlo y usarlo en la práctica -->