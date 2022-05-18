<form action="contato.php?acao=contato" method="POST"  name="avaliacao">
    <!-- Início formulário -->
    <div class="form-group">
            <fieldset class="row">
                <legend>Entre em contato:</legend>
                <div class="col-md-6">
                    <label class="form-label" for="contato_nome">Nome: </label>
                    <input class="form-control mb-3" type="text" name="contato-nome" id="contato-nome">
                    <label class="form-label" for="contato-email">Email: </label>
                    <input class="form-control mb-3" type="email" name="contato-email" id="contato-email">
                </div>
                <div class="col-md-6">
                    <label class="mb-2 form-label" for="opcoes" id="opcoes">Opções: </label>
                    <select class="form-select mb-3" name="opcoes">
                        <option value="sugestão">Sugestões</option>
                        <option value="reclamação">Reclamações</option>
                        <option value="elogio">Elogios</option>
                        <option value="erro">Relatar erros</option>
                    </select>
                    <label for="mensagem" class="form-label">Mensagem:</label>
                    <textarea name="mensagem" style="height: 38px;" class="form-control mb-3" placeholder="Digite aqui a sua mensagem" id="mensagem"></textarea>
                </div>
                <div class="row">
                    <div class="col-auto">
                        <button class="btn btn-secondary " id="botao" type="reset">Apagar</button>
                        <button class="btn btn-primary" id="botao" type="submit">Enviar</button>
                    </div>
                </div>
            </fieldset>
    </div>
</form><!-- Fim formulário -->