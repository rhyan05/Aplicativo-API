<?php
// sign_up.php (Cadastro de novo usuário)
include 'cadastro_api.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = new Usuario();
    $usuario->setNome($_POST['nome']);
    $usuario->setIdade($_POST['idade']);
    $usuario->setEmail($_POST['email']);
    $usuario->setSenha($_POST['senha']);
    $usuario->setCategoria('comum');  // Definindo categoria como "comum"

    $result = $usuario->create();
    echo json_encode($result);
}
?>
