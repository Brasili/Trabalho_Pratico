<!DOCTYPE html>

<html lang='pt-br'>

	<head>
	
		<meta charset="UTF-8"/>
		<title>Cadastro  de Pontos Turisticos</title>
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
			
				<legend><h2>Cadastre um Ponto Turistico</h2></legend>
				
				<form method = "post" action = "cadastra_pontos.php">
					
					<br />
					<label>Nome do Ponto Turistico: </label>
					<br />
					<input type = "text" name = "nome_ponto" />
					
					<br />
					<br />
					
					<label>Cidade onde está Localizado: </label>
					<br />
					<select name = "cidade_ponto">
						
						<br />
						
						<option value="nulo">::Selecionar Cidade::</option>
						
						<?php 
							include("conexao.php");
							
							$select = "SELECT * FROM cidade_pais";
							
							$resultado = mysqli_query($link,$select) or die(mysqli_error($link));
						
							while($linha = mysqli_fetch_array($resultado)){
						?>
						
						<option value = "<?= $linha['id_cidade']?>"  > <?= $linha["nome_cidade"] . " | " . $linha["sigla"] ?> </option>	
						
						<?php
							}
						?>
					
					</select>
					
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
