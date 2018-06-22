<?php

	include("conexao.php");
	
	
	if(isset($_POST["filtro"])){
		
		$select = "SELECT * FROM lista_pontos where nome_ponto LIKE '%".$_POST["filtro"]."%' ";
		
	} else {
	
		$select = "SELECT * FROM lista_pontos ";
	
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
			
			<h1>PONTOS TURISTICOS</h1>
			
			<form method = 'post' action = 'lista_pontos.php'>
				
				<br />
				<label>Nome do Ponto: </label>
				<input type = 'text' name = 'filtro' />
				<input type = 'submit' value = 'Buscar' />
				
			</form>
			
			<form method = 'post' action = 'lista_pontos.php'>
				
				<br />
				<input type = 'radio' name = 'order' value='nome_ponto'/>Ponto turistico
				<input type = 'radio' name = 'order' value='nome_cidade'/>Cidade
				<input type = 'submit' value = 'Ordenar' /><br/><br/>
				
			</form>
			
			<table border = '1'>
			
				<tr>
				
					<th>Nome do Ponto Turistico</th>
					<th>Cidade do Ponto Turistico</th>
					<th>Acao</th>
				
				</tr>
		
	";
	
	while($linha = mysqli_fetch_array($resultado)){
		
		echo "
			
			<tr>
				
				<td>$linha[nome_ponto]</td>
				<td>$linha[nome_cidade]</td>
				<td><a href=remove_ponto.php?id=$linha[id_ponto]>Remover</a></td>
				
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
