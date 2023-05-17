<?php
// Verificação dos dados do formulário 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $senha = $_POST["senha"];
    $cpf_cnpj = $_POST["cpf_cnpj"];
    $contato = $_POST["contato"];
    $plano = $_POST["plano"];
    

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

    // Executa a consulta SQL para inserir os dados na tabela
    $sql = "INSERT INTO cadastro (nome, senha, cpf_cnpj, contato, plano) VALUES ('$nome', '$senha', '$cpf_cnpj', '$contato','$plano')";
    // Executa consultas adicionais para inserir os outros campos na tabela

    if ($conn->query($sql) === TRUE) {
        echo "Cadastro realizado com sucesso!" ;
        echo "<script>setTimeout(function(){window.location.href='suporte.php';}, 3000);</script>";
    } else {
        echo "Erro ao realizar o cadastro: " . $conn->error;
    }  
    $conn->close();

}

?>