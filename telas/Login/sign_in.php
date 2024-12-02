<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="icon forms.png"> <!--fivecon icon-->  
  <link rel="stylesheet" href="./sign_in.css">
  <title>Login</title>
</head>
<body>
  <div class="container">
    <div class="form">
      <div class="form-title">
        <h1>Login</h1>
        <div class="login-button">
          <button><a href="./sign_up.php">Cadastrar</a></button>
        </div>
      </div>

      <form action="login.php" method="post">
        <div class="input-box">
          <label for="email">E-mail:</label>
          <input type="email" id="email" name="email" placeholder="Digite seu email" required>
        </div>
        <div class="input-box">
          <label for="senha">Senha:</label>
          <input type="password" id="senha" name="senha" placeholder="Digite sua senha" required>
        </div>

        <div class="btn-cadastro">
          <button type="submit">Logar</button>
        </div>
      </form>
    </div>
  </div>
</body>
</html>
