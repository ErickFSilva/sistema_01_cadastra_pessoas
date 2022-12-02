<?php

    // 
    try {

        // Abre uma sessão
        session_start();

        // 
        require_once 'conexao_db.php';

        $conexaoDb = new ConexaoDb();
        $conexao = $conexaoDb->conectar();

        // Query
        $sqlInsert = "insert into tb_usuarios values(null, :login, :senha, :tipo)";

        // Prepara a query contra SQLInject
        $stmtInsert = $conexao->prepare($sqlInsert);
        $stmtInsert->bindValue(':login', $_POST['login']);
        $stmtInsert->bindValue(':senha', $_POST['senha']);
        $stmtInsert->bindValue(':tipo', $_POST['tipo']);

        // Executando instruções no DB
        $stmtInsert->execute();

        // Retorna para a página de login
        $_SESSION['cadLoginSucesso'] = 'Cadastro realizado com sucesso!';
        header('Location: ../index.php?cad=cadLoginSucesso');

    }
    catch(PDOException $e) {

        // echo '<strong>Algo deu errado no cadastro!</strong><br>';
        // echo $e->getMessage();
        // echo '<hr>';
        // echo 'Retorne à tela de login e tente cadastrar novamente... ';
        // echo '<a href="../index.php?login=erroLogin">Cadastra Usuário</a>';

        // Retorna para a página de login
        $_SESSION['cadLoginErro'] = 'Algo deu errado no cadastro!';
        header('Location: ../index.php?cad=cadLoginErro');

    }

?>