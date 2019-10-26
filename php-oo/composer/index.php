<?php
require __DIR__ . '/vendor/autoload.php';

// function meuAutoload($classe)
// {
//     $diretorioBase = __DIR__ . '/src/';

//     $classe = $diretorioBase . str_replace('\\', '/', $classe) . '.php';

//     require  $classe;
// }

// spl_autoload_register('meuAutoload');

use Code\HttpClient\Client;
use Code\Admin\Entidades\Produto;

// $produto = new Produto();

$client = new Client();

$produto = new Produto();