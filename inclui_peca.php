<?php
$return = 0;
if(isset($_GET['return']))
	$return = $_GET['return'];
	
include "banco.php";
$banco = new Banco;
$banco->conectar("df");
if(isset($_POST['nome_peca']) && isset($_POST['valor']) && isset($_POST['link']))
{
	$nome_peca = $_POST['nome_peca'];
	$valor_usd = (float)str_replace(",",".",$_POST['valor']);
	$link = $_POST['link'];
	 
	$banco->conectar("df");
	$return = $banco->inclui_peca($nome_peca,$valor_usd,$link);
	//header ("Location: inclui_peca.php?return=$return");
}
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

    <title>Inclusão de Peça</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">DragonFly Drones</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="modelo_padrao.php?codigo_modelo=0">Orçamentos</a></li>
            <?php include "menu.html"; ?>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div>
      </div>
    </nav>
    <div class="col-md-3"></div>
    
    <div class="col-md-6">
    <?php if($return == 1)
	echo "<div class='alert alert-success alert-dismissible' role='alert'>
  			<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
  		<strong>Peça Inserida com Sucesso!</strong> 
	</div>";
	?>
    <h2 class="sub-header"><center>Inclusão de Peças:</center></h2>
    
    <form class="form-horizontal" method="post" action="executa_inclusao_peca.php">
      <div class="form-group">
    	<label for="inputEmail3" class="col-sm-2 control-label">Codigo da Peça:</label>
    	  <div class="col-sm-10">
      		<input type="text" name="codigo_peca" class="form-control" id="inputEmail3" value="#" disabled>
    	  </div>
  	  </div>
      <div class="form-group">
    	<label for="inputEmail3" class="col-sm-2 control-label">Nome da Peça:</label>
    	  <div class="col-sm-10">
      		<input type="text" name="nome_peca" class="form-control" id="inputEmail3" placeholder="Nome">
    	  </div>
  	  </div>
      <div class="form-group">
    	<label for="inputEmail3" class="col-sm-2 control-label">Valor em USD:</label>
    	  <div class="col-sm-10">
      		<input type="text" name="valor" class="form-control" id="inputEmail3" placeholder="Valor em $">
    	  </div>
  	  </div>
      <div class="form-group">
    	<label for="inputEmail3" class="col-sm-2 control-label">Link da Peça:</label>
    	  <div class="col-sm-10">
      		<input type="text" name="link" class="form-control" id="inputEmail3" placeholder="link da peca">
    	  </div>
  	  </div>
      <div class="form-group">
         <div class="col-sm-offset-2 col-sm-10">
           <button type="submit" class="btn btn-default">Adicionar Peça</button>
         </div>
      </div>
   </form>
   </div>
   <div class="col-md-3"></div>
    
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
