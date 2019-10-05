<?php
//Inicia sessão 
session_start();

//Limpamos toda a sessão
session_destroy();
$_SESSION = [];

//Matando a sessão do usuário agente redireciona para página inicial
return header('Location: ' . HOME);