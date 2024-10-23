<?php
$numeros=[1,2,3,4,5,6];
function sumarArray($numeros){
     echo array_sum($numeros);
}
sumarArray($numeros);
echo '<br>';

$nombres=["Yehor","Didac","Ferrer", "Zevaztian"];
function ordenarArrayAlfabetico($nombres){
     sort($nombres);
     return $nombres;
};
$nombresordenados=ordenarArrayAlfabetico($nombres);
print_r($nombresordenados);
echo '<br>';

$valor=3;
function filtrarMayores($numeros, $valor){
    return array_filter($numeros, function($numeros) use ($valor){
        return $numeros > $valor;
    });
};
$filtro= filtrarMayores($numeros, $valor);
print_r($filtro);
echo '<br>';


$array = [10, 20, 30, 40, 50];
$valorABuscar = 30;
function buscarEnArray($array, $valor) {
    return in_array($valor, $array);
};
if (buscarEnArray($array, $valorABuscar)) {
    echo "Valor encontrado.";
} else {
    echo "Valor no encontrado.";
};
echo '<br>';

$array = ["manzana", "banana", "cereza", "durazno"];
function contarElementos($array) {
    return count($array);
}
$cantidad = contarElementos($array);
echo "El array contiene $cantidad elementos.";
echo '<br>';

$numeros = [10, 20, 5, 30, 15];
function obtenerMaximo($numeros) {
    return max($numeros);
};
$maximo = obtenerMaximo($numeros);
echo "El valor máximo es $maximo.";
echo '<br>';

$numeros = [10, 20, 5, 30, 15];
function obtenerMinimo($numeros) {
    return min($numeros);
}
$minimo = obtenerMinimo($numeros);
echo "El valor mínimo es $minimo.";
echo '<br>';

$array = [1, 2, 2, 3, 4, 4, 5];
function eliminarDuplicados($array) {
    return array_unique($array);
}
$arraySinDuplicados = eliminarDuplicados($array);
print_r($arraySinDuplicados);
echo '<br>';

$array1 = [1, 2, 3];
$array2 = [4, 5, 6];
function combinarArrays($array1, $array2) {
    return array_merge($array1, $array2);
}
$arrayCombinado = combinarArrays($array1, $array2);
print_r($arrayCombinado);
echo '<br>';

$array = [1, 2, 3, 4, 5, 6, 7, 8];
$tamanioFragmento = 3;
function dividirArray($array, $tamanio) {
    return array_chunk($array, $tamanio);
}
$arrayDividido = dividirArray($array, $tamanioFragmento);
print_r($arrayDividido);
?>