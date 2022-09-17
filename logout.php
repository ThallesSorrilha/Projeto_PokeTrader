<?php
setcookie("login","",time()-60*60*24*2);
setcookie("senha","",time()-60*60*24*2);

unset($_COOKIE["login"]);
unset($_COOKIE["senha"]);

header("Location: index.php");
?>