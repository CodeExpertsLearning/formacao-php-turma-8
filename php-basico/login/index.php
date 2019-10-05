<?php 

// Inclui arquivo de configuração
require __DIR__ . '/bootstrap.php';

//Páginas permitidas
$pages = ['/', '/login', '/painel', '/sair'];

//Pega a URI da URL (Indentificação da URL)
$url = $_SERVER['REQUEST_URI'];

/*
Verifica se página 
acessada está entre as páginas permitidas
*/
if(!in_array($url, $pages)) {
    require TEMPLATES . '/404.phtml';
}

//Condição para carregamento da página inicial
if($url == '/') {
    require TEMPLATES . 'home.phtml';
}

//Condição para carregamento da página de login
if($url == '/login') {
    //Processamento do login, VERBO=POST
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        //(Busca na base, se usuário existir
        //seta a sessão)
        require __DIR__ . '/processa.php';

    }
    //Inclui arquivo login com formulário
    require TEMPLATES . 'login.phtml';
}

//Condição para carregamento do painel
if($url == '/painel'){
    require __DIR__ . '/painel.php';
}

/*
Condição para carregamento da página sair
e execução do logout
*/
if($url == '/sair') {
    require __DIR__ . '/sair.php';
}

