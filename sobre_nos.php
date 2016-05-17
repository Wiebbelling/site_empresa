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
	
    <!-- Marketing messaging and featurettes ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->
<div class="container marketing">
    
    <br><br><br><br>
    <div class="jumbotron">
        <h1>Sobre Nós!</h1>
        <p class="lead">Star-up fundada na metade do ano de 2015, tendo como objetivo atender as mais diversas áreas com soluções tecnológicas envolvendo drones!</p>
      </div>

    

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img class="img-circle" src="img/rodrigo2.jpg" alt="Generic placeholder image" width="140" height="140">
          <h2>Rodrigo Felipe Wiebbelling</h2>
          <p>Estudante de Ciências da Computação, coneçou no hobbie de aeromodelismo com 15 anos, onde teve seu primeiro contato com drones, é autodidata em eletrônica e hoje trabalha em uma empresa de desenvolvimento de software e usa seu tempo livre para se dedicar à DragonflyDrones</p>
          <p><a class="btn btn-default" href="#" role="button">Saiba mais &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="img/daniel.jpg" alt="Generic placeholder image" width="140" height="140">
          <h2>Daniel Almeida</h2>
          <p>Daniel Almeida é formado em Engenharia Ambiental pela Universidade Federal do Rio Grande do Sul, tendo encontrado no geoprocessamento e hidrologia suas áreas de maior interesse. Tem como hobbies a literatura, o teatro, tecnologias e mais recentemente desenvolveu uma paixão por empreendedorismo e desenvolvimento pessoal, o que o levou a ser um dos idealizadores da criação da Dragonfly Drones</p>
          <p><a class="btn btn-default" href="#" role="button">Saiba mais &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="img/quad1.jpg" alt="Generic placeholder image" width="140" height="140">
          <h2>Marcelo Almeida</h2>
          <p>Quem somos: Uma equipe multidisciplinar, simpática e aficionada por tecnologias e inovação.</p>
          <p><a class="btn btn-default" href="#" role="button">Saiba mais &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
      
      
      <br><br><br><br><br><br>

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
