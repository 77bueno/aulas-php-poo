<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 2</title>
</head>
<body>
    <h1>PHP com POO - Exemplo 2</h1>
    <hr>
    <h2>Assuntos abordados:</h2>
    <ul>
        <li>Método construtor com atribuição obrigatória
        de valores aos parâmetros/propriedades do objeto</li>
        <li>Uso do <code>$this</code> para acesso às propriedades dentro do objeto.</li>
    </ul>

<?php
require_once "src/Cliente.php";
$clienteA = new Cliente("Ciclano", "ciclano@gmaiu");
$clienteB = new Cliente("Clereton Savio", "teto@gmail");
?>

<pre> <?=var_dump($clienteA, $clienteB)?> </pre>
</body>
</html>