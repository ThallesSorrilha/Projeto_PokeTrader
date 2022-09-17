<?php

$n = trim($_POST["nome"]);
$l = trim($_POST["login"]);
$s = trim($_POST["senha"]);
$c = trim($_POST["cidade"]);
$cpf = trim($_POST["cpf"]);
$e = trim($_POST["email"]);
$t = trim($_POST["telefone"]);

if (
  strlen($n) == 0 || strlen($l) == 0 || strlen($s) == 0
  || strlen($c) == 0 || strlen($cpf) == 0 || strlen($e) == 0
  || strlen($t) == 0
) {
  header("Location: erroc.php");
  exit(0);
}

$con = new mysqli("localhost", "root", "", "projeto");
/*include("conexao.php");*/

$sql_inserir = "INSERT into usuario(nome,login,senha,cidade,cpf,email,telefone)
  values('$n','$l','$s','$c','$cpf','$e','$t')";

$result = $con->query($sql_inserir);

if ($result) {
  header("Location: pagina_inicial.php");
  exit(0);
  
} else {
  header("Location: erro.php");
  exit(0);
}
?>