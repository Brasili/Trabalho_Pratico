<!DOCTYPE html>

<html lang='pt-br'>

	<head>
	
		<meta charset="UTF-8"/>
		<title>Cadastro  de Comentarios</title>
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
			
				<legend><h2>Comente um Ponto Turistico</h2></legend>
				
				<form method = "post" action = "cadastra_comentarios.php">
					
					<br />
					<label>Nome do Autor: </label>
					<br />
					<input type = "text" name = "nome_autor" />
					
					<br />
					<br />
					
					<label>E-mail do Autor: </label>
					<br />
					<input type = "text" name = "email" />
					
					<br />
					<br />
					
					<label>Ponto Turistico: </label>
					<br />
					<select name = "ponto_comentario">
						
						<br />
						
						<option value="nulo">::Selecionar Ponto::</option>
						
						<?php 
							include("conexao.php");
							
							$select = "SELECT * FROM cidade_ponto";
							
							$resultado = mysqli_query($link,$select) or die(mysqli_error($link));
						
							while($linha = mysqli_fetch_array($resultado)){
						?>
						
						<option value = "<?= $linha['id_ponto']?>"  > <?= $linha["nome_ponto"] . " | " . $linha["nome_cidade"]. " - " . $linha["sigla"] ?> </option>	
						
						<?php
							}
						?>
					
					</select>
					
					
					
					<br />
					<br />
					
					<label>Comente Abaixo: </label>
					<br />
					<textarea name="comentario"> </textarea>
					
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