<?php
 $servername = "127.0.0.1";
 $username = "root";
 $password="270109";
 $database="pweb";

 
// Cria conexao
$conn = mysqli_connect($servername, $username, $password,$database);

// Checa conexao
/*if (!$conn) {
    die("Falha na conexão ao servidor " . mysqli_connect_error());
}
echo "Conexão bem sucedida";
*/


$sql = "CREATE TABLE IF NOT EXISTS `condominio` (
  `id_condominio` int(11) NOT NULL AUTO_INCREMENT,
  `data` date NOT NULL,
  `copasa` double NOT NULL,
  `cemig` double NOT NULL,
  `tarifa` double NOT NULL,
  `limpeza` double NOT NULL,
  `outros` double NOT NULL,
  PRIMARY KEY (`id_condominio`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1";

//checa se a tabela foi criada com sucesso
/*if (mysqli_query($conn, $sql)) {
    echo "Table Condominio created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}
*/

?>
