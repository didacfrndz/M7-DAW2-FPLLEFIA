# Parte 1: Verdadero o Falso (2.5 puntos)
1. Include y require son completamente iguales, pero require detiene la ejecución del script si hay un error. (V/F)
   Verdadero
2. La función isset($_POST['campo']) se utiliza para verificar si un campo del formulario fue enviado en una solicitud POST. (V/F)
   Verdadero
3. La función unset se utiliza para eliminar variables o elementos de un array en PHP. (V/F)
   Falso, sirve para quitar el valor a la variable
4. Un CRUD básico sigue siempre el orden: Create, Delete, Read, Update. (V/F)
   Falso, el orden es literamente sus siglas, Create, Read, Update, Delete
5. Las sesiones permiten almacenar información temporal del usuario en el servidor y pueden destruirse manualmente con session_destroy(). (V/F)
   Verdadero
6. La función header('Location: ...') redirige al usuario a otra página y detiene la ejecución del script automáticamente. (V/F)
   Falso, es cierto que redirige al usuario, pero para que pare el script debe tener un `exit` despues
7. Los operadores ternarios en PHP permiten simplificar condicionales en una única línea de código. (V/F)
   Verdadero
8. Separar la lógica PHP del HTML facilita el mantenimiento y la escalabilidad del código. (V/F)
   Verdadero (hay que ser ordenado)
9. Si se omite el atributo action en un formulario, los datos se envían a la misma página donde está el formulario. (V/F)
   Verdadero
10. El método HTTP POST es más adecuado para formularios grandes o datos sensibles porque no expone la información en la URL. (V/F)
   Verdadero (cuando haces pruebas se utiliza GET para verificar el envio de datos)

11. El siguiente formulario enviará un nombre por post a bienvenido.php. (V/F)
<form action=”bienvenido.php” method="POST">
    <input type="text" placeholder="Nombre">
    <button type="submit">Enviar</button>
</form>

Verdadero

12. El siguiente código guardará el nombre en una sesión. (V/F)
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $_SESSION['nombre'] = $_GET['nombre'];
}
<form action=”bienvenido.php” method="POST">
    <input type="text" name=”nombre” placeholder="Nombre">
    <button type="submit">Enviar</button>
</form>

Falso, Ya puedes darle al boton de enviar 80 veces que lo estas mandado el formulario como POST y lo quieres comparar en REQUEST_METHOD con GET

13. El siguiente código tiene un error. (V/F)
session_start();
$_SESSION[‘email’] = $_POST[“email”]
if ($_POST['email']) {
    echo ‘<h2> Bienvenido ‘ . $_POST['email'] . ‘ !!! </h2>’ ;
}

Falso, de hecho el error te saldra en el if porque te falta el `;`en la linea anterior, e aqui como se escribe:
$_SESSION[‘email’] = $_POST[“email”];
if ($_POST['email']) {
    echo ‘<h2> Bienvenido ‘ . $_POST['email'] . ‘ !!! </h2>’ ;
}

14. Este código PHP tiene 3 errores. (V/F)
$username = “Rodrigo”;
<header>Bienvenido <? username ?> 

Aqui la correccion:
<?php
$username='Rodrigo';
echo'<header>Bienvenido'.$username.'</header>';
?>
El problema reside en que no estas concadenando bien porque te faltaba un = en tu codigo ademas de que lo querias hacer como si estuvieras en un html cuando tecnicamente al declarar variables estas en el apartado de php con lo cual debes hacer un `echo`, y aun asi te faltaba un `$` para poner que es una variable, y tambien el `;` final antes de cerrar php a si que habia mas de 3 errores de sintaxis

15. El siguiente formulario HTML tiene un error y no enviará datos. (V/F)
<form method="POST" action="procesar.php">
    <input type="text" name="usuario" placeholder="Usuario">
    <button type="submit">Enviar</button>
</form>

Falta colocarle un `id` al input :D

