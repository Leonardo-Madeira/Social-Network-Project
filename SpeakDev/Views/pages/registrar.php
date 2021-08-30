<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Speak Dev</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: sans-serif;
    }

    html,
    body {
      height: 100%;
      background-color: rgb(0, 0, 0);
      color: white;
    }

    .main {
      width: 100%;
      height: 850px;
    }

    .center {
      display: flex;
      flex-wrap: wrap;
      width: 1200px;
      max-width: 100%;
      margin: 0 auto;
      padding-top: 350px;
      background-color: rgb(56, 56, 56);
    }

    .form {
      width: 100%;
      margin-top: -120px;
      padding-bottom: 150px;
    }

    .form input {
      width: 812px;
      height: 75px;
      border-radius: 10px;
      margin: 10px;
      max-width: 100%;
      margin: 0 auto;
      background: #fcfdff 0% 0% no-repeat padding-box;
      border: 1px solid #c3cce8;
      display: block;
      margin-top: 20px;
      padding-left: 25px;
      color: #7e92ac;
      font-size: 20px;
    }

    .form input[type='text']:hover {
      border: #8b93aa solid 1px;
    }

    .form input[type='submit'] {
      width: 812px;
      height: 68px;
      max-width: 100%;
      padding-top: 5px;
      display: block;
      margin: 20px auto;
      background: rgb(184, 181, 8) 0% 0% no-repeat padding-box;
      border-radius: 10px;
      cursor: pointer;
      color: white;
      font-size: 20px;
      border: 0px;
    }

    /**/

    footer {
      width: 610px;
      max-width: 100%;
      margin: 0 auto;
    }

    footer h3 {
      font-size: 22px;
    }

    footer h4 {
      font-size: 22px;
      text-align: center;
    }

    footer a {
      color: rgb(204, 201, 8);
    }

    footer a:hover {
      text-decoration: none;
    }
  </style>
</head>

<body>
  <div class="main">
    <div class="center">
      <div class="form">
        <h1 style="text-align: center;">Crie sua conta!</h1>
        <form method="post">
          <input type="text" name="name" placeholder="Name" />
          <input type="text" name="email" placeholder="E-mail" />
          <input type="password" name="password" placeholder="Password" />
          <input type="submit" name="acao" value="Create an account">
          <input type="hidden" name="registrar" value="registrar">
        </form>
      </div>
    </div>
  </div>
  <footer>
    <h3>This project is open source and is available on my <a target="_blank" href="https://github.com/Leonardo-Madeira/Social-Network-Project">GitHub</a> </h3>
    <h4>Developed by <a target="_blank" href="https://leonardomadeira.com.br/">Leonardo Madeira</a> </h4>
  </footer>
</body>

</html>