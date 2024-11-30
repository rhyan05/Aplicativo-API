<?php
// sign_in.php (Login de usuário)
class Usuario {
    private $email;
    private $senha;

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }

    // Verificar se o usuário existe
    public function login() {
        include 'db.php';

        $query = "SELECT * FROM usuarios WHERE email = :email";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':email', $this->email);
        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($result && password_verify($this->senha, $result['senha'])) {
            return $result;  // Retorna os dados do usuário
        } else {
            return false;  // Senha ou e-mail incorretos
        }
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = new Usuario();
    $usuario->setEmail($_POST['email']);
    $usuario->setSenha($_POST['senha']);

    $user_data = $usuario->login();

    if ($user_data) {
        session_start();
        $_SESSION['id'] = $user_data['id'];
        $_SESSION['nome'] = $user_data['nome'];
        $_SESSION['categoria'] = $user_data['categoria'];
        header("Location: verify_api.php");  // Redireciona para a verificação
    } else {
        echo "Credenciais inválidas.";
    }
}
?>
