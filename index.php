<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 3 </title>
</head>
<body>
    <h1>PHP com POO - exemplo 3</h1>
    <hr>
    <h2>Assuntos aboradados:</h2>
    <ul>
        <li>método construtor com atribuição obrigatória de valores aos parâmetros/propiedades do objeto</li>
        <li>Uso do <code>$this</code> para acesso às propiedades dentro do objeto</li>
    </ul>

<?php
require_once "src/Cliente.php";
$cliente1 = new Cliente("Phelipe", "pilip@gmail.com",[11-95660-6752],[11-95660-6752]);
$cliente2 = new Cliente("Lucas", "lucas@gmail.com",[11-95660-6752],[11-95660-6752]);


//$cliente1->telefones = [11-95660-6752],[11-95660-6752]
//$cliente2->telefones = [11-95660-6752],[11-95660-6752]

?>
<pre><?=var_dump($cliente1,$cliente2)?></pre>
</body>
</html>