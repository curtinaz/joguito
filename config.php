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

$username = 'laura';

$stmt = $conexao->prepare("INSERT INTO `tb_user` (`user_id`, `user_name`) VALUES (NULL, ':username')");
$stmt->execute(array('username' => $username));

//primeira vez que eu conecto com PDO.

?>