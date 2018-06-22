<?php

	include("conexao.php");
	
	$aux = $_GET["id"];
	
	$delete = "DELETE FROM ponto_turistico WHERE id_ponto = $aux ";

	if (mysqli_query($link,$delete)){
		
		header("Location: lista_pontos.php");
		
	}else{
		
		Echo"<center><br/><br/><h3>Nao e possivel deletar essa informacao do BD, pois ha comentarios em relcao ao Ponto Turistico.</h3>
		<br/><a href='lista_pontos.php'>Voltar</a></center>";
	}
	
?>