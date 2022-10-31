<?php

$login = trim($_POST["login"]);
$senha = trim($_POST["senha"]);

if (strlen($login) == 0 || strlen($senha) == 0) {
    header("Location: errol.php");
    exit(0);
}

$con = new mysqli("localhost", "root", "", "projeto");
/*include("conexao.php");*/

// conseguir informações do usuário e salvá-los em cookies

$sql = "SELECT * FROM usuario WHERE login = '$login'
        AND senha = '$senha' ";

setcookie("login", "login");

$result = $con->query($sql);

if ($result->num_rows == 1) {
    setcookie("login", $login);
    setcookie("senha", $senha);
    while ($linha = $result->fetch_assoc()) {
        setcookie("id", $linha["id"]);
        setcookie("nome", $linha["nome"]);
        setcookie("cidade", $linha["cidade"]);
        setcookie("cpf", $linha["cpf"]);
        setcookie("email", $linha["email"]);
        setcookie("telefone", $linha["telefone"]);
    }
    
    header("Location: pagina_inicial.php");
    exit(0);

} else {
    header("Location: errol.php");
    exit(0);
}
?>