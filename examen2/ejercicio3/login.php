<?php
session_start();
$usuarios = [
    ["username"=>"admin","password"=>"1234","role"=>"admin"],
    ["username"=>"Didac","password"=>"4321","role"=>"especialito"]
];

if($_SERVER['REQUEST_METHOD']=='POST'){
    $usuarioEncontrado = false; // Variable para verificar si el usuario fue encontrado

    // Comprobar si se han enviado el nombre de usuario y la contraseña
    if(isset($_POST['username']) && isset($_POST['password'])){
        // Recorremos el array de usuarios
        foreach($usuarios as $usuario){
            // Si el nombre de usuario y la contraseña coinciden
            if($usuario['username'] == $_POST['username'] && $usuario['password'] == $_POST['password']){
                // Guardamos el nombre de usuario y el rol en la sesión
                $_SESSION['username'] = $_POST['username'];
                $_SESSION['role'] = $usuario['role'];
                $usuarioEncontrado = true; // El usuario ha sido encontrado
                header('Location: bienvenida.php');
                exit; // Salimos para evitar seguir ejecutando código después de la redirección
            }
        }
    }

    // Si no se encontró el usuario o las credenciales son incorrectas
    if(!$usuarioEncontrado){
        echo 'Credenciales incorrectas';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="login.php" method="POST">
<label for="username">Nombre</label>
<input type="text" name="username" id="username" required>
<label for="password">Contraseña</label>
<input type="password" name="password" id="password">
<button type="POST">ENVIAR</button>
</form>
</body>
</html>