<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 4 </title>
</head>
<body>
    <h1>PHP com POO - exemplo 4</h1>
    <hr>
    <h2>Assuntos aboradados:</h2>
    <ul>
        <li>Encapsulamento</li>
        <li>Modificadores de visibilidade</li>
    </ul>

<?php
require_once "src/Cliente.php";
$cliente1 = new Cliente;
//$cliente1->nome = "pilip"

//Usando setter para atribuir um valor à propiedade privada"nome"
$cliente1->setNome("pilip");
$cliente1->setEmail("pilip@gmail.com");
$cliente1->setSenha("123abc");
?>
<p>Nome:<?=$cliente1->getNome()?></p>
<p>E-mail:<?=$cliente1->getEmail()?></p>
<p>Senha:<?=$cliente1->getSenha()?></p>

<pre><?=var_dump($cliente1)?></pre>
</body>
</html>