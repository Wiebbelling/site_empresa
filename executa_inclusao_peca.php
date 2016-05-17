<?php
include "banco.php";
$return = 0;
$nome_peca = $_POST['nome_peca'];
$valor_usd = (float)str_replace(",",".",$_POST['valor']);
$link = $_POST['link'];
 


$banco = new Banco;
$banco->conectar("df");
$return = $banco->inclui_peca($nome_peca,$valor_usd,$link);
header ("Location: inclui_peca.php?return=$return");
?>