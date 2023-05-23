<?php


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verifica se os dados foram preenchidos
    if (isset($_POST['nome']) && isset($_POST['senha']) && isset($_POST['cpf_cnpj']) && isset($_POST['contato'])) {
        $nome = $_POST['nome'];
        $senha = $_POST['senha'];
        $cpf_cnpj = $_POST['cpf_cnpj'];
        $contato = $_POST['contato'];


class Conexao {
    private $host = 'localhost';
    private $dbname = 'gato_net';
    private $usuario = 'root';
    private $senha = '';
    
    public function conectar() {
        try {
            $conexao = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->usuario, $this->senha);
            $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conexao;
        } catch (PDOException $e) {
            echo 'Erro na conexão com o banco de dados: ' . $e->getMessage();
        }
    }
}
class Usuario {
    private $conexao;
    
    public function __construct($conexao) {
        $this->conexao = $conexao;
    }
    
    public function cadastrar($nome, $senha, $cpf_cnpj, $contato) {
        $sql = "INSERT INTO cadastro (nome, senha, cpf_cnpj, contato) VALUES (:nome, :senha, :cpf_cnpj, :contato)";
        
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':senha', $senha);
        $stmt->bindParam(':cpf_cnpj', $cpf_cnpj);
        $stmt->bindParam(':contato', $contato);
        
        try {
            $stmt->execute();
            echo 'Usuário cadastrado com sucesso!';
        } catch (PDOException $e) {
            echo 'Erro ao cadastrar usuário: ' . $e->getMessage();
        }
    }
 
    public function listar() {
        $sql = "SELECT * FROM cadastro";
        
        $stmt = $this->conexao->prepare($sql);
        
        try {
            $stmt->execute();
            $usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $cadastro;
        } catch (PDOException $e) {
            echo 'Erro ao listar usuários: ' . $e->getMessage();
        }
    }
    
    public function atualizar($id, $nome, $senha, $cpf_cnpj, $contato) {
        $sql = "UPDATE cadastrp SET nome = :nome, senha = :senha, cpf_cnpj = :cpf_cnpj WHERE id = :id";
        
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':senha', $email);
        $stmt->bindParam(':cpf_cnpj', $cpf_cnpj);
        $stmt->bindParam(':contato', $contato);
        $stmt->bindParam(':id', $id);
        
        try {
            $stmt->execute();
            echo 'Usuário atualizado com sucesso!';
        } catch (PDOException $e) {
            echo 'Erro ao atualizar usuário: ' . $e->getMessage();
        }
    }
    
    public function excluir($id) {
        $sql = "DELETE FROM cadastro WHERE id = :id";
        
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindParam(':id', $id);
        
        try {
            $stmt->execute();
            echo 'Usuário excluído com sucesso!';
        } catch (PDOException $e) {
            echo 'Erro ao excluir usuário: ' . $e->getMessage();
        }
    }
}

$conexao = new Conexao();

$usuario = new Usuario($conexao->conectar());

$usuario->cadastrar($nome, $senha, $cpf_cnpj, $contato);
    


    } else {
        echo 'Por favor, preencha todos os campos do formulário.';
    }
} else {
    echo 'O formulário não foi enviado.';
}
