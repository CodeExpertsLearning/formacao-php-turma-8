<?php

require __DIR__ . '/encapsulamento.php';

$conta = new ContaBancaria();

print $conta->verSaldo();
print '<hr>';

$conta->depositar(10);

print $conta->verSaldo();
print '<hr>';

$conta->sacar(5);

print $conta->verSaldo();
print '<hr>';

$conta->saldo = 10000000;

print $conta->verSaldo();
print '<hr>';
