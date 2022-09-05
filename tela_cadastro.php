<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre-se</title>

    <style>
        #area {
          position:relative;
          width:320px;
          height:270px;
          margin-left: auto;
          margin-right: auto;
          margin-top: 100px;
        }

        legend {
          font-style:bold;
          font-family: "Segoe UI";
        }

        input {
          margin-top: 1px;
        }

        h1,p{
            text-align: center;
        }

        h1,p{
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
        }

        body{
            background-image: url("imagem/pikachu_fundo.jpg");
        }

    </style>
</head>

<body>
    <h1>Cadastrar-se</h1>

    <div id="area">
        <form action="inserir_cadastro.php" method="POST" id="formulario">
            <fieldset>
                <legend>Logon</legend>
                <label for="nome">Nome: </label><input type="text" name="nome" id="nome"><br>
                <label for="login">Login: </label><input type="text" name="login" id="login"><br>
                <label for="senha">Senha: </label><input type="password" name="senha" id="senha" max="50"><br>
                <label for="cidade">Cidade: </label><input type="text" name="cidade" id="cidade"><br>
                <label for="cpf">CPF: </label><input type="text" name="cpf" id="cpf"><br>
                <label for="email">E-mail: </label><input type="text" name="email" id="email"><br>
                <label for="telefone">Telefone: </label><input type="text" name="telefone" id="telefone"><br><br>
                <input type="submit" value="Efetuar">
                <input type="reset" value="limpar">
            </fieldset>
        </form>
    </div>

</body>

</html>