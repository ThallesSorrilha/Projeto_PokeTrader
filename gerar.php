<?php
$u = $_COOKIE["login"];
 
$con = new mysqli("localhost", "root", "", "projeto");
 
$sorteio = rand(1, 151);
 /*
$json = file_get_contents("https://www.canalti.com.br/api/pokemons.json");
 
$json = json_decode($json, true);
*/
$sql_id = "SELECT id FROM usuario WHERE login = '$u'";
 
$result_select = $con->query($sql_id);
 
$sql_gerar = "INSERT into individuo(usuario, pokemon, nome)
  values('$result_select','$sorteio', '')";
 
$result = $con->query($sql_gerar);

header("Location: pokemon_gerado.php");
 
?>
