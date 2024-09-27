<?php
$lista = array("Didac", "Yehor", "DeiV");
print_r($lista);
$lista2 = ["Ferrer", "Torrado", "Baena", 99 , 7 , 45.5, true];
echo $lista2[1];

//Array asociativo
$colores = ["rojo", "azul", "verde"];
$colores[] = "Naranja";
print_r("$colores");

$identidad = [
    "nombre" => "Didac",
    "apellido" => "Fernandez Barco",
    "edad" => 22
];
echo $identidad["nombre"];
$numero = [1,2,3,4,5,6,7,8,9];
for ($i=0 ; $i <count($numero); $i++){
    echo $numero[$i] . "<br>";
};
foreach($numero as $num){
    echo ($num * 2)  . " ";
};
$ciudades = [
    "Paris" => "Francia",
    "Barcelona" => "Espanya",
    "Londres" => "Reino Unido"
];
// foreach ($cuidades as $ciudad =>$pais){
//     if($ciudad == "Barcelona"){
//         echo "La ciudad de $ciudad esta en $pais";
//     }
    
// };

//foreach en arrays multidimensionales
$estudiantes = [
    ["nombre" => "Didac", "nota" => 9 , "genero" =>"h"],
    ["nombre" => "Dani", "nota" => 10 , "genero" =>"h"],
    ["nombre" => "DeiV", "nota" => 12 , "genero" =>"h"],
    ["nombre" => "Yehor", "nota" => 11, "genero" =>"h"],
    ["nombre" => "Kevin", "nota" => 9 , "genero" =>"h"],
];
foreach ($estudiantes as $estudiante){
    if($estudiante["genero"]== "h"){
        echo "El estudiante: {$estudiante['nombre']} ha sacado un {$estudiante['nota']}<br>";
    }else{
    echo "La estudiante: {$estudiante['nombre']} ha sacado un {$estudiante['nota']}<br>";
}
};

?>