<?php
class Usuario {
    private $nome;
    private $idade;
    private $email;
    private $senha;
    private $categoria;

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setIdade($idade) {
        $this->nome = $idade;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setSenha($senha) {
        $this->senha = password_hash($senha, PASSWORD_DEFAULT);  // Criptografar senha
    }

    public function setCategoria($categoria) {
        $this->categoria = $categoria;
    }

    // Criar novo usuário
    public function create() {
        include 'db.php';

        $query = "INSERT INTO usuarios (nome, idade, email, senha, categoria) VALUES (:nome, :idade,:email, :senha, :categoria)";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':nome', $this->nome);
        $stmt->bindParam(':idade', $this->idade);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':senha', $this->senha);
        $stmt->bindParam(':categoria', $this->categoria);

        if ($stmt->execute()) {
            return ["message" => "Usuário criado com sucesso!"];
        } else {
            return ["error" => "Erro ao criar usuário."];
        }
    }
}
?>
