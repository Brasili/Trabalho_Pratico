<!DOCTYPE html>

<html lang='pt-br'>

	<head>
	
		<meta charset="UTF-8"/>
		<title>Cadastro  de Países</title>
		<link rel="stylesheet" href="estilos.css"/>
		
	</head>
	
	<body>
	
		<center>
		
			<br/>
			
			<?php
				include("menu.php");
			?>
			
			<br/>
			<br/>	
			
			<fieldset>
			
				<legend><h2>Cadastre um País</h2></legend>
			
				<form method = "post" action = "cadastra_paises.php">
					
					<br/>
					<label>Nome do país: </label>
					<br />
					<input type = "text" name = "nome" />
					
					<br />
					<br />
					
					<label>Sigla do país: </label>
					<br />
					<input type = "text" name = "sigla" />
					
					<br />
					<br />
					
					<input type = "submit" value = "Cadastrar" />
					
					<br />
					<br />
					<br />
					
				</form>
			
			</fieldset>
			
			<br/>
			<br/>
			<br/>
			
			<?php
				include("menu_lista.php");
			?>
			
			<br/>
			<br/>
			
		</center>
		
	</body>
	
</html>
