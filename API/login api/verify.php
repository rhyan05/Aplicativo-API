<?php
// verify_api.php (Verificação do tipo de usuário e redirecionamento)
session_start();

if (isset($_SESSION['categoria'])) {
    $categoria = $_SESSION['categoria'];

    if ($categoria == 'comum') {
        header("Location: ../../telas/user/home_user.php");  // Redireciona para a página do usuário comum
    } elseif ($categoria == 'admin') {
        header("Location: ../../telas/admin/home_admin.php");  // Redireciona para a página de administração
    } else {
        echo "Categoria de usuário inválida.";
    }
} else {
    echo "Sessão não iniciada. Faça login.";
}
?>
