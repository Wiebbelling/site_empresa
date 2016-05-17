<?php
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

if($usuario == "admin@admin" && $senha == "123456")
	header ("Location: exclui_peca.php");
else
	header ("Location: login.php");
?>