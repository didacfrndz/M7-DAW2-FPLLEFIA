<?php
$texto= "Hola como estamos?";
function convertirMayusculas($texto){
    echo strtoupper($texto);
};
convertirMayusculas($texto);
echo '<br>';

function contarPalabras($texto){
    echo str_word_count($texto);
};
contarPalabras($texto);
echo '<br>';

function obtenerSubcadena($texto,$inicio,$longitud){
    echo substr($texto, $inicio , $longitud);
}
obtenerSubcadena($texto,$inicio,$longitud );
echo '<br>';

function reemplazarPalabras($texto){
    echo str_replace("como", "juanito", $texto);
};
reemplazarPalabras($texto);
echo '<br>';

function invertirTexto($texto){
   echo strrev($texto);
}
invertirTexto($texto);
echo '<br>';

$texto2 = "Juan como estamos?";
function compararStrings($texto, $texto2){
    echo strcmp($texto,$texto2);
};
compararStrings($texto,$texto2);
echo '<br>';

function eliminarEspacios($texto){
    echo trim($texto);
}
eliminarEspacios($texto);
echo '<br>';

function contarOcurrencias($texto, $palabra){
    echo substr_count($texto,$palabra);
}
contarOcurrencias($texto,$palabra);

function dividirPalabras($texto){
    $array = explode(" ",$texto);
    print_r($array);
};
dividirPalabras($texto);
echo '<br>';





?>