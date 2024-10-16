<?php
$numeros=[1,2,3,4,5,6];
function sumarArray($numeros){
     echo array_sum($numeros);
}
sumarArray($numeros);
echo '<br>';

$nombres=["Yehor","Didac","Ferrer", "Zevaztian"];
function ordenarArrayAlfabetico($nombres){
    echo sort($nombres);
}
ordenarArrayAlfabetico($nombres);
echo '<br>';


?>