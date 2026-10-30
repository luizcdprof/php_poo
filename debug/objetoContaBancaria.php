<?php

require __DIR__ . '/../vendor/autoload.php';

use App\ContaBancaria;

$conta = new ContaBancaria(
    'Banco do Brasil',
    'LuizCD Prof',
    '1234',
    '12345-6',
    0
);

var_dump($conta->exibirDadosDaConta());