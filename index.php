<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo</title>
</head>
<body>
    <h1>PHP com POO</h1>
    <hr>
    <h2>Assuntos aboradados:</h2>
    <ul>
        <li>Criação de classe</li>
    </ul>

<?php
//Importando a classe
require_once "src/Cliente.php";

//criando instancias da classe (objetos!)
$cliente1 = new Cliente;
$cliente2 = new Cliente;
?>    
<pre><?=var_dump($cliente1, $cliente2)?></pre>
</body>
</html>