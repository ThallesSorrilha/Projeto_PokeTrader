<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>

    <style>
        body {
            text-align: center;
        }

        p,
        h1 {
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
        }

        p {
            font-size: larger;
        }
    </style>
</head>

<body>
    <div>
        <h1>Seu Perfil</h1>
        <p> <?= $_COOKIE["login"] ?> </p>
        <p> <?= $_COOKIE["nome"] ?> </p>
        <p> <?= $_COOKIE["cidade"] ?> </p>
        <p> <?= $_COOKIE["email"] ?> </p>
    </div>
</body>

</html>