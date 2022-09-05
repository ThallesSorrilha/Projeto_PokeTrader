<?php
 
$n = $_GET["nome"];
$l = $_GET["login"];
$s = $_GET["senha"];
$c = $_GET["cidade"];
$cpf = $_GET["cpf"];
$e = $_GET["email"];
$t = $_GET["telefone"];

$con = new mysqli("localhost", "root", "", "projeto");

$sql_inserir = "insert into usuario(nome,login,senha,cidade,cpf,email,telefone)
  values('$n','$l','$s','$c','$cpf','$e','$t')";

$result = $con->query($sql);

if ($result->num_rows == 1) {
    header("Location: pagina_inicial.php");
    exit(0);
}

else {
    header("Location: erroc.php");
    exit(0);
}
 
?>
