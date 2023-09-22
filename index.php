<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 4</title>
</head>
<body>
    <h1>PHP com POO - Exemplo 4</h1>
    <hr>
    <h2>Assuntos abordados:</h2>
    <ul>
        <li>Encapsulamento</li>
        <li>Modificadores de visibilidade</li>
    </ul>

<?php
require_once "src/Cliente.php";
$clienteA = new Cliente;

// O código abaixo dará erro pela propriedade privada!
// $clienteA->nome = "Thiago";

// Usando o setter para atribuir um valor à propriedade privada "nome"
$clienteA->setNome("Fulano da Silva");
$clienteA->setEmail("fulanin@gmail");
$clienteA->setSenha("12345bbx");
?>

<!-- Usando getter para ler/acessar dados privados -->
<p>Nome: <?=$clienteA->getNome()?></p>
<p>E-mail: <?=$clienteA->getEmail()?></p>
<p>Senha: <?=$clienteA->getSenha()?></p>

<pre> <?=var_dump($clienteA)?> </pre>
</body>
</html>