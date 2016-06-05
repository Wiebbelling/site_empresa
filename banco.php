<?php 
//banco.php

include "conversao.php";

class Banco
{
	private static $con;
	public $banco;
	public $codigo_orcamento;
	public $nome_peca;
	public $quantidade;
	public $valor_unitario_usd;
	public $link;
	public $valor_unitario_brl;
	public $valor_peca_brl;
	public $nome_orcamento;
	public $codigo_modelo;
	public $codigo_peca;
	
	function conectar($banco)
	{
		global $con;
		//$con = mysqli_connect("mysql.hostinger.com.br","u580826224_admin","123456","u580826224_df") or die ("erro".mysqli_error($con));
		$con = mysqli_connect("localhost","root","","df") or die ("erro".mysqli_error($con));
		return $con;
	}
	
	function login($usuario, $senha)
	{
		global $con;
		$query ="SELECT senha FROM usuarios WHERE usuario = '$usuario'";
		$resultado = mysqli_query($con,$query) or die("erro de consulta".mysqli_error($con));
		$linha=mysqli_fetch_assoc($resultado);
		$senha_banco = $linha['senha'];
		if($senha == $senha_banco)
			return 1;
		else
			return 0;
	}
	
	function consulta_pecas($codigo_orcamento)
	{	
		global $con;
		
		$total_dolar = 0;
		$dolar_americano = "http://dolarhoje.com/cotacao.txt";
		$conteudo = AbreDolarAmericano( $dolar_americano );
		$conteudo =  str_replace(",",".",$conteudo);
		$conteudo = (float)$conteudo;
		
		$query = "SELECT* FROM pecas JOIN orcamento_peca ON  pecas.codigo_peca = orcamento_peca.codigo_peca
					WHERE orcamento_peca.codigo_orcamento = $codigo_orcamento";
		$resultado = mysqli_query($con,$query) or die("erro de consulta das peças ".mysqli_error($con));
		while($linha=mysqli_fetch_assoc($resultado))
		{
			$codigo_relacao = $linha['id'];
			$codigo_peca = $linha['codigo_peca'];
			$nome_peca = $linha['nome_peca'];
			$quantidade = $linha['quantidade'];
			$valor_unitario_usd = $linha['valor_unitario_usd'];
			$link = $linha['link'];
			
			//montando linha da tabela
			echo "<tr>";
			echo "<td>$codigo_peca</td>";
			echo "<td>$nome_peca</td>";
			echo "<td>$quantidade</td>";
			$valor_unitario_usd_format = number_format($valor_unitario_usd,2);
			$valor_unitario_usd_format = str_replace(".",",",$valor_unitario_usd_format);
			echo "<td>$: $valor_unitario_usd_format</td>";
			$valor_unitario_brl = $conteudo *(float)$valor_unitario_usd;
			$valor_unitario_brl_format = number_format($valor_unitario_brl,2);
			$valor_unitario_brl_format = str_replace(".",",",$valor_unitario_brl_format);
			echo "<td>R$: $valor_unitario_brl_format</td>";
			$valor_peca_brl = (int)$quantidade * $valor_unitario_brl;
			$valor_peca_brl_format = number_format($valor_peca_brl,2);
			$valor_peca_brl_format = str_replace(".",",",$valor_peca_brl_format);
			echo "<td>R$: $valor_peca_brl_format</td>";
			echo "<td><a href=$link>Link</a></td>";
			echo "<td><a href='deleta_relacao.php?codigo_modelo=$codigo_orcamento&codigo_peca=$codigo_peca'><span class='glyphicon glyphicon-trash' aria-hidden='true'></span></a></td>";
			echo "<td><a href='altera_peca.php?codigo_modelo=$codigo_orcamento&codigo_peca=$codigo_peca'><span class='glyphicon glyphicon-pencil' aria-hidden='true'></span></a></td>";
			echo "<tr>";
			$total_dolar = $total_dolar + (int)$quantidade * $valor_unitario_usd;
		}
		return (float)$total_dolar;
	}
	
	function consulta_pecas_geral()
	{	
		global $con;
		$dolar_americano = "http://dolarhoje.com/cotacao.txt";
		$conteudo = AbreDolarAmericano( $dolar_americano );
		$conteudo =  str_replace(",",".",$conteudo);
		$conteudo = (float)$conteudo;
		
		$query = "SELECT* FROM pecas";
		$resultado = mysqli_query($con,$query) or die("erro de consulta das peças ".mysqli_error($con));
		while($linha=mysqli_fetch_assoc($resultado))
		{
			$codigo_peca = $linha['codigo_peca'];
			$nome_peca = $linha['nome_peca'];
			$valor_unitario_usd = $linha['valor_unitario_usd'];
			$link = $linha['link'];
			
			//montando linha da tabela
			echo "<tr>";
			echo "<td>$codigo_peca</td>";
			echo "<td>$nome_peca</td>";
			$valor_unitario_usd_format = number_format($valor_unitario_usd,2);
			$valor_unitario_usd_format = str_replace(".",",",$valor_unitario_usd_format);
			echo "<td>$: $valor_unitario_usd_format</td>";
			$valor_unitario_brl = $conteudo *(float)$valor_unitario_usd;
			$valor_unitario_brl_format = number_format($valor_unitario_brl,2);
			$valor_unitario_brl_format = str_replace(".",",",$valor_unitario_brl_format);
			echo "<td>R$: $valor_unitario_brl_format</td>";
			echo "<td><a href=$link>Link</a></td>";
			echo "<td><a href='deleta_peca.php?codigo_peca=$codigo_peca'><span class='glyphicon glyphicon-trash' aria-hidden='true'></span></a></td>";
			echo "<td><a href='altera_peca.php?codigo_modelo=0&codigo_peca=$codigo_peca'><span class='glyphicon glyphicon-pencil' aria-hidden='true'></span></a></td>";
			echo "<tr>";
		}
	}
	
	function monta_menu_orcamenots($codigo_modelo)
	{
		global $con;
		$query ="SELECT* FROM orcamentos";
		$resultado = mysqli_query($con,$query) or die("erro de consulta".mysqli_error($con));
		while($linha=mysqli_fetch_assoc($resultado))
		{
			$codigo_orcamento = (int)$linha['codigo_orcamento'];
			$nome_orcamento = $linha['nome_modelo'];
			if($codigo_orcamento == $codigo_modelo)
			{
				echo "<li class='active'>";
			}
			else
			{
				echo "<li>";
			}
			//$link = strtolower ( $nome_orcamento );
			//$link = str_replace(" ","",$link);
			$link = "modelo_padrao.php";
			$link .= "?codigo_modelo=$codigo_orcamento";
			echo "<a href=$link>";
			echo "$nome_orcamento";
			echo "<span class='sr-only'>(current)</span>";
			echo "</a>";
			echo "</li>";
		}
	}
	
	function consulta_nome_modelo($codigo_modelo)
	{
		global $con;
		$query ="SELECT nome_modelo FROM orcamentos WHERE codigo_orcamento = $codigo_modelo";
		$resultado = mysqli_query($con,$query) or die("erro de consulta".mysqli_error($con));
		$linha=mysqli_fetch_assoc($resultado);
		$nome_modelo = $linha['nome_modelo'];
		return $nome_modelo;		
	}
	
	function cria_select_modelos($codigo_modelo)
	{
		global $con;
		if($codigo_modelo == 0)
			echo "<option value='0' selected='selected'></option>";
		$query ="SELECT* FROM orcamentos";
		$resultado = mysqli_query($con,$query) or die("erro de consulta".mysqli_error($con));
		while($linha=mysqli_fetch_assoc($resultado))
		{
			
			$codigo_orcamento = (int)$linha['codigo_orcamento'];
			$nome_orcamento = $linha['nome_modelo'];
			if($codigo_modelo == $codigo_orcamento)
				echo "<option value='$codigo_orcamento' selected='selected'>$nome_orcamento</option>";
			else
				echo "<option value='$codigo_orcamento'>$nome_orcamento</option>";
		}
		
	}
	
	function cria_select_pecas($codigo)
	{
		global $con;
		if($codigo == 0)
			echo "<option value='0' selected='selected'></option>";
		$query ="SELECT codigo_peca,nome_peca FROM pecas";
		$resultado = mysqli_query($con,$query) or die("erro de consulta".mysqli_error($con));
		while($linha=mysqli_fetch_assoc($resultado))
		{
			
			$codigo_peca = (int)$linha['codigo_peca'];
			$nome_peca = $linha['nome_peca'];
			if($codigo_peca == $codigo)
				echo "<option value='$codigo_peca' selected='selected'>$nome_peca</option>";
			else
				echo "<option value='$codigo_peca'>$nome_peca</option>";
		}
		
	}
	
	function altera_peca($codigo_peca,$nome_peca,$valor_usd,$link)
	{
		global $con;
		$query = "UPDATE pecas SET nome_peca='$nome_peca',valor_unitario_usd=$valor_usd,link='$link' WHERE codigo_peca = $codigo_peca";
		$resultado = mysqli_query($con,$query) or die("erro de consulta das peças ".mysqli_error($con));
	}
	
	function carrega_peca($codigo_peca)
	{
		global $con;
		$query = "SELECT*  FROM pecas WHERE codigo_peca = $codigo_peca";
		$resultado = mysqli_query($con,$query) or die("erro de consulta das peças ".mysqli_error($con));
		$linha=mysqli_fetch_assoc($resultado);
		
		return $linha;
	}
	
	function carrega_midia($tipo_midia)
	{
		$count = 0;
		global $con;
		$query = "SELECT *  FROM midia WHERE tipo_midia = $tipo_midia";
		$resultado = mysqli_query($con,$query) or die("erro de consulta das midias ".mysqli_error($con));
		while($linha=mysqli_fetch_assoc($resultado))
		{
			$nome_arquivo_midia = $linha['nome_arquivo_midia'];
			$titulo = $linha['nome_midia'];
			$descricao = $linha['descricao_midia'];
			
			if(($count % 3) == 0 && $count != 0)
			{
				echo "</div>";
			}	
			if(($count % 3) == 0)
			{
				echo "<div class='row'>";
			}
			
			echo "<div class='col-sm-6 col-md-4'>";
    		echo "	<div class='thumbnail'>";
      		echo "		<div class='embed-responsive embed-responsive-16by9'>";
			
			if($tipo_midia == 0)
  			echo "			<video class='embed-responsive-item' src='img/$nome_arquivo_midia' controls='controls'></video>";
			else
			echo "			<img src='img/$nome_arquivo_midia' alt='Generic placeholder image' height='200' width='350' class='img-rounded'>";
			echo "		</div>";
      		echo "		<div class='caption'>";
            echo "       	<h3>$titulo</h3>";
            echo "        	<p>$descricao</p>";
            echo "      </div>";
    		echo "	</div>";
  			echo "</div>";
			$count++;
		}
		echo "</div>";	
	}
	
	function carrega_relacao($id)
	{
		global $con;
		$query = "SELECT*  FROM orcamento_peca WHERE id = $id";
		$resultado = mysqli_query($con,$query) or die("erro de consulta da relação ".mysqli_error($con));
		$linha=mysqli_fetch_assoc($resultado);
		
		return $linha;
	}
	
	function inclui_relacao($codigo_orcamento,$codigo_peca,$quantidade)
	{
		global $con;
		$query ="INSERT INTO orcamento_peca (codigo_orcamento,codigo_peca, quantidade) VALUES ($codigo_orcamento,$codigo_peca,$quantidade)";
		$resultado = mysqli_query($con,$query) or die("erro de inclusão de modelo".mysqli_error($con));
	}
	
	function cria_paginas()
	{
		global $con;
		$query ="SELECT* FROM orcamentos";
		$resultado = mysqli_query($con,$query) or die("erro de consulta".mysqli_error($con));
		while($linha=mysqli_fetch_assoc($resultado))
		{
			$codigo_orçamento = (int)$linha['codigo_orcamento'];
			$nome_orcamento = $linha['nome_modelo'];
			$nome_orcamento = strtolower ( $nome_orcamento );
			$nome_orcamento = str_replace(" ","",$nome_orcamento);
			$nome_orcamento .= ".php";
			if(!file_exists($nome_orcamento))
			{
				copy("modelo_padrao.php",$nome_orcamento);
			}
		}
	}
	
	function deleta_modelo($codigo_modelo)
	{
		global $con;
		$query = "SELECT* FROM orcamentos WHERE codigo_orcamento = $codigo_modelo";
		$resultado = mysqli_query($con,$query) or die("erro de consulta".mysqli_error($con));
		$linha = mysqli_fetch_assoc($resultado);
		$nome_modelo = $linha['nome_modelo'];
		$nome_modelo = strtolower ($nome_modelo);
		$nome_modelo = str_replace(" ","",$nome_modelo);
		$nome_modelo .= ".php";
		unlink("$nome_modelo");
		
		$query = "DELETE FROM orcamentos WHERE codigo_orcamento = $codigo_modelo";
		$resultado = mysqli_query($con,$query) or die("erro de exclusao.mysql_error()");
		
		$query = "DELETE FROM orcamento_peca WHERE codigo_orcamento = $codigo_modelo";
		$resultado = mysqli_query($con,$query) or die("erro de exclusao2.mysql_error()");
		
	}
	
	function inclui_modelo($nome_modelo)
	{
		global $con;
		$query ="INSERT INTO orcamentos (nome_modelo) VALUES ('$nome_modelo')";
		$resultado = mysqli_query($con,$query) or die("Erro na inclusão da Peça".mysqli_error($con));
		return 1;
	}
	
	
	
	function insere_midia($nome_midia,$nome_arquivo_midia,$tipo_midia,$descricao_midia)
	{
		global $con;
		$query ="INSERT INTO midia (nome_midia,tipo_midia,nome_arquivo_midia,descricao_midia) VALUES ('$nome_midia','$tipo_midia','$nome_arquivo_midia','$descricao_midia')";
		$resultado = mysqli_query($con,$query) or die("Erro na inclusão da Mídia".mysqli_error($con));
	}
	
	function inclui_peca($nome_peca, $valor_usd, $link)
	{
		global $con;
		$query ="INSERT INTO pecas (nome_peca,valor_unitario_usd,link) VALUES ('$nome_peca', $valor_usd, '$link')";
		$resultado = mysqli_query($con,$query) or die("erro de inclusão de peca".mysqli_error($con));
		return 1;
	}
	
	function deleta_relacao($codigo_modelo,$codigo_peca)
	{
		global $con;
		$query = "DELETE FROM orcamento_peca WHERE codigo_peca = $codigo_peca and codigo_orcamento = '$codigo_modelo'";
		$resultado = mysqli_query($con,$query) or die("erro de exclusao de peça".mysqli_error($con));
	}
	
	function deleta_peca($codigo_peca)
	{
		global $con;
		$query = "DELETE FROM pecas WHERE codigo_peca = '$codigo_peca'";
		$resultado = mysqli_query($con,$query) or die("erro de exclusao de peça".mysqli_error($con));
	}
} // fim da classe