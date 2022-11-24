<?php

    // Abre uma sessão
    session_start();

    // Variáveis
    $usuario_autenticado = false;
    $usuario_id = null;
    $usuario_perfil_id = null;

    // Bando de dados
    require_once 'conexao_db.php';

    $query = '
        select nome, senha from logins_usuarios;
    ';
