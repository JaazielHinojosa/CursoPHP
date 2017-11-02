<html>
    <head>
        <title>Estructuras condicionales</title>
    </head>
        <body>
            <?php

            $color = 'gris';
//            if ($color == 'negro') {
//                echo 'El color es negro';
//            } elseif ($color == 'blanco'){
//                echo 'El color es blanco';
//            } else {
//                echo 'El color es '. $color;
//            }
            switch($color){
                case 'azul':
                    echo 'El color es azul';
                    break;
                case 'rojo':
                    echo 'El color es rojo';
                    break;
                default:
                    echo 'El color es '. $color;
            }
            ?>
        </body>
</html>