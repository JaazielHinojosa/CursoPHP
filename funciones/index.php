<html>
    <head>
        <title>Funciones en PHP</title>
    </head>
        <body>
            <?php
//            function hola($name, $age, $color){
//                echo "<p style='color:$color'> Hola $name tu edad es: $age </p>";
//            }
//            hola('Daniel', 19, 'blue');
//            hola('Jaasai', 20, 'orange');
//            hola('Jaaziel', 20, 'green');
//            hola('Josue', 21, 'red');
//            hola('Samuel', 29, 'brown')
            function suma($num1, $num2) {
                return $num1 + $num2;
            }

            $sumar = suma(5, 7);
            echo $sumar;
            ?>
        </body>
</html>