<?php

include '../views/up.html';

session_start();

$_SESSION['count']++;

echo 'Aumentando 1';

include '../views/down.html';