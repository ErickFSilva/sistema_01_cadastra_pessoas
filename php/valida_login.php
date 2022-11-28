<?php

    // Abre uma sessão
    session_start();

    // Variáveis
    $usuario_autenticado = false;
    $usuario_id = null;
    $usuario_tipo = null;

    // Conexão com o DB
    require_once 'conexao_db.php';
    $conexaoDb = new Conexao();
    $conexao = $conexaoDb->conectar();

    // Querys
    $sqlSelect = 'select id, login, senha, tipo from tb_usuarios';

    foreach($conexao->query($sqlSelect) as $chave => $valor) {

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