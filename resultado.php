
<?php //include("funcoes.php");
	include("conexao.php"); 

//criando a query de consulta à tabela criada 
$sql = mysqli_query($conn, "SELECT * FROM condominio") or die( 
  mysqli_error($cx) //caso haja um erro na consulta 
);

?>

<!DOCTYPE html>
<html>
	<head>
	<title>Condominio</title>
	<link rel="stylesheet" type="text/css" href="_css/estilo.css">
	<meta charset="utf-8">	

	</head>

	<body>
		<div align='center'>
			<fieldset id="valores">
				<legend>Resultado</legend>
					<table border="1">
					    <tr>
					      <th>Código</th>
					      <th>Data</th>
					      <th>Copasa</th>
					      <th>Cemig</td>
					      <th>Tarifas Bancárias</th>
					      <th>Limpeza</th>
					      <th>Outras Despesas</th>
					      <th>Total Condominio</th>
					      <th>Total Despesas</th>
					      <th>qtde de morador</th>
					    </tr>
					    
					    <?php
					    //pecorrendo os registros da consulta.
					     
							 while ($aux = mysqli_fetch_assoc($sql)){
								$total_cond= $aux["tarifa"]+$aux["limpeza"]+$aux["outros"];
						      $total_desp= $total_cond+ $aux["copasa"]+$aux["cemig"];

							  echo "<tr><td>".$aux["id_condominio"]."</td>"; 
							  echo "<td>".date('d/m/Y',  strtotime($aux["data"]))."</td>"; 
							  echo "<td>R$".$aux["copasa"]."</td>"; 
							  echo "<td>R$".$aux["cemig"]."</td>"; 
							  echo "<td>R$".$aux["tarifa"]."</td>";
							  echo "<td>R$".$aux["limpeza"]."</td>";
							  echo "<td>R$".$aux["outros"]."</td>";
							  echo "<td>R$".$total_cond."</td>"; //terei q criar um vetor aqui 
							  echo "<td>R$".$total_desp."</td>";// aqui tbm para calcular
							  echo "<td>".$aux["qtde_morador"]."</td></tr>";// aqui tbm para calcular


							  
							} 
							 
							 
							
							mysqli_close($conn);	
		   				?>
		   			</table>
			</fieldset>
		</div>
		<br><br><br>
			<button class="botao" onclick="window.location.href='index.php'">INSERIR</button>
			<button class="botao" onclick="window.location.href='estatisticas.php'">ESTATÍSTICAS</button>
	</body>
</html>
