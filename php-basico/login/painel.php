<?php
//Inicia sessão
session_start();

//Verifica a não existência da sessão do usuário
if(!isset($_SESSION['user'])) {

    //Não existindo agente redireciona para a tela de login
    return header('Location: '. HOME . '/login');
}
?>

<!-- Exibe mensagem para o usuário autenticado -->
<?='Olá ' . $_SESSION['user']['nome'] . ', seja bem vindo!';?>

<!-- Botão de sair e encerrar a sessão -->
<a href="<?=HOME;?>/sair">Sair</a>
