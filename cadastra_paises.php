<!DOCTYPE html>

<html lang='pt-br'>

	<head>
	
		<meta charset="UTF-8"/>
		<title>Cadastro  de Países</title>
		<link rel="stylesheet" href="estilos.css"/>
		
	</head>

	<body>
	
		<?php
			
			include("conexao.php");
			
			$nome = $_POST["nome"];
			$sigla = $_POST["sigla"];
			
			$insert = "INSERT INTO paises(nome, sigla) VALUES ('$nome','$sigla')";
			
			mysqli_query($link, $insert) or die(mysqli_error($link)); 
			
			echo "<br/><br/>";
			echo "<center><h1>País cadastrado com sucesso!</h1>";
			echo "<h3><a href='form_pais.php'>Realizar Novo Cadastro!</a></h3></center>";
		
		?>
		
	</body>
	
</html>
