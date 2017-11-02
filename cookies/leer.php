<?php

include '../views/up.html';

if (!isset($_COOKIE['count'])){
    echo 'Cookie eliminada';
} else {
    echo 'El valor de la cookie es: ' . $_COOKIE['count'];
}

include '../views/down.html';