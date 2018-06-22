<!DOCTYPE html>

<html lang='pt-br'>

	<head>
	
		<meta charset="UTF-8"/>
		<title>Cadastro  de Cidades</title>
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
			
				<legend><h2>Cadastre uma Cidade</h2></legend>
				
				<form method = "post" action = "cadastra_cidades.php">
					
					<br />
					<label>Nome da Cidade: </label>
					<br />
					<input type = "text" name = "nome_cidade" />
					
					<br />
					<br />
					
					<label>País da Cidade: </label>
					<br />
					<select name = "pais_cidade">
						
						<br />
						
						<option value="nulo">::Selecionar País::</option>
						
						<?php 
							include("conexao.php");
							
							$select = "SELECT * FROM paises";
							
							$resultado = mysqli_query($link,$select) or die(mysqli_error($link));
						
							while($linha = mysqli_fetch_array($resultado)){
						?>
						
						<option value = "<?= $linha['id_pais']?>"  > <?= $linha["nome"] . " | " . $linha["sigla"] ?> </option>	
						
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
