<?php
$s = $_COOKIE["ger"];
$json = file_get_contents("https://www.canalti.com.br/api/pokemons.json");
$pokemons = json_decode($json, true);
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokemon Gerado</title>
    <link rel="icon" type="image/png" href="imagem/pokemon-icon.png" />
</head>

<body>
    <p><?= $pokemons->pokemon[$s]->name ?></p>
    <img src="<?= $pokemons->pokemon[$s]->img ?>" alt="<?= $pokemons->pokemon[$s]->name ?>">
</body>

</html>