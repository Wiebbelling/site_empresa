<?php
include "banco.php";
$codigo_peca = $_GET['codigo_peca'];
$banco = new Banco;
$banco->conectar("df");
$banco->deleta_peca($codigo_peca);

header("Location: exclui_peca.php");
?>