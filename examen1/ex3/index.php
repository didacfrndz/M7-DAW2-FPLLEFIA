<?php
    $personas =[
        [
            "nombre"=>"LaMelo",
            "foto"=>"https://www.directvsports.com/__export/1701218274736/sites/dsports/img/2023/11/28/20231128_093754173_14bil71zmot0j1cbbs7x6xbp4g.jpg_1301049368.jpg",
            "telefono"=>"457898586",
            "correo"=>"lamelo_lafrance_ball@gmail.com",
            "edad"=> "23",
            "profesion"=> "Jugador de Baloncesto",
        ],
        [
            "nombre"=>"Raquel Barco",
            "foto"=>"https://m.media-amazon.com/images/S/amzn-author-media-prod/h0hamouumgsbae6aerm5gmc5ei.jpg",
            "telefono"=>"648759536",
            "correo"=>"jezz.burning@gmail.com",
            "edad"=> "51",
            "profesion"=> "Escritora",
        ],
        [
            "nombre"=>"Ricardo",
            "foto"=>"https://fotografias.flooxernow.com/clipping/cmsimages02/2022/04/12/C9CE7E01-DAE3-4C24-AA38-FEAAF851AD5E/rickyedit-video-youtube-baneo_104.jpg?crop=720,720,x281,y0&width=1200&height=1200&optimize=low&format=webply",
            "telefono"=>"584365148",
            "correo"=>"rickyedit@gmail.com",
            "edad"=> "27",
            "profesion"=> "Creador de contenido",
        ],
    ]
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.72.0">
  <title>Album example · Bootstrap</title>

  <link rel="canonical" href="https://v5.getbootstrap.com/docs/5.0/examples/album/">



  <!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>


</head>

<body>

  <header>
    <div class="collapse bg-dark" id="navbarHeader">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-md-7 py-4">
            <h4 class="text-white">About</h4>
            <p class="text-muted">Add some information about the album below, the author, or any other background
              context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off
              to some social networking sites or contact information.</p>
          </div>
          <div class="col-sm-4 offset-md-1 py-4">
            <h4 class="text-white">Contact</h4>
            <ul class="list-unstyled">
              <li><a href="#" class="text-white">Follow on Twitter</a></li>
              <li><a href="#" class="text-white">Like on Facebook</a></li>
              <li><a href="#" class="text-white">Email me</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    
  </header>

  <main>

    

    <div class="album py-5 bg-light">
      <div class="container">

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <?php
foreach($personas as $persona){
    echo '<div class="col">
            <div class="card shadow-sm">
              <img class="bd-placeholder-img card-img-top" width="100%" height="225" src='. $persona['foto'].' alt="" >
              <div class="card-body">
                <h1>'.$persona['nombre'].'</h1>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                    <a href="ficha.php?nombre='.$persona['nombre'].'&foto='.$persona['foto'].'&telefono='.$persona['telefono'].'&correo='.$persona['correo'].'&edad='.$persona['edad'].'&profesion=' . $persona['profesion'] .'"><button type="button" class="btn btn-sm btn-outline-secondary">Mas Informacion</button></a>
                  </div>
                  <small class="text-muted"></small>
                </div>
              </div>
            </div>
          </div>';};



?>
        </div>
      </div>
    </div>

  </main>

  

</body>

</html>