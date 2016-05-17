

<?php
include "banco.php";

$banco = new Banco;
$banco->conectar("df");
$banco->cria_paginas();
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/favicon.ico">

    <title>DragonFly Drones</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="css/carousel.css" rel="stylesheet">
  </head>

  <body>
  
  <!-- NAVBAR ================================================== -->
    <?php include "menu_principal.html" ?>

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

    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img class="img-circle" src="img/logo.png" alt="Generic placeholder image" width="140" height="140">
          <h2>DragonFly Drones</h2>
          <p>A Dragonfly Drones é uma Start Up especializada em serviços com Drones criada em novembro de 2015. Conheça abaixo nossos serviços!</p>
         <!-- <p><a class="btn btn-default" href="#" role="button">Saiba mais &raquo;</a></p>-->
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="img/asa1.jpg" alt="Generic placeholder image" width="140" height="140">
          <h2>Serviços</h2>
          <p>Quer conhecer nossos serviços? Dê uma olhada neles aqui!</p>
          <p><a class="btn btn-default" href="imagens.php" role="button">Saiba Mais &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="img/quad1.jpg" alt="Generic placeholder image" width="140" height="140">
          <h2>Sobre Nós</h2>
          <p>Quem somos: Uma equipe multidisciplinar, simpática e aficionada por tecnologias e inovação.</p>
          <p><a class="btn btn-default" href="sobre_nos.php" role="button">Saiba Mais &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      
      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Filmagem de eventos? <span class="text-muted">Pode deixar com a gente!</span></h2>
          <p class="lead">Para ter a melhor recordação do seu evento com uma perspectiva acima das convencionais, entre em contato. Filmamos seu evento e editamos da melhor maneira para que as recordações se tornem inesquecíveis!</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" src="img/evento.jpg" alt="Generic placeholder image" width="500" height="500">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
          <h2 class="featurette-heading">Quer ter imagens de algum lugar do alto? <span class="text-muted">Podemos te levar lá!</span></h2>
          <p class="lead">Imagem aérea de uma fazenda ou casa? Fotos de um empreendimento ou construção? Quer mostrar para seu cliente como será a vista do apartamento do prédio que está sendo levantado? Conseguimos a melhor imagem para você!</p>
        </div>
        <div class="col-md-5 col-md-pull-7">
          <img class="featurette-image img-responsive center-block" src="img/construtora.jpg" alt="Generic placeholder image" width="500" height="500">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Um drone do jeito que você quer? <span class="text-muted">Sentamos juntos e projetamos!</span></h2>
          <p class="lead">Ajudamos você a montar um drone que melhor se adeque às suas necessidades. Projetamos, montamos e te ensinamos a pilotar.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" src="img/projeto.jpg" alt="Generic placeholder image" width="500" height="500">
        </div>
      </div>

      <hr class="featurette-divider">
      
      <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
          <h2 class="featurette-heading">Cursos e palestras na área de drones?<span class="text-muted">Venha conferir!</span></h2>
          <p class="lead">Atualmente estamos montando o curso “Montando meu próprio Drone” que em breve estará disponível. Se precisar de palestras, demonstrações já podemos fazer. Entre em contato!</p>
        </div>
        <div class="col-md-5 col-md-pull-7">
          <img class="featurette-image img-responsive center-block" src="img/palestra.jpg" alt="Generic placeholder image" width="500" height="500">
        </div>
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <?php include "rodape.html" ?>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
