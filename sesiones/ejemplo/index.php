<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <link rel="stylesheet" href="css/styles.css">
    </head>
        <body>
            <form action="session.php" method="post">
            <h1>Entrada al sistema</h1>
                <div class="contenedor-formulario">
                    <label for="usuario" class=""> Usuario
                        <input type="text" id="usuario" name="usuario" placeholder="Ingresa tu usuario">
                    </label>
                    <label for="contrasena" class=""> Contraseña
                        <input type="password" id="contrasena" name="contrasena" placeholder="Ingresa tu contraseña">
                    </label>
                </div>
            <input type="submit" value="Enviar" class="boton-enviar">
            </form>
        </body>
</html>
