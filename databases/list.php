<?php

require_once 'config.php';

$queryResult = $pdo->query("SELECT * FROM users");

?>
<html>
<head>
    <title>Bases de Datos</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <h1>Lista de usuarios</h1>
    <a href="index.php">Home</a>

    <table class="table">
        <tr>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>
        <?php
        while ($row = $queryResult->fetch(PDO::FETCH_ASSOC)) {
            echo '<tr>';
            echo '<td>' .$row['name'] . '</td>';
            echo '<td>' .$row['email'] . '</td>';
            echo '<td><a href="update.php?id=' .$row['id'] . '"><button type="button" class="btn btn-primary">Actualizar</button></a></td>';
            echo '<td><a href="delete.php?id=' .$row['id'] . '"><button type="button" class="btn btn-danger">Eliminar</button></a></td>';
            echo '</tr>';
        }
        ?>
    </table>
</div>
</body>
</html>