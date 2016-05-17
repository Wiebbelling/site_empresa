<?php
include "banco.php";
$codigo_peca = $_GET['codigo_peca'];
$codigo_modelo = $_GET['codigo_modelo'];

$banco = new Banco;
$banco->conectar("df");
$banco->deleta_relacao($codigo_modelo,$codigo_peca);

$nome_modelo = $banco->consulta_nome_modelo($codigo_modelo);
$nome_modelo = strtolower ( $nome_modelo );
$nome_modelo = str_replace(" ","",$nome_modelo);
$nome_modelo .= ".php";

header("Location: $nome_modelo?codigo_modelo=$codigo_modelo");

?>