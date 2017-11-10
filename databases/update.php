<?php

require_once 'config.php';

$result = false;

if (!empty($_POST)) {
    $id = $_POST['id'];
    $newName = $_POST['name'];
    $newEmail = $_POST['email'];

    $sql = "UPDATE users SET name=:name, email=:email WHERE id=:id";
    $query = $pdo->prepare($sql);
    $query->execute([
        'id' => $id,
        'name' => $newName,
        'email' => $newEmail
    ]);

    $nameValue = $newName;
    $emailValue = $newEmail;

} else {
    //Tomas el valor del id que mandas por GET
    $id = $_GET['id'];

//La consulta SQL que se va a realizar
    $sql = "SELECT * FROM users WHERE id=:id";

//Preparar la consulta
    $query = $pdo->prepare($sql);

//Ejecutar la consulta, en el array va la información que tiene que ver con la consulta
    $query->execute([
        'id' => $id
    ]);

//Guardas cada registro en la variable row
    $row = $query->fetch(PDO::FETCH_ASSOC);
    $nameValue = $row['name'];
    $emailValue = $row['email'];
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
    <h1>Actualizar usuario</h1>
    <a href="list.php">Back</a>
    <?php
    if ($result) {
        echo '<div class="alert alert-success">Usuario actualizado correctamente</div>';
    }
    ?>
    <form action="update.php" method="post">
        <label for="name">Nombre: </label>
        <input type="text" name="name" id="name" value="<?=$nameValue?>">
        <br><label for="email">Correo: </label>
        <input type="text" name="email" id="email" value="<?=$emailValue?>">
        <br>
        <input type="hidden" name="id" value="<?=$id?>">
        <input type="submit" value="Actualizar">
    </form>

</div>
</body>
</html>