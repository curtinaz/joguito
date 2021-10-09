<?php

$host = 'localhost';
$db = 'joguito';
$username = 'root';
$password = '';

try{
    $conexao = new PDO('mysql:host=' . $host . ';dbname=' . $db, $username, $password);
} catch(PDOException $e) {
    echo 'ops';
}

//primeira vez que eu conecto com PDO.

?>