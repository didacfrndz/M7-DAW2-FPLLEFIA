<?php
echo "<h1>Esto es concatenacion </h1>";

$nombre = "Didac";
$pais = "Fernandez";
$edad = 22;
echo  "Hola me llamo " . $nombre .  " naci en ". $pais . " y tengo " . $edad . " años";
echo "<br>";
echo "hola me llamo {$nombre} naci en {$edad} y tengo {$edad} años";

?>