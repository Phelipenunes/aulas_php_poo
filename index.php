<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 2 </title>
</head>
<body>
    <h1>PHP com POO - exemplo 2</h1>
    <hr>
    <h2>Assuntos aboradados:</h2>
    <ul>
        <li>Acesso direto ás propiedades</li>
        <li>Atribuição e leitura de dados</li>
        <li>Chamada de métodos</li>
    </ul>

<?php
require_once "src/Cliente.php";
$cliente1 = new Cliente;
$cliente2 = new Cliente;

//Acesso e atribuição
$cliente1->nome = "Pilip";
$cliente1->telefones = ["11-1231-1232","11-6787-6754"];
$cliente1->email = "pilip@gmail.com";
$cliente1->senha =password_hash("1234pilip", PASSWORD_DEFAULT);

$cliente2->nome = "Lucas";
$cliente2->telefones = ["11-4531-1232","11-9087-6754"];
$cliente2->email = "lucas@gmail.com";
$cliente2->senha =password_hash("1234pilip", PASSWORD_DEFAULT);

?>
<hr>
<h2>Dados dos objetos</h2>
<h3><?=$cliente1->nome?></h3>
<h3><?=$cliente2->nome?></h3>    

</body>
</html>