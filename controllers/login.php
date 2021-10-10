<?php

require_once('../config.php');

setcookie('loginstate', 'logado', strtotime('+30 days'), '/');

header('Location: ../');

?>