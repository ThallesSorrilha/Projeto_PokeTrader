<?php
$u = $_COOKIE["id"];
 
$con = new mysqli("localhost", "root", "", "projeto");
 
$sorteio = rand(1, 493);
 
$sql_gerar = "INSERT into individuo(usuario, especie, nome)
  values('$u','$sorteio', '')";

setcookie("ger",$sorteio);
 
$result = $con->query($sql_gerar);

header("Location: pokemon_gerado.php");
 
?>
