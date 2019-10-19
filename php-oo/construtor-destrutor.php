<?php

class Pessoa
{
    public $nome;
    public $idade;
    public $celular;

    public function __construct($nome, $idade, $celular)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->celular = $celular;
    }

    public function __destruct()
    {
        print 'Destrutor';
    }
}

$pessoa = new Pessoa('Jhon Doe', 200, 9899898899);
// $pessoa->nome = 'John Doe';
// $pessoa->idade = 200;
// $pessoa->celular = 99900099999;

print 'O ' . $pessoa->nome . ' têm '
           . $pessoa->idade . ' ano(s)';