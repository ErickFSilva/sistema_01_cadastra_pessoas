<?php

    // 
    if(!empty($_POST['nome']) && !empty($_POST['telefone'])) {

        // 
        try {

            // Abre uma sessão
            session_start();

            // 
            require_once 'conexao_db.php';

            $conexaoDb = new ConexaoDb();
            $conexao = $conexaoDb->conectar();

            // Query
            $sqlInsert = "insert into tb_pessoas values(null, ";
            $sqlInsert .= " :nome, :telefone, :email, :endereco, ";
            $sqlInsert .= " :complemento, :cidade, :estado, :pais ";
            $sqlInsert .= " )";

            // Prepara a query contra SQLInject
            $stmtInsert = $conexao->prepare($sqlInsert);
            $stmtInsert->bindValue(':nome', $_POST['nome']);
            $stmtInsert->bindValue(':telefone', $_POST['telefone']);
            $stmtInsert->bindValue(':email', $_POST['email']);
            $stmtInsert->bindValue(':endereco', $_POST['endereco']);
            $stmtInsert->bindValue(':complemento', $_POST['complemento']);
            $stmtInsert->bindValue(':cidade', $_POST['cidade']);
            $stmtInsert->bindValue(':estado', $_POST['estado']);
            $stmtInsert->bindValue(':pais', $_POST['pais']);
            
            // Executando instruções no DB
            $stmtInsert->execute();

            // Retorna para a página de home
            $_SESSION['okCadPessoa'] = '<strong>Cadastro realizado com sucesso!</strong>';

            header('Location: ../home.php?cad=okCadPessoa');

        }
        catch(PDOException $e) {

            // Abre uma sessão
            session_start();

            // Retorna para a página de home
            $_SESSION['erroCadPessoa'] = '<strong>Algo deu errado no cadastro, tente cadastrar novamente!</strong>';

            header('Location: ../home.php?cad=erroCadPessoa');

        }

    }
