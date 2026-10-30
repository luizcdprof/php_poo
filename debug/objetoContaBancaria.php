<?php

require __DIR__ . '/../vendor/autoload.php';

use App\ContaBancaria;

$conta = new ContaBancaria();

$conta->setBanco('Banco do Brasil');
$conta->setNomeTitular('LuizCD Prof');
$conta->setNumeroAgencia('1234');
$conta->setNumeroConta('12345-6');
$conta->setSaldo(0);

var_dump($conta->exibirDadosDaConta());