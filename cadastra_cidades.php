<!DOCTYPE html>

<html lang='pt-br'>

	<head>
	
		<meta charset="UTF-8"/>
		<title>Cadastro  de Cidades</title>
		<link rel="stylesheet" href="estilos.css"/>
		
	</head>

	<body>
	
		<?php
		
			include("conexao.php");
			
			$nome = $_POST["nome_cidade"];
			$pais = $_POST["pais_cidade"];
			
			$insert = "INSERT INTO cidades (nome_cidade, cod_pais) VALUES ('$nome','$pais')";
			
			mysqli_query($link, $insert) or die(mysqli_error($link)); 
			
			echo "<br/><br/>";
			echo "<center><h1>Cidade cadastrada com sucesso!</h1>";
			echo "<h3><a href='form_cidade.php'>Realizar Novo Cadastro!</a></h3></center>";
			
		?>
		
	</body>
	
</html>
