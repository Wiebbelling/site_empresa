<?php
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

if($usuario == "admin" && $senha == "123456")
{
	session_start();
	session_name("adm");
	$_SESSION['validacao'] = 1;
	header ("Location: exclui_peca.php");
}
else
	header ("Location: login.php");
?>