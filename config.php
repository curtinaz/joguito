<?php

$host = 'localhost';
$db = 'joguito';
$username = 'root';
$password = '';

try{
    $conexao = new PDO('mysql:host=' . $host . ';dbname=' . $db, $username, $password);
    echo 'conectou';
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}

//primeira vez que eu conecto com PDO.

?>