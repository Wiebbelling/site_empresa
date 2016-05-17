<?php
include "banco.php";
//include "conversao.php";
$codigo_modelo = $_GET['codigo_modelo'];
$banco = new Banco;
$banco->conectar("df");

$dolar_americano = "http://dolarhoje.com/cotacao.txt";
$valor_dolar = AbreDolarAmericano( $dolar_americano );
$valor_dolar =  str_replace(",",".",$valor_dolar);
$valor_dolar = (float)$valor_dolar;

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

    <title>
    <?php 
		$nome_modelo = $banco->consulta_nome_modelo($codigo_modelo);
		echo "$nome_modelo";
	?>
    </title>

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
            <li><a href="quadricopterof450.php?codigo_modelo=1">Orçamentos</a></li>
            	<?php include "menu.html"; ?>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
        <h2 class="sub-header">Modelos</h2>
          <ul class="nav nav-sidebar">
           <?php
			$banco->monta_menu_orcamenots($codigo_modelo);
			?>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h2 class="sub-header">
		  <?php 
		  	$nome_modelo = $banco->consulta_nome_modelo($codigo_modelo);
			echo "$nome_modelo";
			echo "\t";
			echo "<a href='deleta_model	o.php?codigo_modelo=$codigo_modelo'><span class='glyphicon glyphicon-trash' aria-hidden='true'></span></a>";
		  ?>
          </h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Peça</th>
                  <th>Quantidade</th>
                  <th>Valor Unitário(USD)</th>
                  <th>Valor Unitário(BRL)</th>
                  <th>Valor da Peça(BRL)</th>
                  <th>Link</th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <?php
				$total_dolar = $banco->consulta_pecas($codigo_modelo);
				?>
              </tbody>
            </table>
          </div>
          <?php
		  $total_dolar = number_format($total_dolar,2);
		  
		  $total_brl = $total_dolar*($valor_dolar + 0.35);
		  $total_imposto = $total_brl * 1.1;
		  $total_final = $total_imposto*1.30;
		  $total_nota_fiscal = $total_final*0.1514;
		  $lucro = $total_final - ($total_imposto + $total_nota_fiscal);
		  $total_brl= number_format($total_brl,2);
		  $total_imposto= number_format($total_imposto,2);
		  $total_nota_fiscal= number_format($total_nota_fiscal,2);
		  $total_final= number_format($total_final,2);
		  $lucro= number_format($lucro,2);
		  
		  echo "
		  
		  <font color='#FF9933'><h3 align='right'> Orçamento Final R$: $total_final	</h3></font>
		  <font color='#FF9933'><h3 align='right'> Lucro final: $lucro </h3></font>
		  <p align='center'>
		  <font size='4'>Dados Extras:</font><br>
		  Valor do Dolar $:$valor_dolar 
		  Peças em Dolar $: $total_dolar 
		  Peças em Reais R$: $total_brl 			
		  Total com Imposto R$: $total_imposto 			
		  Valor da nota fiscal R$: $total_nota_fiscal	
		  </p>";
		  ?>
        </div>
      </div>
    </div>

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
