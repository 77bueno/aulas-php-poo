<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 10</title>
    <style>
        section {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            padding: 35px;
            margin: auto;
            display: flex;
            justify-content: space-around;
            background-color: lightsalmon;
            width: 70%;
        }
        article {
            padding: 10px;
            border-radius: 6px;
            background-color: white;
            box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;
        }
    </style>
</head>
<body>
    <h1>PHP com POO - Exemplo 10</h1>
    <hr>
    <h2>Assuntos abordados:</h2>
    <ul>
        <li>Composer: Gerenciador de dependência PHP</li>
        <li>Configurar o projeto com Composer usando <code>composer.json</code></li>
        <li>AutoLoad de classes evitando muitos requires e/ou require manuais</li>
    </ul>

<?php
use Fornecedor\Pagamento as FornecedorPagamento;
use Prestador\Pagamento;
use Tabajara\{MEI, PessoaFisica as PF, PessoaJuridica as PJ};

require_once "vendor/autoload.php";
$pagamentoFornecedor = new FornecedorPagamento;
$pagamentoPrestador = new Pagamento;
?>

<pre><?=var_dump($pagamentoFornecedor)?></pre>
<pre><?=var_dump($pagamentoPrestador)?></pre>


<hr>

<?php 
$clientePJ = new PJ;
$clientePF = new PF;
$MEI = new MEI;

$clientePJ->setNome("Deborah Lucia");
$clientePJ->setNomeFantasia("Deh");
$clientePJ->setEmail("deh@gmail.com");


$clientePF->setNome("Julia Mota");
$clientePF->setIdade(18);
$clientePF->setCpf("111-222-333-0");
$clientePF->setEmail("julinha@hotmail.com");
$clientePF->setSenha(1301);


$MEI->setNome("Samuel José");
$MEI->setCnpj(230203203);
$MEI->setAnoFundacao(2015);
$MEI->setAreaDeAtuacao("Direito - Adv");
$MEI->setNomeFantasia("Dr. Samuel")
?>

<section>
    <article>
        <h2>Pessoa Jurídica</h2>
        <p><b>Nome:</b> <?=$clientePJ->getNome()?></p>
        <p><b>Apelido:</b> <?=$clientePJ->getNomeFantasia()?></p>
        <p><b>Email:</b> <?=$clientePJ->getEmail()?></p>
    </article>

    <article>
        <h2>Pessoa Física</h2>
        <p><b>Nome:</b> <?=$clientePF->getNome()?></p>
        <p><b>Idade:</b> <?=$clientePF->getIdade()?></p>
        <p><b>Cpf:</b> <?=$clientePF->getCpf()?></p>
        <p><b>Email:</b> <?=$clientePF->getEmail()?></p>
        <p><b>Senha:</b> <?=$clientePF->getSenha()?></p>
    </article>

    <article>
        <h2>MEI</h2>
        <p><b>Nome:</b> <?=$MEI->getNome()?></p>
        <p><b>Cnpj:</b> <?=$MEI->getCnpj()?></p>
        <p><b>Ano de Fundação:</b> <?=$MEI->getAnoFundacao()?></p>
        <p><b>Area de Atuação:</b> <?=$MEI->getAreaDeAtuacao()?></p>
        <p><b>Apelido:</b> <?=$MEI->getNomeFantasia()?></p>
    </article>
</section>
</body>
</html>