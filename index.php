<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sem titulo</title>
</head>
<body>
    <form action="index.php" method="post">
        <input name="id" type="number" placeholder="id do filme">
        <button type="submit" name="procurar" onclick="">Procurar</button>
    </form>

    <form action="index.php" method="post">
        <button type="submit" name="show">Mostrar tudo</button>
    </form>

    <form action="index.php" method="post">
        <button type="submit" name="ocultar">ocultar tudo</button>
    </form>

    <a href="src/form/insert.php">
        <button>Adicionar</button>
    </a>
</body>
</html>

<?php
use app\infra\Router;
require "vendor/autoload.php";

$router = new Router();
$router->dispatch();
