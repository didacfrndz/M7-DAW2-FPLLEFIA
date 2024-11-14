<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<?php include_once "includes/header.php" ?>
<div class="container-fluid">
    <div class="container text-center my-5">
        <h1>Bienvenido a Mercadona</h1>
        <p>Por favor, completa el siguiente formulari para continuar tu compra.</p>
    </div>
    <div class="container">
        <form action="index.php" method="POST">
            <div class="input-group mb-3">
                <span for="nombre" class="input-group-text" id="inputGroup-sizing-default">Nombre</span>
                <input name="nombre" id="nombre" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="input-group mb-3">
                <span for="apellido" class="input-group-text" id="inputGroup-sizing-default">Apellido</span>
                <input name="apellido" id="apellido" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="input-group mb-3">
                <span for="telefono" class="input-group-text" id="inputGroup-sizing-default">Numero de telefono</span>
                <input name="telefono" id="telefono" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="input-group mb-3">
                <span for="DNI" class="input-group-text" id="inputGroup-sizing-default">DNI</span>
                <input name="DNI" id="DNI" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="input-group mb-3">
                <span for="codigoSocio" class="input-group-text" id="inputGroup-sizing-default">Codigo de socio</span>
                <input name="codigoSocio" id="codigoSocio" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="input-group mb-3">
                <span for="correo" class="input-group-text" id="inputGroup-sizing-default">Correo electronico</span>
                <input name="correo" id="correo" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="input-group mb-3">
                <span for="avatar" class="input-group-text" id="inputGroup-sizing-default">URL Avatar</span>
                <input name="avatar" id="avatar" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
            <button type="POST" class="btn btn-primary">Enviar mis datos</button>
        </form>
        Datos:
        - Nombre
        - Apellidos
        - Numero de telefono
        - DNI
        - Codifo de socio
        - Correo electronico
        
    </div>
</div>
<?php include_once "./includes/footer.php" ?>











<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>