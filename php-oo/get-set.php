<?php

class Produto
{
    private $nome;
    private $preco;
    private $descricao;

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
        return $this;
    }

    public function getPreco()
    {
        return $this->preco;
    }

    public function setPreco($preco)
    {
        $this->preco = $preco;
        return $this;
    }

    public function getDescricao()
    {
        return $this->description;
    }

    public function setDescricao($description)
    {
        $this->description = $description;
        return $this;
    }
}
//$produto = new Produto();
//$produto->setDescricao('')->setPreco(0);

$produto = (new Produto())
            ->setNome('Produto Teste')
            ->setPreco(19.99)
            ->setDescricao('Descrição do produto...');

$preco = number_format($produto->getPreco(), 2, ',', '.');

print $produto->getNome() . ' têm o valor R$ ' . $preco;