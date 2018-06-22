<!DOCTYPE html>

<html lang='pt-br'>

	<head>
	
		<meta charset="UTF-8"/>
		<title>Cadastro  de Comentarios</title>
		<link rel="stylesheet" href="estilos.css"/>
		
	</head>

	<body>
	
		<?php
		
			include("conexao.php");
			
			date_default_timezone_set('America/Sao_Paulo');
			
			$data = date('d/m/Y');
			
			$nome = $_POST["nome_autor"];
			$email = $_POST["email"];
			$ponto = $_POST["ponto_comentario"];
			$comentario = $_POST["comentario"];
			
			$insert = "INSERT INTO comentarios (nome_autor, email_autor, data_comentario, cod_ponto, comentario) VALUES ('$nome','$email', '$data', '$ponto', '$comentario')";
			
			mysqli_query($link, $insert) or die(mysqli_error($link)); 
			
			echo "<br/><br/>";
			echo "<center><h1>Ponto Comentario cadastrado com sucesso!</h1>";
			echo "<h3><a href='form_comentario.php'>Realizar Novo Cadastro!</a></h3></center>";
			
		?>
		
	</body>
	
</html>
