<?php
$username = $_POST['username'];
$tema = $_POST['tema'];

$durata = time() + 60 * 60 * 24 * 7;

setcookie("username" , $username, $durata);
setcookie("tema" , $tema, $durata);
header("Location: cookies_settati.php");
exit;
?>