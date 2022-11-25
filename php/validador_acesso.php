<?php

    // Abre uma sessão
    session_start();

    if(!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] != 'SIM') {
        header('Location: index.php?login=erroPaginas');
    }