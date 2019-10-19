<?php 

class Profissao
{
    public $profissao;
    public $descricao;

    public function pegarInformacaoDaProfissao()
    {
        return $this->profissao . ' - ' . $this->descricao;
    }
}

class Programador extends Profissao
{
    public $profissao = 'Programador';
}

$programador = new Programador();
$programador->descricao = 'Faz gambiarras!';

print $programador->pegarInformacaoDaProfissao();