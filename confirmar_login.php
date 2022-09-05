<?php

$login = $_POST["login"];
$senha = $_POST["senha"];

if (strlen($login) == 0 || strlen($senha) == 0) {
   header("Location: errol.php");
   exit(0);
}

$con = new mysqli("localhost", "root", "", "projeto");

$sql = "SELECT * FROM usuario WHERE login = '$login'
        AND senha = '$senha' ";

$result = $con->query($sql);

if ($result->num_rows == 1) {
    setcookie("login","$login");
    setcookie("senha", "$senha");
    header("Location: pagina_inicial.php");
    exit(0);
}

else {
    header("Location: errol.php");
    exit(0);
}
?>