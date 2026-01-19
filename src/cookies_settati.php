<?php
$username = $_COOKIE['username'] ?? 'Ospite';
$tema = $_COOKIE['tema'] ?? 'light';

$bg = ($tema === 'dark') ? '#222' : '#fff';
$text = ($tema === 'dark') ? '#fff' : '#000';
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Benvenuto</title>
</head>
<body style="background-color: <?= $bg ?>; color: <?= $text ?>;">

<h1>Benvenuto <?= htmlspecialchars($username) ?>!
<p>Tema selezionato: <?= $tema ?></p>
</h1>


</body>
</html>