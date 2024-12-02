<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD de Livraria</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>CRUD de Livraria</h1>

        <!-- Formulário e Listagem da Editora -->
        <div id="editora-section">
            <h2>Adicionar Editora</h2>
            <form id="editora-form">
                <input type="text" id="editora-name" placeholder="Nome da Editora" required>
                <button type="submit">Adicionar Editora</button>
            </form>
            <h2>Listar Editoras</h2>
            <button id="list-editora">Carregar Editoras</button>
            <ul id="editora-list"></ul>
        </div>

        <!-- Formulário e Listagem do Autor -->
        <div id="autor-section">
            <h2>Adicionar Autor</h2>
            <form id="autor-form">
                <input type="text" id="autor-name" placeholder="Nome do Autor" required>
                <button type="submit">Adicionar Autor</button>
            </form>
            <h2>Listar Autores</h2>
            <button id="list-autor">Carregar Autores</button>
            <ul id="autor-list"></ul>
        </div>

        <!-- Formulário e Listagem do Livro -->
        <div id="livro-section">
            <h2>Adicionar Livro</h2>
            <form id="livro-form">
                <input type="text" id="livro-title" placeholder="Título do Livro" required>
                <input type="text" id="livro-author" placeholder="Autor do Livro" required>
                <button type="submit">Adicionar Livro</button>
            </form>
            <h2>Listar Livros</h2>
            <button id="list-livro">Carregar Livros</button>
            <ul id="livro-list"></ul>
        </div>

        <!-- Formulário e Listagem do Estoque -->
        <div id="estoque-section">
            <h2>Adicionar Estoque</h2>
            <form id="estoque-form">
                <input type="text" id="estoque-book" placeholder="Livro no Estoque" required>
                <input type="number" id="estoque-quantity" placeholder="Quantidade" required>
                <button type="submit">Adicionar Estoque</button>
            </form>
            <h2>Listar Estoque</h2>
            <button id="list-estoque">Carregar Estoque</button>
            <ul id="estoque-list"></ul>
        </div>

        <!-- Formulário e Listagem da Livraria -->
        <div id="livraria-section">
            <h2>Adicionar Livraria</h2>
            <form id="livraria-form">
                <input type="text" id="livraria-name" placeholder="Nome da Livraria" required>
                <button type="submit">Adicionar Livraria</button>
            </form>
            <h2>Listar Livrarias</h2>
            <button id="list-livraria">Carregar Livrarias</button>
            <ul id="livraria-list"></ul>
        </div>

        <!-- Formulário e Listagem do Usuário -->
        <div id="usuario-section">
            <h2>Adicionar Usuário</h2>
            <form id="usuario-form">
                <input type="text" id="usuario-name" placeholder="Nome do Usuário" required>
                <button type="submit">Adicionar Usuário</button>
            </form>
            <h2>Listar Usuários</h2>
            <button id="list-usuario">Carregar Usuários</button>
            <ul id="usuario-list"></ul>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>
