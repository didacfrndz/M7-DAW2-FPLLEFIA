<?php
include 'baraja.class.php';

//Crear nueva clase baraja
$baraja = new Baraja();


$baraja->crear_baraja();

// Mezclar la baraja
$baraja->mezclarBaraja();

$baraja->pintarBaraja();


?>