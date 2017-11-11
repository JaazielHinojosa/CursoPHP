<?php

$user = null;
$query = null;

if (!empty($_POST)){
    require_once "config.php";

    $query = "SELECT * FROM users WHERE email=:email AND password=:password";
    $prepared = $pdo->prepare($query);
    $prepared->execute([
        'email' => $_POST['email'],
        'password' => md5($_POST['password'])
    ]);

    $user = $prepared->fetch(PDO::FETCH_ASSOC);
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
    <h1>Fake Login</h1>
    <a href="index.php">Home</a>
    <form action="fake-login.php" method="post">
        <br><label for="email">Correo: </label>
        <input type="text" name="email" id="email">
        <br><label for="password">Contraseña: </label>
        <input type="password" name="password" id="password">
        <br>
        <input type="submit" value="Iniciar Sesión">
    </form>
    <h2>Query</h2>
    <div>
        <?php
            print_r($query);
        ?>
    </div>
    <h2>Información del usuario</h2>
    <div>
        <?php
            print_r($user);
        ?>
    </div>
</div>
</body>
</html>