<?php

    require_once "conexao_db.php";

    // Conexão com o DB
    $conexaoDb = new ConexaoDb();
    $conexao = $conexaoDb->conectar();

    // Querys
    $sqlSelect = '
        select nome, telefone, email, endereco, complemento, cidade, estado, pais
        from tb_pessoas
    ';

    // Prepara a query contra o SQLInject
    $stmt = $conexao->query($sqlSelect);
    $pessoas = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>