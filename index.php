<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pokemon Trader</title>

  <style>
    #area {
      position: relative;
      width: 320px;
      height: 200px;
      margin-left: auto;
      margin-right: auto;
      margin-top: 50px;
    }

    #area2 {
      position: relative;
      width: 90px;
      margin-left: auto;
      margin-right: auto;
    }

    #area3 {
      text-align: center;
    }

    legend {
      font-style: bold;
      font-family: "Segoe UI";
    }

    input {
      margin-top: 1px;
    }

    h1,p{
      text-align: center;
      font-family: Arial, Helvetica, sans-serif;
    }

    body {
      background-image: url("abertura_esmeralda.jpg");
      background-position:center;
    }

    fieldset{
      background-color:rgba(255, 217, 0, 0.788);
    }
  </style>
</head>

<body>
  <div id="area3">
    <h1>PokeTrader</h1>
    <p>"Vai ser grande a emoção!"</p>
    <img src="International_Pokémon_logo.jpeg" alt="" height="117px" width="320px">
    <p>"Temos que pegar!"</p>
  </div>
  
  <div id="area">
    <form action="confirmar_login.php" method="POST" id="formulario">
      <fieldset>
        <legend>Login</legend>
        <label for="usuario">Login: </label><input type="text" name="login" id="login"><br>
        <label for="senha">Senha: </label><input type="password" name="senha" id="senha" max="50"><br><br>
        <input type="submit" value="Entrar">
        <input type="reset" value="limpar">
      </fieldset>
    </form>
  </div>

  <p style="margin-top: -60px;">Você ainda não é cadastrado?</p>

  <div id="area2">
    <a href="tela_cadastro.php">Cadastre-se</a>
  </div>

</body>

</html>