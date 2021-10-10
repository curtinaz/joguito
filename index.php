<?php

require_once('./config.php');

if(isset($_COOKIE['loginstate'])) {
    echo 'logado' . '<br>';
    echo '<a href="./controllers/logout">fazer logout</a>';
} else {
    echo 'deslogado' . '<br>';
    echo '<a href="./controllers/login">fazer login</a>';
}