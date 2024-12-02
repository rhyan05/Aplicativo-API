<?php
// Classe de Usuário
class Usuario {
    private $id;
    private $nome;
    private $email;
    private $status;

    // Construtor
    public function __construct($id = null, $nome = null, $email = null, $status = null) {
        $this->id = $id;
        $this->nome = $nome;
        $this->email = $email;
        $this->status = $status;
    }

    // Métodos Getters e Setters
    public function getID() {
        return $this->id;
    }

    public function setID($id) {
        $this->id = $id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setStatus($status) {
        $this->status = $status;
    }

    // Método para criar um novo usuário
    public function create() {
        global $conn; // Assumindo que a conexão com o banco de dados já foi criada
        $sql = "INSERT INTO usuarios (nome, email, status) VALUES ('$this->nome', '$this->email', '$this->status')";
        return $conn->query($sql);
    }

    // Método para ler todos os usuários
    public function read() {
        global $conn;
        $sql = "SELECT * FROM usuarios";
        $result = $conn->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC); // Retorna todos os usuários
    }

    // Método para ler um usuário específico pelo ID
    public function readByID() {
        global $conn;
        $sql = "SELECT * FROM usuarios WHERE id = '$this->id'";
        $result = $conn->query($sql);
        return $result->fetch_assoc(); // Retorna um único usuário
    }

    // Método para atualizar as informações de um usuário
    public function update() {
        global $conn;
        $sql = "UPDATE usuarios SET nome = '$this->nome', email = '$this->email', status = '$this->status' WHERE id = '$this->id'";
        return $conn->query($sql);
    }

    // Método para excluir um usuário
    public function delete() {
        global $conn;
        $sql = "DELETE FROM usuarios WHERE id = '$this->id'";
        return $conn->query($sql);
    }
}
?>
