<?php
	include "banco.php";
	$nome_modelo = $_POST['nome_modelo'];
	
	$banco = new Banco;
	$banco->conectar("df");
	$banco->inclui_modelo($nome_modelo);
	
	header ("Location: index.php");
	?>