<?php
require_once 'tabelas/Editora.php';
require_once 'tabelas/Autor.php';
require_once 'tabelas/Livro.php';
require_once 'tabelas/Estoque.php';
require_once 'tabelas/Livraria.php';

header("Content-Type: application/json");

$type = $_REQUEST['type'] ?? null;
$data = [];

switch ($type) {
    case 'editora':
        $editora = new Editora();
        if ($_REQUEST['fn'] === "read") {
            $data["editora"] = $editora->read();  // Retorna todos os registros de editoras
        } else {
            $data["error"] = "Função inválida para Editora.";
        }
        break;

    case 'autor':
        $autor = new Autor();
        if ($_REQUEST['fn'] === "read") {
            $data["autor"] = $autor->read();  // Retorna todos os registros de autores
        } else {
            $data["error"] = "Função inválida para Autor.";
        }
        break;

    case 'livro':
        $livro = new Livro();
        if ($_REQUEST['fn'] === "read") {
            $data["livro"] = $livro->read();  // Retorna todos os registros de livros
        } else {
            $data["error"] = "Função inválida para Livro.";
        }
        break;

    case 'estoque':
        $estoque = new Estoque();
        if ($_REQUEST['fn'] === "read") {
            $data["estoque"] = $estoque->read();  // Retorna todos os registros de estoque
        } else {
            $data["error"] = "Função inválida para Estoque.";
        }
        break;

    case 'livraria':
        $livraria = new Livraria();
        if ($_REQUEST['fn'] === "read") {
            $data["livraria"] = $livraria->read();  // Retorna todos os registros de livrarias
        } else {
            $data["error"] = "Função inválida para Livraria.";
        }
        break;

    default:
        $data["error"] = "Tipo inválido.";
}

// Retorna os dados em formato JSON
echo json_encode($data);
?>
