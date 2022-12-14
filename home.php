<?php require_once "php/validador_acesso.php" ?>
<?php require_once "php/cadastrar_pessoas.php" ?>
<?php require_once "php/servicos.php" ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastra Pessoas</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="css/estilo.css">
</head>

<body class="bg-cinza-1">

    <?php include_once "barra_menu.php" ?>

    <div class="container">
        <div class="row">

            <div class="col-lg-4">
                <div class="pt-4 d-flex flex-wrap justify-content-evenly">

                    <!-- Cadastrar -->
                    <div class="card mb-4" style="width: 18rem;">
                        <img src="imagens/cadastro.png" class="card-img-top img-fluid" alt="cadastro">
                        <div class="card-body text-center">

                            <!-- Incorpora o Modal à página -->
                            <?php include_once "modal_cadastrar_pessoas.php" ?>

                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#modal_cadastrar">
                                Cadastrar
                            </button>

                        </div>
                    </div>

                    <!-- Consultar -->
                    <!-- <div class="card mb-4" style="width: 18rem;">
                        <img src="imagens/consultar-2.jpg" class="card-img-top img-fluid" alt="consultar">
                        <div class="card-body text-center">
                            <a href="#" class="btn btn-secondary">Consultar</a>
                        </div>
                    </div> -->

                </div>

                <!-- Retorno após ação com erro no cadastro -->
                <?php if (isset($_GET['cad']) && $_GET['cad'] == 'erroCadPessoa') { ?>
                    <div class="text-danger text-center">
                        <?= $_SESSION['erroCadPessoa'] ?>
                    </div>
                <?php } ?>

                <!-- Retorno após ação com sucesso no cadastro -->
                <?php if (isset($_GET['cad']) && $_GET['cad'] == 'okCadPessoa') { ?>
                    <div class="text-success text-center">
                        <?= $_SESSION['okCadPessoa'] ?>
                    </div>
                <?php } ?>

            </div>

            <div class="col-lg-8">
                <div class="mt-4">

                    <div class="table-responsive">
                        <!-- Tabela -->
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>
                                        <span class="text-bg-primary py-1 px-2">N</span>ome
                                    </th>
                                    <th>
                                        <span class="text-bg-primary py-1 px-2">T</span>elefone
                                    </th>
                                    <th>
                                        <span class="text-bg-primary py-1 px-2">E</span>-Mail
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="table-group-divider">

                                <?php foreach ($pessoas as $chave => $pessoa) { ?>

                                    <tr>
                                        <td><?= $pessoa['nome'] ?></td>
                                        <td><?= $pessoa['telefone'] ?></td>
                                        <td><?= $pessoa['email'] ?></td>
                                    </tr>

                                <?php } ?>

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>

        </div>
    </div>


    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>