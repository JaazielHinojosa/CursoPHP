<?php

include '../views/up.html';

echo '<h1 style="text-align: center">Cargas de Archivos Externos</h1>';

// Con include_once hacemos que solo se incluya una sola vez el archivo
include_once 'funciones.php';

suma(50, 70);

include '../views/down.html';