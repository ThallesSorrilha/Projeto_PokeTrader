<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pokemon Trader</title>
  <link rel="icon" type="image/png" href="imagem/pokemon-icon.png" />

  <style>
    body {
      background-image: url("imagem/abertura_esmeralda.jpg");
      background-position: center;
    }

    #area {
      width: 320px;
      margin: 0 auto;
    }

    fieldset {
      width: 240px;
      background-color: rgba(255, 220, 0, 0.850);
      border-radius: 2px;
      margin: 0 auto;
    }

    legend {
      font-style: bold;
      font-family: "Segoe UI";
    }

    input[type=text],
    input[type=password] {
      display: block;
      padding: 5px;
      width: 90%;
      margin: 6px auto;
    }

    input[type=submit]{
      margin-left: 5px;
    }

    input[type=reset]{
      margin-left: 33px;
    }

    input[type=submit],
    input[type=reset] {
      padding: 5px;
      width: 40%;
      cursor: pointer;
    }

    h1,
    p {
      text-align: center;
      font-family: Arial, Helvetica, sans-serif;
    }

    p {
      font-size: larger;
    }
  </style>
</head>

<body>
  <div id="area">
    <h1>PokeTrader</h1>
    <p>"Vai ser grande a emoção!"</p>
    <img src="imagem/International_Pokémon_logo.jpeg" alt="" height="117px" width="320px">
    <p>"Temos que pegar!"</p>

    <form action="confirmar_login.php" method="POST" id="formulario">
      <fieldset>
        <legend>Login</legend>
        <input type="text" name="login" id="login" placeholder="Usuário" class="campotxt">
        <input type="password" name="senha" id="senha" placeholder="Senha" class="campotxt">
        <input type="submit" value="Entrar">
        <input type="reset" value="Limpar">
      </fieldset>
    </form>

    <p>Você ainda não é cadastrado?</p>
    <p><a href="tela_cadastro.php">Cadastre-se</a></p>
  </div>

</body>

</html>