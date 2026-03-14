<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section id="formulario">
        <h1>formulario</h1>
        <form action="insert.php" method="post">
            <input type="text" name="name" placeholder="nome">
            <input type="text" name="desc" placeholder="descrição">
            <button type="submit" name="insert">enviar</button>
        </form>
    </section>
</body>
</html>
<?php
require "../../vendor/autoload.php";

use app\database\Connection;

$database = new Connection();

if (!array_key_exists("insert", $_POST)){
    return;
}
$name = $_POST['name'];
$desc = $_POST['desc'];

$database->post($name, $desc);

echo 'Enviado com sucesso';