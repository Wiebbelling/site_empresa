<?php
include "banco.php";
$banco = new Banco;
$banco->conectar("df");
?>


<!DOCTYPE html>
<html>
<head>
  <title>Dragonfly Drones</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
  
  
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="js/ie-emulation-modes-warning.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  
  <style>
  body {
      position: relative;
  }
  #home{padding-top:50px;}
  #sobre_nos {padding-top:50px;color: #333; background-color: #FFFFFF;}
  #servicos {padding-top:50px;color: #333; background-color: #FFFFFF;}
  #equipe {padding-top:50px;color: #333; background-color: #FFFFFF;}
  #fotos {padding-top:50px;color: #333; background-color: #FFFFFF;}
  #videos {padding-top:50px;color: #333; background-color: #FFFFFF;}
  </style>
  
  <link href="css/carousel.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#myCarousel">Dragonfly Drones</a>
    </div>
    <div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li><a href="#sobre_nos">Sobre Nós</a></li>
          <li><a href="#servicos">Serviços</a></li>
          <li><a href="#equipe">Equipe</a></li>
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Nosso Trabalho<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#fotos">Fotos</a></li>
              <li><a href="#videos">Vídeos</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>

<div id="home">


	<!-- Carousel ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="img/cidade.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1><!-- Titulo --></h1>
              <p><!-- texto --></p>
<!--              <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>-->
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="img/quad.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1><!-- Titulo --></h1>
              <p><!-- texto --></p>
              <!--<p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>-->
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="img/guaiba1.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1><!-- Titulo --></h1>
              <p><!-- texto --></p>
              <!--<p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p> -->
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->



</div>
  

<div id="sobre_nos" class="container marketing">
  <h1 class="featurette-heading"1>Sobre Nós</h1>
  <p class="lead">Star-up fundada na metade do ano de 2015, tendo como objetivo atender as mais diversas áreas com soluções tecnológicas envolvendo drones!</p>
	<hr >
</div>



<div id="servicos" class="container marketing">
  <h1 class="featurette-heading">Conheça nossos serviços</h1>
      
      <div class="row featurette">
        <div class="col-md-7">
          <h2 >Filmagem de eventos? <span class="text-muted">Pode deixar com a gente!</span></h2>
          <p class="lead">Para ter a melhor recordação do seu evento com uma perspectiva acima das convencionais, entre em contato. Filmamos seu evento e editamos da melhor maneira para que as recordações se tornem inesquecíveis!</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" src="img/evento.jpg" alt="Generic placeholder image" width="500" height="500">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
          <h2 >Quer ter imagens de algum lugar do alto? <span class="text-muted">Podemos te levar lá!</span></h2>
          <p class="lead">Imagem aérea de uma fazenda ou casa? Fotos de um empreendimento ou construção? Quer mostrar para seu cliente como será a vista do apartamento do prédio que está sendo levantado? Conseguimos a melhor imagem para você!</p>
        </div>
        <div class="col-md-5 col-md-pull-7">
          <img class="featurette-image img-responsive center-block" src="img/construtora.jpg" alt="Generic placeholder image" width="500" height="500">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 >Um drone do jeito que você quer? <span class="text-muted">Sentamos juntos e projetamos!</span></h2>
          <p class="lead">Ajudamos você a montar um drone que melhor se adeque às suas necessidades. Projetamos, montamos e te ensinamos a pilotar.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" src="img/projeto.jpg" alt="Generic placeholder image" width="500" height="500">
        </div>
      </div>

      <hr class="featurette-divider">
      
      <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
          <h2 >Cursos e palestras na área de drones?<span class="text-muted">Venha conferir!</span></h2>
          <p class="lead">Atualmente estamos montando o curso “Montando meu próprio Drone” que em breve estará disponível. Se precisar de palestras, demonstrações já podemos fazer. Entre em contato!</p>
        </div>
        <div class="col-md-5 col-md-pull-7">
          <img class="featurette-image img-responsive center-block" src="img/palestra.jpg" alt="Generic placeholder image" width="500" height="500">
        </div>
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->
</div>
<link href="css/dashboard.css" rel="stylesheet">

<div id="equipe" class="container marketing">
  <h1 class="featurette-heading">Nossa Equipe</h1>
  <!-- Three columns of text below the carousel -->
      <div class="row">
        
        
        <div class="col-lg-4">
          <img class="img-circle" src="img/rodrigo2.jpg" alt="Generic placeholder image" width="140" height="140">
          <h2>Rodrigo Felipe Wiebbelling</h2>
          <p align="justify">Estudante de Ciências da Computação, coneçou no hobbie de aeromodelismo com 15 anos, onde teve seu primeiro contato com drones, é autodidata em eletrônica e hoje trabalha em uma empresa de desenvolvimento de software e usa seu tempo livre para se dedicar à DragonflyDrones</p>
          <p><a class="btn btn-default" href="#" role="button">Saiba mais &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        
        <div class="col-lg-4">
          <img class="img-circle" src="img/daniel.jpg" alt="Generic placeholder image" width="140" height="140">
          <h2>Daniel Almeida</h2>
          <p align="justify">Daniel Almeida é formado em Engenharia Ambiental pela Universidade Federal do Rio Grande do Sul, tendo encontrado no geoprocessamento e hidrologia suas áreas de maior interesse. Tem como hobbies a literatura, o teatro, tecnologias e mais recentemente desenvolveu uma paixão por empreendedorismo e desenvolvimento pessoal, o que o levou a ser um dos idealizadores da criação da Dragonfly Drones</p>
          <p><a class="btn btn-default" href="#" role="button">Saiba mais &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      
      
        <div class="col-lg-4">
          <img class="img-circle" src="img/quad1.jpg" alt="Generic placeholder image" width="140" height="140">
          <h2>Marcelo Almeida</h2>
          <p align="justify">Quem somos: Uma equipe multidisciplinar, simpática e aficionada por tecnologias e inovação.</p>
          <p><a class="btn btn-default" href="#" role="button">Saiba mais &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
      <div class="row">
      <div class="col-lg-4"></div>
      <div class="col-lg-4">
          <img class="img-circle" src="img/quad1.jpg" alt="Generic placeholder image" width="140" height="140">
          <h2>Marcelo Almeida</h2>
          <p align="justify">Quem somos: Uma equipe multidisciplinar, simpática e aficionada por tecnologias e inovação.</p>
          <p><a class="btn btn-default" href="#" role="button">Saiba mais &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      <div class="col-lg-4"></div>
      </div>
      
      <hr class="featurette-divider">
</div>



<div id="fotos" class="container marketing">
  <h1 class="featurette-heading">Fotos</h1>
  	<div class="container">
		<?php
        $banco->carrega_midia(1);
        ?>
	</div>
  <hr>
</div>



<div id="videos" class="container marketing">
  <h1 class="featurette-heading">Vídeos</h1>
  	<div class="container">
		<?php
        $banco->carrega_midia(0);
        ?>
    </div>
</div>

<script>
$(document).ready(function(){
  // Add scrollspy to <body>
  $('body').scrollspy({target: ".navbar", offset: 50});

  // Add smooth scrolling on all links i nside the navbar
  $("#myNavbar a").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    }  // End if
  });
});
</script>
	
    <script>window.jQuery || document.write('<script src="js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>

</body>
</html>

