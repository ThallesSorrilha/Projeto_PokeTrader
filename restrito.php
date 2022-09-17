<?php
if (!isset($_COOKIE["login"]) || !isset($_COOKIE["senha"])) {

    header("Location: index.php");
    exit(0);
}
?>
