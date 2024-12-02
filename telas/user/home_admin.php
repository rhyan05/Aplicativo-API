<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualizar Tabelas</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>

<h1>Visualizar Tabelas</h1>

<!-- Seção para Livros -->
<h2>Livros</h2>
<table id="livros-table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Editora</th>
            <th>Autor</th>
            <th>Data de Lançamento</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody></tbody>
</table>

<!-- Seção para Autores -->
<h2>Autores</h2>
<table id="autores-table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
        </tr>
    </thead>
    <tbody></tbody>
</table>

<!-- Seção para Editoras -->
<h2>Editoras</h2>
<table id="editoras-table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody></tbody>
</table>

<!-- Seção para Estoque -->
<h2>Estoque</h2>
<table id="estoque-table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Status</th>
            <th>Livro</th>
        </tr>
    </thead>
    <tbody></tbody>
</table>

<!-- Seção para Livrarias -->
<h2>Livrarias</h2>
<table id="livrarias-table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Estoque</th>
            <th>Livro</th>
        </tr>
    </thead>
    <tbody></tbody>
</table>

<script>
// Função para carregar dados das tabelas
const loadData = async (type) => {
    const response = await fetch(`http://localhost/Projetos/API/apis-php/API_CRUD_PROJETO/crud.php?type=${type}&fn=read`);
    const data = await response.json();

    if (data[type]) {
        const tableBody = document.getElementById(`${type}-table`).querySelector('tbody');
        tableBody.innerHTML = '';
        data[type].forEach(item => {
            const row = document.createElement('tr');
            for (const key in item) {
                const cell = document.createElement('td');
                cell.textContent = item[key];
                row.appendChild(cell);
            }
            tableBody.appendChild(row);
        });
    }
};

// Carregar as tabelas quando a página carregar
window.onload = () => {
    loadData('livro');
    loadData('autor');
    loadData('editora');
    loadData('estoque');
    loadData('livraria');
};
</script>

</body>
</html>
