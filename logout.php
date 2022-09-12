<?php
setcookie("login","");
setcookie("senha","");

unset($_COOKIE["login"]);
unset($_COOKIE["senha"]);

header("Location: index.php");
?>