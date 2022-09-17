<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre-se</title>
    <link rel="icon" type="image/png" href="imagem/pokemon-icon.png" />

    <style>
        body {
            background-image: url("imagem/togepi.jpg");
            background-position-x: center;
        }

        #area {
            position: relative;
            width: 360px;
            margin: 100px auto;
        }

        legend {
            font-style: bold;
            font-family: "Segoe UI";
        }

        fieldset {
            background-color: rgba(255, 245, 238, 0.800);
            width: 240px;
            margin: 0 auto;
        }

        input[type=text],
        input[type=password],
        input[type=email],
        input[type=number] {
            display: block;
            padding: 5px;
            width: 90%;
            margin: 6px auto;
        }

        input[type=submit] {
            margin-left: 3px;
        }

        input[type=reset] {
            margin-left: 32px;
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
    </style>
</head>

<body>
    <div id="area">
        <h1>Cadastrar-se</h1>

        <form action="inserir_cadastro.php" method="POST" id="formulario">
            <fieldset>
                <legend>Logon</legend>
                <input type="text" name="nome" id="nome" placeholder="Nome">
                <input type="text" name="login" id="login" placeholder="Login">
                <input type="password" name="senha" id="senha" placeholder="Senha">
                <input type="number" name="cidade" id="cidade" placeholder="Cidade">
                <input type="text" name="cpf" id="cpf" placeholder="CPF">
                <input type="email" name="email" id="email" placeholder="E-mail">
                <input type="text" name="telefone" id="telefone" placeholder="Telefone">
                <input type="submit" value="Efetuar">
                <input type="reset" value="Limpar">
            </fieldset>
        </form>
    </div>
</body>
</html>