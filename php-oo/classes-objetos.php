<?php 

class Carro
{
    public $cor;
    public $ano;
    public $placa;

    public function ligar()
    {
        print 'Carro de placa ' . $this->placa . ' ligado...';
    }

    public function andar($km)
    {
        for($i = 0; $i < $km; $i++) {
            print '.';
        }
    }

    public function desligar()
    {
        print 'Carro de placa ' . $this->placa . ' desligado...';
    }

}

$carro = new Carro();
$carro->ano = 1990;
$carro->cor = 'preto';
$carro->placa = 'XPTO';

$carro->ligar();
$carro->andar(100);
$carro->desligar();

$carro2 = new Carro();
$carro2->ano = 2019;
$carro2->cor = 'branco';
$carro2->placa = 'XPTO209';

$carro2->ligar();
$carro2->andar(100);
$carro2->desligar();