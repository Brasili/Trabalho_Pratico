<!DOCTYPE html>

<html lang='pt-br'>

	<head>
	
		<meta charset="UTF-8"/>
		<title>Cadastro  de Pontos Turisticos</title>
		<link rel="stylesheet" href="estilos.css"/>
		
	</head>

	<body>
	
		<?php
		
			include("conexao.php");
			
			$nome = $_POST["nome_ponto"];
			$cidade = $_POST["cidade_ponto"];
			
			$insert = "INSERT INTO ponto_turistico (nome_ponto, cidade_ponto) VALUES ('$nome','$cidade')";
			
			mysqli_query($link, $insert) or die(mysqli_error($link)); 
			
			echo "<br/><br/>";
			echo "<center><h1>Ponto Turistico cadastrado com sucesso!</h1>";
			echo "<h3><a href='form_ponto.php'>Realizar Novo Cadastro!</a></h3></center>";
			
		?>
		
	</body>
	
</html>
