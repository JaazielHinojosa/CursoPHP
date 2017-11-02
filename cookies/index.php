<?php

include '../views/up.html';

setcookie('count', '1', time() + 3600);

echo 'Inicializando cookie con el valor: '.$_COOKIE['count'];

include '../views/down.html';