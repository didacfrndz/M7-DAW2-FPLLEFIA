<?php
    $productos=[
        [
            "nombre"=>"Anta Kai 1",
            "precio"=>"140€",
            "oferta"=> 0,
            "precioof"=>"120€",
        ],
        [
            "nombre"=>"PUMA MB 0.3",
            "precio"=>"140€",
            "oferta"=>1,
            "precioof"=>"115€",
        ],
        [
            "nombre"=>"Lebron 21",
            "precio"=>"200€",
            "oferta"=>0,
            "precioof"=>"150€",
        ],
        [
            "nombre"=>"Luka 1",
            "precio"=>"120€",
            "oferta"=>0,
            "precioof"=>"100€",
        ],
        [
            "nombre"=>"Shaq attak ",
            "precio"=>"180€",
            "oferta"=>1,
            "precioof"=>"150€",
        ]
    ]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
        <h1 class="text-center">Tabla de productos</h1>

        <table class="table table-bordered mt-4">
            <thead class="thead-dark">
                <tr>
                    <th>Producto</th>
                    <th>Precio</th>
                    
                </tr>
            </thead>
            <tbody>
            <?php
                foreach($productos as $producto){
                    
                    if($producto['oferta']==1){
                        echo '
                        <tr class="table-success">
                            <td>'. $producto['nombre'].'</td>
                            <td class="seleccion">'.$producto['precioof'].'</td>
                             
                        </tr>';
                    }else{
                        echo '
                        <tr class="table-danger">
                            <td>'. $producto['nombre'].'</td>
                            <td class="seleccion">'.$producto['precio'].'</td>
                            
                        </tr>';
                    }
                }   
            ?>
                
            </tbody>
        </table>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>