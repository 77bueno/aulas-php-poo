<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 9</title>
</head>
<body>
    <h1>PHP com POO - Exemplo 9</h1>
    <hr>
    <h2>Assuntos abordados:</h2>
    <ul>
        <li>Namespaces: agrupamento e organização de recursos (classes, funções, constantes)</li>
        <li>Prevenção de conflitos entre classes de mesmo nome</li>
        <li>Configurar e usar <code>namespaces</code> e <code>alias</code></li>
    </ul>

<?php
/* Só de fazer o require/importação das classes (SEM NAMESPACE),
já dá erro no servidor devido a terem o mesmo nome */

use Fornecedor\Pagamento as FornecedorPagamento;
use Prestador\Pagamento;
use Tabajara\MEI;
use Tabajara\PessoaFisica;
use Tabajara\PessoaJuridica;


require_once "src/fornecedores/Pagamento.php";
require_once "src/prestadores/Pagamento.php";

// Forma 1 de usar classes com namespaces
// $pagamentoFornecedor = new Fornecedor\Pagamento;
// $pagamentoPrestador = new Prestador\Pagamento;

// Forma 2 de usar classes com namespaces
// use Fornecedor\Pagamento;
// use Prestador\Pagamento as PrestadorPagamento; // ALIAS (APELIDO)

// $pagamentoFornecedor = new Pagamento;
// $pagamentoPrestador = new PrestadorPagamento; // Objeto através do alias

$pagamentoFornecedor = new FornecedorPagamento;
$pagamentoPrestador = new Pagamento;
?>

<pre><?=var_dump($pagamentoFornecedor)?></pre>
<pre><?=var_dump($pagamentoPrestador)?></pre>


<hr>

<?php 
$clientePJ = new PessoaJuridica;
$clientePF = new PessoaFisica;
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
        
    </article>
</section>
</body>
</html>