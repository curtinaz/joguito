<?php

require_once('./config.php');

if(isset($_COOKIE['loginstate'])) {
    echo 'logado';
} else {
    echo '<a href="./controllers/login.php">fazer login</a>';
}