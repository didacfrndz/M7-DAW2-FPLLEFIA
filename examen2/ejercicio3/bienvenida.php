<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>HOLA <?=$_SESSION['username']?></h1>
    <?php
    if($_SESSION['role']=='especialito'){
        echo'hermano Didac que haces va tira a estudiar';
    }else{
        echo'eres literalmente el fokin admin';
        
    }
    ?>
    <a href="logout.php"><button>CERRAR SESION</button></a>
</body>
</html>