<?php 

//Drive de conexão com banco de dados
$conector = 'mysql:host=' . DB_HOST . ';dbname=' 
. DB_NAME;

//Conectando no banco de dados com PDO (php.net/pdo)
$pdo = new PDO($conector, DB_USER, DB_PASSWORD);

/*
    $sql = "
        INSERT INTO usuarios (
            nome, email, 
            senha, criado_em, atualizado_em
        )
        VALUES(
            :nome,
            :email,
            :senha,
            NOW(),
            NOW()
        )
    ";

    $senha = password_hash('12345678', PASSWORD_ARGON2I);

    //Prepared Statements
    $inserir = $pdo->prepare($sql);

    $inserir->bindValue(':nome', 'Nanderson Castro', PDO::PARAM_STR);
    $inserir->bindValue(':email', 'nandokstro@gmail.com', PDO::PARAM_STR);
    $inserir->bindValue(':senha', $senha, PDO::PARAM_STR);

    print $inserir->execute();
*/