<?php 

abstract class Entidade
{
    protected $table;

    public function pegarTodos()
    {
        $classe = strtolower($this->table);

        return 'Todos os ' . $classe . ' do banco';
    }

    //Método abstrato -- vocês vao implementar nos filhos
    abstract public function inserir($data = []);
}

class Produto extends Entidade
{
    protected $table = 'produtos';

    public function inserir($data = [])
    {
        $dados = implode(', ', $data);

        return $dados;
    }
}

$entidade = new Produto();

print $entidade->inserir(['PHP', '7.3']);
print '<hr>';
print $entidade->pegarTodos();