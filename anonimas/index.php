<?php

include '../views/up.html';

//$var2 = 1;
//
////Las funciones anonimas no pueden tomar el valor de una variable declarada
////a menos que la declares
//$var = function () use ($var2) {
//    echo 'Funcion anonima<br>';
//    echo 'Valor de la variable: ' . $var2;
//};
//
//$var();

$x = 3;

$numeros = [1, 2, 3, 4, 5];
$closure = function ($n) use ($x) {
    return $n * $x ;
};

$res = array_map($closure, $numeros);

var_dump($res);

include '../views/down.html';