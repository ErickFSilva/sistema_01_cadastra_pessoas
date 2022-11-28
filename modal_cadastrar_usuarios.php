<!-- Modal -->
<div class="modal fade" id="modal_cadastrar_usuarios" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

    <div class="modal-dialog modal-dialog-scrollable modal-fullscreen-md-down">

        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Cadastro de Pessoas</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">

                <div class="container">
                    <div class="row">
                        <div class="col-sm-10 offset-sm-1">

                            <form action="php/cadastrar_usuarios.php" method="POST">

                                <div class="form-group">
                                    <input type="text" class="form-control mb-2" id="login" name="login" placeholder="Login" required>

                                    <input type="text" class="form-control mb-2" id="senha" name="senha" placeholder="Senha" required>

                                    <select class="form-select cor-cinza-2 mb-2" id="tipo" name="tipo" required>
                                        <option value="">-- Tipo --</option>
                                        <option value="users">Usuário</option>
                                        <option value="admin">Administrador</option>
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-primary">
                                    Cadastrar
                                </button>

                            </form>

                        </div>
                    </div>
                </div>

            </div>

            <div class="modal-footer">
                <button type="button" onclick="limpaCampos()" class="btn btn-danger" data-bs-dismiss="modal">
                    Fechar
                </button>
            </div>
        </div>

    </div>

</div>

<script>

    function limpaCampos() {
        document.getElementById('login').value = '';
        document.getElementById('senha').value = '';
        document.getElementById('tipo').value = '';
    }

</script>