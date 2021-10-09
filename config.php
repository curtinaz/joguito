<?php

$host = 'localhost';
$db = 'joguito';
$username = 'root';
$password = '';

$conexao = new PDO('mysql:host=' . $host . ';dbname=' . $db, $username, $password);
//primeira vez que eu conecto com PDO.

?>