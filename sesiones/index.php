<?php
session_start();  
   ?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>perfil</title>
    
</head>
<body>

<?php if ( $_SESSION["id"]): ?>
    <h1>HOLA <?= $_SESSION["username"] ?></h1>
    <h2>tu email es: <?= $_SESSION["email"] ?></h2>

<?php else: ?>
    <h1>NO HAY SESION</h1>
    <?php endif; ?>
    
</body>
</html>