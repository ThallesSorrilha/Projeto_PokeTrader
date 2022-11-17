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

$sql_select = "SELECT * FROM usuario WHERE login = '$login'
        AND senha = '$senha' ";

$result2 = $con->query($sql_select);

if ($result && $result2->num_rows == 1) {
  while ($linha = $result2->fetch_assoc()) {
    setcookie("id", $linha["id"]);
  }
  setcookie("nome", $n);
  setcookie("login", $l);
  setcookie("senha", $s);
  setcookie("cidade", $c);
  setcookie("cpf", $cpf);
  setcookie("email", $e);
  setcookie("telefone", $t);
  header("Location: pagina_inicial.php");
  exit(0);
  
} else {
  header("Location: erroc.php");
  exit(0);
}
