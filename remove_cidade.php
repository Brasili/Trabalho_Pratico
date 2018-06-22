<?php

	include("conexao.php");
	
	$aux = $_GET["id"];
	
	$delete = "DELETE FROM cidades WHERE id_cidade = $aux ";

	if (mysqli_query($link,$delete)){
		
		header("Location: lista_cidades.php");
		
	}else{
		
		Echo"<center><br/><br/><h3>Nao e possivel deletar essa informacao do BD, pois ha pontos cadastradas nesta cidade.</h3>
		<br/><a href='lista_cidades.php'>Voltar</a></center>";
	}
	
?>