<?php
$nombre= "Didac";
function generarSaludo($nombre){
    echo "Hola, $nombre";
};
generarSaludo($nombre);
echo '<br>';


$precio=100;
$cantidad=4;
$impuesto=21;
function calcularTotal($precio,$cantidad,$impuesto){
    $total= $precio * $cantidad;
    $impuesto=$precio * $impuesto / 100;
    $total = $total + $impuesto;
    echo "$total";
}
calcularTotal($precio,$cantidad,$impuesto);
echo '<br>';

$texto="Hola, que tal estamos?";
$limite=10;
function generarResumen($texto, $limite){
    echo substr($texto,0,$limite). '...';
}
generarResumen($texto,$limite);
echo '<br>';

$temperatura = 36;
$escala = 4;
function convertirTemperatura($temperatura, $escala) {
    if ($escala === "C") {
        
        echo ($temperatura - 32)* 5/9;
    } elseif ($escala === "F") {
       
        echo ($temperatura *9/5) + 32;
    } else {
        echo "Escala no válida. Usa 'C' para Celsius o 'F' para Fahrenheit.";
    }
}
convertirTemperatura($temperatura,$escala);
echo '<br>';

$anioNacimiento =2002;
function calcularEdad($anioNacimiento){
    $anioActual = 2024;
    $edad= $anioActual - $anioNacimiento;
    echo "$edad años";
}
calcularEdad($anioNacimiento);
echo '<br>';

$numero=7;
function esPar($numero){
    if($numero % 2 == 0){
        echo "$numero es Par";
    }else{
        echo "$numero es impar";
    };   
} 
esPar($numero);
echo '<br>';

$archivo = "archivo.html" ;
function generarEnlaceDescarga($archivo){
    echo "<h1><a href=".$archivo.">Descargar</a></h1>";
}
generarEnlaceDescarga($archivo);
echo '<br>';


$precioOriginal= 160;
$descuento=25;
function calcularDescuento($precioOriginal,$descuento){
    $descuetoConformePrecio= $precioOriginal * $descuento / 100;
    $total= $precioOriginal - $descuetoConformePrecio;
    echo "$total €";
}
calcularDescuento($precioOriginal,$descuento);
echo '<br>';

$horas= 20;
function convertirHorasMinutos($horas){
    $minutos= $horas * 60;
    echo "$minutos";
}
convertirHorasMinutos($horas);
echo '<br>';


?>