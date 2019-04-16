<?php //include("funcoes.php");
	include("conexao.php"); 

//criando a query de consulta à tabela para conta de agua mais alta 
$agua_alta = mysqli_query($conn, "SELECT * FROM condominio order by copasa desc limit 1") or die( 
  mysqli_error($cx) //caso haja um erro na consulta 
);
//criando a query de consulta à tabela para conta de luz mais alta
$luz_alta = mysqli_query($conn, "SELECT * FROM condominio order by cemig desc limit 1") or die( 
  mysqli_error($cx) //caso haja um erro na consulta 
);
//consulta à tabela para conta de agua mais baixa 
$agua_baixa = mysqli_query($conn, "SELECT * FROM condominio order by copasa asc limit 1") or die( 
  mysqli_error($cx) //caso haja um erro na consulta 
);
//consulta à tabela para conta de luz mais baixa
$luz_baixa = mysqli_query($conn, "SELECT * FROM condominio order by cemig asc limit 1") or die( 
  mysqli_error($cx) //caso haja um erro na consulta 
);
//pega todos os dados solicitado da tabela
$sql = mysqli_query($conn, "SELECT * FROM condominio") or die( 
  mysqli_error($cx) //caso haja um erro na consulta 
);
//funçao de pegar  a media de um campo
$media_cond = mysqli_query($conn, "SELECT AVG(tarifa + limpeza + outros) as 'media_cond' FROM condominio");
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
				<legend>Estatística</legend>
				<table border="1">

					<tr>
						<th>Mês que a conta de água foi a mais alta</th>
						<th>Mês que a conta de luz foi a mais alta</th>
						<th>Mês que a conta de água foi a mais baixa</th>
						<th>Mês que a conta de luz foi a mais baixa</th>
					</tr>
					    
					    <?php
					    //pecorrendo os registros da consulta.
					     
							while ($aux = mysqli_fetch_assoc($agua_alta)){
							  	echo "<tr><td>".date('d/m/Y',  strtotime($aux["data"]))."<br>R$".number_format($aux["copasa"],2)."</td>"; 
							}
							 
							while ($aux = mysqli_fetch_assoc($luz_alta)){
							 	echo "<td>".date('d/m/Y',  strtotime($aux["data"]))."<br>R$".number_format($aux["cemig"],2)."</td>"; 
							} 

							while ($aux = mysqli_fetch_assoc($agua_baixa)){
							 	echo "<td>".date('d/m/Y',  strtotime($aux["data"]))."<br>R$".number_format($aux["copasa"],2)."</td>"; 
							}

							while ($aux = mysqli_fetch_assoc($luz_baixa)){
							 	echo "<td>".date('d/m/Y',  strtotime($aux["data"]))."<br>R$".number_format($aux["cemig"],2)."</td></tr>"; 
							} 


					
							//mysqli_close($conn);	
		   				?>
		   		</table><br><br>

		   		<table>	
		   			<th>Valor Médio mensal dos gastos do condomínio</th>

					    <?php 
					    	while ($aux = mysqli_fetch_assoc($media_cond)){
								echo "<tr><td>R$".number_format($aux["media_cond"],2)."</td></tr>"; 
							} 
						?>  

				</table><br><br>

				<table>
					<th colspan="4">Valor do condomínio por morador</th>
						      
					    <?php 
					    	while ($aux = mysqli_fetch_assoc($sql)){
					    	$total_cond= $aux["tarifa"]+$aux["limpeza"]+$aux["outros"];
						    $total_desp= $total_cond+ $aux["copasa"]+$aux["cemig"];
						    $total_por_morador = $total_cond / $aux["qtde_morador"];
							 	
							   echo "<tr><td>Data :".$aux["data"]."	</td>	
							   <td>Qtde morador :".$aux["qtde_morador"]."	</td>	
							   <td>total cond : R$".number_format($total_cond,2)."	</td>	
							   <td>total para cada morador : R$".number_format($total_por_morador,2)."</td></tr>";// aqui tbm para calcular
							 
							} 

						
						?> 
		   									    
		   		</table>
			</fieldset>
		</div>
		<br><br><br>
			<button class="botao" onclick="window.location.href='index.php'">INSERIR</button>
			<button class="botao" onclick="window.location.href='resultado.php'">LISTAR TABELA</button>
	</body>
</html>
