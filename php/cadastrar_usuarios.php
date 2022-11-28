<?php

    // 
    if(!empty($_POST['login']) && !empty($_POST['senha']) && !empty($_POST['tipo'])) {
        
        // DSN: Data Source Name
        $dsn = "mysql:host=localhost;dbname=db_cadastra_pessoas";
        $login = "root";
        $senha = "";

        // 
        try {

            // Conexão com o DB
            $conexao = new PDO($dsn, $login, $senha);

            // Querys
            // $sqlTable = "create table if not exists tb_usuarios ( ";
            // $sqlTable .= " id int primary key auto_increment, ";
            // $sqlTable .= " login varchar(50) not null, ";
            // $sqlTable .= " senha varchar(30) not null, ";
            // $sqlTable .= " tipo char(5) ";
            // $sqlTable .= " );";

            $sqlInsert = "insert into tb_usuarios values(null, :login, :senha, :tipo)";

            // Prepara a query contra SQLInject
            $stmtInsert = $conexao->prepare($sqlInsert);
            $stmtInsert->bindValue(':login', $_POST['login']);
            $stmtInsert->bindValue(':senha', $_POST['senha']);
            $stmtInsert->bindValue(':tipo', $_POST['tipo']);

            // Executando instruções no DB
            // $conexao->query($sqlTable);
            $stmtInsert->execute();

            // Retorna para a página de login
            header('Location: ../index.php');

        }
        catch(PDOException $e) {

            echo '<strong>Algo deu errado no cadastro!</strong><br>';
            echo $e->getMessage();
            echo '<hr>';
            echo 'Retorne à tela de login e tente cadastrar novamente... ';
            echo '<a href="../index.php?login=erroLogin">Cadastra Usuário</a>';

            // header('Location: ../index.php?login=erroLogin');

        }

    }

?>