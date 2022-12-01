<?php

    // 
    if(!empty($_POST['nome']) && !empty($_POST['telefone'])) {

        // DSN: Data Source Name
        $dsn = "mysql:host=localhost;dbname=db_cadastra_pessoas";
        $login = "root";
        $senha = "";

        // 
        try {

            // Conexão com o DB
            $conexao = new PDO($dsn, $login, $senha);

            // Query
            $sqlTable = "create table if not exists tb_pessoas ( ";
            $sqlTable .= " id int primary key auto_increment, ";
            $sqlTable .= " nome varchar(100) not null, ";
            $sqlTable .= " telefone varchar(30) not null, ";
            $sqlTable .= " email varchar(100), ";
            $sqlTable .= " endereco varchar(100), ";
            $sqlTable .= " complemento varchar(50), ";
            $sqlTable .= " cidade varchar(50), ";
            $sqlTable .= " estado char(2), ";
            $sqlTable .= " pais varchar(30) ";
            $sqlTable .= " );";

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
            $conexao->query($sqlTable);
            $stmtInsert->execute();

            // Retorna para a página de login
            header('Location: ../home.php');

        }
        catch(PDOException $e) {

            // Abre uma sessão
            session_start();

            $_SESSION['erroCadPessoa'] = '<strong>Algo deu errado no cadastro, tente cadastrar novamente!</strong>';

            header('Location: ../home.php?login=erroCadPessoa');

            // echo '<strong>Algo deu errado no cadastro!</strong><br>';
            // echo $e->getMessage();
            // echo '<hr>';
            // echo 'Retorne à página Home e tente cadastrar novamente... ';
            // echo '<a href="../home.php?login=erroCadPessoa"><b>HOME</b></a>'; 

        }

    }
