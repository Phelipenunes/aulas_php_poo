<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 4 </title>
</head>
<body>
    <h1>PHP com POO - exemplo 5</h1>
    <hr>
    <h2>Assuntos aboradados:</h2>
    <ul>
        <li>Herança (Super classe e  sub classe)</li>
        <li>Métodos/propiedades protegidos (acessíveis apenas pela classe em que for definidos e pelas subclasses)</li>
        <li>Classe abstrata</li>
        <li>Classe final</li>
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
<?php
require_once "src/Cliente.php";
$clientegenerico = new cliente;

?>
<pre><?=var_dump($clientePJ)?></pre>   
</body>
</html>