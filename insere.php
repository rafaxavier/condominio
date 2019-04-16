<?php 
include("conexao.php"); 


$data=$_POST["data"];
$copasa=$_POST["copasa"];
$cemig=$_POST["cemig"];
$tarifa=$_POST["tarifa"];
$limpeza=$_POST["limpeza"];
$outros=$_POST["outros"];
$qtde=$_POST["qtde"]; 		




$sql= "INSERT INTO `condominio`(data,copasa,cemig,tarifa,limpeza,outros,qtde_morador) VALUES ('$data','$copasa','$cemig','$tarifa','$limpeza','$outros','$qtde')"; 


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
    header("Location: resultado.php");

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>


