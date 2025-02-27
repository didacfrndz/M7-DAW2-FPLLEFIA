<?php
$host = 'mysql-didac.alwaysdata.net';
$dbname = 'didac_proyectodb';
$username = 'didac';
$password = 'Dgvn0418#';

$mysqli = new mysqli($host, $username, $password, $dbname);

if($mysqli->connect_error){
    die("Error de conexion: ". $mysqli->connect_error);
}else{
    echo 'connected';
};

?>