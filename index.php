<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 7</title>
</head>
<body>
    <h1>PHP com POO - exemplo 7</h1>
    <hr>
    <h2>Assuntos aboradados:</h2>
    <ul>
        <li>Polimorfismo</li>
        <li>Sobreposição de métodos</li>
        <li>Uso geral <code> parent </code> para acessar a superclasse</li>
    </ul>
<?php
require_once "src/PessoaFisica.php";
require_once "src/PessoaJuridica.php";
$clientePF = new PessoaFisica;
$clientePJ = new PessoaJuridica;

$clientePF->setNome("Phelipe");
$clientePF->setEmail("Phelipe@gmail.com");
$clientePF->setSenha("Phelipe123");
$clientePF->setCpf("443-415-779-78");
$clientePF->setIdade(19);


$clientePJ->setNome("beltrano S/A");
$clientePJ->setEmail("blablabla@gmail.com");
$clientePJ->setAnofundacao(2000);
$clientePJ->setCnpj("32.088.0001/000.41");
$clientePJ->setNomefantasia(" Bla bla bla informática");
?>
<pre><?=var_dump($clientePF)?></pre> 
<p></p>
<pre><?=var_dump($clientePJ)?></pre>

<hr>
<h2>Saída de dados</h2>

<section><?=$clientePF->exibirdados()?></section>
<section><?=$clientePJ->exibirdados()?></section>
</body>
</html>