<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 5</title>
</head>
<body>
    <h1>PHP com POO - Exemplo 5</h1>
    <hr>
    <h2>Assuntos abordados:</h2>
    <ul>
        <li>Herança (Super Classe e Sub Classe)</li>
        <li>Métodos/propriedades protegidos (acessíveis apenas pela classe em que foram definidos e pelas subclasses)</li>
        <li>Classe Abstrata: não permite instâncias/objetos, serve apenas de modelo para subclasses.</li>
        <li>Classe Final: não permite herança, ou seja, não aceita a criação de subclasses.</li>
    </ul>

<?php 
require_once "src/PessoaFisica.php";
require_once "src/PessoaJuridica.php";

$clientePF = new PessoaFisica;
$clientePJ = new PessoaJuridica;

$clientePF->setNome("Isaque Mota");
$clientePF->setEmail("isaquem@gmail.com");
$clientePF->setIdade(9);
$clientePF->setCpf("123.456.789-0");


$clientePJ->setNome("Ana Mota");
$clientePJ->setEmail("anamota@gmail.com");
$clientePJ->setAnoFundacao(2000);
$clientePJ->setCnpj("32.088.0001/000.41");
$clientePJ->setNomeFantasia("Aninha");
?>

<pre> <?=var_dump($clientePJ)?> </pre> 
<hr>
<pre> <?=var_dump($clientePF)?> </pre> 


<hr>


<?php 
require_once "src/MEI.php";
$clienteMei = new MEI;
$clienteMei->setNome("Nathalia Mota");
$clienteMei->setAnoFundacao(2023);
$clienteMei->setNomeFantasia("Nathi");
$clienteMei->setAreaDeAtuacao("Professora");






var_dump($clienteMei);

require_once "src/Cliente.php";
$clienteGenerico = new Cliente;
?>
<pre><?=var_dump($clienteGenerico)?></pre>
</body>
</html>