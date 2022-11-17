<?php
setcookie("id","",time()-60*60*24*2);
unset($_COOKIE["id"]);

setcookie("login","",time()-60*60*24*2);
unset($_COOKIE["login"]);

setcookie("senha","",time()-60*60*24*2);
unset($_COOKIE["senha"]);

setcookie("nome","",time()-60*60*24*2);
unset($_COOKIE["nome"]);

setcookie("cidade","",time()-60*60*24*2);
unset($_COOKIE["cidade"]);

setcookie("cpf","",time()-60*60*24*2);
unset($_COOKIE["cpf"]);

setcookie("telefone","",time()-60*60*24*2);
unset($_COOKIE["telefone"]);

setcookie("email","",time()-60*60*24*2);
unset($_COOKIE["email"]);

setcookie(session_name(), '', time() - 3600, '/');

header("Location: index.php");
exit(0);
?>