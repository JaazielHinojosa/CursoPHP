<html>
    <head>
        <title>Operador null</title>
    </head>
        <body>
            <?php

            $a = null;
            $res = $a ?? 'default';

            var_dump($res);

            ?>
        </body>
</html>