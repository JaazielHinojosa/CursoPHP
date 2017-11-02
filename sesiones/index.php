<?php

include '../views/up.html';

session_start();

$_SESSION['count'] = 0;

echo 'Sesión iniciada en: '. $_SESSION['count'];

include '../views/down.html';