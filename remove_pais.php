<?php

	include("conexao.php");
	
	$aux = $_GET["id"];
	
	$delete = "DELETE FROM paises WHERE id_pais = $aux ";

	if (mysqli_query($link,$delete)){
		
		header("Location: lista_paises.php");
		
	}else{
		
		Echo"<center><br/><br/><h3>Nao e possivel deletar essa informacao do BD, pois ha cidades cadastradas neste pais.</h3>
		<br/><a href='lista_paises.php'>Voltar</a></center>";
	}
	
?>