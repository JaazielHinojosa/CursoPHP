<?php

require_once 'config.php';

$result = true;

if (!empty($_POST)){
    $name = $_POST['name'];
    $password = md5($_POST['password']);
    $email = $_POST['email'];

    $sql = "INSERT INTO users(name, password, email) VALUE (:name, :password, :email)";
    $query = $pdo->prepare($sql);

    $result = $query->execute([
        'name' => $name,
        'password' => $password,
        'email' => $email
    ]);
}

?>

<html>
<head>
    <title>Bases de Datos</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <h1>Anadir Usuario</h1>
    <a href="index.php">Home</a>
    <?php
    if ($result) {
        echo '<div class="alert alert-success">Usuario añadido correctamente</div>';
    }
    ?>
    <form action="add.php" method="post">
        <label for="name">Nombre: </label>
        <input type="text" name="name" id="name">
        <br><label for="password">Contraseña: </label>
        <input type="password" name="password" id="password">
        <br><label for="email">Correo: </label>
        <input type="text" name="email" id="email">
        <br>
        <input type="submit" value="Guardar">
    </form>
</div>
</body>
</html>