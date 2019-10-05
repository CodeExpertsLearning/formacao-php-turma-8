<?php 
//Configurações principais Sistema
define('TEMPLATES', __DIR__ . '/templates/');
define('HOME', 'http://localhost:3030');

//Configurações de Acesso com Banco de Dados
define('DB_HOST', 'localhost');
define('DB_NAME', 'contatos_fp');
define('DB_USER', 'root');
define('DB_PASSWORD', '');

//Inclui conexão com banco de dados
require __DIR__ . '/conexao.php';
