<?php
//var_dump($_SERVER);

//Manipulando dados vindos via POST
$dados = $_POST;

//Query para busca do usuário pelo email
$sql = "SELECT * FROM usuarios WHERE email = :email";

//Preparando query para substituição dos binds(parâmetros)
$buscaUsuario = $pdo->prepare($sql);

//Substituindo parâmetro da query(:email) pelo valor vindo do form(campo email)
$buscaUsuario->bindValue(':email', $dados['email'], PDO::PARAM_STR);

//confirmando execução da operação na base
$buscaUsuario->execute();

//Recuperando usuário retornado da query acima
$usuario = $buscaUsuario->fetch(PDO::FETCH_ASSOC);

//Verificando se senha digitada no form bate com hash no banco
if(!password_verify($dados['senha'], $usuario['senha'])) {
    die('Usuário ou senha incorretos');
}

unset($usuario['senha']);

//Iniciando sessão
session_start();
//Adicionando usuário na sessão
$_SESSION['user'] = $usuario;

return header('Location: ' . HOME . '/painel');
