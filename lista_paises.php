<?php

	include("conexao.php");
	
	if(isset($_POST["filtro"])){
		
		$select = "SELECT * FROM paises where nome LIKE '%".$_POST["filtro"]."%' ";
		
	} else {
	
		$select = "SELECT * FROM paises ";
	
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
			
			<h1>PAISES</h1>
			
			<form method = 'post' action = 'lista_paises.php'>
				
				<br />
				<label>Nome do Pais: </label>
				<input type = 'text' name = 'filtro' />
				<input type = 'submit' value = 'Buscar' />
				
			</form>
			
			<form method = 'post' action = 'lista_paises.php'>
				
				<br />
				<input type = 'radio' name = 'order' value='sigla'/>Sigla
				<input type = 'radio' name = 'order' value='nome'/>Nome
				<input type = 'submit' value = 'Ordenar' /><br/><br/>
				
			</form>
			
			<table border = '1'>
			
				<tr>
				
					<th>Nome do Pais</th>
					<th>Sigla do Pais</th>
					<th>Acao</th>
				
				</tr>
		
	";
	
	while($linha = mysqli_fetch_array($resultado)){
		
		echo "
			
			<tr>
				
				<td>$linha[nome]</td>
				<td>$linha[sigla]</td>
				<td><a href=remove_pais.php?id=$linha[id_pais]>Remover</a></td>
				
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
