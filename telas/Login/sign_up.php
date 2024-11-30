<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="icon forms.png"> <!--fivecon icon-->  
  <link rel="stylesheet" href="./sign_in.css">
  <title>Cadastro</title>
</head>
<body>
  <div class="container">
    <div class="form">
      <div class="form-title">
        <h1>Cadastro de Usuário</h1>
        <div class="login-button">
          <button><a href="./sign_in.php">Login</a></button>
        </div>
      </div>

      <form action="#" method="post">
        <div class="input-group">
          <div class="input-box">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" placeholder="Digite seu nome" required>
          </div>
          <div class="input-box">
            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" placeholder="Digite seu email" required>
          </div>
          <div class="input-box">
            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" placeholder="Digite sua senha" required>
          </div>
          <div class="input-box">
            <label for="confirmar-senha">Confirmar Senha:</label>
            <input type="password" id="confirmar-senha" name="confirmar-senha" placeholder="Digite sua senha novamente" required>
          </div>
        </div>


        <div class="btn-cadastro">
          <button type="submit"><a href="#">Cadastrar</a></button>
        </div>
      </form>
    </div>
  </div>
</body>
</html>