<?php

    // DSN: Data Source Name
    $dsn = 'mysql:host=localhost;dbname=db_cadastra_pessoas';
    $usuario = 'root';
    $senha = '';

    try {

        $conexao = new PDO($dsn, $usuario, $senha);

    }
    catch(PDOException $erro) {

        echo 'Erro: ' . $erro->getCode();
        echo '<br>Mensagem: ' . $erro->getMessage(). '<hr>';

    }