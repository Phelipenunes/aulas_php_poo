<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 7</title>
</head>
<body>
    <h1>PHP com POO - exemplo 8</h1>
    <hr>
    <h2>Assuntos aboradados:</h2>
    <ul>
        <li>Recursos estáticos</li>
        <li>Acesso direto sem nescessidade de objetos/instancias</li>
        <li>Uso do <code>self</code> para acesso (dentro da classe) aos recursos estáticos</li>
    </ul>
<?php
require_once "src/PessoaFisica.php";
$cliente1 = new PessoaFisica;
$cliente1->setNome("Pilip");
$cliente1->setIdade(19);

$cliente2 = new PessoaFisica;
$cliente2->setNome("Victor");
$cliente2->setIdade(61);

require_once "src/Utilitarios.php";
Utilitarios::ObterData();
?>

<h2>Atendimentos do dia:</h2>
<?=Utilitarios::$data_atual?>

<h3>Cliente: <?=$cliente1->getNome()?></h3>
<p>tipo de atedimento:<?=Utilitarios::definirAtendimento($cliente1->getIdade())?></p>

<hr>

<h3>Cliente: <?=$cliente2->getNome()?></h3>
<p>tipo de atedimento:<?=Utilitarios::definirAtendimento($cliente2->getIdade())?></p>
</body>
</html>