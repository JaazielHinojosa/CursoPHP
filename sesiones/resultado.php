<?php

include '../views/up.html';

session_start();
//Se evalua si la variable existe, si no existe la sesión está cerrada, si existe muestra el valor que tiene la variable
if (!isset($_SESSION['count'])){
    echo 'Sesión cerrada';
} else {
    echo 'El resultado es: ' . $_SESSION['count'];
}

include '../views/down.html';