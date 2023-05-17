<?php
// Verificação dos dados do formulário 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //$nome = $_POST["nome"];
    $contato = $_POST["contato"];
    //$cpf_cnpj = $_POST["cpf_cnpj"];
    $senha = $_POST["senha"];
    

    // Conexão com o banco de dados
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "gato_net";

    $conn = new mysqli($servername, $username, $password, $database);

    // Verifiqua a conexão
    if ($conn->connect_error) {
        die("Falha na conexão: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM cadastro WHERE contato = '$contato' AND senha = '$senha'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "Login realizado com sucesso!";
        echo "<script>setTimeout(function(){window.location.href='suporte.php';}, 3000);</script>";
    } else {
        echo "Erro ao realizar o cadastro: " . $conn->error;
    }  
    $conn->close();

}

?>