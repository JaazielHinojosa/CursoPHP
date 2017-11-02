<html>
    <head>
        <title>Operadores lógicos</title>
    </head>
    <body>
        <?php
        $v1 = 1;
        $v2 = 1;

        $v3 = 2;
        $v4 = 3;
//Evalúa si la variable 1 y la variable 2 son iguales, en caso de que sí sean iguales regresa un true, de lo contrario false
        $res1 = $v1 == $v2;
        echo 'Resultado 1 : <br>';
        var_dump($res1);
        echo '<br><br>';
//Evalúa si la variable 3 y la variable 4 son iguales, en caso de que no sean iguales regresa un false, de lo contratio true
        $res2 = $v3 == $v4;
        echo 'Resultado 2 : <br>';
        var_dump($res2);

        echo '<br><br>';
//Evalua
        $res3 = $res1 && $res2;
        echo 'Resultado And : <br>';
        var_dump($res3);
        echo '<br><br>';
//Evalua
        $res4 = $res1 || $res2;
        echo 'Resultado Or : <br>';
        var_dump($res4);
        ?>
    </body>
</html>