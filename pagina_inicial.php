<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
    <link rel="icon" type="image/png" href="imagem/pokemon-icon.png"/>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans&display=swap');

        #menu-h {
            margin: 0 auto;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Open Sans', sans-serif;
        }

        #menu-h {
            background-color: rgb(37, 37, 39);
        }

        #menu-h ul {
            max-width: 2000px;
            list-style: none;
            padding: 0;
        }

        #menu-h ul li {
            display: inline;
        }

        #menu-h ul li a {
            color: #FFF;
            padding: 20px;
            display: inline-block;
            text-decoration: none;
            transition: background .4s;
        }

        #menu-h ul li a:hover {
            background-color: rgb(165, 42, 42);
        }

        #menu-h ul li:last-child a {
            float: right;
            background-color: rgb(165, 42, 42);
        }
    </style>
</head>

<body>
    <nav id="menu-h">
        <ul>
            <li>
                <a href="pagina_inicial.php">
                    Home
                </a>
            </li>

            <li><a href="#">Sobre</a></li>

            <li><a href="#">Quem Somos</a></li>

            <li><a href="#">Contato</a></li>

            <li><a href="logout.php">Logout</a></li>
        </ul>
    </nav>

    <h1>Bem vindo, (treinador)</h1>

    <p>O que deseja fazer?</p>

    <a href="">gerar pokémon</a> <br><br>

    <a href="">trocar pokémon com amigos</a>
</body>

</html>