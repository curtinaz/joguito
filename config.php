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

$stmt = $conexao->prepare('SELECT * FROM minhaTabela WHERE id = :id');
$stmt->execute(array('id' => $id));

//primeira vez que eu conecto com PDO.

?>