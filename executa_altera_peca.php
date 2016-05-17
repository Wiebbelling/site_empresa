<?php
include "banco.php";
$codigo_modelo = $_GET['codigo_modelo'];
$codigo_peca = $_GET['codigo_peca'];
$nome_peca = $_POST['nome_peca'];
$valor_usd = (float)str_replace(",",".",$_POST['valor']);
$link = $_POST['link'];


$banco = new Banco;
$banco->conectar("df");
$banco->altera_peca($codigo_peca,$nome_peca,$valor_usd,$link);

if((int)$codigo_modelo == 0)
	{
	header("Location: exclui_peca.php");
	}
else
	{
	$nome_modelo = $banco->consulta_nome_modelo($codigo_modelo);
	$nome_modelo = strtolower ( $nome_modelo );
	$nome_modelo = str_replace(" ","",$nome_modelo);
	$nome_modelo .= ".php";
	
	header("Location: $nome_modelo?codigo_modelo=$codigo_modelo");
	}
?>