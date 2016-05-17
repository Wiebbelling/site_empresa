<?php
include "banco.php";
$banco = new Banco;
$banco->conectar("df");
//RECEBE OS DADOS DO FORMULÁRIO
$titulo = $_POST["titulo_midia"];
$descricao = $_POST["descricao"];
$tipo = $_POST["tipo_midia"];
//RECEBE OS DADOS DO CAMPO $_FILES

//NOME TEMPORÁRIO NO SERVIDOR
$midia_temp = $_FILES["midia"]["tmp_name"];
//NOME DO ARQUIVO NA MÁQUINA DO USUÁRIO
$midia_nome = $_FILES["midia"]["name"];
//TAMANHO DO ARQUIVO
$midia_tamanho = $_FILES["midia"]["size"];
//TIPO MIME DO ARQUIVO
$midia_type = $_FILES["midia"]["type"];

//EXIBINDO OS DADOS
echo "<h3>ENVIANDO O ARQUIVO ...</h3>";
echo "TITULO = ".$titulo."<br>";
echo "NOME TEMPORÁRIO NO SERVIDOR = ".$midia_temp."<br>";
echo "NOME DO ARQUIVO = ".$midia_nome."<br>";
echo "TAMANHO DO ARQUIVO = ".$midia_tamanho."<br>";
echo "TIPO DO ARQUIVO = ".$midia_type."<br>";
echo "<br><br><br>STATUS DO ENVIO DO ARQUIVO<br>";

//ENVIA O ARQUIVO PARA A PASTA
if(!copy($midia_temp, "C:/xampp/htdocs/Site_empresa/img/$midia_nome"))
	echo "Aconteceu algum erro !!!";
else 
{
	$banco->insere_midia($titulo,$midia_nome,$tipo,$descricao);
	header ("Location: inclui_midia.php"); 
}
?> 
