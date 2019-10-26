<?php

class ContaBancaria
{
    private $saldo = 0;

    public function depositar($valor)
    {
        $this->saldo += $valor;
    }

    public function sacar($valor)
    {
        if($valor > $this->saldo)
            die('Saldo não disponivel...');

        $this->saldo -= $valor;
    }

    public function verSaldo()
    {
        return $this->saldo;
    }
}