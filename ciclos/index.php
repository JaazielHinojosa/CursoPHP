<html>
    <head>
        <title>Operador null</title>
    </head>
        <body>
            <?php

//            for ($i=0; $i<=10; $i++){
//                echo "El numero es: $i <br>"
//            }

//            Lo que diferencia esta estructura a las demás es que
//            aquí si la condición no se cumple, no se ejecuta nada.
//            echo '<h1 style="text-align: center"> Ciclo While</h1><br><br><br>';
//            $i=11;
//            while($i<= 10){
//                echo 'El numero es: '. $i . '<br>';
//                $i++;
//            }


//            echo '<h1 style="text-align: center"> Ciclo Do While</h1><br><br><br>';
//            $i=1;
//            do {
//                echo 'El numero es: '. $i . '<br>';
//                $i++;
//            } while($i<=10) ;

            echo '<h1 style="text-align: center"> Ciclo Foreach</h1><br><br><br>';
            $names = ['Alex', 'Elizabeth', 'Mary'];
//            La primera variable es el nombre del arreglo que se va a recorrer
//            La segunda variable es el valor que va a tomar en cada iteración
//            Y si ponemos la variable $key obtenemos el valor de la posición del nombre
            foreach ($names as $key => $name) {
                echo $key . ' - ' . $name. '<br>';
            }
            ?>
        </body>
</html>