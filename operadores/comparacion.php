<html>
    <head>
        <title>Operadores comparación</title>
    </head>
    <body>
        <?php
        $v1 = 11;
        $v2 = 10;
        //el == evalua que el resultado sea el mismo, php evalua una cadena y un entero convirtiendo al mismo tipo de dato
        $res = $v1 == $v2;
        //el === evalua que el tipo de dato sea el mismo en ambas variables sin importar que el resultado sea el mismo
        $res = $v1 === $v2;
        //otro operador agregado a PHP v7 es el operador <=> spaceship -> menor, igual o mayor
        //si el primer número es mayor que el segundo retorna un 1
        //si los dos números son iguales retorna un 0
        //si el primer número es menor que el segundo retorna un -1
        $res = $v1 <=> $v2;
        var_dump($res);
        ?>
    </body>
</html>