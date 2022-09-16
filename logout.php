<?php
setcookie("login","",time()-3600);
setcookie("senha","",time()-3600);

unset($_COOKIE["login"]);
unset($_COOKIE["senha"]);

header("Location: index.php");
?>