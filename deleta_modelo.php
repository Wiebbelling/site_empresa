<?php
include "banco.php";

$codigo_modelo = $_GET['codigo_modelo'];
$banco = new Banco;
$banco->conectar("df");
$banco->deleta_modelo($codigo_modelo);

header ("Location: index.php");
?>