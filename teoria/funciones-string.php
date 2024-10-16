<?php

$cadena = "Hola mundo";

//longitud de caracteres strlen()
echo strlen($cadena);
echo '<br>';

//strpos (posicion)
echo strpos($cadena,"mundo");
echo '<br>';

//str_replace (reemplaza caracteres)
echo str_replace("mundo", "Barcelona", $cadena);
echo '<br>';

//strtolower (pone todo en minusculas)
echo strtolower($cadena);
echo '<br>';

//strtoupper (pone todo en mayusculas)
echo strtoupper($cadena);
echo '<br>';

//ucfirst (pone la primera en mayus)
echo ucfirst($cadena);
echo '<br>';

// ucwords (pone en mayus la primera letra de cada palabra)
echo ucwords($cadena);
echo '<br>';

//trim (suprime espacios en blanco de mas)
$cadena2 = "leo messi";
echo trim($cadena2);
echo '<br>';

//substr(obtiene una parte de una cadena(primer parametro donde empieza, segundo parametro la cantidad de caracteres))
echo substr($cadena2, 4, 4);
echo '<br>';

//implode de array a string
$array =['hola','mundo','php'];
echo implode(" ",$array);
echo '<br>';

//explode de string a array
$cadena = "Hola,mundo,PHP";
$array = explode(",",$cadena);
print_r($array);
echo '<br>';
foreach($array as $a){
    echo $a;
};
echo '<br>';

//in_array mira si existe el valor insertado 
if (in_array("mundo",$array)){
    echo "Si aparece";
}
echo '<br>';
//array_search busca un valor en una array y devulve la clave correspondiente ( sino saca false)
$array = ["manzana", "pera", "naranja"];
echo array_search("naranja",$array);
echo '<br>';

//array map
$arraymap = [1,2,3,4];
$resultado= array_map(function($numero){
    return $numero *2;
}, $arraymap);
print_r($resultado);//resultado 
echo '<br>';

//array_filter 
$arrayfilter= [1,2,3,4,5,6,7,8];
$resultado = array_filter($arrayfilter, function($n){
    return $n %2 == 0;
});
print_r($resultado);
echo '<br>';

//condicional directo
$edad=14;
echo $edad>=18?'mayor':'menor';
echo '<br>';


?>