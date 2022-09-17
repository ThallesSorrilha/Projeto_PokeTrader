<?php
 
$n = $_POST["nome"];
$l = $_POST["login"];
$s = $_POST["senha"];
$c = $_POST["cidade"];
$cpf = $_POST["cpf"];
$e = $_POST["email"];
$t = $_POST["telefone"];

$con = new mysqli("localhost", "root", "", "projeto");
/*include("conexao.php");*/

$sql_inserir = "INSERT into usuario(nome,login,senha,cidade,cpf,email,telefone)
  values('$n','$l','$s',$c,'$cpf','$e','$t')";

$result = $con->query($sql_inserir);

if ($result->num_rows == 1) {
    header("Location: pagina_inicial.php");
    exit(0);
}

else {
    header("Location: erroc.php");
    exit(0);
}
 
?>
