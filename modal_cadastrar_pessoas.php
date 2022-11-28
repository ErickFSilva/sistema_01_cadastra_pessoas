<!-- Modal -->
<div class="modal fade" id="modal_cadastrar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

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

                            <form action="php/cadastrar_pessoas.php" method="POST">

                                <div class="form-group">
                                    <input type="text" class="form-control mb-2" id='nome' name="nome" required placeholder="Nome Completo">

                                    <input type="tel" class="form-control mb-2" id='telefone' name="telefone" required placeholder="Telefone">

                                    <input type="email" class="form-control mb-2" id='email' name="email" placeholder="E-mail">
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control mb-2" id='endereco' name="endereco" placeholder="Endereço">

                                    <input type="text" class="form-control mb-2" id='complemento' name="complemento" placeholder="Complemento">

                                    <input type="text" class="form-control mb-2" id='cidade' name="cidade" placeholder="Cidade">

                                    <select class="form-select cor-cinza-2 mb-2" id='estado' name="estado">
                                        <option value="">-- Estado --</option>
                                        <option value="AC">Acre</option>
                                        <option value="AL">Alagoas</option>
                                        <option value="AP">Amapá</option>
                                        <option value="AM">Amazonas</option>
                                        <option value="BA">Bahia</option>
                                        <option value="CE">Ceará</option>
                                        <option value="DF">Distrito Federal</option>
                                        <option value="ES">Espírito Santo</option>
                                        <option value="GO">Goiás</option>
                                        <option value="MA">Maranhão</option>
                                        <option value="MT">Mato Grosso</option>
                                        <option value="MS">Mato Grosso do Sul</option>
                                        <option value="MG">Minas Gerais</option>
                                        <option value="PA">Pará</option>
                                        <option value="PB">Paraíba</option>
                                        <option value="PR">Paraná</option>
                                        <option value="PE">Pernambuco</option>
                                        <option value="PI">Piauí</option>
                                        <option value="RJ">Rio de Janeiro</option>
                                        <option value="RN">Rio Grande do Norte</option>
                                        <option value="RS">Rio Grande do Sul</option>
                                        <option value="RO">Rondônia</option>
                                        <option value="RR">Roraima</option>
                                        <option value="SC">Santa Catarina</option>
                                        <option value="SP">São Paulo</option>
                                        <option value="SE">Sergipe</option>
                                        <option value="TO">Tocantins</option>
                                        <option value="EX">Estrangeiro</option>
                                    </select>

                                    <input type="text" class="form-control mb-2" id='cep' name="cep" placeholder="CEP">

                                    <select class="form-select cor-cinza-2 mb-2" id="pais" name="pais">
                                        <option value="">País</option>
                                        <option value="BR">Brasil</option>
                                    </select>
                                </div>

                                <button type="submit" class="float-start btn btn-primary">
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
        document.getElementById('nome').value = '';
        document.getElementById('telefone').value = '';
        document.getElementById('email').value = '';
        document.getElementById('endereco').value = '';
        document.getElementById('complemento').value = '';
        document.getElementById('cidade').value = '';
        document.getElementById('estado').value = '';
        document.getElementById('cep').value = '';
        document.getElementById('pais').value = '';
    }
</script>