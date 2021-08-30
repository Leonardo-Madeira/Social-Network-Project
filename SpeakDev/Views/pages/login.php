<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo INCLUDE_PATH_STATIC ?>styles/styles.css">
  <title>Login Speak Dev</title>
</head>

<body>
  <div class="main">
    <div class="center">
      <div class="text">
        <h1>Speak Dev</h1>
        <br />
        <p>Social network template.</p>

        <p>
          Connect with your friends and family, expand your learning <br />
          with the social network Speak Dev
        </p>
      </div>
      <div class="form">
        <form method="post">
          <input class="nome" type="text" name="Nome" placeholder="Name or Phone" />
          <input type="password" name="Senha" placeholder="Password" />
          <input type="submit" name="acao" value="Login">
        </form>
        <p class="registrar"><a href="http://localhost/Projetos/redesocialdevweb20_/registrar">Create New Account</a></p>
      </div>
    </div>
  </div>
  <footer>
    <h3>This project is open source and is available on my <a target="_blank" href="https://github.com/Leonardo-Madeira/Social-Network-Project">GitHub</a> </h3>
    <h4>Developed by <a target="_blank" href="https://leonardomadeira.com.br/">Leonardo Madeira</a> </h4>
  </footer>
</body>

</html>