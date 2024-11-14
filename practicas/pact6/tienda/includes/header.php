<?php
include_once "funciones.php";
if($_SERVER[ 'REQUEST_METHOD' ]== 'POST'){
    $nom=$_POST['nombre'];
    $ap=$_POST['apellido'];
    $tel=$_POST['telefono'];
    $dni=$_POST['DNI'];
    $codigo=$_POST['codigoSocio'];
    $mail=$_POST['correo'];
    $av=$_POST['avatar'];
    echo '
<header class="navbar navbar-expand-lg navbar-light bg-light mb-5">
        <div class="container-fluid d-flex justify-content-between">
        <a class="navbar-brand" href="index.php">
        <img src="../data/assets/logo-Mercadona.png" alt="logo-mercadona" class="img-fluid"
        style="height: 50px;"></a>
        <img src="../data/assets/logo-Mercadona.png" alt="Avatar" class="rounded-circle" style="width: 100px; height: 100px;">

            <div class="d-flex align-items-center">
                <h2 class="me-3 mb-0 px-4">Bienvenido '. $nom.' ! </h2>
                <img src="'. $av.'" alt="Avatar" class="rounded-circle" style="width: 50px; height: 50px;">
            </div>

        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        </div>
    </div>
</header>
';
}else{
    echo '
<header class="navbar navbar-expand-lg navbar-light bg-light mb-5">
        <div class="container-fluid d-flex justify-content-between">
        (logo)
        <a class="navbar-brand" href="index.php">
        <img src="../data/assets/logo-Mercadona.png" alt="logo-mercadona" class="img-fluid"
        style="height: 50px;"></a>
        (foto de perfil)

            <div class="d-flex align-items-center">
                <h2 class="me-3 mb-0 px-4">Bienvenido ALUMNO ! </h2>
                <img src="" alt="Avatar" class="rounded-circle" style="width: 50px; height: 50px;">
            </div>

        (nav)
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        </div>
    </div>
</header>
';
}

?>