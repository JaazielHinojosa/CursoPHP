<?php

include '../views/up.html';

$value = $_COOKIE['count'];
$value++;

setcookie('count', $value);

echo 'Añadiendo 1 al valor de la cookie';

include '../views/down.html';