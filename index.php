<?php 
	include('conexao.php');
?>
<!DOCTYPE html> <!--aqui é  tipo do documento -->

<html>
<head>
	<title>Condomínio</title> <!--aqui é o titulo da pagina -->
	<meta charset="utf-8">	
	<link rel="stylesheet" type="text/css" href="_css/estilo.css">
</head>



<body>
	<div id="conteiner">
		<fieldset id="valores">
				<legend>Condomínio</legend>
				
				<form action="insere.php" method="post">
					<label for="data">Data:</label>
					<input type="date" name="data" id="data">
					<label for="copasa">Copasa:</label>
					<input type="text" name="copasa" id="copasa">
					<label for="cemig">Cemig:</label>
					<input type="text" name="cemig" id="cemig">
					<label for="tarifa">Tarifa Bancária:</label>
					<input type="text" name="tarifa" id="tarifa">
					<label for="limpeza">Limpeza do Prédio:</label>
					<input type="text" name="limpeza" id="limpeza">
					<label for="outros">Outras Despesas:</label>
					<input type="text" name="outros" id="outros"><br>
					<label for="qtde">Número de moradores:</label>
					<select name="qtde">
						<?php 
							for ($i=1; $i<=20; $i++)
							{
								echo "<option value'$i'>$i</option>";
							} 
						?>
					</select>

					<br>
					<input class="botao" type="submit" value="INSERIR"> 
				</form>
				<div class="botao-index">
					<button class="botao" onclick="window.location.href='resultado.php' ">LISTAR TABELA</button>
					<button class="botao" onclick="window.location.href='estatisticas.php'">ESTATÍSTICA</button>
				</div>
		</fieldset>
	</div>
	
	Rafael Xavier do Nascimento -SI 4°Periodo

</body>

</html>