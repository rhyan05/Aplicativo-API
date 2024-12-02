<?php
session_start();

// Função para retornar uma resposta JSON
function sendResponse($status, $message, $data = null) {
    header('Content-Type: application/json');
    echo json_encode([
        'status' => $status,
        'message' => $message,
        'data' => $data
    ]);
    exit;
}

// Verificar se o usuário está logado
if (!isset($_SESSION['email'])) {
    sendResponse('error', 'Usuário não logado', null);
}

// Verificar a categoria do usuário
if (isset($_SESSION['category'])) {
    $category = $_SESSION['category'];

    // Redirecionar de acordo com a categoria
    if ($category == 'comum') {
        sendResponse('success', 'Usuário comum', ['redirect_url' => '../user/home_user.php']);
    } elseif ($category == 'admin') {
        sendResponse('success', 'Admin', ['redirect_url' => '../admin/home_admin.php']);
    } elseif ($category == 'seller') {
        sendResponse('success', 'Vendedor', ['redirect_url' => '../Vendedor/home_vendedor.php']);
    } else {
        sendResponse('error', 'Categoria não existe', null);
    }
} else {
    sendResponse('error', 'Categoria não definida', null);
}
?>
