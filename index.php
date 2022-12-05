<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastra Pessoas</title>

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="css/estilo.css">
</head>

<body class="bg-verde-azul-1">

    <div class="container altura-100">

        <div class="d-flex justify-content-center align-items-center altura-100">
            <div class="card">

                <!-- card header -->
                <?php if (!isset($_GET['login'])) { ?>
                    <div class="card-header text-bg-primary">
                        <span class="largura-100 d-inline-block text-center">Entrar no sistema</span>
                    </div>
                <?php } ?>

                <!-- # -->
                <?php if (isset($_GET['login']) && $_GET['login'] == 'erroLogin') { ?>
                    <div class="card-header text-bg-danger">
                        <span class="largura-100 d-inline-block text-center">Usuário ou senha inválida!</span>
                    </div>
                <?php } ?>

                <!-- # -->
                <?php if (isset($_GET['login']) && $_GET['login'] == 'erroPaginas') { ?>
                    <div class="card-header text-bg-danger">
                        <span class="largura-100 d-inline-block text-center">Logue-se para ter acesso ao sistema!</span>
                    </div>
                <?php } ?>
                <!-- card header -->

                <!-- card body -->
                <div class="card-body">

                    <form action="php/valida_login.php" method="POST">

                        <div class="form group card-corpo-login">
                            <input type="text" class="form-control mb-3" name="login" placeholder="Login">
                            <input type="password" class="form-control mb-3" name="senha" placeholder="Senha">

                            <input type="submit" class="btn btn-primary" value="Entrar">
                        </div>

                    </form>

                </div>
                <!-- card body -->

                <!-- card footer -->
                <?php if(isset($_GET['login']) && ($_GET['login'] == 'erroLogin' || $_GET['login'] == 'erroPaginas')) { ?>
                    <div class="card-footer">

                        <!-- Incorpora o Modal à página -->
                        <?php include_once "modal_cadastrar_usuarios.php" ?>

                        <!-- Button trigger modal -->
                        <a href="#" class="d-block text-end nav-link link-danger" data-bs-toggle="modal" data-bs-target="#modal_cadastrar_usuarios">
                            <small>Não tenho cadastro</small>
                        </a>

                    </div>
                <?php } ?>

                <?php if(isset($_GET['cad']) && $_GET['cad'] == 'cadLoginSucesso') { ?>
                    <div class="card-footer text-bg-success">

                        <div class="text-center">
                            Cadastro realizado com sucesso!
                        </div>

                    </div>
                <?php } ?>

                <?php if(isset($_GET['cad']) && $_GET['cad'] == 'cadLoginErro') { ?>
                    <div class="card-footer text-bg-danger">

                        <div class="text-center">
                            Algo deu errado no cadastro!
                        </div>

                    </div>
                <?php } ?>
                <!-- card footer -->

            </div>
        </div>

    </div>


    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>