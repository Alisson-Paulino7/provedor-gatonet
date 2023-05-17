<?php
$servername = "localhost"; 
$username = "root"; 
$password = "";   
$database = "gato_net";  

// Estabelece a conexão com o banco de dados
$conn = mysqli_connect($servername, $username, $password, $database);

// Verifica se a conexão foi estabelecida com sucesso
if (!$conn) {
    die("Falha na conexão: " . mysqli_connect_error());
}
?>
