<?php


function generarTablaProductos($productos){
    foreach ($productos as $producto) {
        if($producto['disponibilidad']==1){
            echo '
        <tr class="table-success">
            <td>'. $producto['nombre'] .' </td>
            <td>' . $producto['precio'] .'</td>
            <td>En stock</td>
        </tr>'; 
        }else{
            echo '
        <tr class="table-danger">
            <td>'. $producto['nombre'] .' </td>
            <td>' . $producto['precio'] .'</td>
            <td>Agotado</td>
        </tr>';
        }
        
        
        
    }



}



function mostrarContacto(){
    if($_SERVER[ 'REQUEST_METHOD' ]== 'POST'){
        $nom=$_POST['nombre'];
        $ap=$_POST['apellido'];
        $tel=$_POST['telefono'];
        $dni=$_POST['DNI'];
        $codigo=$_POST['codigoSocio'];
        $mail=$_POST['correo'];
        $av=$_POST['avatar'];
    }
        echo'
        <h1>'. $nom, $ap .' </h1> <br>
        <p>'.$mail.' </p><br>
        <p>'.$dni.' </p><br>
        <p>'.$tel.' </p><br>
        <p>'.$codigo.' </p><br>
        <img src="'.$av.'" alt="avatar">
        ';
}


?>