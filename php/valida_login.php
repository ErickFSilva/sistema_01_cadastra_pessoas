<?php

    // Abre uma sessão
    session_start();

    // Variáveis
    $usuario_autenticado = false;
    $usuario_id = null;
    $usuario_tipo = null;

    // Bando de dados
    require_once 'conexao_db.php';

    $query = '
        select id, login, senha, tipo from logins_usuarios;
    ';

    foreach($conexao->query($query) as $chave => $valor) {

        if($valor['login'] == $_POST['login'] && $valor['senha'] == $_POST['senha']) {
            $usuario_autenticado = true;
            $usuario_id = $usuario_db['id'];
            $usuario_tipo = $usuario_db['tipo'];
        }

    }

    if($usuario_autenticado) {
        $_SESSION['autenticado'] = 'SIM';
        $_SESSION['id'] = $usuario_id;
        $_SESSION['tipo'] = $usuario_tipo;

        header('Location: ../home.php');
    }
    else {
        $_SESSION['autenticado'] = 'NAO';

        header('Location: ../index.php?login=erroLogin');
    }