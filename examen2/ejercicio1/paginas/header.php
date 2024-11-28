<?php
    session_start();
    
    echo'
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <img src="'.$_SESSION['foto'].'" alt="mi_foto" class="w-25 rounded-circle me-3">
    <h1>BUENAS, '.$_SESSION['nombre'].' '.$_SESSION['apellido'].'</h1>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="inicio.php">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="productos.php">Productos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contacto.php">Contacto</a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>
    ';
?>