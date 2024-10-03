<?php
$idolos = [
    ["nombre" => "Didac", "apellido" => " Fernandez", "apodo" => "nivot",  "imagen" => "https://image.jimcdn.com/app/cms/image/transf/dimension=4000x3000:format=jpg/path/s43030528d4ac3b6e/image/i534cdb60957bbcd0/version/1553865912/image.jpg"
, "descripcion" => "Soy mi propio idolo porque he visto que aunque tuviera dificultades en el camino siempre me he podido adaptar y mejorar"],
    ["nombre" => "Raquel", "apellido" => " Barco", "apodo" => "Jezz Burning",  "imagen" => "https://m.media-amazon.com/images/S/amzn-author-media-prod/h0hamouumgsbae6aerm5gmc5ei.jpg"
    , "descripcion" => "Esta mujer a la que puedo llamar madre me a enseñado muchas cosas a lo largo de mi vida, sobre todo el como lidiar socialmente con la gente"],
    ["nombre" => "Derrick", "apellido" => " Rose", "apodo" => "D.Rose",  "imagen" => "https://images.eurohoops.net/2022/12/e71e29fd-derrick-rose-chicago-mvp-625x375.jpg"
    , "descripcion" => "Derrick me a enseñado el como de tenerlo todo, en cuestion de 1h se puede ir todo eso que conseguiste por algo que no has elegido tu (una lesion en este caso) pero aun asi sigues tu camino y haciendo lo que mas amas"],
    ["nombre" => "Shaquille", "apellido" => " O'Neal", "apodo" => "Shaq",  "imagen" => "https://statics.forbesargentina.com/2021/11/crop/6184257dae34f__822x822.webp"
    , "descripcion" => "Shaq me a enseñado que la apareciencia de alguien no es motivo para juzgar el como sea esa persona, ya que el con 2.16m de altura a demostrado que tiene un corazon a la par de su gran cuerpo"],
    ["nombre" => "Karles", "apellido" => " Torah", "apodo" => "Mr Tartaria",  "imagen" => "https://estaticosgn-cdn.deia.eus/clip/c7bdbb54-eaa6-45b8-bb57-64ea4faf49d5_16-9-discover-aspect-ratio_default_0_x688y624.jpg"
    , "descripcion" => "Simplemente es la Cabra, no puedo decir nada"],
    ["nombre" => "Gregg", "apellido" => " Popovich", "apodo" => "Pop",  "imagen" => "https://cdn.nba.com/manage/2023/07/GettyImages-1247426969-1-784x523.jpg"
    , "descripcion" => "En mi opinion es el mejor entrenador que se pueda tener, y la verdad es que muchas cosas que aprendo y aplico en el baloncesto como jugadas las saco de el"],
    ["nombre" => "Lamelo", "apellido" => " Ball", "apodo" => "Melo",  "imagen" => "https://library.sportingnews.com/styles/twitter_card_120x120/s3/2021-08/lamelo_vs8o4tblymfu1052m3u7kl5ck.png?itok=l86kynKY"
    , "descripcion" => "A pesar de ser tan solo un año mayor que yo, Melo me a enseñado que por mucho talento que tengas, necesitas estar bien acompañado para recibir exito (Tengo esperanzas en que los hornets lleguen a playoffs)"],
    ["nombre" => "Nikola", "apellido" => " Jokic", "apodo" => "The Joker",  "imagen" => "https://www.si.com/.image/t_share/MjAxODczNTMwMzE1MzUxNjU3/usatsi_21778391.jpg"
    , "descripcion" => "Junto a Larry Bird, me a enseñado que no todo es el fisico, tambien hay que aprender a usar tus armas mas tecnicas y mentales para avanzar"],
    ["nombre" => "Scottie", "apellido" => " Pippen", "apodo" => "Pip",  "imagen" => "https://library.sportingnews.com/styles/twitter_card_120x120/s3/2021-08/scottie-pippen_1u94swz5iew0x1bicjbb5cuwia.jpeg?itok=Oj4Qk0-R"
    , "descripcion" => "Es el primer jugador en el que me fije en baloncesto, ya que no soy un buen atacante pero si un gran defensor, como Pippen, a pesar de tener un cuerpo 'delgado' pudo parar a gente mucho mas grande que el al igual que hago yo ahora"],

];




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
    <div class="navbar navbar-dark bg-dark shadow-sm">
      <div class="container">
        <a href="#" class="navbar-brand d-flex align-items-center">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor"
            stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="mr-2"
            viewBox="0 0 24 24">
            <path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z" />
            <circle cx="12" cy="13" r="4" /></svg>
          <strong>Album</strong>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader"
          aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </div>
  </header>

  <main>

    <section class="py-5 text-center container">
      <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
          <h1 class="font-weight-light">Album example</h1>
          <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator,
            etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
          <p>
            <a href="#" class="btn btn-primary my-2">Main call to action</a>
            <a href="#" class="btn btn-secondary my-2">Secondary action</a>
          </p>
        </div>
      </div>
    </section>

    <div class="album py-5 bg-light">
      <div class="container">

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
          
          <?php
              foreach($idolos as $idolo){
                // echo "{$idolo['nombre']}, {$idolo['apellido']}, {$idolo['apodo']}, {$idolo['imagen']}, {$idolo['descripcion']} <br>";
                echo '<div class="col">
            <div class="card shadow-sm">
              <img class="bd-placeholder-img card-img-top" width="100%" height="225" src='. $idolo['imagen'].' alt="" >
              <div class="card-body">
                <h1>'. $idolo['nombre']. $idolo['apellido'].'</h1>
                <h2>' . $idolo['apodo']. ' </h2>
                <p class="card-text">' . $idolo['descripcion']. '</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                  </div>
                  <small class="text-muted">9 mins</small>
                </div>
              </div>
            </div>
          </div>';};
          ?>

          
        </div>
      </div>
    </div>

  </main>

  <footer class="text-muted py-5">
    <div class="container">
      <p class="float-right mb-1">
        <a href="#">Back to top</a>
      </p>
      <p class="mb-1">Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
      <p class="mb-0">New to Bootstrap? <a href="/">Visit the homepage</a> or read our <a
          href="/docs/5.0/getting-started/introduction/">getting started guide</a>.</p>
    </div>
  </footer>

</body>

</html>