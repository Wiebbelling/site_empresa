<?php
include "banco.php";
$codigo_peca = $_POST['codigo_peca'];
$codigo_modelo = (int)$_POST['codigo_modelo'];
$quantidade = (int)$_POST['quantidade'];

$banco = new Banco;
$banco->conectar("df");
$banco->inclui_relacao($codigo_modelo, $codigo_peca,$quantidade);
header ("Location: inclui_relacao.php");
?>