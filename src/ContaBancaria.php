<?php

declare(strict_types=1);

namespace App;

class ContaBancaria
{
    public string $banco = 'Banco Inter';
    public string $nomeTitular = 'LuizCD Prof';
    public string $numeroAgencia = '1234';
    public string $numeroConta = '12345-7';
    public float $saldo = 0;

    public function exibirDadosDaConta(): array
    {
        return [
            'banco' => $this->banco,
            'nomeTitular' => $this->nomeTitular,
            'numeroAgencia' => $this->numeroAgencia,
            'numeroConta' => $this->numeroConta,
            'saldo' => $this->saldo,
        ];
    }
}