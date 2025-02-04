<?php
include 'baraja.class.php';

$baraja = new Baraja();


$baraja->crear_baraja();

$baraja->mezcla();

$baraja->pinta_baraja();


?>