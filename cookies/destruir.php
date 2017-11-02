<?php

include '../views/up.html';

setcookie('count', null, time() - 1);

echo 'Eliminando cookie';

include '../views/down.html';