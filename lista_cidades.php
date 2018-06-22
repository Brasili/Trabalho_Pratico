<?php

	include("conexao.php");
	
	if(isset($_POST["filtro"])){
		
		$select = "SELECT * FROM lista_cidades WHERE nome_cidade LIKE '%".$_POST["filtro"]."%' ";
		
	} else {
	
		$select = "SELECT * FROM lista_cidades ";
	
	}
	
	if(isset($_POST["order"])) {
		$select .= "ORDER BY ".$_POST["order"];
	}
	
	$resultado = mysqli_query($link,$select) or die(mysqli_error($link));
	
	echo"<br/><br/>";
	
	echo "
		<center>
			<fieldset>
			
			<br/>";
			include('menu.php');
			echo"<br/>
			
			<h1>CIDADES</h1>
			
			<form method = 'post' action = 'lista_cidades.php'>
				
				<br />
				<label>Nome da Cidade: </label>
				<input type = 'text' name = 'filtro' />
				<input type = 'submit' value = 'Buscar' />
				
			</form>
			
			<form method = 'post' action = 'lista_cidades.php'>
				
				<br />
				<input type = 'radio' name = 'order' value='nome_cidade'/>Cidade
				<input type = 'radio' name = 'order' value='nome'/>Pais
				<input type = 'submit' value = 'Ordenar' /><br/><br/>
				
			</form>
			
			<table border = '1'>
			
				<tr>
				
					<th>Nome da Cidade</th>
					<th>Pais da Cidade</th>
					<th>Acao</th>
				
				</tr>
		
	";
	
	while($linha = mysqli_fetch_array($resultado)){
		
		echo "
			
			<tr>
				
				<td>$linha[nome_cidade]</td>
				<td>$linha[nome]</td>
				<td><a href=remove_cidade.php?id=$linha[id_cidade]>Remover</a></td>
				
			</tr>
			
		";
		
	}
	
	echo "
			</table><br/><br/>";
			
			include('menu_lista.php');
		
			echo"<br/><br/>
			</fieldset>
		</center>
	
	";

?>
