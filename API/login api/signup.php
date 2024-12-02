<?php
require_once 'db.php'; // Conexão com o banco de dados

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $confirmar_senha = $_POST['confirmar-senha'];

    // Verifica se as senhas coincidem
    if ($senha === $confirmar_senha) {
        // Criptografa a senha
        $senha_hash = password_hash($senha, PASSWORD_DEFAULT);

        // Insere o novo usuário no banco de dados
        $stmt = $pdo->prepare("INSERT INTO registration (username, email, password, category) VALUES (?, ?, ?, ?)");
        $stmt->execute([$nome, $email, $senha_hash, 'usuario']);

        echo "Cadastro realizado com sucesso!";
    } else {
        echo "As senhas não coincidem.";
    }
}
?>
