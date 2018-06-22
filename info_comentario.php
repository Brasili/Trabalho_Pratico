<?php

	include("conexao.php");
	
	$select = "SELECT * FROM lista_comentarios ";
	$resultado = mysqli_query($link,$select) or die(mysqli_error($link));
	
	echo"<br/><br/>";
	
	echo "
		<center>
			<fieldset>
			
			<br/>";
			include('menu.php');
			echo"<br/>
			
			<h1>INFORMACOES DO COMENTARIO</h1>
			
			<table border = '1'>
			
				<tr>
				
					<th>Autor</th>
					<th>Ponto Turistico</th>
					<th>Comentario</th>
					<th>E-mail</th>
					<th>Data de publicacao</th>
				
				</tr>
		
	";
	
	while($linha = mysqli_fetch_array($resultado)){
		
		echo "
			
			<tr>
				
				<td>$linha[nome_autor]</td>
				<td>$linha[nome_ponto]</td>
				<td>$linha[comentario]</td>
				<td>$linha[email_autor]</td>
				<td>$linha[data_comentario]</td>
				
			</tr>
			
		";
		
	}
	
	echo "
			</table><br/><br/>";
			
			echo "<a href=lista_comentarios.php>Voltar</a><br/><br/><br/>";
			
			include('menu_lista.php');
		
			echo"<br/><br/>
			</fieldset>
		</center>
	
	";

?>