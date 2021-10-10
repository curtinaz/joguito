<?php

$host = 'localhost';
$username = 'root';
$password = '';
$db = 'joguito';

$con = new mysqli($host, $username, $password, $db);

// try{
//     $conexao = new PDO('mysql:host=' . $host . ';dbname=' . $db, $username, $password);
//     echo 'conectou';
// } catch(PDOException $e) {
//     echo 'ERROR: ' . $e->getMessage();
// }

// $username = 'teste';

// $stmt = $conexao->prepare("INSERT INTO `tb_user` (`user_id`, `user_name`) VALUES (NULL, :username)");
// $stmt->execute(array('username' => $username)); // palavra reservada, com :username, sem aspas.
// $stmt = NULL;

//primeira vez que eu conecto com PDO.

?>