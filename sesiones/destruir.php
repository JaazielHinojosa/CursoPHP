<?php

include '../views/up.html';

session_start();

unset($_SESSION['count']);

echo 'Cerrando sesión';

include '../views/down.html';